<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactDetailController extends Controller
{
    //

    public function __construct(Contact $contact){
        $this->contact = $contact;
    }
    public function index(){
        $contacts = $this->contact->all();
        return view('contact.index',compact('contacts'));

    }

    public function destroy(ContactDetail $contactDetail){
        dd($contactDetail);
    }
}
