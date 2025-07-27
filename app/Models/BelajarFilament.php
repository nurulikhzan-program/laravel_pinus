<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class BelajarFilament extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'kelas',
        'usia',
        'alamat',
    ];


}
