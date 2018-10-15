<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{


    public function __construct(ImageRepository $repository)
        {
            $this->repository = $repository;
            $this->middleware('ajax')->only('destroy');
        }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Application $app)
{
    $maintenance = $app->isDownForMaintenance();
    $ipChecked = true;
    $ip = $request->ip();
    if($maintenance) {
        $data = json_decode(file_get_contents($app->storagePath().'/framework/down'), true);
        $ipChecked = isset($data['allowed']) && IpUtils::checkIp($ip, (array) $data['allowed']);
    }
    return view ('maintenance.maintenance', compact ('maintenance', 'ip', 'ipChecked'));
}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
        {
            $this->repository->destroyUser ();
            return response ()->json ();
        }
}
