<?php

namespace App\Http\Controllers\Api;

use App\Models\Bread;
use App\Http\Resources\Bread as ResourcesBread;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BreadController extends Controller
{
    public function index()
    {
        $breads = Bread::all();
        return ResourcesBread::collection($breads);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $bread = Bread::create($request->all());
        return new ResourcesBread($bread);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Bread::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $bread = Bread::find($id);
        $bread->update($request->all());
        return $bread;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return Bread::destroy($id);
    }
}