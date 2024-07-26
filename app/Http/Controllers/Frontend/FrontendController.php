<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Blog\BlogPost;
use App\Models\PriceList\Price;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Frontend\ContactFormMail;

class FrontendController extends Controller
{
    public function index()
    {
        $posts = BlogPost::with('author')->paginate(10);
        return view('frontend.pages.blog', compact('posts'));
    }
    public function show($id)
    {
        $post = BlogPost::findOrFail($id);
        return view('frontend.pages.blog-detail', compact('post'));
    }
    public function cenikShow(){
        $prices = Price::get();
        return view('frontend.pages.price-list', compact('prices'));
    }

    public function contact(Request $request)
    {
        // Získání GET parametru 'cenik'
        $priceId = $request->query('cenik');

        // Předání parametru do view
        return view('frontend.pages.contact', ['priceId' => $priceId]);
    }
     public function submitContactForm(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'surname' => 'required|string',
            'price' => 'nullable|string',
            'phone' => 'nullable|string',
            'mail' => 'required|email',
            'message' => 'required|string',
        ]);

        // Odeslání e-mailu
        Mail::to('sztefek.jan@seznam.cz')->send(new ContactFormMail($validated));

        // Přesměrování s úspěšnou zprávou
        return redirect()->route('frontend.contact')
                         ->with('status', 'Formulář byl úspěšně odeslán!');
    }
}
