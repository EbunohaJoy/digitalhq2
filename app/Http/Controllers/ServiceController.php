<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use SEOTools;
use Artesaos\SEOTools\Facades\SEOTools;

class ServiceController extends Controller
{
   public function services()
    {
        SEOTools::setTitle('Website Design & Branding Services in Nigeria - Website Designer Nigeria');
        SEOTools::setDescription('Need a modern website or branding? Digital HQ offers web design, e-commerce, mobile app UI/UX and graphics design for Nigerian businesses.');
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addImage(asset('images/webdesign.jpg'));
        return view('services');
    }
}
