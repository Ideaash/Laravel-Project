<?php

namespace App\Http\Controllers;
use App\Models\Evenement;
use Illuminate\Http\Request;

class EvenementController extends Controller
{
    public function index()
    {
        $evenement = Evenement::all();
      return view ('evenement.index')->with('evenement', $evenement);
    }
 
    
    public function create()
    {
        return view('evenement.create');
    }
 
  
    public function store(Request $request)
    {
        $input = $request->all();
        Evenement::create($input);
        return redirect('evenement')->with('flash_message', 'evenement Addedd!');  
    }
 
    
    public function show($id)
    {
        $evenement = Evenement::find($id);
        return view('evenement.show')->with('evenement', $evenement);
    }
 
    
    public function edit($id)
    {
        $evenement = Evenement::find($id);
        return view('evenement.edit')->with('evenement', $evenement);
    }
 
  
    public function update(Request $request, $id)
    {
        $evenement = Evenement::find($id);
        $input = $request->all();
        $evenement->update($input);
        return redirect('evenement')->with('flash_message', 'evenement Updated!');  
    }
 
  
    public function destroy($id)
    {
        Evenement::destroy($id);
        return redirect('evenement')->with('flash_message', 'evenement deleted!');  
    }
    
}
