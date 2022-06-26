<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bilgiler extends Model
{
    use HasFactory;
    protected $table="bilgiler"; //tabloyu tanıttık
    protected $fillable=["metin","created_at","updated_at"]; //Tabloda bilgi ekleyeceğimiz kısımları tanıttık
}
