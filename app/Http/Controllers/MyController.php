<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MyController extends Controller
{
    private $myvalue;
    protected $myvalue2;
    public $myval = "";
    // Constructor
    // MyControlller()
    function __construct(){

    }

    function index(){
        return view('myview.index');
    }

    function info(Request $req){
        return view('myview.info');
    }

    function calculate(Request $req){
        echo $req->input('mynumber');
        $data['num'] = $req->input('mynumber');
        return view('myview.calculate', $data);
    }

    public function submitForm(Request $request) {
        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('photos', 'public');
        }

        $data = [
            'fname' => $request->input('fname'),
            'lname' => $request->input('lname'),
            'birth' => $request->input('birth'),
            'age' => $request->input('age'),
            'gender' => $request->input('gender'),
            'photo' => $photoPath,
            'address' => $request->input('address'),
            'color' => $request->input('color'),
            'music' => $request->input('music'),
            'agree' => $request->input('agree'),
        ];
        return view('myview.display', $data);
    }
}
