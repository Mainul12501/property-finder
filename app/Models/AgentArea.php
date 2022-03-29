<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgentArea extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected static $agentArea;

    public static function saveAgentArea($areaArray, $agentId)
    {
        foreach ($areaArray as $area)
        {
            self::$agentArea = new AgentArea();
            self::$agentArea->agent_id = $agentId;
            self::$agentArea->area_name = $area;
            self::$agentArea->save();
        }
    }

    public function agent ()
    {
        return $this->belongsTo(Agent::class);
    }
}
