<?php
/**
 * Created by PhpStorm.
 * User: DiTechGraz-NOG1511
 * Date: 31/10/2018
 * Time: 10:59
 */

namespace App\Controller;



use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;



class ArticleController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('Hey this rules!');
    }

    /**
     * @Route("/news/{slug}")
     */
    public function show($slug)
    {
        return new Response(sprintf('Future page to show the article: %s', $slug));
    }
}