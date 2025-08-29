<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function AddUser(Request $req){
        $formFields = $req->validate([
            "name" => ['required','min:3'],
            "email" => ['required','email'],
            "password" => ['required','min:6'],
            "course_assigned" => ['required'],
            "role" => ['required'],
            "image" => ['required','mimes:png,jpg'],
            "gender" => ['required'],
            "number" => ['required']
        ]);

        $formFields['image'] = $req->file('image')->store('user_images','public');
        $formFields['password'] = bcrypt($formFields['password']);

        // send the data to the database
        User::create($formFields);
    return back()->with('message','User Added Successfully!');

    }
}