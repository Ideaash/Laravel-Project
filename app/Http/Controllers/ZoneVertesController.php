<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ZoneVertes; 
class ZoneVertesController extends Controller
{
    
    public function index()
    {
        $ZoneVertes = ZoneVertes::all();
        return view ('welcome')->with('ZoneVertes', $ZoneVertes);

     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('zoneVertes.create');
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
        ZoneVertes::create($input);
        return redirect('zoneVertes')->with('flash_message', 'zonez Verte Addedd!');      }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ZoneVertes = ZoneVertes::find($id);
        return view('zoneVertes.show')->with('ZoneVertes', $ZoneVertes);
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ZoneVertes = ZoneVertes::find($id);
        return view('zoneVertes.edit')->with('ZoneVertes', $ZoneVertes);
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
        $ZoneVertes = ZoneVertes::find($id);
        $input = $request->all();
        $ZoneVertes->update($input);
        return redirect('zoneVertes')->with('flash_message', 'zones Vertes Updated!');     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ZoneVertes::destroy($id);
        return redirect('zoneVertes')->with('flash_message', 'ZoneVertes deleted!');    }
}
