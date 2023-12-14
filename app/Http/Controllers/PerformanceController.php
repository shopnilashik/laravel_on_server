<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Performance;

class PerformanceController extends Controller
{
    //

    public function adding(Request $request) {
        $items=new Performance();
        $items->date=$request->date;
        $items->memoryUsage=$request->memoryUsage;
        $items->diskUsage=$request->diskUsage;
        $items->cpuUsage=$request->cpuUsage;
        $items->version=$request->version;

        $items->save();
    }


    public function getData()
    {
        $items = Performance::all();

        return response()->json($items);
    }
}
