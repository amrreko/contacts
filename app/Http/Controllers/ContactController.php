<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $contacts = Contact::latest()->paginate(5);
        return view('contacts.index', compact('contacts'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('contacts.create');

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
        $request->validate([
            'fullname'    =>  'required',
            'image'         =>  'image|max:2048'
        ]);

        if($request->image) {
            $image = $request->file('image');

        $request->image = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $request->image);
        }
        Contact::create($request->all());

        return view('contacts.index')->with('success', 'Data Added Successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
        return view('contacts.show',compact('contact',$contact));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
        return view('contacts.edit',compact('contact',$contact));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
        $request->validate([
            'fullname'    =>  'required',
            'image'         =>  'image|max:2048'
        ]);

        if($request->image) {
            $image = $request->file('image');

            $request->image = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $request->image );
        }
        $contact->update($request->all());
        return redirect('/contacts')->with('success', 'Contact updated!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
        $contact->delete();
        return redirect('contacts.index')->with('success', 'Data Deleted Successfully.');


    }
}
