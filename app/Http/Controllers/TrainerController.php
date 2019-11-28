<?php

namespace App\Http\Controllers;
use App\Trainer;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
    /**
     * Lista todos los recursos.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainers= Trainer::All();
        return view('trainers.index',compact('trainers'));
    }

    /**
     * Muestra el formulario para crear un nuevo recurso.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $trainers= Trainer::All();
        return view('trainers.create');
    }

    /**
     * Almacena un recurso que se envió desde Create(por formulario)
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request->avatar;
       if($request->hasFile('avatar'))
        {   
            $file=$request->file('avatar');
            $name=time().$file->getClientOriginalName();//Da un nombre único con fecha
            $file->move(public_path().'/images/',$name);//Guarda el file en esa ruta
        }
        

       $trainer = new Trainer();
       $trainer->name=$request->input('name');
       $trainer->avatar=$name;
       $trainer->description=$request->input('description');
       $trainer ->save();
       return 'Guardado'.$trainer->name;
       //return redirect()->action('VideoController@index');  
    }

    /**
     * Muestra un recurso por su id.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Trainer $trainer)
    {
        //$trainer=Trainer::find($id);
              
      //  $trainer=Trainer::where('slug','=',$slug)->firstOrFail();
        return view('trainers.show',compact('trainer'));
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
        //
    }
}
