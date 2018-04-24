<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Auth;

class UsersController extends Controller
{
    public function show()
    {
      $user = Auth::user();
      return view("users.show")->with(["user" => $user]);
    }

    public function edit($user_id)
    {
      $user = User::find($user_id);
      return view("users.edit")->with(['user' => $user]);
    }

    public function update($user_id, Request $request)
    {
      User::find($user_id)->update
      ([
          'name' => $request->name,
          'email' => $request->email,
          'phone_number' => $request->phone_number,
          'description' => $request->description,
          'password' => $request->password,
      ]);
      return redirect("users/$user_id");
    }
}
