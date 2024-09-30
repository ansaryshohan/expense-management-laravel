<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable= ["first_name","last_name","email","client_image","address","city","division","zip"];

    public function ssc()
    {
        return $this->hasOne(SscResult::class);
    }
    public function hsc()
    {
        return $this->hasOne(HscResult::class);
    }
    public function graduation()
    {
        return $this->hasOne(GraduationResult::class);
    }
    public function postGraduation()
    {
        return $this->hasOne(PostGraduationResult::class);
    }
}
