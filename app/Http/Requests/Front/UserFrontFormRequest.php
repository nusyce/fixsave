<?php

namespace App\Http\Requests\Front;

use Auth;
use App\Http\Requests\Request;

class UserFrontFormRequest extends Request
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
        $id = Auth::user()->id;
        $id_str = ',' . $id;
        $password = '';
        return [
            'first_name' => 'required|max:80',
            //'middle_name' => 'max:80',
            //'last_name' => 'required|max:80',
            'email' => 'required|unique:users,email' . $id_str . '|email|max:100',
            'password' => 'max:50',
            //'father_name' => 'required|max:80',
            'date_of_birth' => 'required',
            //'gender_id' => 'required',
            //'marital_status_id' => 'required',
            'nationality_id' => 'required',
            //'national_id_card_number' => 'required|max:80',
            'country_id' => 'required',
            'state_id' => 'required',
            'city_id' => 'required',
            'phone' => 'required|max:18',
            //'mobile_num' => 'required|max:22',
            //'job_experience_id' => 'required',
            //'career_level_id' => 'required',
            'industry_id' => 'required',
            'functional_area_id' => 'required',
            // 'current_salary' => 'required|max:11',
            //'expected_salary' => 'required|max:11',
            //'salary_currency' => 'required|max:5',
            'street_address' => 'required|max:230',
            'image' => 'image',
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => __('Vorname ist erforderlich'),
            //'middle_name.required' => __('Middle Name is required'),
            //'last_name.required' => __('Last Name is required'),
            'email.required' => __('E-Mail ist erforderlich'),
            'email.email' => __('Die E-Mail muss eine gültige E-Mail-Adresse sein'),
            'email.unique' => __('Diese E-Mail wurde bereits vergeben'),
            'password.required' => __('Passwort ist erforderlich'),
            'password.min' => __('Das Passwort sollte länger als 3 Zeichen sein'),
            //'father_name.required' => __('Father Name is required'),
            'date_of_birth.required' => __('Geburtsdatum ist erforderlich'),
            //'gender_id.required' => __('Please select gender'),
            // 'marital_status_id.required' => __('Please select marital status'),
            'nationality_id.required' => __('Bitte wählen Sie die Nationalität'),
            //'national_id_card_number.required' => __('National ID card# required'),
            'country_id.required' => __('Bitte Land auswählen'),
            'state_id.required' => __('Bitte Staat auswählen'),
            'city_id.required' => __('Bitte Stadt auswählen'),
            'phone.required' => __('Bitte geben Sie das Telefon ein'),
            //'mobile_num.required' => __('Please enter mobile number'),
            // 'job_experience_id.required' => __('Please select experience'),
            // 'career_level_id.required' => __('Please select career level'),
            'industry_id.required' => __('Bitte wählen Sie die Branche aus'),
            'functional_area_id.required' => __('Bitte Funktionsbereich auswählen'),
            // 'current_salary.required' => __('Please enter current salary'),
            // 'expected_salary.required' => __('Please enter expected salary'),
            // 'salary_currency.required' => __('Please select salary currency'),
            'street_address.required' => __('Bitte geben Sie die Adresse ein'),
            'image.image' => __('Es können nur Bilder hochgeladen werden'),
        ];
    }

}
