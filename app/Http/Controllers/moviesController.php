<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\movie;
use Illuminate\Http\Request;

class moviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 5;

        if (!empty($keyword)) {
            $movies = movie::where('Foto', 'LIKE', "%$keyword%")
                ->orWhere('Nombre', 'LIKE', "%$keyword%")
                ->orWhere('Genero', 'LIKE', "%$keyword%")
                ->orWhere('Pais', 'LIKE', "%$keyword%")
                ->orWhere('Lenguage', 'LIKE', "%$keyword%")
                ->orWhere('Fecha', 'LIKE', "%$keyword%")
                ->orWhere('Correo', 'LIKE', "%$keyword%")
               
                ->latest()->paginate($perPage);
        } else {
            $movies = movie::latest()->paginate($perPage);
        }

        return view('movies.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('movies.create');
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

        movie::create($requestData);

        return redirect('movies')->with('flash_message', 'movie added!');
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
        $movie = movie::findOrFail($id);

        return view('movies.show', compact('movie'));
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
        $movie = movie::findOrFail($id);

        return view('movies.edit', compact('movie'));
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

        $movie = movie::findOrFail($id);
        $movie->update($requestData);

        return redirect('movies')->with('flash_message', 'movie updated!');
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
        movie::destroy($id);

        return redirect('movies')->with('flash_message', 'movie deleted!');
    }
}
