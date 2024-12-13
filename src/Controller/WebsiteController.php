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

    #[Route('/test-route', name: 'web.app.test')]
    public function testAction(): Response
    {
        return $this->render('@Website/php-test.html.twig', [
            'message' => 'Hello from the Website Bundle!'
        ]);
    }
}
