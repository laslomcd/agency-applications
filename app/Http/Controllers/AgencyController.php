<?php

namespace App\Http\Controllers;

use App\Models\Agency;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use function compact;
use function dd;
use function view;

class AgencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index()
    {
        $agencies = Agency::all();
        return view('home', compact('agencies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        echo 'create';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Agency $agency
     * @return Application|Factory|View|Response
     */
    public function show(Agency $agency)
    {
        $applications = Agency::with('applications')->get();
        return view('apps', compact('agency','applications'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Agency $agency
     * @return Response
     */
    public function edit(Agency $agency)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param Agency $agency
     * @return Response
     */
    public function update(Request $request, Agency $agency)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Agency $agency
     * @return Response
     */
    public function destroy(Agency $agency)
    {
        //
    }
}
