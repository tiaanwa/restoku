<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class item extends Model
{
    use SoftDeletes, HasFactory;
    protected $fillable = [
        'item_name',
        'description',
        'price',
        'category_id',
        'image_path',
        'is_active',
        'created_at',
        'updated_at',
    ];
    protected $dates = ['deleted_at'];
    public function category()
    {
        return $this->belongsTo(category::class);
    }
}
