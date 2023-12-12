<?php 
namespace App\Helpers;

use App\Models\FAQ;

class FaqHelper
{

    public function List()
    {
        $faq = FAQ::take(3)->get();
        return $faq;
    }
    public function faqlist(){
        $faqs = FAQ::orderBy('id','DESC')->take(3)->get();
        return $faqs;
    }
   
    
} 