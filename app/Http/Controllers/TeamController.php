<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Team;
class TeamController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Team::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $team = new Team;
        $team-> name = request('name');
        $team-> color = request('color');
        $team-> practice_night = request('practice_night');
        $team->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $id)
    {
        return Team::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $team = Team::find($id);
        $team-> name = request('name');
        $team-> color = request('color');
        $team-> practice_night = request('practice_night');

        $team->save();


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Team::find($id)->delete();
    }
}