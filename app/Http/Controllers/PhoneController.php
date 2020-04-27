<?php

namespace App\Http\Controllers;

use App\Phone;
use Illuminate\Http\Request;
use App\Country;
use App\Name;
use App\Contact;
use App\Address;
use Session;
class PhoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $phones =  Phone::all();
        return view('phone.index', compact('phones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $names = Name::all();
        $contacts = Contact::all();
        return view('phone.create', compact('names', 'contacts'));
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
            'name_id' => 'required',
            'number' => 'required',
            'contact_id' => 'required'
        ]);

        Phone::create([
            'name_id' => $request->name_id,
            'number' => $request->number,
            'contact_id' => $request->contact_id,
        ]);

        Session::flash('success', 'Phone created successfully');
        return redirect()->route('phone.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Phone::destroy($id);
        return redirect()->route('phones.index');
    }
}
