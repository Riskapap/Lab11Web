<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function Artikel()
    {
        return view('Artikel', [
            'title' => 'Halaman Artikel']);
    }
    public function about()
    {
        return view('about', [
            'title' => 'Halaman About']);
    }
    public function contact()
    {
        return view('contact', [
            'title' => 'Halaman Contact']);
    }
    public function faqs()
    {
        echo "Ini halaman FAQ";
    }
    public function tos()
    {
        echo "ini halaman Term of Services";
    }
}