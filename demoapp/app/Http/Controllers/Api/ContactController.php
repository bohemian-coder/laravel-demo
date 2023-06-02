<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = \App\Models\Contact::select(['id', 'name', 'email'])->get();
        if(!empty($contacts)){
            return response()->json([
                'status' => 1,
                'contacts' => $contacts,
            ]);
        }
        return response()->json([
            'status' => 0
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->has(['name', 'email'])){
            $contact = new \App\Models\Contact;
            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->save();
            return response()->json([
                'status' => 1,
                'contact' => $contact,
            ]);
        }
        return response()->json([
            'status' => 0
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
