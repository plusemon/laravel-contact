<?php

namespace Plusemon\Contact;

use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider
{

    public function register()
    {
        //   
    }

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/contact.php');
        $this->loadViewsFrom(__DIR__ . "/views", 'Contact');
        $this->loadMigrationsFrom(__DIR__ . "/database/migrations");
        $this->mergeConfigFrom(__DIR__ . "/config/contact.php", 'contact');
    }
}
