<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Models\User;
use Illuminate\Http\Request;


class ClubController extends Controller
{

    public function index()
    {
        $clubs = response()->json(Club::all());
        return $clubs;
    }

    public function show($id)
    {
        $clubs = response()->json(Club::find($id));
        return $clubs;
    }

    public function destroy($id)
    {
        Club::find($id)->delete();
        return redirect('/club/list');
    }

    public function store(Request $request)
    {
        $club = new Club();
        $club->establishment = $request->establishment;
        $club->location = $request->location;
        $club->max_number = $request->max_number;
        $club->save();
        return redirect('/club/list');
    }

    public function update(Request $request, $id)
    {
        $club = Club::find($id);
        $club->establishment = $request->establishment;
        $club->location = $request->location;
        $club->max_number = $request->max_number;
        $club->save();
        return redirect('/club/list');
    }

    public function newView()
    {
        //$users = User::all();
        return view('club.new'/*, ['users' => $users] */);
    }

    public function editView($id)
    {
        //$users  = User::all();
        $club = Club::find($id);
        return view('club.edit', ['club' => $club]);
    }
    public function listview()
    {
        $clubs = Club::all();
        return view('club.list', ['clubs' => $clubs]);
    }

    public function deleteView()
    {
        $club = Club::all();
        return view("club.delete", ["clubs" => $club]);
    }
}
