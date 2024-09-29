<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HscResult extends Model
{
    use HasFactory;

    protected $fillable= ["degree_name","result","institute","passing_year","board","client_id"];

    protected $table = "hsc_result";

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
