<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 10/01/2017
 * Time: 14:38
 */
namespace Controller;

use \W\Controller\Controller;

class ArticlesController extends Controller
{
    public function afficher ()
    {
        $this -> show('articles/home');
    }

}