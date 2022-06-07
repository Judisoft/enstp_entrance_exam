<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);

        $request->validate([
            'first_name' => 'required', 'string', 'max:255',
            'last_name' => 'required', 'string', 'max:255',
            'email' => 'required', 'string', 'email', 'max:255', 'unique:users',
            'telephone' => 'required',
            'pob' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'region_of_origin' => 'required',
            'sa_status' => 'required'
        ], [
            'telephone.required' => 'Telephone number is required',
            'pob.required' => 'Place of birth is required',
            'dob.required' => 'Date of birth is required',
            'gender.required' => 'Gender is required',
            'region_of_origin.required' => 'Region of origin is required',
            'sa_status.required' => 'State agent status is required'
        ]
    );

        $user->telephone = $request->input('telephone');
        $user->pob = $request->input('pob');
        $user->dob = $request->input('dob');
        $user->gender = $request->input('gender');
        $user->region_of_origin = $request->input('region_of_origin');
        $user->role = 'user';
        $user->sa_status = $request->input('sa_status');

        if($user->save()) {
            return back()->with('success', 'Personal information saved');
        } else {
            return back()->with('error', 'Sorry something went wrong');
        }

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
