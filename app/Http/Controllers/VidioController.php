<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\VidoModel;
use Illuminate\Http\Request;

class VidioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = VidoModel::OrderBy('id', 'DESC')->get();
        return view('admin.vidios.index', [
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
        return view('admin.vidios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new VidoModel();

        $data->name = $request->name;

        $url = $request->url;
        $youtube = "https://www.youtube.com/embed/";

        for ( $i = strlen($url)-1; $i>0; $i-- ){
            if ($url[$i]=='/'){
                break;
            }
            $youtube.=$url[$i];
        }

        $data->url = $youtube;
        $data->save();
        return redirect(route('admin.vidios.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vidios = VidoModel::find($id);

        return view('admin.vidios.edit', [
            'data' => $vidios,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $vidios = VidoModel::find($id);

        $vidios->name = $request->name;
        if ($request->url != null) {

            $vidios->url = $request->url;

        }
        $vidios->save();
        return redirect(route('admin.vidios.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vidios = VidoModel::find($id);
        $vidios->delete();

        return redirect(route('admin.vidios.index'));
    }
}
