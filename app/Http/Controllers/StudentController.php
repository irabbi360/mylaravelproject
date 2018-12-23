<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();

        return view('student.index', compact('students'));
    }

    public function create()
    {
        return view('student.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'class' => 'required',
        ]);

        $name = $request->name;
        $email = $request->email;
        $phone_number = $request->phone_number;
        $class = $request->class;

        Student::create([
            'name' => $name,
            'email' => $email,
            'phone_number' => $phone_number,
            'class' => $class
        ]);

        return redirect()->back()->with('status', 'Student successfully saved');
    }

    public function show($id)
    {
        $student = Student::find($id);

        return view('student.view', compact('student'));
    }

    public function edit($id)
    {
        $student = Student::where('id', $id)->first();

        return view('student.edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'class' => 'required',
        ]);

        $student = Student::find($id);
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone_number = $request->phone_number;
        $student->class = $request->class;

        $student->save();

        return redirect()->back()->with('status', 'Student info updated');

    }

    public function delete($id)
    {
        Student::where('id', $id)->delete();
        return redirect()->back()->with('status', 'Student info deleted');
    }

    public function sessionTut(Request $request)
    {
        $value = $request->session()->get('hh');

        $request->session()->put('hh', 'bangla');

        $request->session()->forget('hh');

        return view('welcome');
    }

    public function getSessionData(Request $request)
    {
        if($request->session()->has('my_name'))
            echo $request->session()->get('my_name');
        else
            echo 'No data in the session';
    }

    public function storeSessionData(Request $request)
    {
        $request->session()->put('my_name','Jone Doe');
        echo "Data has been added to session";
    }

    public function deleteSessionData(Request $request)
    {
        $request->session()->forget('my_name');
        echo "Data has been removed from session.";
    }

    public function setCookie(Request $request) {
        //$minutes = 1;
        $response = new Response('Cookie set successfully');
        $response->withCookie(cookie('name', 'Fazle Rabbi'));
        return $response;
    }

    public function getCookie(Request $request) {
        $value = $request->cookie('name');
        echo $value;
    }
}
