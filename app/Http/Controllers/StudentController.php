<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

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
        return view('student.index' , compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function not_null( $name , $phone , $age , $address)
    {
        if($name !='' && $phone !='' && $age!='' && $address!='' )
        return true;
        else return false;
    }
    public function store(Request $request)
    {
        $student_name = $request->student_name;
        $student_phone= $request->student_phone;
        $student_age= $request->student_age;
        $student_address= $request->student_address;
        if($this->not_null($student_name,$student_age,$student_age,$student_address)){
            $student=Student::create([ 
                'name' => $student_name,
                'phone' => $student_phone,
                'age' => $student_age,
                'address' => $student_address,
            ]);
            // $student = new Student();
        // $student->name = $student_name;
        // $student->phone = $student_phone;
        // $student->age = $student_age;
        // $student->address = $student_address;
        // $student->save();
        $message = 'add successful';

        return redirect()->route('student.index')->with( 'message', $message);
    }else{
        $message = 'all fields requierd!!!';
        return redirect()->route('student.create')->with( 'message', $message);
    }        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('student.student', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
      return view('student.edit' , compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $student_name = $request->student_name;
        $student_phone= $request->student_phone;
        $student_age= $request->student_age;
        $student_address= $request->student_address;
        if($this->not_null($student_name,$student_age,$student_age,$student_address)){
        $student->name = $student_name;
        $student->phone = $student_phone;
        $student->age = $student_age;
        $student->address = $student_address;
        $student->save();
        $message = 'add successful';
        return redirect()->route('student.index')->with( 'message', $message);
    }else{
        $message = 'all fields requierd!!!';
        return redirect()->route('student.edit')->with( 'message', $message);
    }  }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('student.index');

    }
}
