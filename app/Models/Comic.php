<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Comic extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'thumb', 'price', 'series', 'sale_date', 'type',
    ];

    public static function generateSlug($title){
        $slug = Str::slug($title, "-");
        $original_slug = $slug;
        $exists = Comic::where("slug", $slug)->first();
        $c = 1;
        while($exists){
            $slug = $original_slug . "-" . $c;
            $exists = Comic::where("slug", $slug)->first();

            $c++;
        }
        return $slug;
    }
}
