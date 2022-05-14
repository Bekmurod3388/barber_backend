<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Services;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = Photo::OrderBy('id', 'DESC')->get();
        return view('admin.photo.index', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.photo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Photo();

        $data->name = $request->photo_name;
        $rasm = $request->photo;
        $rasmname = time().'.'.$rasm->getClientOriginalExtension();
        $request->photo->move('photo',$rasmname);
        $data->url = $rasmname;
        $data->save();
        return redirect(route('admin.photo.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $photo=Photo::find($id);
        return view('admin.photo.show',[
           'photo'=>$photo
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=Photo::find($id);
        return view('admin.photo.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Photo::find($id);
        $data->name = $request->photo_name;

        if ($request->photo!=null) {
            $rasm = $request->photo;
            $rasmname = time().'.'.$rasm->getClientOriginalExtension();
            $request->photo->move('photo',$rasmname);
            $data->url = $rasmname;
        }

        $data->save();
        return redirect(route('admin.photo.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Photo::find($id);
        $data->delete();
 return redirect(route('admin.photo.index'));

    }
}
