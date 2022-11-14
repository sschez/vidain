<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public static $users = [
        ["id"=>"1", "name"=>"Martha Restrepo", "tipo"=>"cc", 
        "documento"=> "43597190"],
        ["id"=>"2", "name"=>"iPhone", "description"=>"Best iPhone"],
        ["id"=>"3", "name"=>"Chromecast", "description"=>"Best Chromecast"],
        ["id"=>"4", "name"=>"Glasses", "description"=>"Best Glasses"]
    ];

    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Pacientes";
        $viewData["subtitle"] =  "Lista de pacientes";
        $viewData["users"] = UserController::$users;
        return view('user.index')->with("viewData", $viewData);
    }

    public function create()
    {
        $viewData = []; //to be sent to the view
        $viewData["title"] = "Crear paciente";

        return view('user.create')->with("viewData",$viewData);
    }
    public function save(Request $request)
    {
        $request->validate(
            [
            "name" => "required",            
            "doc" => "required|numeric|gt:0",
            "namedoc" => "required",
            "nameem" => "required",
            ]
        );
        dd($request->all());
        
    }

}
