<?php

namespace NGiraud\BackendBlog;

use Illuminate\Support\ServiceProvider;
use NGiraud\BackendBlog\Commands\InitBlog;

class BackendBlogServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
//        $this->app->register(NGiraud\PostType\PostTypeServiceProvider::class);

        $this->commands([
            InitBlog::class,
        ]);
    }
}
