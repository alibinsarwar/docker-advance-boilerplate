<?php
namespace Ali\DockerAdvanceBoilerplate;
 
use Illuminate\Support\ServiceProvider;
use Illuminate\Filesystem\Filesystem;


class PackageServiceProvider extends ServiceProvider
{
    public function boot()
    {
        (new Filesystem)->copyDirectory(__DIR__.'/vendor/alibinsarwar/stub', base_path('/'));

    }
}
