<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsedFeature extends Model
{
    protected $fillable = [
        'feature_id',
        'user_id',
        'credits'
        
    ];

    protected function casts(): array {

        return [
            'data' => 'array',
        ];
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function feature(){
        return $this->belongsTo(Feature::class);
    }
}
