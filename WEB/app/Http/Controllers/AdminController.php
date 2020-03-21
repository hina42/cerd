<?php
namespace App\Http\Controllers;
use App\employee;
use DB;
use App\role;
use App\department;
use Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
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
    {  $this->validate($request,['name'=>'required','password'=>'required']);
        $username = $request['name'];
        $password = $request['password'];
        if($username && $password){
            $user = DB::table('employees')->select('firstname','password')->get();
            if($user[0]->firstname == $username && $user[0]->password == $password)
            return view('dashboard');
            else
            return dd("user does not exist");}
    //         $user = DB::table('employees')->select('firstname')->where('firstname','=',$username)->get();
    //         $pass = DB::table('employees')->select('password')->where('password','=',$password)->get();           
    // return dd( $user[0]->firstname);}
            //    if( $user[0]->firstname == $username && $pass[0]->password==$password){
    //     return dd($user[0]->firstname);}
    //     else{
    //         return dd("user does not exist");
       // }}
        // else
        // { return dd("dfsdfsdfa");}
    //     $product->productID=$id;
    //     $product->productName=$name;
    //     $product.save();
    //     return redirect()->back();
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(){

        $page = request()->query('page');
            if($page=='dashboard'){
            return view('dashboard');}
            if($page=='employees'){   
            return route('employee.show');// return view($page,['employees'=>$employees]);
            }
            if($page=='role'){
                $roles = role::all();
                return view($page,['roles'=>$roles]);}
                if($page=='department'){
                    $departments = department::all();
                    return view($page,['departments'=>$departments]);}
            if($page=='notifications')
                return view($page);
            if($page=='tables')
                return view($page);  
            if($page=='user')
                return view($page); 
            if($page=='typography')
                return view('filter');
            else
            return view('login2');
 // if(auth::check())
        //     return view('icons'); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('registeration');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
