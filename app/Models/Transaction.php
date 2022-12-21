<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'kategori',
        'nominal',
        'tujuan',
        'account_id',
    ];
    public function transactions()
    {
        return $this->belongsTo('App\Models\Account');
    }
}
