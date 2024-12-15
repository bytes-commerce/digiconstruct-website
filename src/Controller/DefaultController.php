<?php

declare(strict_types=1);

namespace DigiConstruct\WebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;

final class DefaultController extends AbstractController
{
    public function __construct(
        private readonly TranslatorInterface $translator
    ) {}

    #[Route('/', name: 'web.app.index')]
    public function hello(): Response
    {
        return $this->render('@Website/index.html.twig');
    }

    #[Route(path: [
        'en' => '/en/about-digiconstruct-software-solutions-for-construction-companies',
        'de' => '/de/uber-digiconstruct-digitale-loesung-fuer-bauunternehmen'
    ], name: 'web.app.about')]
    public function aboutAction(): Response
    {
        return $this->render('@Website/pages/about-digiconstruct.html.twig', [
            'page_title' => $this->translator->trans('web.digiconstruct.about.title', [], 'websiteBundle')
        ]);
    }

    #[Route(path: [
        'en' => '/en/pricing',
        'de' => '/de/kostenuebersicht'
    ], name: 'web.app.pricing')]
    public function pricingAction(): Response
    {
        return $this->render('@Website/pages/pricing.html.twig', [
            'page_title' => $this->translator->trans('web.digiconstruct.pricing.title', [], 'websiteBundle')
        ]);
    }

    #[Route(path: [
        'en' => '/en/frequently-asked-questions-about-digiconstruct',
        'de' => '/de/haeufig-gestellte-fragen-zu-digiconstruct'
    ], name: 'web.app.faq')]
    public function faqAction(): Response
    {
        return $this->render('@Website/pages/faq.html.twig', [
            'page_title' => $this->translator->trans('web.digiconstruct.pricing.title', [], 'websiteBundle')
        ]);
    }

    #[Route(path: [
        'en' => '/en/impress',
        'de' => '/de/impressum'
    ], name: 'web.app.impress')]
    public function impressAction(): Response
    {
        return $this->render('@Website/pages/impress.html.twig', [
            'page_title' => $this->translator->trans('web.digiconstruct.pricing.title', [], 'websiteBundle')
        ]);
    }

    #[Route(path: [
        'en' => '/en/contact',
        'de' => '/de/kontakt'
    ], name: 'web.app.contact')]
    public function contactAction(): Response
    {
        return $this->render('@Website/pages/contact.html.twig', [
            'page_title' => $this->translator->trans('web.digiconstruct.pricing.title', [], 'websiteBundle')
        ]);
    }

    #[Route(path: [
        'en' => '/en/data-privacy',
        'de' => '/de/datenschutzerklaerung'
    ], name: 'web.app.data_privacy')]
    public function dataPrivacyAction(): Response
    {
        return $this->render('@Website/pages/dataPrivacy.html.twig', [
            'page_title' => $this->translator->trans('web.digiconstruct.dataPrivacy.title', [], 'websiteBundle')
        ]);
    }

    #[Route('/sitemap.xml', name: 'web.sitemap', methods: ['GET'], format: 'xml')]
    public function sitemapXml(): Response
    {
        return $this->render('@Website/sitemap.xml.twig', [
            'urls' => [
                'web.app.index',
                'web.app.about',
                'web.app.pricing',
                'web.app.impress',
                'web.app.contact',
                'web.app.data_privacy',
                'web.app.siteDocumentation',
                'web.app.requestHandeling',
                'web.app.taskManagement',
            ],
        ]);
    }
}
