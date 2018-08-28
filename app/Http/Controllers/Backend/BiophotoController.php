<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\BiophotoStoreRequest;
use App\Http\Requests\BiophotoUpdateRequest;
use App\Biophoto;

class BiophotoController extends Controller
{
    
    public function __construct(){
        //porteccion se necesita iniciar secion para ver los metodos
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resxource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //listar
        $biophotos = Biophoto::orderBy('id', 'DESC')->paginate();

        //dd($category);
        return view('backend.biophoto.index', compact('biophotos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //ver formulario de creacion
        return view('backend.biophoto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BiophotoStoreRequest $request)
    {
        //salva formulario de creacion
        $biophoto = Biophoto::create($request->all());

         //imagen
        if($request->file('file')){
            $path = Storage::disk('public')->put('image', $request->file('file'));
            $biophoto->fill(['file' => asset($path)])->save();
        }

        return redirect()->route('biophotos.edit', $biophoto->id)
        ->with('info', 'Tipo de biophoto creado con exito');
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
        $biophoto = Biophoto::find($id);

        return view('backend.biophoto.show', compact('biophoto'));
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
        $biophoto = Biophoto::find($id);

        return view('backend.biophoto.edit', compact('biophoto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BiophotoUpdateRequest $request, $id)
    {
        //actualiza el formulario de edicion
        $biophoto = Biophoto::find($id);

        $biophoto->fill($request->all())->save();

           //imagen
        if($request->file('file')){
            $path = Storage::disk('public')->put('image', $request->file('file'));
            $biophoto->fill(['file' => asset($path)])->save();
        }
        
        return redirect()->route('biophoto.edit', $biophoto->id)
        ->with('info', 'Tipo de biophoto actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $biophoto = Biophoto::find($id)->delete();

        return back()->with('info', 'Eliminada correctamente');
    }
}
