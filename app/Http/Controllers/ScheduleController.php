<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Schedule;
class ScheduleController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Schedule::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $schedule = new Schedule;
        $schedule-> date = request('date');
        $schedule-> ref_home_team_id = request('ref_home_team_id');
        $schedule-> ref_away_team_id = request('ref_away_team_id');
        $schedule-> time = request('time');
        $schedule->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Schedule  $Schedule
     * @return \Illuminate\Http\Response
     */
    public function show(Schedule $id)
    {
        return Schedule::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Schedule  $Schedule
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $schedule = Schedule::updateOrCreate(
            ['id'=> request('id')],
            ['date' => request('date'),        
            'ref_home_team_id' => request('ref_home_team_id'),
            'ref_away_team_id' => request('ref_away_team_id'),
            'time' =>request('time')]
        );

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Schedule  $Schedule
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Schedule::find($id)->delete();
    }
}