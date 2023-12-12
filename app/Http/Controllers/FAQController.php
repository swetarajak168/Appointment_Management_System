<?php

namespace App\Http\Controllers;

use App\Http\Requests\FAQRequest;
use App\Models\FAQ;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class FAQController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function __construct(FAQ $faq){
        $this->faq = $faq;
     }
    public function index()
    {
        //
        $faqs = $this->faq->get();
        return view('faq.index',compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('faq.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FAQRequest $request)
    {
        //

        // dd($request);
        $faqData = $request->validated();
        $createFaq = [
            'question'=>$faqData['question'],
            'answer'=>$faqData['answer']
        ];
        $this->faq->create($createFaq);
            Alert::success('Success','FAQ Added');
        return redirect()->route('faq.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(FAQ $fAQ)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $faq = $this->faq->findOrFail($id);
      return view('faq.edit',compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FAQRequest $request, FAQ $faq)
    {
        //
        $faqData = $request->validated();
        $updateFaq = [
            'question'=>$faqData['question'],
            'answer'=>$faqData['answer']
        ];
        $faq->update($updateFaq);
            Alert::success('Success','FAQ Updated');
        return redirect()->route('faq.index');
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $faq = $this->faq->findOrFail($id);
        $faq->delete();
        Alert::success('Success','FAQ Deleted');
        return redirect()->back();
    }
}
