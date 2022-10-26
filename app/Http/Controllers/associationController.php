<?php

namespace App\Http\Controllers;
use App\Models\association;
use Illuminate\Http\Request;
use App\Http\Requests\ModuleRequest;
class associationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $association = association::all();
        $association = association::paginate(2);
        return view ('association.index')->with('association', $association);

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
$request->validate([
        'name'=>'required',
        'numero'=>'required',
        'adresse'=>'required',
        'description'=>'required',

],[
    'name.required' => 'name is required',
    'numero.required' => 'numero is required'
]);
        $input = $request->all();
        association::create($input);
        return redirect('association')->with('flash_message', 'association Addedd!');  
    }

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
 
  
    public function update(Request $request, $id)
    {
      
        $association = association::find($id);
        $input = $request->all();
        $association->update($input);
        return redirect('association')->with('flash_message', 'association Updated!');  
    }
 
  
    public function destroy($id)
    {
        association::destroy($id);
        return redirect('association')->with('flash_message', 'association deleted!');  
    }
    
}
