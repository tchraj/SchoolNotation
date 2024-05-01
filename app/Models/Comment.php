<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table = 'comments';
    protected $hidden = ['_token'];
    protected $guarded = ['_token'];
    protected $fillable = ['content'];
    
    public function user() {
        return $this->belongsTo(User::class);
    }
    public function university(){
        return $this->belongsTo(University::class);
        }
}
