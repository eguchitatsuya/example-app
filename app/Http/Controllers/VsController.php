<?php

namespace App\Http\Controllers;

use App\Models\Vs;
use Illuminate\Http\Request;

class VsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vs = Vs::all();
        return view('vs/index', ['vs' => $vs]);
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('vs/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
              // 新しい Item を作成
      $item = new Vs();
      // フォームから送られてきたデータをそれぞれ代入
      $item->title = $request->title;
      // データベースに保存
      $item->save();
      // indexページへ遷移
      return redirect('/vs');
    }

    /**
     * Display the specified resource.
     */
    public function show(Vs $vs)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vs $vs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vs $vs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vs $vs)
    {
        //
    }
}
