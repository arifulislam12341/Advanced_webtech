<?php

namespace App\Http\Controllers;

use App\Models\userStudent;
use App\Http\Requests\StoreuserStudentRequest;
use App\Http\Requests\UpdateuserStudentRequest;

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
}
