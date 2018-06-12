<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|unique:team',
            'description' => 'required',
        ]);

        Team::create([
            'name'        => $request->input('name'),
            'description' => $request->input('description'),
            'sort_order'  => Team::count(),
        ]);

        return redirect(route('dashboard.team'));
    }

    public function update_sortorder(Request $request)
    {
        $id = explode(',', $request->input('sort_order'));
        for ($i = 0; $i < count($id); $i++) {
            Team::where('id', $id[$i])
                ->update(['sort_order' => $i]);
        }

        return redirect(route('dashboard.team'));
    }

    public function destroy($id)
    {
        Team::where('id', $id)
            ->firstOrFail()
            ->delete();

        return redirect(route('dashboard.team'));
    }
}
