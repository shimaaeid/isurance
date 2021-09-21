<?php

namespace App\Http\Controllers;

use App\media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
       // return $request->all();

       $this->validate($request, [
        'image' => 'required|mimes:pdf,png,jpg,jpeg'
        ],[
        'image.mimes' => 'صيغه الملف يجب ان تكون pdf, png, jpg, jpeg'

       ]);

       $image = $request->file('image');
       $file_name = $image->getClientOriginalName();

        $media = media::create([
            'image'=> $file_name,
            'column_id' => $request->column_id,
            'model_name' => 'employee'
        ]);

        $imageName = $request->image->getClientOriginalName();
        $request->image->move(public_path('Attachments/'. $request->column_id),$imageName);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\media  $media
     * @return \Illuminate\Http\Response
     */
    public function show(media $media)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\media  $media
     * @return \Illuminate\Http\Response
     */
    public function edit(media $media)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\media  $media
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, media $media)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\media  $media
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        //return $request->all();
         $invoices = media::findOrFail($request->media_id);
        $invoices->delete();
        Storage::disk('public_uploads')->delete($request->id_emp.'/'.$request->file_name);
        session()->flash('delete', 'تم حذف المرفق بنجاح');
        return back();
    }

    public function open_file($id, $file_name)
    {

        $files = Storage::disk('public_uploads')->getDriver()->getAdapter()->applyPathPrefix($id.'/'.$file_name);
        return response()->file($files);

    }

    public function download($id, $file_name)
    {

        $files = Storage::disk('public_uploads')->getDriver()->getAdapter()->applyPathPrefix($id.'/'.$file_name);
        return response()->download($files);


    }
}
