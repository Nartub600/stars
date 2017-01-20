<?php

class PromiseController extends BaseController {

    public function create() {
        $data = Input::all();

        $rules = array(
            'text' => 'required|swearing',
            'zip'  => 'required|numeric|regex:/^[0-9]{5}$/'
        );

        $messages = array(
            'text.required' => trans('tfios.text_validation'),
            'text.swearing' => trans('tfios.swearing_validation'),
            'zip.required'  => trans('tfios.zip_validation'),
            'zip.numeric'   => trans('tfios.zip_numeric'),
            'zip.regex'     => trans('tfios.zip_length')
        );

        $validator = Validator::make($data, $rules, $messages);

        if($validator->passes()) {
            // $user = Auth::user();
            switch(Input::get('social_network')) {
                case 'facebook':
                    $user = User::find(Session::get('fb_user'));
                    break;
                case 'twitter':
                    $user = User::find(Session::get('tw_user'));
                    break;
                case 'tumblr':
                    $user = User::find(Session::get('tb_user'));
                    break;
            }

            if($user->promise) {
                return Response::json(array(
                    'status' => 'error',
                    'message' => trans('tfios.already_promised')
                ));
            }

            $promise = Promise::create(array(
                'text'    => Input::get('text'),
                'user_id' => $user->id
            ));

            $promise->url = Helpers::shorten_url(url('promise', $promise->id));
            $promise->save();

            $user->zip = str_pad(Input::get('zip'), 5, '0', STR_PAD_LEFT);
            $user->save();

            $links = Sharelinks::load($promise->url, $promise->text)->services('facebook', 'twitter', 'tumblr', 'pinterest');

            return Response::json(array(
                'status'  => 'ok',
                'promise' => $promise,
                'links'   => $links,
                'user'    => $promise->user
            ));
        } else {
            return Response::json(array(
                'status'  => 'error',
                'message' => $validator->messages()->first(),
                'fields'  => $validator->messages()
            ));
        }
    }

    public function edit() {
        $data = Input::all();

        $rules = array(
            'text' => 'required|swearing'
        );

        $messages = array(
            'text.required' => trans('tfios.text_validation'),
            'text.swearing' => trans('tfios.swearing_validation')
        );

        $validator = Validator::make($data, $rules, $messages);

        if($validator->passes()) {
            $promise = Promise::find(Input::get('promise_id'));

            $promise->text = Input::get('text');

            $promise->save();

            $promise = Promise::with('user')->find($promise->id);

            return Response::json(array(
                'status'  => 'ok',
                'promise' => $promise
            ));
        } else {
            return Response::json(array(
                'status'  => 'error',
                'message' => $validator->messages()->first(),
                'fields'  => $validator->messages()
            ));
        }
    }

    public function share() {
        Share::create(array(
            'promise_id' => Input::get('promise_id'),
            'social_network' => Input::get('social_network')
        ));

        return Response::json(array(
            'status' => 'ok'
        ));
    }

    public function add_official_promise() {
        $data = Input::all();

        $rules = array(
            'user_name'       => 'required_without:user_id',
            'profile_picture' => 'required_without:user_id|url',
            'text'            => 'required'
        );

        if(Input::get('user_name') == '' || Input::get('profile_picture') == '') {
            $rules['user_id'] = 'required';
        }

        $messages = array(
            'user_id.required_without'         => 'Select an existent user',
            'user_name.required_without'       => 'User name is required',
            'profile_picture.required_without' => 'User profile picture is required',
            'profile_picture.url'              => 'Profile picture must be a valid URL (http://...)',
            'text'                             => 'Promise text is required'
        );

        $validator = Validator::make($data, $rules, $messages);

        if($validator->passes()) {
            if(Input::has('user_id')) {
                $user = User::find(Input::get('user_id'));
            } else {
                $user = User::create(array(
                    'name'            => Input::get('user_name'),
                    'profile_picture' => Input::get('profile_picture'),
                    'official'        => true
                ));
            }

            File::put(public_path('profiles') . '/' . "{$user->id}.png", file_get_contents($user->profile_picture));

            $promise = Promise::create(array(
                'user_id'  => $user->id,
                'text'     => Input::get('text'),
                'official' => true
            ));

            $promise->url = Helpers::shorten_url(route('promise', $promise->id));
            $promise->save();

            return Response::json(array(
                'status' => 'ok'
            ));
        } else {
            return Response::json(array(
                'status'  => 'error',
                'message' => $validator->messages()->first()
            ));
        }
    }

    public function toggle_promise($id) {
        $promise = Promise::withTrashed()->find($id);
        if($promise->trashed()) {
            $promise->restore();
        } else {
            $promise->delete();
        }

        return Redirect::to(URL::previous());
    }

    public function flag($id) {
        $promise = Promise::find($id);

        $promise->flagged = true;

        $promise->save();

        return Response::json(array(
            'status' => 'ok'
        ));
    }

    public function unflag($id) {
        $promise = Promise::find($id);

        $promise->flagged = false;

        $promise->save();

        return Redirect::to(URL::previous());
    }

    public function delete($id) {
        Promise::withTrashed()->find($id)->forceDelete();
    }

}