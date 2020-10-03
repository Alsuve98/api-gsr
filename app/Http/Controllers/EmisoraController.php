<?php

namespace App\Http\Controllers;

use App\Models\Emisora;
use Illuminate\Http\Request;

class EmisorasController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
        return Emisora::all();
    }

    public function show($id)
    {
        return Emisora::findOrFail($id);
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'nombre_comercial' => 'required'
        ]);

        return Emisora::create($data);
    }

    public function update(Request $request, $id)
    {
        $data = $this->validate($request, [
            'nombre_comercial' => 'required'
        ]);

        return Emisora::findOrFail($id)->fill($data)->save();
    }

    public function destroy($id)
    {
        return Emisora::findOrFail($id)->delete();
    }
}
