<?php

namespace App\Http\Controllers\salary;

use App\Http\Controllers\Controller;
use App\Models\salary\Chart;
use App\Models\salary\Structure;
use Illuminate\Http\Request;

class StructureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {


        $charts = Chart::orderBy('nature')
            ->get();
        return view('salary.structure-add', ['charts' => $charts]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
//       $request->validate([
//           'name'=>['required'],
//           'description'=>['required'],
//          'amount'=>['required'],
//       ]);

        $structure = Structure::create([
            'name' => $request->name,
            'description' => $request->description,
            'status' => 'active',
        ]);
        $id = $structure->id;

        foreach ($request->amounts as $amount) {



        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Structure $structure)
    {
        return view('salary.structure', ['structures' => Structure::orderBy('id', 'desc')->paginate(10)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Structure $structure)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Structure $structure)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Structure $structure)
    {
        //
    }
}
