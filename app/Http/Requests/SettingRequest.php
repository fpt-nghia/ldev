<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Model\Resource\Setting\Type;
use App\Model\Setting;
use App\Lib\Util\Arr;

class SettingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        switch($this->method()) {
            case 'DELETE':
                 return [
                    'ids'   => 'required|array',
                ];
            case 'POST':
                return [
                    'key'   => 'required|max:64|unique:settings',
                    'value' => 'required|max:255'
                ];
            case 'PUT':
            case 'PATCH':
                // Forcing a unique rule to Ignore a given 'key'
                return [
                    'key'   => 'required|max:64|unique:settings,key,' . $this->setting->id,
                    'value' => 'required|max:255'
                ];
            default:
                return [];
        }


        return $rules;
    }

    protected function withValidator($validator)
    {
        switch($this->method()) {
            case 'DELETE':
                $validator->after(function($validator) {
                    $collection = (new Setting())->getIdsByType(Type::SYSTEM);
                    if (isNotEmpty($this->get('ids'))) {
                        if (Arr::hasDuplicate($collection, $this->get('ids'))) {
                            $validator->errors()->add('key', 'Key of System type cant delete');
                        }
                    }
                });
                break;
            case 'PUT':
            case 'PATCH':
                $validator->after(function($validator) {
                    if ($this->isEditKeyOfSytem()) {
                        $validator->errors()->add('key', 'Key of System type cant edit');
                    }
                });
                break;
            default:
                break;
        }
    }

    private function isEditKeyOfSytem()
    {
        return $this->setting->type == Type::SYSTEM && $this->setting->key != $this->get('key');
    }
}
