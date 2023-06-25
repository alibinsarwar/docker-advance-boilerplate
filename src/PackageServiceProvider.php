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
        copy(__DIR__.'/stubs', base_path('/'));

    }
}
