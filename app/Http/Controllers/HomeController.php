<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filteredDate = $request->has('date') ? $request->date : date('Y-m-d');
        $tasks = Task::whereDate('due_date', $filteredDate)->get();
        $carbonDate = Carbon::createFromDate($filteredDate);
        $date_as_string = $carbonDate->translatedFormat('d').' de '.ucfirst($carbonDate->translatedFormat('M'));
        $date_prev_button = $carbonDate->addDay(-1)->format('Y-m-d');
        $date_next_button = $carbonDate->addDay(2)->format('Y-m-d');

        return view('home', [
            'tasks' => $tasks,
            'date_as_string' => $date_as_string,
            'date_prev_button' => $date_prev_button,
            'date_next_button' => $date_next_button,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
