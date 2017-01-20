<?php

Route::get('aux', function(){

});

// Route::get('login/{id}', function($id){
//     $user = User::find($id);
//     Auth::login($user);
//     switch($user->social_network) {
//         case 'facebook':
//             Session::put('fb_user', $user->id);
//             break;
//         case 'twitter':
//             Session::put('tw_user', $user->id);
//             break;
//         case 'tumblr':
//             Session::put('tb_user', $user->id);
//             break;
//     }
//     return Redirect::route('home');
// });

// Route::get('migrate', function(){
//     define('STDIN', fopen("php://stdin", "r"));
//     Artisan::call('migrate', ['--force' => true]);
// });

// Route::get('seed', function(){
//     define('STDIN', fopen("php://stdin", "r"));
//     Artisan::call('db:seed');
// });

// Route::get('dump', function(){
//     Artisan::call('dump-autoload');
// });

// Route::get('session', function(){
//     if(!App::environment('local')) { echo('<pre>'); }
//     var_dump(Session::all());
// });

// TFIOS

// api json responses
Route::group(array(
    'prefix' => 'api',
    'before' => ''
), function(){

    Route::get('promises', function(){
        $promises = Promise::with('user')->orderBy('created_at', 'desc')->get();

        return Response::json($promises);
    });

    Route::get('newest', function(){
        $promises = Promise::with('user')->orderBy('created_at', 'desc')->take(300)->get();

        $promises = $promises->sortBy(function($promise){
            return $promise->shares;
        });

        $promises->each(function($promise){
            $promise->sharecount = count($promise->shares);
            unset($promise->shares);
        });

        $promises = $promises->reverse();

        return Response::json($promises);
    });

    Route::get('most-shared', function(){
        $promises = Promise::with('user')->has('shares')->get();

        $promises = $promises->sortBy(function($promise){
            return $promise->shares;
        });

        $promises->each(function($promise){
            $promise->sharecount = count($promise->shares);
            unset($promise->shares);
        });

        $promises = $promises->reverse();
        $promises = $promises->slice(0, 299);

        return Response::json($promises);
    });

    Route::get('official', function(){
        $promises = Promise::with('user')->where('official', '=', true)->get();

        return Response::json($promises);
    });

    Route::get('promise/{id}', function($id){
        $promise = Promise::with('user')->find($id);

        if(Input::get('share') == 'yes') {
            $s3 = AWS::get('s3');
            $promise->s3_url = $s3->getObjectUrl('ffe-ugc', "/tfios-li/prod/$id.png", '+6 months');
        }

        return Response::json($promise);
    });

    Route::get('user/{id}', function($id){
        $user = User::with('promise')->with('zipData')->find($id);

        return Response::json($user);
    });

    Route::get('rank', function(){
        $promises = DB::table('promises')
            ->select('zip.state', DB::raw('count(zip.state) as count'))
            ->join('users', 'promises.user_id', '=', 'users.id')
            ->join('zip', 'users.zip', '=', 'zip.zip')
            ->groupBy('zip.state')
            ->orderBy('count', 'desc')
            ->get();

        foreach($promises as $promise) {
            $promise->longState = Config::get('states')[$promise->state];
        }

        return Response::json($promises);
    });

});

// home
Route::get('/', array(
    'as' => 'home',
    function() {
        $location = GeoIP::getLocation();

        App::setLocale(Cookie::get('lang', 'en'));

        $promises = Promise::orderBy('created_at', 'desc')->get();

        $fb_user = Session::has('fb_user') ? User::find(Session::get('fb_user')) : null;
        $tw_user = Session::has('tw_user') ? User::find(Session::get('tw_user')) : null;
        $tb_user = Session::has('tb_user') ? User::find(Session::get('tb_user')) : null;

        return View::make('tfios/home', array(
            'promises'   => $promises,
            'fb_user'    => $fb_user,
            'tw_user'    => $tw_user,
            'tb_user'    => $tb_user,
            'promise_id' => Input::get('promise', null),
            'location'   => $location
        ));
    }
));

// shared url
Route::get('promise/{id}', array(
    'as' => 'promise',
    function($id) {
        return Redirect::route('home', array(
            'promise' => $id
        ));
    }
));

