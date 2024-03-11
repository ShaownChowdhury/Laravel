<?php
namespace App\Helpers;

trait SlugGenerator{

    
    function createSlug($class,$title){
        $slug = str()->slug($title);
        $count = $class::where('category_slug','LIKE','%'. $slug.'%')->count();
        if($count > 0 ){
            $count++;
            $slug= $slug.'-'.$count;

        }
        return $slug;
    }




}





?>