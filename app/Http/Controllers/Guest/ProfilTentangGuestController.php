<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfilTentangGuestController extends Controller
{
    public function index()
    {
        $page_title = 'Tentang ' . config('app.name');
        $page_description = 'Some description for the page';
        $page_meta_description = 'Some meta description for the page';

        return view('guest.pages.profil.tentang.index', [
            'page_title' => $page_title,
            'page_description' => $page_description,
            'page_meta_description' => $page_meta_description,
        ]);
    }
}
