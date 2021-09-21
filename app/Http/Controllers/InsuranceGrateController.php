<?php

namespace App\Http\Controllers;

use App\insurance_grate;
use App\insurancetype;
use Illuminate\Http\Request;

class InsuranceGrateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $insurance_grade = insurance_grate::all();
        return view('admin.insurance_grade.index', compact('insurance_grade'));
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
        $insurance_grade = insurance_grate::create([
            'name' => $request->name
        ]);

        session()->flash('Add', 'Insurance Grade Added Successfully');
        return redirect('/insurance_grade');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\insurance_grate  $insurance_grate
     * @return \Illuminate\Http\Response
     */
    public function show(insurance_grate $insurance_grate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\insurance_grate  $insurance_grate
     * @return \Illuminate\Http\Response
     */
    public function edit(insurance_grate $insurance_grate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\insurance_grate  $insurance_grate
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
        $insurance_grade = insurance_grate::where('id', $request->id)->update([
            'name' => $request->name
        ]);

        session()->flash('update', 'Insurance Grade Updated Successfully');
        return redirect('/insurance_grade');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\insurance_grate  $insurance_grate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $insurance_grade = insurance_grate::findOrFail($request->id);
        $insurance_grade->delete();
        session()->flash('delete','Insurance Grade Deleted Successfully');
        return redirect('/insurance_grade');
    }
}
