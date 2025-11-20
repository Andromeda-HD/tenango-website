<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = ['menu_id', 'quantity', 'date'];

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}
