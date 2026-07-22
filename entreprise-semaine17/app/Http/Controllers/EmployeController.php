<?php

namespace App\Http\Controllers;

use App\Models\Employe;

class EmployeController extends Controller
{

    public function bienvenue()
    {
        return view("bonjour");
    }


    public function liste()
    {
        $employes = Employe::all();

        return view('employes', [
            "employes" => $employes
        ]);
    }


    public function fiche($id)
    {
        return "Employe $id";
    }


    public function index()
    {
        $title = "Liste Employes";

        $employes = Employe::all();

        return view('employes.index', [
            "employes" => $employes,
            "title" => $title,
        ]);
    }


    public function show($id)
    {
        $employe = Employe::find($id);

        return view('employes.show', [
            "employe" => $employe
        ]);
    }

    public function requetes()
{
    $employes = Employe::all();

    return view('employes.requetes', [
        "employes" => $employes
    ]);
}

}