<?php

namespace GithubPlentyTest\Providers;

use Plenty\Plugin\ServiceProvider;

/**
 * Class GithubPlentyTestServiceProvider
 * @package GithubPlentyTest\Providers
 */
class GithubPlentyTestServiceProvider extends ServiceProvider
{
    /**
    * Register the route service provider
    */
    public function register()
    {
        $this->getApplication()->register(GithubPlentyTestRouteServiceProvider::class);
    }
}