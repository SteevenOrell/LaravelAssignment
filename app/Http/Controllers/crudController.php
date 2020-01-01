<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataB;
class crudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $inputUser
     * @return \Illuminate\Http\Response
     */
    public function create(Request $inputUser)
    {
        $DataB = new DataB();    //I create an object model

        $DataB['Geography'] = $inputUser->geo;          //Take the values contain in the form using the method Request
        $DataB['record_2008'] = $inputUser->rec08;
        $DataB['record_2009'] = $inputUser->rec09;
        $DataB['record_2010'] = $inputUser->rec10;
        $DataB['record_2011'] = $inputUser->rec11;
        $DataB['record_2012'] = $inputUser->rec12;
        $DataB->save();                          //save it

        return redirect('/home');             //redirect to the home

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {                                                             //here I take the id the user put and then
        $id = $request->id;
        $record= DataB::findOrFail($id);                         //try to find if it exits in the model of not it return 404
         return view('searchView',['record'=>$record]);
                                                                  //if it exists pass it to the searchView as an associative array
    }

    /**
     * Display the specified resource.
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function export()
    {
        $tableData = DataB::all();                              //take all data from the database
        $file = fopen('dataCsv.csv','w');             //open a csv file created to store info of the model
        if($file){

            foreach ($tableData as $rec){

                fputcsv($file,explode(',',$rec));             //in csv format

            }
            fclose($file);
        }

    return response()->download('dataCsv.csv');}              //response permit actually to download it


    public function upload(Request $r){

$pathToUpload = $r->fil->store('storage/app/uploads');                     //by the request we can have the name given to the input type file and store it in a folder created

    return "<h3>Upload successfully</h3>".Redirect('/home');}  //return the message and redirect the user to the home.

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->id;
        $record = DataB::findOrFail($id);

            $record->Geography = $request->geo;                //practically the same thing that add but we try to find the record and change it save and redirect
            $record->record_2008 = $request->rec08;
            $record->record_2009 = $request->rec09;
            $record->record_2010 = $request->rec10;
            $record->record_2011 = $request->rec11;
            $record->record_2012 = $request->rec12;
            $record->save();
        return redirect('/home');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {                                                   //take the id and find it or 404 if found use the delete method and redirect the user
        $id = $request->id;

        $record = DataB::findOrFail($id);
        $record->delete();

        return redirect('/home');
    }
}
