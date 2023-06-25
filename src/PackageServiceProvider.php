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
        (new Filesystem)->copyDirectory(__DIR__.'/../stubs', base_path('/'));
        // copy(__DIR__.'/../stubs', base_path('/'));

    }
}
