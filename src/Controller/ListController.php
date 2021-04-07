<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ListController extends AbstractController
{
    /**
     * @Route("/list", name="list")
     */
    public function index(Request $request): Response
    {
	    $em = $this->getDoctrine()->getManager();
    	$users = $em->getRepository(User::class)->findAll();

        return $this->render('list/index.html.twig', [
            'users' => $users,
        ]);
    }
}
