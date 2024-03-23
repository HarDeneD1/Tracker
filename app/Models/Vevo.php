<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vevo extends Model
{
    use HasFactory;
    protected $fillable =['nev', 'email' ,'telefon','iranyitoszam', 'cim'];
}
