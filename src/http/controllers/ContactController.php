<?php

namespace Plusemon\Contact\http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Jobs\ContactMailSender;
use Illuminate\Support\Facades\Mail;
use Plusemon\Contact\models\MailHistory;

class ContactController extends Controller
{
    public function contact()
    {
        $histories = MailHistory::latest()->get();
        return view('Contact::contact', compact('histories'));
    }

    public function send(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'name' => ['required', 'email'],
            'email' => ['required'],
        ]);

        $save =
            MailHistory::query()->create([
                'from' => env('MAIL_FROM_ADDRESS'),
                'to' => $request->get('email'),
                'name' => $request->get('name'),
                'message' => $request->get('message'),
            ]);

        if ($save) dispatch(new ContactMailSender($request->all()));

        return back()->with(['message' => 'Mail has been send successfully']);
    }
}
