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
        $Schedule = new Schedule;
        $Schedule-> name = request('name');
        $Schedule->save();
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
    public function update(Request $request, Schedule $id)
    {
        $schedule = Schedule::find('$id');
        $schedule-> name = request('name');


        $schedule->save();


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Schedule  $Schedule
     * @return \Illuminate\Http\Response
     */
    public function destroy(Schedule $schedule)
    {
        Schedule::find($schedule->id)->delete();
    }
}