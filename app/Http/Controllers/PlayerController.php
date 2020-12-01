<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Player;
class PlayerController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Player::with(['team', 'user'])->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $player = new Player;
        $player-> first_name = request('first_name');
        $player-> last_name = request('last_name');
        $player-> ref_team_id = request('ref_team_id');
        $player-> ref_user_id = request('ref_user_id');
        $player->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function show(Player $id)
    {
        return (Player::find($id));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Player $id)
    {
        $player = Player::find('$id');
        $player-> name = request('name');
        //$player-> age = request('age');
        //$player-> gender = request('gender');
        $player-> ref_team_id = request('ref_team_id');
        $player-> ref_user_id = require('ref_user_id');
        $player->save();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function destroy(Player $player)
    {
        Player::find($player->id)->delete();
    }
}