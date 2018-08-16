<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FristController extends Controller
{
    public function index(){
        echo "my first controller";
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
}