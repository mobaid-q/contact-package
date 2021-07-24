<?php

namespace Obaid\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Obaid\Contact\Models\Contact;
use Obaid\Contact\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index() {
		return view('contact::contact');
		//package name::view name		it searches for views in the package's view folder instead of the one in resources folder.
	}
	
	public function send(Request $request) {
		Mail::to(config('contact.send_email_to'))->send(new ContactMail($request->message, $request->name));
		Contact::create($request->all());
		return redirect(route('contact'));
	}

	


}
