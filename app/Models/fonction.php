<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fonction extends Model
{
    use HasFactory;
    protected $table = 'fonction'; 
    protected $primaryKey = 'IdFonction ';

    public function adherent()
    {
        return $this->belongsTo(Adherent::class, 'IdAdherent');
    }
}
