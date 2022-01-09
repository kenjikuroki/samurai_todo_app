<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Rutorika\Sortable\SortableTrait;

class Todo extends Model
{
   

   public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function goal()
    {
        return $this->belongsTo('App\Goal');
    }
}
