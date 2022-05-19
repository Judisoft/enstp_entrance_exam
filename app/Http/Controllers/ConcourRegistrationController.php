<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Requests\ConcourRegistration;
use Illuminate\Support\Facades\Auth;
use App\Models\ConcourRegistration;
use App\Models\User;

class ConcourRegistrationController extends Controller
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
        // $user = Auth::user();
        $user = Auth::user();
        $registrant = ConcourRegistration::find(1)->user;

        // return dd($registrant);

        return view('concour-registration', compact('user', 'registrant'));
    }

    /**
     * Store a newly created resource in storage.
     *@param App\Http\Requests\ConcourRegistration $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $applicant_info = $request->validate([
            'program_choice' => 'required|unique:concour_registrations',
            
        ],
         [
             'program_choice.required' => 'Select a Program Choice',
            'program_choice.unique' => 'You have already cho'
        ]);

        $applicant_info = new ConcourRegistration;
        $applicant_info->user_id = Auth::user()->id;
        $applicant_info->program_choice = $request->input('program_choice');

        $applicant_info->save();

        if($applicant_info->id) {
            return back()->with('success', 'Application received successfully');
        } else {
            return back()->withInput('error', 'Oups! Something went wrong');
        }
        
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
        //
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
