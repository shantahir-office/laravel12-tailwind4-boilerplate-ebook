<?php

namespace App\Http\Controllers;

use App\Models\Blog;


class FrontendController extends Controller
{
    public function home()
    {
        return view(
            'frontend.pages.home',
            [
                'title' => 'Home | ',
                'description' => ''
            ]
        );
    }
    public function about()
    {
        return view(
            'frontend.pages.about',
            [
                'title' => 'About Us | ',
                'description' => ''
            ]
        );
    }
    public function contact()
    {
        return view(
            'frontend.pages.contact',
            [
                'title' => 'Contact Us | ',
                'description' => ''
            ]
        );
    }
    public function thankYou()
    {
        return view(
            'frontend.pages.thankyou',
            [
                'title' => 'Thank You | ',
                'description' => ''
            ]
        );
    }
    public function privacyPolicy()
    {
        return view(
            'frontend.pages.privacy-policy',
            [
                'title' => 'Privacy Policy | ',
                'description' => ''
            ]
        );
    }
    public function termsAndConditions()
    {
        return view(
            'frontend.pages.terms-and-conditions',
            [
                'title' => 'Terms and Conditions | ',
                'description' => ''
            ]
        );
    }
    public function reactInvoicePayment()
    {
        return view(
            'frontend.pages.invoice.Invoice',
            [
                'title' => 'Invoice Payment | ',
                'description' => ''
            ]
        );
    }
    public function seq_step1()
    {
        return view(
            'frontend.pages.sequence.step1',
            [
                'title' => 'Sequnce Step 1 | ',
                'description' => ''
            ]
        );
    }
}
