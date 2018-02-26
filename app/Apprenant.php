<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apprenant extends Model
{
    protected $fillable = [
        'nom','prenom','formation','lieu','email_user','email_teacher','email_mdef'
    
    ];
}
