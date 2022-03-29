<?php

namespace App\Http\Requests;

use App\Models\Integration;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateIntegrationRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('integration_edit');
    }

    public function rules()
    {
        return [
            'key' => [
                'string',
                'required',
            ],
            'secret' => [
                'string',
                'nullable',
            ],
            'platform_id' => [
                'required',
                'integer',
            ],
        ];
    }
}
