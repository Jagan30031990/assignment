<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExportIndia extends Model
{
    use HasFactory;
    protected $table="mst_export_india";
    public function country()
    {
        return $this->hasOne('country');
    }
}
