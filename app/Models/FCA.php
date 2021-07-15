<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FCA extends Model
{
    use HasFactory;

    protected $primaryKey = 'fca_id';

    protected $table = 'fcas';
}
