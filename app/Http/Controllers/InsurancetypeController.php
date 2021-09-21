<?php

namespace App\Http\Controllers;

use App\insurancetype;
use Illuminate\Http\Request;

class InsurancetypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $insurancetype = insurancetype::all();
        return view('admin.insurance-type.index', compact('insurancetype'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        $validate = $this->validate($request, [
            'name' => 'required',
            'description' => 'required'
        ],[
            'name.required' => 'Insurance Name is Required',
            'description.required' => 'Description in Required'
        ]);
        $relatives = insurancetype::create([
            'name' => $request->name,
            'description' => $request->description
        ]);

        session()->flash('Add', 'Insurance Added Successfully');
        return redirect('/insurance_type');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\insurancetype  $insurancetype
     * @return \Illuminate\Http\Response
     */
    public function show(insurancetype $insurancetype)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\insurancetype  $insurancetype
     * @return \Illuminate\Http\Response
     */
    public function edit(insurancetype $insurancetype)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\insurancetype  $insurancetype
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validate = $this->validate($request, [
            'name' => 'required',
            'description' => 'required'
        ],[
            'name.required' => 'Insurance Name is Required',
            'description.required' => 'Description in Required'
        ]);
        $relatives = insurancetype::where('id', $id)->update([
            'name' => $request->name,
            'description' => $request->description
        ]);

        session()->flash('update', 'Insurance Updated Successfully');
        return redirect('/insurance_type');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\insurancetype  $insurancetype
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $insurancetype = insurancetype::findOrFail($request->id);
        $insurancetype->delete();

        session()->flash('delete', 'Insurance Deleted Successfully');
        return redirect('/insurance_type');


    }
}
