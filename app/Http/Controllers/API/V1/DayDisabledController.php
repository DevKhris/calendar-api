<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Calendar\DayDisabled;

class DayDisabledController extends Controller
{
    protected $daydisabled;

    public function __construct(DayDisabled $daydisabled)
    {
        $this->daydisabled = $daydisabled;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json($this->daydisabled->with(['calendar'])->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $result = $this->daydisabled($request->all());
        return response()->json($result);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *
     */
    public function show($id)
    {
        return response()->json($this->daydisabled->with(['calendar'])->where('id', $id)->firstOrFail());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $daydisabled = $this->daydisabled->where('id', $id)->firstOrFail();
        $result = $daydisabled->update($request->all());
        return response()->json($result);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = $this->daydisabled->destroy($id);
        return response()->json($result);
    }
}
