<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
        $employee = Employee::all();
        return response()->json($employee);
    }

    public function show($id){
        $employee = Employee::find($id);
        return response()->json($employee);
    }

    public function create(Request $request){

        $employee = new Employee();

        $employee->name = $request->name;
        $employee->age = $request->age;
        $employee->gender = $request->gender;
        $employee->phone_number= $request->phone_number;
        $employee->department = $request->department;
        $employee->image = $request->image;

        $employee->save();

        return response()->json('Employee Data Successfully Added!');
    }

    public function update(Request $request, $id){
        $employee = Employee::find($id);

        $employee->name = $request->name;
        $employee->age = $request->age;
        $employee->gender = $request->gender;
        $employee->phone_number= $request->phone_number;
        $employee->department = $request->department;
        $employee->image = $request->image;

        $employee->save();

        return response()-> json($employee);
    }

    public function delete($id){
        $employee = Employee::find($id);
        $employee ->delete();
        return response()->json('Employee data deleted!');
    }

    //
}