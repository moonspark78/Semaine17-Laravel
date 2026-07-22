<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function index()
    {
        
        $services = Service::all(); // tout les services ici

        return view('services.index', [
            "services" => $services
        ]);
    }


    public function show($id)
    {
        
        $service = Service::find($id);


        return view('services.show', [
            "id" => $id,
            "service" => $service
        ]);
    }

    public function direction()
{
    $service = Service::where("nom", "Direction")->first();


    return view('services.direction', [
        "service" => $service
    ]);
}


public function responsables()
{
    $services = Service::all();


    return view('services.responsables', [
        "services" => $services
    ]);
}


public function count()
{
    $nombre = Service::count();


    return view('services.count', [
        "nombre" => $nombre
    ]);
}
}