<?php

namespace App\Rules;

use App\Models\Endereco;
use Illuminate\Contracts\Validation\Rule;

class idEnderecoRule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $city = Endereco::find($value);
        return $city;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'id Endereço inexistente';
    }
}
