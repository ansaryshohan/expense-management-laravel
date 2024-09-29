<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostGraduationResult extends Model
{
    use HasFactory;

    protected $fillable= ["degree_name","result","institute","passing_year","client_id"];

    protected $table = "post_graduation_result";

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
