<?php

namespace App\Services\Validation;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ValidationService implements IValidationService
{
    public function validate(Request $request, array $rules)
    {
        $validator = Validator::make(
            data: (array)$request->input(),
            rules: $rules
        );

        if($validator->fails()) return false;
        return true;
    }
}
