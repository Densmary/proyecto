<?php

namespace App\Http\Controllers;

use App\Sheet;
use Illuminate\Http\Request;

/**
 * Class SheetController
 * @package App\Http\Controllers
 */
class SheetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sheets = Sheet::paginate();

        return view('sheet.index', compact('sheets'))
            ->with('i', (request()->input('page', 1) - 1) * $sheets->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sheet = new Sheet();
        return view('sheet.create', compact('sheet'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Sheet::$rules);

        $sheet = Sheet::create($request->all());

        return redirect()->route('sheets.index')
            ->with('success', 'Chapa agregada.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sheet = Sheet::find($id);

        return view('sheet.show', compact('sheet'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sheet = Sheet::find($id);

        return view('sheet.edit', compact('sheet'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Sheet $sheet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sheet $sheet)
    {
        request()->validate(Sheet::$rules);

        $sheet->update($request->all());

        return redirect()->route('sheets.index')
            ->with('success', 'Chapa actualizada');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $sheet = Sheet::find($id)->delete();

        return redirect()->route('sheets.index')
            ->with('success', 'Chapa eliminada');
    }
}
