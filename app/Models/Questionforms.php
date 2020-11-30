<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Questionforms extends Model
{
    /**
     * The users that belong to the role.
     */
    protected $fillable = [
        'correct',
        'question',
        'answer1',
        'answer2',
        'answer3',
        'answer4',

    ];
    public function Users()
    {
        return $this->belongsToMany(User::class, 'users');
    }

}
