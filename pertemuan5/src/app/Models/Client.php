<?php

namespace App\Models;
Use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Client extends Model
{
    use HasFactory;

    protected static function boot(){
        parent::boot();

        static::creating(function ($client) {

            if (empty($client->api_token)) {
                $client->api_token = str::random(10);
            }
    });
    }


    Protected $table = 'clients';
    Protected $fillable = [
        'name',
        'api_token',
    ];

    public function products(){
        return $this->hasMany(Product::class);
    }
}
