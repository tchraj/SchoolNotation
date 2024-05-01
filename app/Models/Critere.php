<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Critere extends Model
{
    protected $table = 'criteria';
    protected $fillable=['libelle','description'];
    use HasFactory,HasApiTokens,Notifiable;
    public function notations(){
        $this->hasMany(Notation::class);
    }
    
}
