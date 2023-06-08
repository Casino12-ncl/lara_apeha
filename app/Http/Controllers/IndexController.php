<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactForm;


class IndexController extends Controller
{
  public function index(){
      $posts = Post::query()->orderBy('created_at', 'DESC')->limit(5)->get();
      
    return view('pivo', [
      'posts' => $posts
    ]);
  }

  public function showContactForm()
  {
    return view('contact_form');
  }

  public function contactForm(ContactFormRequest $request)
  {
    Mail::to('istomin1984va@yandex.ru')->send(new ContactForm($request->validated()));

    return redirect(route("contacts"));
  }
}
