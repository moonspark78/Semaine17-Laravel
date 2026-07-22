<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employe;
class RequeteController extends Controller
{
    public function tous()
    {
        $employes = Employe::all();

        return view('requetes.tous', [
            "employes" => $employes
        ]);
    }
}
