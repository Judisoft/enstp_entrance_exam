<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;
use App\Models\ConcourRegistration;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class AdminDashboardController extends Controller
{
    public function __construct() {

        return $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programs = Program::all();

        $applicants = ConcourRegistration::all();

        $btech = ConcourRegistration::where('program_choice', 'btech')->get();
        $htech = ConcourRegistration::where('program_choice', 'htech')->get();
        $eng = ConcourRegistration::where('program_choice', 'eng')->get();
        $arc = ConcourRegistration::where('program_choice', 'arc')->get();

        return view('admin.dashboard', compact('programs', 'applicants', 'btech', 'htech', 'eng', 'arc')); 

        // Returns the number of applicants per program

        // for ($i=0; $i<count($programs); $i++) {

        //     //echo $programs[$i]->code;
        //     $candidates = ConcourRegistration::where('program_choice', $programs[$i]->code)->get();

        //     echo $programs[$i]->code. ' => '.count($candidates) . "<br>" ;
            
        // }

        
        // return view('admin.dashboard', compact('programs', 'candidates'));
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

    public function getApplicants($program) {
            $programs = Program::all();

            $concour_registrations = ConcourRegistration::where('program_choice', $program)->simplePaginate(100);

            return view('admin.applicants', compact('concour_registrations', 'programs', 'program'));

    }
}
