<?php

namespace App\Http\Controllers;

use App\Departure;
use Illuminate\Http\Request;

/**
 * Class DepartureController
 * @package App\Http\Controllers
 */
class DepartureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departures = Departure::paginate();

        return view('departure.index', compact('departures'))
            ->with('i', (request()->input('page', 1) - 1) * $departures->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departure = new Departure();
        return view('departure.create', compact('departure'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Departure::$rules);

        $departure = Departure::create($request->all());

        return redirect()->route('departures.index')
            ->with('success', 'Departure created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $departure = Departure::find($id);

        return view('departure.show', compact('departure'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $departure = Departure::find($id);

        return view('departure.edit', compact('departure'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Departure $departure
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Departure $departure)
    {
        request()->validate(Departure::$rules);

        $departure->update($request->all());

        return redirect()->route('departures.index')
            ->with('success', 'Departure updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $departure = Departure::find($id)->delete();

        return redirect()->route('departures.index')
            ->with('success', 'Departure deleted successfully');
    }
}
