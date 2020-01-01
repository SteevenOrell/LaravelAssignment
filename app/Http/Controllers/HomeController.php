<?php

namespace App\Http\Controllers;
use App\DataB;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->middleware('auth');            //authentication
       $dataPaginate =  DataB::paginate(5);
      $dataValues =  $dataPaginate;//DataB::all();         // instead of taking all the record we take 5 records
        return view('home',['dataValues'=>$dataValues]);   //and return those records to the home of the user registered
    }
    public function welcome(){
        $dataPaginate =  DataB::paginate(5);
        $dataValues = $dataPaginate;//DataB::all();                      //same thing but for the user without registration
        return view('welcome',['dataValues'=>$dataValues]);
    }

    public function search(Request $request)
    {                                                  //search functionality for the user
        $id = $request->id;

        $dataValues= DataB::findOrFail($id);           //find the id and take the value to the searchHome
        return view('searchHome',['dataValues'=>$dataValues]);

    }
}
