<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $mapping = [
        'properties' => [
            'body' => [
                'type' => 'text',
                'analyzer' => 'english'
            ]
        ]
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
