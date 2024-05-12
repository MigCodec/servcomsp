<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Maintenance;
use Illuminate\Http\Request;

class MaintenanceController extends Controller
{
    public function index(){
    }
    public function create(Request $request){

    }
    public function createForm(){
        $cars = Car::all ();
        return view('maintenance.add',['cars'=>$cars]);
    }
    public function update(Request $request){
    }
    public function show(String $id){

    }
    public function showForm(){
        $maintenances = Maintenance::all ();
        return view('maintenance.get',['maintenances'=>$maintenances]);
    }
    public function destroy(Request $request){}

}
