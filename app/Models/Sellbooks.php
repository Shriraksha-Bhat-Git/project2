<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sellbooks extends Model
{
    use HasFactory;

    protected $table = 'sellbooks';
    public $timestamps = true;

    protected $casts = [
        'price' => 'float'
    ];

    
    protected $fillable = [
        'bookname',
        'category',
        'purchase_date',
        'price',
        'image',
        'authorname',
        'book_language',
        'book_condition',
        'created_at'
    ];
}
