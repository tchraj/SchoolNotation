<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $table = 'cities';
    protected $hidden = ['_token'];
    protected $guarded = ['_token'];
    protected $fillable = ['city_name'];
    public function university()
    {
        $this->hasMany(University::class);
    }
}
