<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
class dateRangeController extends Controller
{
    function index()
    {
       // return view('date');
    }
    public function create(Request $request)
    { $gender = $request['filtertype'];
        return dd($gender);
    //  if($request->ajax())
    //  {
    //   if($request->from_date != '' && $request->to_date != '')
    //   {
    //    $data = DB::table('dates')
    //      ->whereBetween('date', array($request->from_date, $request->to_date))
    //      ->get();
    //   }
    //   else
    //   {
    //    $data = DB::table('dates')->orderBy('date', 'desc')->get();
    //   }
    //   echo json_encode($data);
    //  }
    }
}