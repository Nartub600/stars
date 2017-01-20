<?php

class EntryController extends BaseController {

    public function create() {
        $data = Input::all();

        $rules = array(
            'first_name'     => 'required',
            'last_name'      => 'required',
            'email_address_' => 'required|email',
            'address'        => 'required',
            'state'          => 'required',
            'zip'            => 'required',
            'rules'          => 'accepted',
            'terms'          => 'accepted'
        );

        $messages = array(
            'first_name.required'     => trans('tfios.first_name_validation'),
            'last_name.required'      => trans('tfios.last_name_validation'),
            'email_address_.required' => trans('tfios.email_validation'),
            'email_address_.email'    => trans('tfios.email_address_validation'),
            'address.required'        => trans('tfios.address_validation'),
            'state.required'          => trans('tfios.state_validation'),
            'zip.required'            => trans('tfios.zip_validation'),
            'rules.accepted'          => trans('tfios.rules_validation'),
            'terms.accepted'          => trans('tfios.terms_validation')
        );

        $validator = Validator::make($data, $rules, $messages);

        if($validator->passes()) {
            Entry::create(array(
                'first_name'   => Input::get('first_name'),
                'last_name'    => Input::get('last_name'),
                'email'        => Input::get('email'),
                'address'      => Input::get('address'),
                'state'        => Input::get('state'),
                'zip'          => Input::get('zip'),
                'subscription' => Input::get('subscription') == 'on' ? true : false
            ));

            return Response::json(array(
                'status' => 'ok'
            ));
        } else {
            return Response::json(array(
                'status'    => 'error',
                'validator' => $validator->messages()
            ));
        }
    }

    public function toggle($id) {
        $entry = Entry::withTrashed()->find($id);
        if($entry->trashed()) {
            $entry->restore();
        } else {
            $entry->delete();
        }

        return Redirect::to(URL::previous());
    }

    public function export() {

    }

}