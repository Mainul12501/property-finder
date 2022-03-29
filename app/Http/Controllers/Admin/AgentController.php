<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Agent;
use App\Models\Company;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    protected $agent;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.agents.manage',[
            'agents'    => Agent::orderBy('id', 'DESC')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.agents.create', ['companies'    => Company::where('status', 1)->get()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Agent::saveData($request);
        return redirect()->back()->with('message', 'Agent created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->agent = Agent::findOrFail($id);
        return view('admin.agents.create',['agent' => $this->agent, 'companies'    => Company::where('status', 1)->get()]);
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
        Agent::updateData($request, $id);
        return redirect()->route('admin.agents.index')->with('message', 'Agent Info updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function del ($id)
    {
        $del = Agent::findOrFail($id);
        if (file_exists($del->image))
        {
            unlink($del->image);
        }
        $del->delete();
        return redirect()->back()->with('message','Agent deleted successfully.');
    }

    public function status ($id)
    {
        $status = Agent::findOrFail($id);
        $status->status = $status->status == 1 ? 0 : 1;
        $status->save();
        return redirect()->back()->with('message', 'Agent status updated successfully.');
    }
}
