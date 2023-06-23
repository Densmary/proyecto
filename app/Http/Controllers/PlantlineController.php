<?php

namespace App\Http\Controllers;

use App\Plantline;
use Illuminate\Http\Request;

/**
 * Class PlantlineController
 * @package App\Http\Controllers
 */
class PlantlineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plantlines = Plantline::paginate();

        return view('plantline.index', compact('plantlines'))
            ->with('i', (request()->input('page', 1) - 1) * $plantlines->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $plantline = new Plantline();
        return view('plantline.create', compact('plantline'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Plantline::$rules);

        $plantline = Plantline::create($request->all());

        return redirect()->route('plantlines.index')
            ->with('success', 'Linea agregada con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $plantline = Plantline::find($id);

        return view('plantline.show', compact('plantline'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $plantline = Plantline::find($id);

        return view('plantline.edit', compact('plantline'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Plantline $plantline
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plantline $plantline)
    {
        request()->validate(Plantline::$rules);

        $plantline->update($request->all());

        return redirect()->route('plantlines.index')
            ->with('success', 'Linea actualizada con éxito');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $plantline = Plantline::find($id)->delete();

        return redirect()->route('plantlines.index')
            ->with('success', 'Linea eliminada con éxito');
    }
}
