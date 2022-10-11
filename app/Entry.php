<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    protected $fillable = ['entry_name', 'master_category', 'amount', 'due_date'];
}

