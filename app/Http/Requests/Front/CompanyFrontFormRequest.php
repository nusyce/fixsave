<?php

namespace App\Http\Requests\Front;

use Auth;
use App\Http\Requests\Request;

class CompanyFrontFormRequest extends Request
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
        switch ($this->method()) {
            case 'PUT':
            case 'POST': {
                $id = (int) Auth::guard('company')->user()->id;
                $unique_id = ($id > 0) ? ',' . $id : '';
                return [
                    "id" => "",
                    "name" => "required|max:150",
                    'email' => 'required|unique:companies,email' . $unique_id . '|email|max:100',
                    "ceo" => "required|max:60",
                    "industry_id" => "required",
                    "ownership_type_id" => "required",
                    "description" => "required",
                    "location" => "required|max:150",
                    //"map" => "required",
                    "no_of_offices" => "required|max:11",
                    "website" => "required|url|max:150",
                    "no_of_employees" => "required|max:15",
                    "established_in" => "required|max:12",
                    "fax" => "required|max:30",
                    "phone" => "required|max:30",
                    "logo" => 'image',
                    "country_id" => "required",
                    "state_id" => "required",
                    "city_id" => "required",
                ];
            }
            default:break;
        }
    }

    public function messages()
    {
        return [
            'name.required' => __('Name ist erforderlich'),
            'email.required' => __('E-Mail ist erforderlich'),
            'email.email' => __('Die E-Mail muss eine gültige E-Mail-Adresse sein'),
            'email.unique' => __('Diese E-Mail wurde bereits vergeben'),
            'password.required' => __('Passwort ist erforderlich'),
            'ceo.required' => __('CEO Name ist erforderlich'),
            'industry_id.required' => __('Bitte wählen Sie Industrie'),
            'ownership_type_id.required' => __('Bitte wählen Sie Eigentümertyp'),
            'description.required' => __('Beschreibung erforderlich'),
            'location.required' => __('Standort erforderlich'),
            'map.required' => __('Google Map erforderlich '),
            'no_of_offices.required' => __('Anzahl der erforderlichen Büros'),
            'website.required' => __('Website erforderlich'),
            'website.url' => __('Vollständige URL der Website erforderlich'),
            'no_of_employees.required' => __('Anzahl der benötigten Mitarbeiter'),
            'established_in.required' => __('Gegründet im Jahr erforderlich'),
            'fax.required' => __('Faxnummer erforderlich'),
            'phone.required' => __('Telefonnummer erforderlich'),
            'logo.image' => __('Nur Bilder können als Logo verwendet werden'),
            'country_id.required' => __('Please Land auswählen'),
            'state_id.required' => __('Please Staat auswählen'),
            'city_id.required' => __('Please Stadt auswählen'),
        ];
    }

}
