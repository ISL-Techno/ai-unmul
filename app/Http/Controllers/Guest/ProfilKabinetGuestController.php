<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfilKabinetGuestController extends Controller
{
    public function index()
    {
        $page_title = 'Kabinet';
        $page_description = 'Some description for the page';
        $page_meta_description = 'Some meta description for the page';

        return view('guest.pages.profil.kabinet.index', [
            'page_title' => $page_title,
            'page_description' => $page_description,
            'page_meta_description' => $page_meta_description,
        ]);
    }
}
