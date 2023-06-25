<?php
namespace Ali\DockerAdvanceBoilerplate;
 
use Illuminate\Support\ServiceProvider;
use Illuminate\Filesystem\Filesystem;


class PackageServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        (new Filesystem)->copyDirectory(__DIR__.'/vendor/alibinsarwar/docker-advance-boilerplate/stubs', app_path('Http/Controllers'));

    }
}
