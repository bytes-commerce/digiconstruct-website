<?php

declare(strict_types=1);

namespace DigiConstruct\WebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;

final class LandingPageController extends AbstractController
{
    public function __construct(
        private readonly TranslatorInterface $translator
    ) {}

    #[Route(path: [
        'en' => '/en/landing/construction-site-documentation',
        'de' => '/de/landing/digitale-baustellendokumentation'
    ], name: 'web.app.siteDocumentation')]
    public function siteDocumentationAction(): Response
    {
        return $this->render('@Website/pages/landing/site-documentation.html.twig', [
            'page_title' => $this->translator->trans('web.digiconstruct.siteDocumentation.title')
        ]);
    }

    #[Route(path: [
        'en' => '/en/landing/request-handling',
        'de' => '/de/landing/anfrage-management'
    ], name: 'web.app.requestHandeling')]
    public function requestHandlingAction(): Response
    {
        return $this->render('@Website/pages/landing/request-handeling.html.twig', [
            'page_title' => $this->translator->trans('web.digiconstruct.requestHandeling.title')
        ]);
    }

    #[Route(path: [
        'en' => '/en/landing/task-management-system',
        'de' => '/de/landing/digitale-aufgabenverteilung-online-digiconstruct'
    ], name: 'web.app.taskManagement')]
    public function taskManagemenetAction(): Response
    {
        return $this->render('@Website/pages/landing/task-management.html.twig', [
            'page_title' => $this->translator->trans('web.digiconstruct.taskManagement.title')
        ]);
    }
}
