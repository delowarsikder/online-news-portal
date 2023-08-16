<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Barryvdh\Debugbar\Facades\Debugbar;
use DebugBar\DebugBar as DebugBarDebugBar;
use File;

class StudentController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function __invoke()
  {
    $students = Student::all();
    return view('students.index')->with('students', $students);
  }

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
    // $this->validate($request, [
    //   'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
    // ]);

    $student["photo"] = $this->storeImage($request);
    Student::create($student);
    return redirect('student')->with('message', 'Student has been added successfully!');
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
   * date the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    $student = Student::find($id);
    $updateInfo = $request->all();
    $currentImage = public_path($student['photo']);
    if ($request->photo) {
      if (file_exists($currentImage)) {
        @unlink($currentImage);
      }
      $updateInfo['photo'] = $this->storeImage($request);
    } else {
      unset($updateInfo['photo']);
    }
    $student->update($updateInfo);
    return redirect('student')->with('message', 'Student has been updated successfully!');
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
    return redirect('student')->with('message', 'Student has been deleted successfully');
  }

  private function storeImage($request)
  {
    if ($request->photo) {
      $file = $request->file('photo');
      $fileName = date('YmdHis') . '-' . uniqid() . '-' . $file->getClientOriginalName();
      $destinationPath = 'storage\images';
      $file->move(public_path($destinationPath), $fileName);
      $storagePath = $destinationPath . "\\" . $fileName;
      return $storagePath;
    }
  }
}
