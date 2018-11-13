<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Division;
use App\User;

class DivisionController extends Controller
{
    public function index()
    {        
        $divisions = Division::paginate(20);
        return view('divisions.index',compact(['divisions']));
    }

    public function create(){
        return view('divisions.create');
    }

    public function store(Request $request)
    {
        
        $division = Division::create($request->all());
        User::find($division->manager_id)->divisions()->attach($division->id);

        return redirect()->back()->with('success','Product has been created Successfully');
    }

    public function show(Division $division)
    {        

        return view('divisions.show',compact(['division']));
    }

    public function edit(Division $division)
    {        
        return view('divisions.edit',compact(['division']));
    }

    public function update(Request $request, Division $division)
    {        
        $division->update($request->all());

        return redirect()->route('divisions.index')->with('success','Product has been updated Successfully');
    }

    public function destroy(Division $division)
    {
        $division->members()->detach();
        $division->delete();

        return redirect()->route('divisions.index')->with('success','Product has been deleted Successfully');
    }

    public function deleteAll(Request $request)
    {
        $ids = $request->ids;        
        \DB::table("divisions")->whereIn('id',explode(",",$ids))->delete();
        return response()->json(['success'=>"Divisions Deleted successfully."]);
    }

    public function mydivisions()
    {
        $divisions = auth()->user()->divisions;
        //dd($divisions);
        return view('divisions.my',compact(['divisions']));
    }

    public function mydivisiondetail(Division $division)
    {
        return view('divisions.mydivisiondetail',compact(['division']));
    }
}