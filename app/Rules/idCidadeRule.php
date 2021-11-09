<?php

namespace App\Rules;

use App\Models\Cidade;
use Illuminate\Contracts\Validation\Rule;

class idCidadeRule implements Rule
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
        $city = Cidade::find($value);
        return $city;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Id_cidade não existe';
    }
}
