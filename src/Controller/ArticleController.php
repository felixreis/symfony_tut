<?php
/**
 * Created by PhpStorm.
 * User: DiTechGraz-NOG1511
 * Date: 31/10/2018
 * Time: 10:59
 */

namespace App\Controller;



use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;



class ArticleController extends AbstractController
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

        $comments = [
            "Comment 1",
            "Comment 2",
            "Comment 3",
        ];

        return $this->render('article/show.html.twig', [
            'title' => ucwords(str_replace('-', ' ', $slug)),
            'comments' => $comments,
            ]);
    }
}