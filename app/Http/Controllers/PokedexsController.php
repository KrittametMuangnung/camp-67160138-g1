<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pokedexs;

class PokedexsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['pokedexs'] = Pokedexs::all();
        return view('pokedexs.index', $data);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // use App\Models\Pokedexs; ใส่ข้างบนก่อน

        $pokedexs = new Pokedexs;
        $pokedexs->name = $request->input('name');
        $pokedexs->type = $request->input('type');
        $pokedexs->species = $request->input('species');
        $pokedexs->height = $request->input('height');
        $pokedexs->weight = $request->input('weight');
        $pokedexs->hp = $request->input('hp');
        $pokedexs->attack = $request->input('attack');
        $pokedexs->defense = $request->input('defense');
        $pokedexs->image_url = $request->input('image_url');
        $pokedexs->save();

        return redirect('/pokedexs');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['Pokedexs_update'] = Pokedexs::find($id);
        $data['pokedexs'] = Pokedexs::all();

        return view('Pokedexs.update', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

        $pokedexs = Pokedexs::find($id);

        if (!$pokedexs) {

        return redirect('/pokedexs')->with('error', 'ไม่พบข้อมูล');

        }

        $pokedexs->name = $request->input('name');
        $pokedexs->type = $request->input('type');
        $pokedexs->species = $request->input('species');
        $pokedexs->height = $request->input('height');
        $pokedexs->weight = $request->input('weight');
        $pokedexs->hp = $request->input('hp');
        $pokedexs->attack = $request->input('attack');
        $pokedexs->defense = $request->input('defense');
        $pokedexs->image_url = $request->input('image_url');
        $pokedexs->save();

        return redirect('/pokedexs');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $pokedexs = Pokedexs::find($id);
        $pokedexs->delete();

        // เพิ่มคำสั่งนี้เพื่อ Reset ID ให้กลับไปเรียงจากค่าสูงสุดที่มีอยู่
        // หรือถ้าลบจนหมด จะกลับไปเริ่มที่ 1

        $max = \DB::table('pokedexs')->max('id') + 1;
        \DB::statement("ALTER TABLE pokedexs AUTO_INCREMENT = $max");

        return redirect('/pokedexs');
    }
}
