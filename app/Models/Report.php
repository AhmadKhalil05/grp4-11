<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    //
    protected $casts = [
    'generated_at' => 'datetime',
];
     protected $table = 'report';
      public $incrementing = true;
    protected $keyType = 'int';
     protected $primaryKey = 'report_id';
     protected $fillable = ['report_type','content','user_id'];
}
