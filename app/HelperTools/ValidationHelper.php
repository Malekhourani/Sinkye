<?php

namespace App\HelperTools;

class ValidationRulesHelper
{
    const COMPANY_VALIDATION_RULES = [
        'name' => 'required'
    ];

    const EMPLOYEE_VALIDATION_RULES = [
        'name' => 'required'
    ];

    const GROUP_VALIDATION_RULES = [
        'name' => 'required'
    ];

    const MESSAGE_VALIDATION_RULES = [
        'content' => 'required'
    ];

    const MISSION_VALIDATION_RULES = [
        'description' => 'required'
    ];

    const PROJECT_VALIDATION_RULES = [
        'name' => 'required'
    ];

    const PERMISSION_VALIDATION_RULES = [
        'name' => 'required',
        'description' => 'required'
    ];
}
