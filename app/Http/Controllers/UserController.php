<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAccountRequest;
use App\Models\Account;
use App\Models\Apartment;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class UserController
{
    function createForm()
    {
        return view('create_user_form');
    }

    function create(StoreAccountRequest $request)
    {
        $request->validated();
        $obj = new Apartment();
        $obj->name = $request->get('name');
        $obj->address = $request->get('address');
        $obj->price = $request->get('price');
        $obj->details = $request->get('details');
        $obj->details_general = $request->get('details_general');
        $obj->thumbnail = $request->get('thumbnail');
        $obj->status = $request->get('status');
        $obj->created_at = Carbon::now();
        $obj->updated_at = Carbon::now();
        $obj->save();
        return redirect('/');
    }
}
