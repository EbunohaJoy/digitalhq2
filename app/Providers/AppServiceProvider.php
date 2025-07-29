<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Artesaos\SEOTools\Facades\SEOTools;

class AppServiceProvider extends ServiceProvider
{


    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->composer('*', function ($view) {
        SEOTools::setTitle('Website Designer Nigeria | Web Design Experts');
        SEOTools::setDescription('Professional web design, e-commerce, UI/UX, and branding services for Nigerian businesses.');
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addImage(asset('images/webdesign.jpg'));
    });
    }


}
