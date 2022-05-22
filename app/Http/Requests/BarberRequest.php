<?php

namespace App\Http\Requests;

use App\Rules\PassportNum;
use App\Rules\PhoneNumber;
use Illuminate\Foundation\Http\FormRequest;

class BarberRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'barber_phone_number' => [ 'unique:barbers',  new PhoneNumber ],
            'passport_number' => [ 'unique:barbers',  new PassportNum() ]
        ];
    }
}
