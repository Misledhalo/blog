<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Serie;
use Illuminate\Http\Request;

class SerieController extends Controller
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
            $serie = Serie::where('Foto', 'LIKE', "%$keyword%")
                ->orWhere('Nombre', 'LIKE', "%$keyword%")
                ->orWhere('Genero', 'LIKE', "%$keyword%")
                ->orWhere('Pais', 'LIKE', "%$keyword%")
                ->orWhere('Lenguaje', 'LIKE', "%$keyword%")
                ->orWhere('Fecha', 'LIKE', "%$keyword%")
                ->orWhere('Temporadas', 'LIKE', "%$keyword%")
                ->orWhere('Capitulos', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $serie = Serie::latest()->paginate($perPage);
        }

        return view('serie.index', compact('serie'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('serie.create');
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

        Serie::create($requestData);

        return redirect('serie')->with('flash_message', 'Serie added!');
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
        $serie = Serie::findOrFail($id);

        return view('serie.show', compact('serie'));
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
        $serie = Serie::findOrFail($id);

        return view('serie.edit', compact('serie'));
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

        $serie = Serie::findOrFail($id);
        $serie->update($requestData);

        return redirect('serie')->with('flash_message', 'Serie updated!');
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
        Serie::destroy($id);

        return redirect('serie')->with('flash_message', 'Serie deleted!');
    }
}
