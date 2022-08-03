<?php

namespace App\Http\Controllers;

use App\Exports\SeatExport;
use App\Models\Seat;
use Illuminate\Http\Request;
use App\Http\Requests\SortConfirm;
use App\Imports\SeatImport;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;
use PDO;
use DB;

class SeatController extends Controller
{
    ##################  index    ###################
    public function index()
    {
     
         $seat=Seat::all();
        return view('seat',compact('seat'));

    }




    ##################  Sort Colum    ###################
    public function sort(Request $request)
    {
     $name=$request->name;
     $seat=Seat::orderBy($name,$request->type)->get();
     return view('seat',compact('seat'));

    } 




 ##################  Search Colum    ###################
 public function Search(Request $request)
 {
    $name=$request->name;
  $seat=Seat::where('name',"LIKE","%".$name."%")
  ->orWhere('email',"LIKE","%".$name."%")
  ->orWhere('job',"LIKE","%".$name."%")
  ->orWhere('question',"LIKE","%".$name."%")
  ->orWhere('destination',"LIKE","%".$name."%")
  ->orWhere('phone',"LIKE","%".$name."%")->
  get();
  return view('seat',compact('seat'));

 } 

    ##################  Number Column    ###################
    public function numberColum(Request $request)
    {
        $i=0;
      //  $seat = DB::table('seats')
      //->select('id as colum1','name as colum2','email as colum3', 'phone as colum4', 'destination as colum5','job as colum6','question as colum7')->get();
       $seat=Seat::all();
      
        $size= count($seat);
        $number=$request->number_column;
        return view('number',compact('seat','number','size','i'));

    }


    ##################  export    ###################
    public function export() 
    {
        return Excel::download(new SeatExport, 'seat.xlsx');
    }
       



    ##################  import    ###################
    public function import() 
    {
        Excel::import(new SeatImport,request()->file('file'));
               
        return back();
    }

  ##################  formConfirm    ###################
  public function formConfirm() 
  {
    return view('form');
  }


   ##################  formConfirm Sort    ###################
   public function formConfirmSort(SortConfirm $request) 
   {
    $validator = Validator::make($request->all(), $request->rules());

    
    if ($validator->fails()) {
         return redirect()->back()->withErrors($validator)->withInput();
                    
    }

    $validated = $validator->validated();
     $seat=new Seat();
     
     $seat->name=$request->name;
     $seat->email=$request->email;
     $seat->job=$request->job;
     $seat->phone=$request->phone;
     $seat->question=$request->question;
     $seat->destination=$request->destination;
     $seat->save();

   return $this->index();

   }
    
}
