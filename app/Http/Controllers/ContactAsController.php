<?php

namespace App\Http\Controllers;

use App\Models\Contact_as;
use App\Rules\ContactNumber;
use Illuminate\Http\Request;

class ContactAsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $contact_as=Contact_as::ORDERBY('id','desc')->get();
//dd($contacts_as);
        return view('admin.contact_as.index',['contacts_as'=>$contact_as]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.contact_as.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'phone'=>['required','numeric',new ContactNumber()],
            'address'=>'required',
            'email'=>'required',
            'lattitude'=>'required',
            'longitude'=>'required'
        ]);
        $contact=new Contact_as();
        $contact->phone=$request->phone;
        $contact->address=$request->address;
        $contact->email=$request->email;
        $contact->lattitude=$request->lattitude;
        $contact->longitude=$request->longitude;
        $contact->save();
        return  redirect()->route('admin.contact_as.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact_as  $contact_as
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact_as=Contact_as::findor($id);
        return view('admin.contact_as.show',[
            'contacts_as'=>$contact_as
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact_as  $contact_as
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact_as=Contact_as::findor($id);

        return view('admin.contact_as.edit',[
            'contacts_as'=>$contact_as
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact_as  $contact_as
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

        $request->validate([
            'phone'=>['required','numeric',new ContactNumber()],
            'address'=>'required',
            'email'=>'required',
            'lattitude'=>'required',
            'longitude'=>'required'
        ]);
        $contact=Contact_as::findor($id);
        $contact->phone=$request->phone;
        $contact->address=$request->address;
        $contact->email=$request->email;
        $contact->lattitude=$request->lattitude;
        $contact->longitude=$request->longitude;
        $contact->save();
        return  redirect()->route('admin.contact_as.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact_as  $contact_as
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact_as=Contact_as::find($id);
        $contact_as->delete();
        return redirect()->route('admin.contact_as.index');
    }
}
