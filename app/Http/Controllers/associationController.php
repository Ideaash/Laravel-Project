<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\association; 
class associationController extends Controller
{
    
    public function index()
    {
        $association = association::all();
        return view ('welcomeas')->with('association', $association);

     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('association.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        association::create($input);
        return redirect('association')->with('flash_message', 'association Addedd!');      }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $association = association::find($id);
        return view('association.show')->with('association', $association);
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $association = association::find($id);
        return view('association.edit')->with('association', $association);
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
        $association = association::find($id);
        $input = $request->all();
        $association->update($input);
        return redirect('association')->with('flash_message', 'association Updated!');     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        association::destroy($id);
        return redirect('association')->with('flash_message', 'association deleted!');    }
}
