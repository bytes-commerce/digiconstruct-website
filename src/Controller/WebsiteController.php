<?php

declare(strict_types=1);

namespace App\WebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class DefaultController extends AbstractController
{
    #[Route('/', name: 'web.app.index')]
    public function hello(): Response
    {
        return $this->render('@Website/hello.html.twig', [
            'message' => 'Hello from the Website Bundle!'
        ]);
    }
}
