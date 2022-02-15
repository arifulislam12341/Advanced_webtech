<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function registration()
    {
        return view('pages.student.registration');
    }
    public function registrationSubmit(Request $request)
    {
        $validate=$request->validate(
        [
            'name'=>'required',
            'address'=>'address',
            'email'=>'required',
            'phonenu'=>'required',
    
        ],
        [
            'name.required'=>'Please Enter Your Name',
           
            'phonenu.required'=>'Please Enter Your Phone Number',
            'email.required'=>'Please Enter Your Email',
        ]
        );
    
    
    }
    public function login()
{
    return view('pages.student.login');
}
public function loginSubmit(Request $request)
{
    $validate=$request->validate(
    [
        
       
        'email'=>'required',
        'password'=>'required',

    ],
    [
        
     
        
        'email.required'=>'Please enter your email',
        'password.required'=>'Please enter your password',
    ]
    );


}

  
}
