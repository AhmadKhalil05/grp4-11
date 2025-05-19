<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Report;

class ReportController extends Controller
{
    //
    public function index(){
         $reports=Report::all();
        
        return view('report.index',['reports'=>$reports]);
       
        
    }
    public function create(){
        return view ('report.create');
    }
    public function store(Request $request ){
$data= $request->validate([
    
    'report_type'=>'required|string',
    'content'=>'required|string',
    

]);
$data['user_id'] = auth()->id() ?? 1; 
$newReport=Report::create($data);
return redirect(route('report.index'));

    }
    public function edit(Report $report){
      return view('report.edit',['report'=>$report]);

    }
     public function update(Report $report, Request $request){
        $data= $request->validate([
    'report_id'=>'required|integer',
    'user_id'=>'required|integer',
    'report_type'=>'required|string',
    'content'=>'required|string',
   

]);

        $report->update($data);

        return redirect(route('report.index'))->with('success', 'Product Updated Succesffully');

    }
    public function destroy (Report $report ){
        $report->delete();
         return redirect(route('report.index'))->with('success', 'Product deleted Succesffully');

    }
}
