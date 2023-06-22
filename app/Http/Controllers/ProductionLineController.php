<?php

namespace App\Http\Controllers;

use App\ProductionLine;
use Illuminate\Http\Request;

/**
 * Class ProductionLineController
 * @package App\Http\Controllers
 */
class ProductionLineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productionLines = ProductionLine::paginate();

        return view('production-line.index', compact('productionLines'))
            ->with('i', (request()->input('page', 1) - 1) * $productionLines->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productionLine = new ProductionLine();
        return view('production-line.create', compact('productionLine'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(ProductionLine::$rules);

        $productionLine = ProductionLine::create($request->all());

        return redirect()->route('production-lines.index')
            ->with('success', 'ProductionLine created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $productionLine = ProductionLine::find($id);

        return view('production-line.show', compact('productionLine'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $productionLine = ProductionLine::find($id);

        return view('production-line.edit', compact('productionLine'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  ProductionLine $productionLine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductionLine $productionLine)
    {
        request()->validate(ProductionLine::$rules);

        $productionLine->update($request->all());

        return redirect()->route('production-lines.index')
            ->with('success', 'ProductionLine updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $productionLine = ProductionLine::find($id)->delete();

        return redirect()->route('production-lines.index')
            ->with('success', 'ProductionLine deleted successfully');
    }
}
