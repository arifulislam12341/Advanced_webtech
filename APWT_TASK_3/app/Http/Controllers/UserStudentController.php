<?php

namespace App\Http\Controllers;

use App\Models\userStudent;
use App\Http\Requests\StoreuserStudentRequest;
use App\Http\Requests\UpdateuserStudentRequest;
use Illuminate\Http\Request;
use Session;

class UserStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreuserStudentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreuserStudentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\userStudent  $userStudent
     * @return \Illuminate\Http\Response
     */
    public function show(userStudent $userStudent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\userStudent  $userStudent
     * @return \Illuminate\Http\Response
     */
    public function edit(userStudent $userStudent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateuserStudentRequest  $request
     * @param  \App\Models\userStudent  $userStudent
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateuserStudentRequest $request, userStudent $userStudent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\userStudent  $userStudent
     * @return \Illuminate\Http\Response
     */
    public function destroy(userStudent $userStudent)
    {
        //
    }
    public function userRegistration(){

        return view("pages.user.userRegistration");

    }
    public function userRegistrationSubmit(Request $request){

        $validate=$request->validate([

            'name'=>'required|min:3|max:100',

            'email'=>'email',

            'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/',

            'address'=>'required',

            'password'=>'required'

        ],



        [

            'name.required'=>'Please put your name',

            'name.min'=>'Name must be greater than 5 charcters',

            'email'=>"Put your mail",

            'phone.required'=>"put your phone",

            'address.required'=>"put your address",

            'password.required'=>"put your password"



        ]

    );
    $user=new userStudent();

       $user->name =$request->name;

       $user->email=$request->email;

       $user->phone =$request->phone;

       $user->address=$request->address;

       $user->password=$request->password;

       $user->save();

    //    $msg="Registration Successful";

        // return view('pages.student.studentRegistration') ;

        // return $student;

        // return view('pages.student.list')->with('students', $students);

         return redirect()->route('userRegistration');



    }
    public function userLogin(){

        return view('pages.user.StudentLogin');

    }
    public function userLoginSubmit(Request $request)
{
    $validate=$request->validate(
    [
        
        // 'id'=>'required',
        'email'=>'required',
        'password'=>'required',

    ],
    [
        
        // 'id.required'=>'Please enter your id',
        
        'email.required'=>'Please enter your email',
        'password.required'=>'Please enter your password',
    ]
    );
    $user=userStudent::where("email",$request->email)
    ->where("password",$request->password)

        ->first();

        if ($user){

            // return "hi";

            $request->session()->put("userName",$user->name);

            $request->session()->put("userId",$user->id);

            $request->session()->put("userPhone",$user->phone);

            $request->session()->put("userAddress",$user->address);

            $request->session()->put("userPassword",$user->password);

            $request->session()->put("userEmail",$user->email);



            return redirect()->route("userDash");

        }

        return back();

}
public function userDash(){

    return view ("pages.user.userdash");

}




public function userLogout(){

    // session()->forget('userName');

    // session()->forget('userId');

    session()->flush();

    return redirect()->route('userLogin');

}
public function userUpdate(){

    //    return  $request->id;

    $id=Session::get("userId");

    // echo $id;

    // $id=(Session::get("userId"));

    $user = userStudent::where('id', $id)->first();

    // echo $user;

    return view('pages.user.userUpdate')->with('user', $user);

   }
   public function userUpdateSubmit (Request $request){

//   return  $request->id;

    $user = userStudent::where('id', $request->id)->first();



    // return $request->id;

    $user->name = $request->name;

    $user->email= $request->email;

    $user->phone = $request->phone;

    $user->address = $request->address;

    $user->save();

    // updating session value

    $request->session()->put("userName",$user->name);

    $request->session()->put("userEmail",$user->email);

    $request->session()->put("userPhone",$user->phone);

    $request->session()->put("userAddress",$user->address);

    $request->session()->put("userPassword",$user->password);

    return view ("pages.user.userdash");

    return redirect()->route('userUpdate');

    // return "updated";

   }

}



