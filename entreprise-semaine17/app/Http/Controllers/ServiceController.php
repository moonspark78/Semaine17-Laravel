<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function index()
    {
        $services = Service::all();

        return view('services.index', [
            "services" => $services
        ]);
    }


    public function create()
    {
        return view('services.create');
    }


    public function store(Request $request)
    {
        Service::create([
            "nom" => $request->nom,
            "responsable" => $request->responsable,
            "telephone" => $request->telephone
        ]);

        return redirect()->route('services.index');
    }


    public function show(Service $service)
    {
        return view('services.show', [
            "service" => $service
        ]);
    }


    public function edit(Service $service)
    {
        return view('services.edit', [
            "service" => $service
        ]);
    }


    public function update(Request $request, Service $service)
    {

        $service->update([
            "nom" => $request->nom,
            "responsable" => $request->responsable,
            "telephone" => $request->telephone
        ]);

        return redirect()->route('services.index');
    }


    public function destroy(Service $service)
    {

        $service->delete();

        return redirect()->route('services.index');
    }


    // Tes anciennes routes du TP3

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