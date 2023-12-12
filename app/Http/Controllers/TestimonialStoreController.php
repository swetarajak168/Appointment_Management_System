<?php

namespace App\Http\Controllers;
use App\Http\Requests\TestimonialRequest;
use App\Models\Testimonials;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TestimonialStoreController extends Controller
{
    //
   public function create(){
    return view('testimonial.create');
   }
    public function store(TestimonialRequest $request){
        $testimonial = $request->validated();
        Testimonials::create([
            'name'=>$testimonial['name'],
            'message'=>$testimonial['message'],
        ]);
        Alert::success('Success','Your review has beed added');
        return redirect()->back();
    }
}
