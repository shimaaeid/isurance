<?php

namespace App\Http\Controllers;

use App\relatives_type;
use Illuminate\Http\Request;

class RelativesTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $relatives = relatives_type::all();
        return view('admin.relatives-type.index', compact('relatives'));
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
            'name' => 'required'
        ],[
            'name.required' => 'Relative Name is Required'
        ]);
        $relatives = relatives_type::create([
            'name' => $request->name
        ]);

        session()->flash('Add', 'Relative Added Successfully');
        return redirect('/relatives_type');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\relatives_type  $relatives_type
     * @return \Illuminate\Http\Response
     */
    public function show(relatives_type $relatives_type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\relatives_type  $relatives_type
     * @return \Illuminate\Http\Response
     */
    public function edit(relatives_type $relatives_type)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\relatives_type  $relatives_type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validate = $this->validate($request, [
            'name' => 'required'
        ],[
            'name.required' => 'Relative Name is Required'
        ]);
        $relatives = relatives_type::where('id', $request->id)->update([
            'name' => $request->name
        ]);

        session()->flash('update', 'Relative Updated Successfully');
        return redirect('/relatives_type');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\relatives_type  $relatives_type
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        relatives_type::find($request->id)->delete();
        session()->flash('delete','Relative Deleted Successfully');
        return redirect('/relatives_type');
    }
}
