<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\Cloner\Stub;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
        if(isset($request->project_id) && $request->project_id !== 0)
            $students = \App\Models\Student::where('project_id', $request->project_id)->orderBy('surname')->get();
        else
            $students = \App\Models\Student::orderBy('surname')->get();
            $projects = \App\Models\Project::orderBy('title')->get();
        return view('students.index', ['students' => $students, 'projects' => $projects]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $projects = \App\Models\Project::orderBy('title')->get();
        return view('students.create', ['projects' => $projects]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $student = new Student();
        $student->fill($request->all());
        // $student->project_id = $request->project_id;
        $student->save();
        return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student){
        $projects = \App\Models\Project::orderBy('title')->get();
        return view('students.edit', ['student' => $student, 'projects' => $projects]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student){
        $student->fill($request->all());
        // $student->project_id = $request->project_id;
        $student->save();
        return redirect()->route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student, Request $request){
        $student->delete();
        return redirect()->route('students.index', ['project_id' => $request->input('project_id')]);
    }
}
