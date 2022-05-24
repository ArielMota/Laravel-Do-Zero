<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produto extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable=[
        'categorias_id',
        'nome',
        'descricao',
        'exclusive'

    ];

    protected $dates = [
        'deleted_at'

    ];

    public function categorias(){
        return $this->belongsTo(categorias::class);
    }
}
