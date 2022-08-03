<?php

namespace App\Http\Controllers;

use App\Models\Invinit;
use App\Http\Requests\StoreInvinitRequest;
use App\Http\Requests\UpdateInvinitRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class InvinitController extends Controller
{

    
    ##################  index    ###################
    public function index()
    {
     
         $invinit=Invinit::all();
        return view('invinit',compact('invinit'));

    }

 
  ##################  form invinit   ###################
  public function forminvinit() 
  {
    return view('forminvinit');
  }


   ##################  form invinit Sort    ###################
   public function formInvinitSort(StoreInvinitRequest $request) 
   {
    $validator = Validator::make($request->all(), $request->rules());

    if ($validator->fails()) {
         return redirect()->back()->withErrors($validator)->withInput();
                    
    }

    $validated = $validator->validated();
     $Invinit=new Invinit();
     
     $Invinit->name=$request->name;
     $Invinit->email=$request->email;
     $Invinit->save();

   return $this->index();

   }
    
}
