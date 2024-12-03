<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seminaire extends Model
{
    use HasFactory;

    protected $fillable = [
        'theme',
        'date_debut',
        'date_fin',
        'description',
        'cout_journalier',
        'animateur_id',
    ];


    public function animateur()
    {
        return $this->belongsTo(Animateur::class);
    }

    public function membres()
    {
        return $this->belongsToMany(Membre::class, 'reservations')
            ->withPivot('date_reservation', 'status_reservation')
            ->withTimestamps();
    }
}
