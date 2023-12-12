<?php 
namespace App\Helpers;

use App\Models\Testimonials;

class TestimonialsHelper
{

    public function List()
    {
        $testimonials = Testimonials::get();
        return $testimonials;
    }
   
    
} 