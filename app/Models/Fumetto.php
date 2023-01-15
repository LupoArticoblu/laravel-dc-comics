<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Fumetto extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'thumb', 'price', 'series', 'sale_date', 'type', 'slug'];
    
    public static function generateSlug($string){
        $slug = Str::slug($string, '-');
        
        $original_slug = $slug;
        $c = 1;
        $fumetto_exists = Fumetto::where('slug', $slug)->first();
        while($fumetto_exists){
            $slug = $original_slug . '-' . $c;
            $fumetto_exists = Fumetto::where('slug', $slug)->first();
            $c++;
        }
        return $slug;

    }
}

