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

        return $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $programs = DB::table('concour_registrations')->select('program_choice')->groupBy('program_choice')->get();
        $programs = Program::all();

        $numBtech = ConcourRegistration::where('program_choice', 'btech')->count();
        $numHtech = ConcourRegistration::where('program_choice', 'htech')->count();
        $numEng = ConcourRegistration::where('program_choice', 'eng')->count();
        $numArc = ConcourRegistration::where('program_choice', 'arc')->count();


        return view('admin.dashboard', compact('programs', 'numBtech', 'numHtech', 'numEng', 'numArc'));
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

    public function getApplicants() {
            $users = User::where('gender', 'M')->get();
            return view('admin.candidates', compact('users'));

    }
}
