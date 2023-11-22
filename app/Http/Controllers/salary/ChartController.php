<?php

namespace App\Http\Controllers\salary;

use App\Http\Controllers\Controller;
use App\Models\salary\Chart;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('salary.chart-add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>['required','min:5'],
            'code'=>['required','min:3'],
            'nature'=>['required'],
        ]);

        Chart::create([
            'name'=>$request->name,
            'code'=>$request->code,
            'nature'=>$request->nature,
        ]);

        return redirect('/salary/chart')->with('chart Added Successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(Chart $chart)
    {
        return view('salary.charts',[
            'charts'=>Chart::orderBy('id','desc')->paginate(10),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Chart $chart)
    {
        return view('salary.chart-edit',['charts'=>$chart]);
    }

    /**
     * Show the form for Deleting the specified resource.
     */
    public function delete(Chart $chart)
    {
        return view('salary.chart-delete',['charts'=>$chart]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Chart $chart): RedirectResponse
    {
        $chart->update([
            'name'=>$request->name,
            'code'=>$request->code,
            'nature'=>$request->nature,
        ]);
        return redirect('/salary/chart')->with('chart update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Chart $chart)
    {
        $chart->delete();

        return redirect('/salary/chart')
            ->with('chart Deleteed Successfully');
    }
}
