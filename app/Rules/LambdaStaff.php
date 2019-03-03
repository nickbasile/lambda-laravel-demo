<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class LambdaStaff implements Rule
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
        $url = explode('@', $value)[1];
        return strpos($url, 'lambdaschool.com') !== false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'You must be a Lambda School employee to register.';
    }
}
