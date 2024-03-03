<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class DashBoardController extends Controller
{

    public function index() {


    //     $users = [
    //        [
    //         "name"=> "alex",
    //        "age"=> "30",
    //        ],
    //         [
    //         "name"=> "dan",
    //        "age"=> "25",
    //        ],
    //        [
    //         "name"=> "john",
    //        "age"=> "17",
    //        ],
    //     ];

    //    return view("Dashboard", [
    //     "users"=> $users
    //    ]
    // );

    //RECORDS
    // $idea = new Idea([
    //     "content" => "test",
    // ]);

    // $idea->save();


    // return view("dashboard", [
    //     "ideas" => Idea::orderBy("created_at","desc")->get()
    // ]);

    return view("dashboard", [
        "ideas" => Idea::orderBy("created_at","desc")->paginate(5)
    ]);


   }



}



