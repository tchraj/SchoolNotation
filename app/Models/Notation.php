<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notation extends Model
{
    use HasFactory;
    protected $table = 'notations';
    protected $fillable = [
        'score', 'users_id', 'criteria_id', 'univ_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, "users_id");
    }
    public function criteria()
    {
        return $this->belongsTo(Critere::class, "criteria_id");
    }
    public function university()
    {
        return $this->belongsTo(University::class, 'univ_id');
    }
}
