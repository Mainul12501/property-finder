<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected static $agent;
    protected static $agentArea;
    protected static $agentAreas;
    protected static $image;

    public static function saveData ($request)
    {
        self::$image = $request->file('image');

        self::$agent                            = new Agent();
        self::$agent->company_id                = $request->company_id;
        self::$agent->name                      = $request->name;
        self::$agent->phone                     = $request->phone;
        self::$agent->email                     = $request->email;
        self::$agent->position                  = $request->position;
        self::$agent->nationality               = $request->nationality;
        self::$agent->languages                 = $request->languages;
        self::$agent->location                  = $request->location;
        self::$agent->about_agent               = $request->about_agent;
        self::$agent->image                     = saveImage(self::$image, 'admin-assets/img/agents/');
        self::$agent->license_number            = $request->license_number;
        self::$agent->experience_since          = $request->experience_since;
        self::$agent->linkedin_profile_url      = $request->linkedin_profile_url;
        self::$agent->fb_profile_url            = $request->fb_profile_url;
        self::$agent->whatsapp_number           = $request->whatsapp_number;
        self::$agent->save();

        self::$agentArea = explode(",", $request->agent_areas);
        AgentArea::saveAgentArea(self::$agentArea, self::$agent->id);
    }

    public static function updateData($request, $id)
    {
        self::$image = $request->file('image');

        self::$agent = Agent::findOrFail($id);
        self::$agent->company_id                = $request->company_id;
        self::$agent->name                      = $request->name;
        self::$agent->phone                     = $request->phone;
        self::$agent->email                     = $request->email;
        self::$agent->position                  = $request->position;
        self::$agent->nationality               = $request->nationality;
        self::$agent->languages                 = $request->languages;
        self::$agent->location                  = $request->location;
        self::$agent->location                  = $request->location;
        self::$agent->about_agent               = $request->about_agent;
        self::$agent->image                     = saveImage(self::$image, 'admin-assets/img/agents/', self::$agent->image);
        self::$agent->license_number            = $request->license_number;
        self::$agent->experience_since          = $request->experience_since;
        self::$agent->linkedin_profile_url      = $request->linkedin_profile_url;
        self::$agent->fb_profile_url            = $request->fb_profile_url;
        self::$agent->whatsapp_number           = $request->whatsapp_number;
        self::$agent->save();

        if (isset($request->agent_areas))
        {
            self::$agentArea = AgentArea::where('agent_id', $id)->get();
            foreach (self::$agentArea as $area)
            {
                $area->delete();
            }
            self::$agentAreas = explode(",", $request->agent_areas);
            AgentArea::saveAgentArea(self::$agentArea, self::$agent->id);
        }

    }

    public function company ()
    {
        return $this->belongsTo(Company::class);
    }

    public function agentAreas () {
        return $this->hasMany(AgentArea::class);
    }

    public function properties ()
    {
        return $this->hasMany(Property::class);
    }
}
