<?php 

namespace App\Services\Validation;

use Illuminate\Http\Request;

interface IValidationService
{
    public function validate(Request $request, array $rules);
}