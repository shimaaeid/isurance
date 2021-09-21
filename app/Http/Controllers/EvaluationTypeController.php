<?php

namespace App\Http\Controllers;

use App\evaluationType;
use Illuminate\Http\Request;

class EvaluationTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $evaluationType = evaluationType::all();
        return view('admin.evaluation_type.index', compact('evaluationType'));
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
            'name.required' => 'Evaluation Name is Required'
        ]);
        $evaluationType = evaluationType::create([
            'name' => $request->name
        ]);

        session()->flash('Add', 'Evaluation Added Successfully');
        return redirect('/evaluation_type');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\evaluationType  $evaluationType
     * @return \Illuminate\Http\Response
     */
    public function show(evaluationType $evaluationType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\evaluationType  $evaluationType
     * @return \Illuminate\Http\Response
     */
    public function edit(evaluationType $evaluationType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\evaluationType  $evaluationType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //

        $validate = $this->validate($request, [
            'name' => 'required'
        ],[
            'name.required' => 'Evaluation Name is Required'
        ]);
        $evaluationType = evaluationType::where('id', $request->id)->update([
            'name' => $request->name
        ]);

        session()->flash('update', 'Evaluation Updated Successfully');
        return redirect('/evaluation_type');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\evaluationType  $evaluationType
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //

        $evaluationType = evaluationType::findOrFail($request->id);
        $evaluationType->delete();
        session()->flash('delete','Evaluation Deleted Successfully');
        return redirect('/evaluation_type');
    }
}
