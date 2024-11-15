<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Faq;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $contacts = Contact::get();
        $questions = Faq::get();

        return view('admin.dashboards.index', compact('contacts', 'questions'));
    }
}
