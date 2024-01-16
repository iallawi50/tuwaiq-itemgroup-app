<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Itemgroup;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {

        $items = Item::all();
        $groups = Itemgroup::all();
        return view("items.index", compact("items", "groups"));
    }
    public function store(Request $request)
    {
        Item::create([
            "title" => $request->title,
            "description" => $request->description,
            "price" => $request->price,
            "quantity" => $request->quantity,
            "group_id" => $request->group_id
        ]);

        return back();  
    }

    public function edit($id)
    {
        $item = Item::find($id);
        $groups = Itemgroup::all();
        return view("items.edit", compact("item", "groups"));
    }


    public function update($id, Request $request)
    {
        Item::find($id)->update([
            "title" => $request->title,
            "description" => $request->description,
            "price" => $request->price,
            "quantity" => $request->quantity,
            "group_id" => $request->group_id
        ]);

        return redirect()->route("items.index");
    }


    public function destroy($id)
    {
        Item::find($id)->delete();

        return redirect()->route("items.index");
    }
}
