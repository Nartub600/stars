<?php

class AdminController extends BaseController {

    public function list_promises() {
        $unpublished = Input::get('unpublished', 'no');
        if($unpublished == 'yes') {
            $promises = Promise::withTrashed()->where('official', '=', false)->orderBy('created_at', 'desc')->paginate(30);
        } else {
            $promises = Promise::where('official', '=', false)->orderBy('created_at', 'desc')->paginate(30);
        }

        return View::make('admin/promises', array(
            'promises' => $promises,
            'unpublished'  => $unpublished
        ));
    }

    public function list_flagged_promises() {
        $promises = Promise::withTrashed()->where('flagged', '=', true)->orderBy('created_at', 'desc')->paginate(30);

        return View::make('admin/flagged', array(
            'promises' => $promises
        ));
    }

    public function list_official_promises() {
        $unpublished = Input::get('unpublished', 'no');
        if($unpublished == 'yes') {
            $promises = Promise::withTrashed()->where('official', '=', true)->get();
        } else {
            $promises = Promise::where('official', '=', true)->get();
        }

        $users = User::where('official', '=', true)->get();

        return View::make('admin/add-official-promise', array(
            'users'    => $users,
            'promises' => $promises,
            'unpublished'  => $unpublished
        ));
    }

    public function list_sweepstakes_entries() {
        $deleted = Input::get('deleted', 'no');
        if($deleted == 'yes') {
            $entries = Entry::withTrashed()->orderBy('created_at', 'desc')->paginate(30);
        } else {
            $entries = Entry::orderBy('created_at', 'desc')->paginate(30);
        }

        return View::make('admin/sweepstakes', array(
            'entries' => $entries,
            'deleted' => $deleted
        ));
    }

    public function sweepstakes_export() {
        $now = Carbon::now();
        $filename = $now->year . '-' . $now->month . '-' . $now->day . ' - TFIOS-Sweepstakes.xml';
        $entries = Entry::orderBy('created_at', 'desc')->get()->toJson();

        File::put(storage_path($filename), Formatter::make($entries, 'json')->to_xml());

        return Response::download(storage_path($filename));
    }

    public function login() {
        $user = Input::get('user');
        $password = Input::get('password');

        $admin_user = 'foxadmin';
        $admin_password = 'fox!14';

        if($user == $admin_user && $password == $admin_password) {
            Session::put('admin_user', 'yes');

            return Response::json(array(
                'status' => 'ok',
                'route' => route('admin/promises')
            ));
        } else {
            return Response::json(array(
                'status' => 'error',
                'message' => 'User does not exist'
            ));
        }
    }

}