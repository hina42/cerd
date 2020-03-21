<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\department;

class DepartmentController extends Controller
{
    public function create(Request $request)
    {
        $departmentName = $request['depName'];
        //$ID = $request['ID'];
        $department = new department();
         $department->departmentName = $departmentName;
         //$addDepartment->employeeID=$ID;
        $department->save();
        $departments = department::all();
        return view('department',['departments'=>$departments]);
    }
    public function edit()
    {
       
        return view('AddDepartment');
    }
}
