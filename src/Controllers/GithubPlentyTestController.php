<?php

namespace GithubPlentyTest\Controllers;

use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;

class GithubPlentyTestController extends Controller
{
    /**
     * @param Twig $twig
     * @return string
     */
    public function getHelloWorldPage(Twig $twig):string
    {
        return $twig->render('GithubPlentyTest::Index');
    }
}