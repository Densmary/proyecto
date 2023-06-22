<?php

namespace App\Http\Controllers;

use App\Mold;
use Illuminate\Http\Request;

/**
 * Class MoldController
 * @package App\Http\Controllers
 */
class MoldController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $molds = Mold::paginate();

        return view('mold.index', compact('molds'))
            ->with('i', (request()->input('page', 1) - 1) * $molds->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mold = new Mold();
        return view('mold.create', compact('mold'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Mold::$rules);

        $mold = Mold::create($request->all());

        return redirect()->route('molds.index')
            ->with('success', 'Mold created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mold = Mold::find($id);

        return view('mold.show', compact('mold'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mold = Mold::find($id);

        return view('mold.edit', compact('mold'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Mold $mold
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mold $mold)
    {
        request()->validate(Mold::$rules);

        $mold->update($request->all());

        return redirect()->route('molds.index')
            ->with('success', 'Mold updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $mold = Mold::find($id)->delete();

        return redirect()->route('molds.index')
            ->with('success', 'Mold deleted successfully');
    }
}