// language handler
Route::get('lang/{lang}', function($lang){
    $cookie = Cookie::forever('lang', $lang);

    return Redirect::to('/')->withCookie($cookie);
});

// site logout
Route::get('logout', function(){
    Session::flush();
    Auth::logout();
    return Redirect::to('/');
});

// social network logins
Route::get('facebook', 'FacebookController@loginHandler');
Route::get('twitter', 'TwitterController@loginHandler');
Route::get('tumblr', 'TumblrController@loginHandler');

// promises
Route::post('create_promise', 'PromiseController@create');
Route::post('edit_promise', 'PromiseController@edit');

// sweepstakes entries
Route::post('create_entry', 'EntryController@create');
Route::get('toggle_entry/{id}', 'EntryController@toggle');

// shares
Route::post('new_share', 'ShareController@create');

// intro popup
Route::get('show_intro', function(){
    $cookie = Cookie::forever('show_intro', 'no');
    return Response::make('ok')->withCookie($cookie);
});

// flag / unflag promises
Route::get('flag/{id}', 'PromiseController@flag');
Route::get('unflag/{id}', 'PromiseController@unflag');

// full details
Route::get('full-details', function(){
    return View::make('tfios/full-details');
});

// share image generator
Route::post('imagesaver', function(){
    $promise_id = Input::get('promise_id');
    $nombre = "$promise_id.png";
    $data = Input::get('image');
    File::put(public_path('shares') . '/' . $nombre, base64_decode(substr($data, strpos($data, ",") + 1)));
    $s3 = AWS::get('s3');

    $s3->putObject(array(
        'Bucket'     => 'ffe-ugc/tfios-li/prod',
        'Key'        => $nombre,
        'SourceFile' => public_path("shares/$nombre"),
    ));

    $promise = Promise::find($promise_id);
    $links = Sharelinks::load($promise->url, $promise->text)->services('facebook', 'twitter', 'tumblr', 'pinterest');

    return Response::json(array(
        'status' => 'ok',
        'links' => $links
    ));
});

Route::get('share-promise', function(){
    $pid = Input::get('pid');
    $t = Input::get('t');

    $promise = Promise::find($pid);

    $s3 = AWS::get('s3');
    $promise->s3_url = $s3->getObjectUrl('ffe-ugc', "/tfios-li/prod/$pid.png", '+6 months');

    return View::make('tfios/share-promise', array(
        'pid'     => $pid,
        't'       => $t,
        'promise' => $promise
    ));
});

// admin login / logout
Route::get('admin/login', array(
    'as' => 'admin/login',
    function() {
        return View::make('admin/login');
    }
));

Route::post('admin_login', 'AdminController@login');

Route::get('admin/logout', function(){
    Session::forget('admin_user');

    return Redirect::route('admin/login');
});

// admin routes
Route::group(array(
    'prefix' => 'admin',
    'before' => 'admin'
), function(){

    Route::get('promises', array(
        'as' => 'admin/promises',
        'uses' => 'AdminController@list_promises'
    ));

    Route::get('flagged', array(
        'as' => 'admin/flagged',
        'uses' => 'AdminController@list_flagged_promises'
    ));

    Route::get('official-promises', array(
        'as' => 'admin/official_promises',
        'uses' => 'AdminController@list_official_promises'
    ));

    Route::get('sweepstakes', array(
        'as' => 'admin/sweepstakes',
        'uses' => 'AdminController@list_sweepstakes_entries'
    ));

    Route::get('sweepstakes_export', 'AdminController@sweepstakes_export');

    Route::post('add-official-promise', 'PromiseController@add_official_promise');

    Route::get('toggle-promise/{id}', 'PromiseController@toggle_promise');

    Route::get('delete-promise/{id}', 'PromiseController@delete');

});

// Route::get('shareseed', function(){
//     $promises = Promise::all();

//     $promises->each(function($promise){
//         $amount = rand(0, 100);
//         $networks = array('facebook', 'twitter', 'tumblr', 'pinterest');
//         for ($i = 1; $i <= $amount; $i++) {
//             shuffle($networks);
//             Share::create(array(
//                 'promise_id' => $promise->id,
//                 'social_network' => $networks[0]
//             ));
//         }
//     });
// });