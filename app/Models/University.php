<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class University extends Model
{
    use HasFactory, HasApiTokens, Notifiable;
    protected $table = 'universities';
    protected $fillable = ['univ_name', 'address','city_id', 'type', 'contacts','mails', 'websites', 'formations'];

    public function commentaires()
    {
        return $this->hasMany(Comment::class);
    }
    public function notations()
    {
        return $this->hasMany(Notation::class);
    }



    public function getWebsitesAttribute($value)
    {
        return json_decode($value, true);
    }

    public function setWebsitesAttribute($value)
    {
        $this->attributes['websites'] = json_encode($value);
    }


    public function getMailsAttribute($value)
    {
        return json_decode($value, true);
    }

    public function setMailsAttribute($value)
    {
        $this->attributes['mails'] = json_encode($value);
    }


    public function getFormationsAttribute($value)
    {
        return json_decode($value, true);
    }

    public function setFormationsAttribute($value)
    {
        $this->attributes['formations'] = json_encode($value);
    }
}
