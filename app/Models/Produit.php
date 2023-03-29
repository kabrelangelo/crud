<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
    public $primaryKey = 'npro';
    public $incrementing = false;
    protected $fillable = [ 
        'npro', 'libelle', 'prix', 'qstock', 'description' 
    ];
}
