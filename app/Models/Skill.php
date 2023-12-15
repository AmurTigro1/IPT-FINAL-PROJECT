<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    public function character()
    {
        return $this->hasMany(Character::class);
    }

    protected $fillable = [
        'name',
        'description',
        'type',
    ];

    public static function list() {
        $skills = Skill::orderByRaw("name")->get();
        $list = [];
        foreach ($skills as $skill) {
            $list[$skill->id] = $skill->name;
        }

        return $list;
    }   
}
