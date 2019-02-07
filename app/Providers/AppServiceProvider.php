<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {

    public $version = "0.0.1";

    public function boot() {
        $presets = [
            'version' => $this->version
            ];
        config($presets);
    }


    public function register() {

    }

}
