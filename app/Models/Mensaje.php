<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{
    use HasFactory;
    protected $fillable = ['nombreMensaje', 'nombreIdetificador','mensaje','user_id'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
