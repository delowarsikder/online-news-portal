<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Barryvdh\Debugbar\Facades\Debugbar;

class StudentController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $students = Student::all();
    return view('students.index')->with('students', $students);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('students.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $student =  $request->all();   // It will get all data from request
    // $student= $request->except(['_token', '_method']);   // use this to exclude _token and _method
    Student::create($student);
    return redirect('student')->with('flash_message', 'Student has been added successfully!');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $student = Student::find($id);
    return view('students.show')->with('student', $student);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $student = Student::find($id);
    return view('students.edit')->with('student', $student);
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
    $student = Student::find($id);
    $input = $request->all();
    $student->update($input);
    return redirect('student')->with('flash_message', 'Student has been updated successfully!');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    Student::destroy($id);
    return redirect('student')->with('flash_message', 'Student has been deleted successfully');
  }
}