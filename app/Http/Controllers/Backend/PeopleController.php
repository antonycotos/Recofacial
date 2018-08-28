<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PeopleStoreRequest;
use App\Http\Requests\PeopleUpdateRequest;
use App\People;
use App\Nationality;
use App\Biophoto;

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
        $people = People::orderBy('id', 'DESC')->paginate();
     
        return view('backend.people.index', compact('people'));
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
        $biophotos = Biophoto::orderBy('file', 'ASC')->pluck('file', 'id');
        
    return view('backend.people.create', compact('nationalities', 'biophotos'));
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
        $people = People::create($request->all());
        //nationalities
        $people->nationalities()->attach($request->get('nationalities'));

        //boiphotos
        $people->biophotos()->attach($request->get('biophotos'));        

        return redirect()->route('people.edit', $people->id)
        ->with('info', 'Trabajador registrado con éxito');
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
        $people = People::find($id);

        return view('backend.people.show', compact('people'));
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
        $nationalities = Nationality::orderBy('pais', 'ASC')->pluck('pais', 'id');
        $biophotos = Biophoto::orderBy('file', 'ASC')->pluck('file', 'id');

        $people = People::find($id);

    return view('backend.people.edit', compact('people', 'nationalities', 'biophotos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PeopleUpdateRequest $request, $id)
    {
        //actualiza el formulario de edicion
        $people = People::find($id);

        $people->fill($request->all())->save();

        $people->nationalities()->sync($request->get('nationalities'));

        $people->biophotos()->sync($request->get('biophotos'));   

    return redirect()->route('people.edit', $people->id)
        ->with('info', 'Trabajador actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $people = People::find($id)->delete();

    return back()->with('info', 'Eliminada correctamente');
    }
}
