<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gift;

class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        $gifts = Gift::all();
        return view('gifts.index', compact('gifts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     *
     */
    public function create()
    {
        return view('gifts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     */
    public function store(Request $request)
    {
        $formData = $request->all();

        $newgift = new Gift();
        $newgift->title = $formData['title'];
        $newgift->description = $formData['description'];
        $newgift->image = $formData['image'];
        $newgift->type = $formData['type'];
        $newgift->name = $formData['name'];
        $newgift->surname = $formData['surname'];
        $newgift->save();

        return redirect()->route('gifts.show', ['gift'=>$newgift->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     */
    public function show(Gift $gift)
    {
        return view('gifts.show', compact('gift'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     */
    public function edit(Gift $gift)
    {
        // $gift = Gift::find($id);
        return view('gifts.edit', compact('gift'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     *
     */
    public function update(Request $request, $id)
    {

        $gift = Gift::find($id);

        $formData = $request->all();

        $gift->title = $formData['title'];
        $gift->description = $formData['description'];
        $gift->image = $formData['image'];
        $gift->type = $formData['type'];
        $gift->name = $formData['name'];
        $gift->surname = $formData['surname'];
        $gift->update();

        return redirect()->route('gifts.show',  ['gift'=>$gift->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     */
    public function destroy($id)
    {
        $gift = Gift::find($id);
        $gift->delete();
        return redirect()->action([ResourceController::class, 'index']);
    }
}
