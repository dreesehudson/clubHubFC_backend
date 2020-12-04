<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Scheduler;
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
        $schedule = new Scheduler;
        $schedule-> date = request('date');
        $schedule-> home_team_id = request('home_team_id');
        $schedule-> away_team_id = request('away_team_id');
        $schedule-> time = request('time');
        $schedule->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Scheduler  $Schedule
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Scheduler::find($id);
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
        $schedule = Scheduler::updateOrCreate(
            ['id'=> request('id')],
            ['date' => request('date'),        
            'home_team_id' => request('home_team_id'),
            'away_team_id' => request('away_team_id'),
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