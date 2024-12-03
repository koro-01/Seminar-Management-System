<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animateur extends Model
{
    use HasFactory;

    // If the table name is not the plural form of the model, specify it
    // protected $table = 'animateurs';

    protected $fillable = [
        'nom',
        'prenom',
        'telephone',
        'specialite',
        'email',
    ];

    public function seminaires()
    {
        return $this->hasMany(Seminaire::class);
    }

    public function activites()
    {
        return $this->hasMany(Activite::class);
    }
}
