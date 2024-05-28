<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "customers";
    protected $primaryKey = "id";

    public function groupData() {
        return $this->hasMany('App\Models\Group', 'group_id', 'group_id');
    }

    public function setNameAttribute($name) {
        $this->attributes['name'] = ucwords($name);
    }

    public function getGenderAttribute($gender) {
        $genders = [
            null => "Not Selected",
            "M" => "Male",
            "F" => "Female",
            "O" => "Others",
        ];

        return $genders[$gender];
    }
}
