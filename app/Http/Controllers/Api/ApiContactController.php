<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ContactResource;
use App\Models\ContactModel;
use Illuminate\Http\Request;

class ApiContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $message = ContactResource::collection(ContactModel::all());
        return response()->json($message);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $contact = ContactModel::create($request->all());


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $message = new ContactResource(ContactModel::findorFail($id));

        return response()->json($message);

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

        $message = ContactModel::find($id);

        $message->name = $request->name;
        $message->email = $request->email;
        $message->title = $request->title;
        $message->message = $request->message;

        $message->save();

        return response()->json($message);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contactModel = ContactModel::find($id);
        $contactModel->delete();

        return response(null, \Illuminate\Http\Response::HTTP_NO_CONTENT);

    }
}
