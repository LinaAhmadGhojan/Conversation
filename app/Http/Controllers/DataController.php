<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Data;
class DataController extends Controller
{
    public function index(){
        $data = Data::all();
        return view ('welcome', ['data' => $data]);
    }
    public function store(Request $request){
        $data = new Data;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->save();
        return back();
    }
    
}