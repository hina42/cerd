<?php

namespace App\Http\Controllers;
use DB;
use App\employee;
use App\role;
use App\department;
use App\job;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // $ID = $request['ID'];
        $fname = $request['firstName'];
        $lname = $request['lastName'];
        $pass =  $request['pass'];
        $phone = $request['phone'];
        $email =  $request['email'];
        $gender =  $request['gender'];
        $salary = $request['salary'];
        $jobTitle = $request['jobTitle'];
        $department = $request['department'];
        $role = $request['role'];
        $employee = new employee();
      $employee->firstname = $fname;
      $employee->lastname = $lname;
      $employee->email = $email;
      $employee->password = $pass;
      $employee->phone = $phone;
      $employee->gender = $gender;
      $employee->save();
      $empid =DB::table('employees')->where('firstName','=',$fname)->select('employeeID')->get();
      $depid =DB::table('departments')->where('departmentName','=',$department)->select('departmentID')->get();
     $job = new job();
      $job->jobTitle = $jobTitle;
    $job->employeeID = $empid[0]->employeeID;
    $job->departmentID = $depid[0]->departmentID;
      $job->salary = $salary;
     $roleID =DB::table('roles')->where('roleName','=',$role)->select('roleID')->get();// DB::table('roles')->where('roleName','=',$role)->select('roleID')->get();
      $job->roleID = $roleID[0]->roleID;
    $job->save();
    return redirect('employee');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $RoleName = $request['RoleName'];
        $addrole = new role();
       
        $addrole->rolename = $RoleName;
         $addrole->save();
         $roles = role::all();
        return view('role',['roles'=>$roles, ]);
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {   if(request()->has('gender')){
        $gender = request()->query('gender');
        $data = DB::table('employees')->where('gender','=',$gender)
        ->join('jobs', 'jobs.employeeID','=','employees.employeeID')
       ->select('employees.employeeID','firstName', 'lastName', 'email','phone','gender','jobTitle')
       ->paginate(5)->appends('gender',$gender);
       $roles = role::all();
       $departments = department::all();
     
           return view('employees',['data'=>$data, 'roles'=>$roles,'departments'=>$departments]);
    }
    else{
        $data = DB::table('employees')
        ->join('jobs', 'jobs.employeeID','=','employees.employeeID')
       ->select('employees.employeeID','firstName', 'lastName', 'email','phone','gender','jobTitle')->paginate(5);
       $roles = role::all();
       $departments = department::all();
     
           return view('employees',['data'=>$data, 'roles'=>$roles,'departments'=>$departments]);
    }}
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {   $id = request()->query('id');
       $data = DB::table('employees')->where('employeeID',$id)->get();
        return view('registeration',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {   $id = $request['id'];
        $fname = $request['firstName'];
        $lname = $request['lastName'];
        $pass =  $request['pass'];
        $phone = $request['phone'];
        $email =  $request['email'];
        $gender =  $request['gender'];
        DB::table('employees')->where('employeeID',$id)->update([
            'firstName'=>$fname,
            'lastName'=>$lname,
            'password'=>$pass,
            'email'=>$email,
            'phone'=>$phone,
            'gender'=>$gender
            ]);
            $data = employee::all();
            $roles = role::all();
            $departments = department::all();
       return view('employees',['data'=>$data, 'roles'=>$roles,'departments'=>$departments]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function del()
    { $id = request()->query('id');
        DB::table('employees')->where('employeeID',"=",$id)->delete();
        return redirect()->back();
    }
}
