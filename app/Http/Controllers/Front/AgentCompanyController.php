<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Agent;
use App\Models\Company;
use Illuminate\Http\Request;

class AgentCompanyController extends Controller
{
    protected $company;
    protected $agent;

    public function companyDetails ($id)
    {
//        return 'Access Denied. Your need admin permission to access this page';
        return view('front.agent-company.company',[
            'company'   => Company::findOrFail($id),

        ]);
    }
    public function agentDetails ($id)
    {
//        return 'Access Denied. Your need admin permission to access this page';
        return view('front.agent-company.agent',[
            'agent'   => Agent::findOrFail($id),

        ]);
    }
}
