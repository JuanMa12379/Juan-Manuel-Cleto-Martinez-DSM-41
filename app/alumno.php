<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class alumno extends Model
{
    public static function validationRules(){
        return [
        'nombre' => 'requeried| min:S| max:50',
        'apellido' => 'nullable| min:S| max:50',
        'email' => 'requeried| min:S| max:50',
        ];
    }
}
