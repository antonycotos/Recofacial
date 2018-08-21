<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\NationalityStoreRequest;
use App\Http\Requests\NationalityUpdateRequest;
use App\Nationality;

class NationalityController extends Controller
{
    // public function __construct(){
    //     //porteccion se necesita iniciar secion para ver los metodos
    //     $this->middleware('auth');
    // }

    /**
     * Display a listing of the resxource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //listar
        $nationalities = Nationality::orderBy('id', 'DESC')->paginate();

        //dd($category);
        return view('backend.nationality.index', compact('nationalities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //ver formulario de creacion
        return view('backend.nationality.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NationalityStoreRequest $request)
    {
        //salva formulario de creacion
        $nationality = Nationality::create($request->all());

        return redirect()->route('nationality.edit', $nationality->id)
        ->with('info', 'Nacionalidad creada con exito');
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
        $nationality = Nationality::find($id);

        return view('backend.nationality.show', compact('nationality'));
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
        $nationality = Nationality::find($id);

        return view('backend.nationality.edit', compact('nationality'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NationalityUpdateRequest $request, $id)
    {
        //actualiza el formulario de edicion
        $nationality = Nationality::find($id);

        $nationality->fill($request->all())->save();

        return redirect()->route('nationality.edit', $nationality->id)
        ->with('info', 'Nacionalidad actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nationality = Nationality::find($id)->delete();

        return back()->with('info', 'Eliminada correctamente');
    }
}
