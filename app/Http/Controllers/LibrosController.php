<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Libro;
use Illuminate\Http\Request;

class LibrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $libros = Libro::where('Foto', 'LIKE', "%$keyword%")
                ->orWhere('Nombre', 'LIKE', "%$keyword%")
                ->orWhere('Genero', 'LIKE', "%$keyword%")
                ->orWhere('Pais', 'LIKE', "%$keyword%")
                ->orWhere('Autor', 'LIKE', "%$keyword%")
                ->orWhere('Fecha', 'LIKE', "%$keyword%")
                ->orWhere('Libro', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $libros = Libro::latest()->paginate($perPage);
        }

        return view('libros.index', compact('libros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('libros.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
                if ($request->hasFile('Foto')) {
            $requestData['Foto'] = $request->file('Foto')
                ->store('uploads', 'public');
        }
        if ($request->hasFile('Libro')) {
            $requestData['Libro'] = $request->file('Libro')
                ->store('uploads', 'public');
        }

        Libro::create($requestData);

        return redirect('libros')->with('flash_message', 'Libro added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $libro = Libro::findOrFail($id);

        return view('libros.show', compact('libro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $libro = Libro::findOrFail($id);

        return view('libros.edit', compact('libro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
                if ($request->hasFile('Foto')) {
            $requestData['Foto'] = $request->file('Foto')
                ->store('uploads', 'public');
        }
        if ($request->hasFile('Libro')) {
            $requestData['Libro'] = $request->file('Libro')
                ->store('uploads', 'public');
        }

        $libro = Libro::findOrFail($id);
        $libro->update($requestData);

        return redirect('libros')->with('flash_message', 'Libro updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Libro::destroy($id);

        return redirect('libros')->with('flash_message', 'Libro deleted!');
    }
}
