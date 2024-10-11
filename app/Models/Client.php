<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Document;

class Client extends Model
{
    protected $fillable = [
        'full_name',
        'phone_number',
        'address',
        'front_id_image_id',
        'back_id_image_id',
        'notes'
    ];


    public function legalCases()
    {
        return $this->hasMany(LegalCase::class);
    }

    public function frontIdImage()
    {
        return $this->belongsTo(Document::class, 'front_id_image_id');
    }

    public function backIdImage()
    {
        return $this->belongsTo(Document::class, 'back_id_image_id');
    }
}
