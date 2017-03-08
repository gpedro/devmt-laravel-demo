<?php

namespace App\Http\Controllers;

use App\Http\Requests\MafagafoStoreRequest;
use App\Http\Requests\MafagafoUpdateRequest;
use App\Mafagafo;

class MafagafoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mafagafos = Mafagafo::paginate();
        return view('mafagafo.index', compact('mafagafos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mafagafo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(MafagafoStoreRequest $request)
    {
        $mafagafo = Mafagafo::create($request->all());
        $mafagafo->save();

        return redirect()->route('mafagafo.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mafagafo = Mafagafo::find($id);
        if ($mafagafo) {
            return view('mafagafo.show', compact('mafagafo'));
        }

        return redirect()->route('mafagafo.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mafagafo = Mafagafo::find($id);
        if ($mafagafo) {
            return view('mafagafo.edit', compact('mafagafo'));
        }

        return redirect()->route('mafagafo.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(MafagafoUpdateRequest $request, $id)
    {
        $mafagafo = Mafagafo::find($id);
        if (!$mafagafo) return redirect()->route('mafagafo.index');

        $mafagafo->fill($request->all());
        $mafagafo->save();

        return redirect()->route('mafagafo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mafagafo = Mafagafo::find($id);
        if (!$mafagafo) return redirect()->route('mafagafo.index');

        $mafagafo->delete();
        return redirect()->route('mafagafo.index');
    }
}
