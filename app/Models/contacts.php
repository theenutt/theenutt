<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class contacts extends Model
{
    use HasFactory;

    public function user() {
      return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'name',
        'email',
        'subject',
        'message'
    ];
}
