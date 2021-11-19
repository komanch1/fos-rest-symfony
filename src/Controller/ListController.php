<?php

namespace App\Controller;

// use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ListController extends AbstractFOSRestController
{
    /**
     * @Rest\Get("/list", name="list.index")
     */
    public function index(): Response
    {
        return $this->json([
            'message' => 'Welcome to your new controller, method index!',
            'path' => 'src/Controller/ListController.php',
        ]);
    }

    /**
     * @Rest\Post("/update", name="list.update")
     */
    public function update(): Response
    {
        return $this->json([
            'message' => 'Welcome to your new controller, method update!',
            'path' => 'src/Controller/ListController.php',
        ]);
    }

    /**
     * @Rest\Delete("/remove", name="list.remove")
     */
    public function remove(): Response
    {
        return $this->json([
            'message' => 'Welcome to your new controller, method remove!',
            'path' => 'src/Controller/ListController.php',
        ]);
    }
}
