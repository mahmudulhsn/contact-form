<?php
namespace Mahmudulhsn\Contactform\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;
use Mahmudulhsn\Contactform\Mail\InquiryMail;
use Mahmudulhsn\Contactform\Models\Contact;

class ContactFormController extends Controller
{
    public function create()
    {
        return view("contactform::contacts.create");
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "name" => ["required", "string", "max:255"],
            "email" => ["required", "string", "max:255"],
            "subject" => ["required", "string", "max:255"],
            "message" => ["required", "string"],
        ]);
        Contact::create($validatedData);

        $adminEmail = config("contactform.admin_email");
        if ($adminEmail == null || $adminEmail == "") {
            dd("Please set an admin email.");
        } else {
            Mail::to($adminEmail)->send(new InquiryMail($validatedData));
        }

        return redirect()->route("contacts.index")->with("success", "Contact has been sent.");
    }
}
