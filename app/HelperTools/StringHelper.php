<?php 

namespace App\HelperTools;

use Illuminate\Support\Str;

class StringHelper
{
    public static function getClassName(string $class)
    {
        return match($class) {
            'Company' => \App\Models\Company::class,
            'Employee' => \App\Models\Employee::class,
            'Project' => \App\Models\Project::class,
            'Group' => \App\Models\Group::class,
            'Message'=> \App\Models\Message::class,
            'Mission' => \App\Models\Mission::class,
            'Attachment' => \App\Models\Attachment::class,
            default => null
        };
    }

    public static function getModelName(string $url)
    {
        $controllerName = StringHelper::extractModelName($url);
        $studlyCase = StringHelper::makeFirstCharUpperCase($controllerName);
        $className = StringHelper::getClassName($studlyCase);

        return $className;
    }

    public static function extractModelName(string $url)
    {
        $modelName = '';
        $numberOfSlashes = 0;

        $newurl = str_split($url);

        foreach ($newurl as $char) {
            if ($char == '/') $numberOfSlashes++;

            if ($numberOfSlashes == 4 && $char != '/') 
                $modelName .= $char;

            elseif ($numberOfSlashes == 5) break;
        }

        return $modelName;
    }

    public static function makeFirstCharUpperCase(string $modelName)
    {
        return (Str::studly($modelName));
    }
}
