<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use App\Models\Photo;
use App\Models\VidoModel;
use Illuminate\Http\Request;

class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Certificate::OrderBy('id', 'DESC')->get();
        return view('admin.Certificate.index', [
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
        return view('admin.Certificate.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Certificate();

        $data->name = $request->sertifikat_name;
        $rasm = $request->sertifikat;
        $rasmname = time().'.'.$rasm->getClientOriginalExtension();
        $request->sertifikat->move('sertifikat',$rasmname);
        $data->url = $rasmname;
        $data->save();
        return redirect(route('admin.sertifikat.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


   }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Certificate::find($id);

        return view('admin.Certificate.edit', [
            'data' => $data,
        ]);
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
        $data = Certificate::find($id);

        $data->name = $request->sertifikat_name;
        if ($request->url != null) {

            $data->url = $request->url;

        }
        $data->save();
        return redirect(route('admin.sertifikat.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vidios = Certificate::find($id);
        $vidios->delete();

        return redirect(route('admin.sertifikat.index'));
    }
}
