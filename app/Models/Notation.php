<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notation extends Model
{
    use HasFactory;
    protected $table='notations';
    protected $fillable = [
        'score'
    ];
    
    public function user() {
       return $this->belongsTo(User::class);
    }
    public function criteria(){
        return $this->belongsTo(Critere::class);
    }
    public function university(){
        return $this->belongsTo(University::class);
    }
}
