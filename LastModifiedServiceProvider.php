<?php

namespace Gsdk\LastModified;

use Illuminate\Support\ServiceProvider;

class LastModifiedServiceProvider extends ServiceProvider {

	public function register(): void {
		$this->app->singleton('last-modified', fn() => new LastModifiedEntity());
	}

	public function boot(): void {

	}

}