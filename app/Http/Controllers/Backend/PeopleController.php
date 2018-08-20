<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PeopleController extends Controller
{
            public function __construct(){
        //porteccion se necesita iniciar secion para ver los metodos
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //listar
        $peoples = Client::orderBy('id', 'DESC')->where('user_id', auth()->user()->id)->paginate();
     
        return view('backend.people.index', compact('peoples'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //ver formulario de creacion

        $nationalities = Nationality::orderBy('pais', 'ASC')->pluck('pais', 'id');
        $boiphotos = Boiphoto::orderBy('file', 'ASC')->pluck('file', 'id');
        //$tags = Tag::orderBy('name', 'ASC')->get();
        return view('backend.people.create', compact('nationalities', 'boiphotos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PeopleStoreRequest $request)
    {
        //salva formulario de creacion
people
        //tipoclients
        $people->tipoclients()->attach($request->get('tipoclients'));

        //tipodocs
        $people->boiphotos()->attach($request->get('boiphotos'));        

        return redirect()->route('people.edit', $people->id)
        ->with('info', 'people registrado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //detalle del registro en bd
        $client = Client::find($id);

        return view('backend.clients.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //ves formualrio de edicion
        $tipoclients = Tipoclient::orderBy('descripcion', 'ASC')->pluck('descripcion', 'id');
        $tipodocs = Tipodoc::orderBy('documento', 'ASC')->pluck('documento', 'id');
        //$tags = Tag::orderBy('name', 'ASC')->get();
        $client = Client::find($id);

        return view('backend.clients.edit', compact('client', 'tipoclients', 'tipodocs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ClientUpdateRequest $request, $id)
    {
        //actualiza el formulario de edicion
        $client = Client::find($id);

        $client->fill($request->all())->save();

        //tipoclients
        $client->tipoclients()->sync($request->get('tipoclients'));

        //tipodocs
        $client->tipodocs()->sync($request->get('tipodocs'));   
        
        //tags  $client->tags()->sync($request->get('tags'));

        return redirect()->route('clients.edit', $client->id)
        ->with('info', 'Publicación actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $client = Client::find($id)->delete();

        return back()->with('info', 'Eliminada correctamente');
    }
}
