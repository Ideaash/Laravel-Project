<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adherent;

class AdherentController extends Controller
{
 
    public function index()
    {
        $adherents = Adherent::all();
      return view ('adherents.index')->with('adherents', $adherents);
    }
 
    
    public function create()
    {
        return view('adherents.create');
    }
 
  
    public function store(Request $request)
    {
        $input = $request->all();
        Adherent::create($input);
        return redirect('adherent')->with('flash_message', 'Adherent Addedd!');  
    }
 
    
    public function show($id)
    {
        $Adherent = Adherent::find($id);
        return view('adherents.show')->with('adherents', $Adherent);
    }
 
    
    public function edit($id)
    {
        $Adherent = Adherent::find($id);
        return view('adherents.edit')->with('adherents', $Adherent);
    }
 
  
    public function update(Request $request, $id)
    {
        $Adherent = Adherent::find($id);
        $input = $request->all();
        $Adherent->update($input);
        return redirect('adherent')->with('flash_message', 'Adherent Updated!');  
    }
 
  
    public function destroy($id)
    {
        Adherent::destroy($id);
        return redirect('adherent')->with('flash_message', 'Adherent deleted!');  
    }
}