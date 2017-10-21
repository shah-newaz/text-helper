<?php
namespace Shahnewaz\TextHelper\Providers;

use Illuminate\Support\ServiceProvider;
use Shahnewaz\TextHelper\Services\TextService;

class TextHelperServiceProvider extends ServiceProvider {

	public function boot () {

	}

	public function register () {
		// Register Our Service
        $this->app->singleton('texthelper', function ($app) {
            return new TextService;
        });
	}

	public function provides () {
		return ['texthelper'];
	}
}
