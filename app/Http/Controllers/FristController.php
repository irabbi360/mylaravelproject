<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FristController extends Controller
{
    public function index(){

        $hello = ["hello" => "Welcome to Laravel Tutorial"];

        return view("mypage", $hello);
    }

    public function tetstt(){
        echo "my  controller another page";
    }

    public function dbConn()
    {
        try {
            DB::connection()->getPdo();
            echo "db connected successfully";
        } catch (\Exception $e) {
            die("Could not connect to the database.  Please check your configuration. error:" . $e );
        }
    }

    public function getRequest(Request $request)
    {
        //print_r($request->all());

        print_r($request->input('name'));
    }

    public function postRequest(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|unique:students'
        ]);
        //dd($request->all());
        $student = new Student();
        $student->name = $request->input('name');
        $student->email = $request->input('email');

        $student->save();

        return redirect()->back()->with('message', 'Student information saved');
    }
}
