<?php

namespace App\Http\Controllers;

use App\Student;
use App\State;
use App\Section;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('students.index', [
            'students' => Student::all(),
            'states'   => State::lists('name', 'id'),
            'sections' => Section::lists('name', 'id')
        ]);
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
        $this->validate($request, [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'address' => 'required',
            'zip' => 'required|max:10',
            'city' => 'required|max:50',
            'phone_number' => 'required|max:20',
            'mobile_number' => 'required|max:20',
            'year_level' => 'required|max:2',
            'email' => 'required|email|max:255',

        ]);

        Student::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'address' => $request->address,
            'zip' => $request->zip,
            'city' => $request->city,
            'state_id' => $request->state_id,
            'phone_number' => $request->phone_number,
            'mobile_number' => $request->mobile_number,
            'email' => $request->email,
            'year_level' => $request->year_level,
            'section_id' => $request->section_id,

        ]);

        return redirect('/student');
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
        $student = Student::find($id);
        $student->delete();

        return redirect('/student');
    }
}
