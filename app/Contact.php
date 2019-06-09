<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //
    protected $fillable = [
        'fullname', 'phone','phone2','facebook','facebook2', 'image','image2',
        'city','address','from','information','set_id','danger','user_id'
    ];

}
