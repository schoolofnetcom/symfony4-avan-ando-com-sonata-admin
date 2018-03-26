<?php
/**
 * Created by PhpStorm.
 * User: gilso_nb9zlec
 * Date: 25/03/2018
 * Time: 18:26
 */

namespace App\Controller;


use App\Entity\Post;
use Sonata\AdminBundle\Controller\CRUDController;
use Symfony\Component\HttpFoundation\Response;

class CustomController extends CRUDController
{
    public function exibirAction()
    {
        $em = $this->getDoctrine()->getManager();
        $posts = $em->getRepository(Post::class)->findAll();
        return $this->renderWithExtraParams('admin/custom/exibir.html.twig', [
            'posts' => $posts
        ]);
    }
}