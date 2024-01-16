<?php

namespace App\Http\Controllers;

use App\Models\Itemgroup;
use Illuminate\Http\Request;

class ItemgroupController extends Controller
{
    public function index()
    {

        $groups = Itemgroup::all();
        return view("group.index", compact("groups"));
    }
    public function show($id)
    {
        $group = Itemgroup::with("items")->find($id);
        return view("group.show", compact("group"));
    }


    public function create()
    {

        return redirect()->route("group.index");
    }

    public function store(Request $request)
    {
        Itemgroup::create([
            "title" => $request->title
        ]);
        return redirect()->route("group.index");
    }
    public function edit($id)
    {
        $group = Itemgroup::find($id);
        return view("group.edit", compact("group"));
    }
    public function update($id, Request $request)
    {
        Itemgroup::find($id)->update([
            "title" => $request->title
        ]);

        return redirect()->route("group.index");
    }
    public function destroy($id)
    {
        Itemgroup::find($id)->delete();

        return redirect()->route("group.index");
    }
}
