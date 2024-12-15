<?php

declare(strict_types=1);

namespace DigiConstruct\WebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;

final class IndustriesController extends AbstractController
{
    public function __construct(
        private readonly TranslatorInterface $translator
    ) {}

    #[Route(path: [
        'en' => '/en/industries/plumbing-and-heating-installer',
        'de' => '/de/gewerke/sanitar-heizung-klima'
    ], name: 'web.app.industries.shk')]
    public function shkAction(): Response
    {
        return $this->render('@Website/pages/industries/shk.html.twig', [
            'page_title' => $this->translator->trans('web.digiconstruct.industries.titles.shk', [], 'websiteBundle')
        ]);
    }

    #[Route(path: [
        'en' => '/en/industries/electrician-software-from-digiconstruct',
        'de' => '/de/gewerke/elektroinstallateur-software-von-digiconstruct'
    ], name: 'web.app.industries.electrician')]
    public function electricianAction(): Response
    {
        return $this->render('@Website/pages/industries/electrician.html.twig', [
            'page_title' => $this->translator->trans('web.digiconstruct.industries.titles.electrician', [], 'websiteBundle')
        ]);
    }

    #[Route(path: [
        'en' => '/en/industries/carpenter-software-from-digiconstruct',
        'de' => '/de/gewerke/tischler-software-von-digiconstruct'
    ], name: 'web.app.industries.carpenter')]
    public function carpenterAction(): Response
    {
        return $this->render('@Website/pages/industries/carpenter.html.twig', [
            'page_title' => $this->translator->trans(
                'web.digiconstruct.industries.titles.carpenter',
                [],
                'websiteBundle'
            )
        ]);
    }

    #[Route(path: [
        'en' => '/en/industries/painter-software-from-digiconstruct',
        'de' => '/de/gewerke/maler-software-von-digiconstruct'
    ], name: 'web.app.industries.painter')]
    public function painterAction(): Response
    {
        return $this->render('@Website/pages/industries/painter.html.twig', [
            'page_title' => $this->translator->trans(
                'web.digiconstruct.industries.titles.painter',
                [],
                'websiteBundle'
            )
        ]);
    }

    #[Route(path: [
        'en' => '/en/industries/roofer-software-from-digiconstruct',
        'de' => '/de/gewerke/dachdecker-software-von-digiconstruct'
    ], name: 'web.app.industries.roofer')]
    public function rooferAction(): Response
    {
        return $this->render('@Website/pages/industries/roofer.html.twig', [
            'page_title' => $this->translator->trans(
                'web.digiconstruct.industries.titles.roofer',
                [],
                'websiteBundle'
            )
        ]);
    }

    #[Route(path: [
        'en' => '/en/industries/gardener-software-from-digiconstruct',
        'de' => '/de/gewerke/gartner-software-von-digiconstruct'
    ], name: 'web.app.industries.gardener')]
    public function gardenerAction(): Response
    {
        return $this->render('@Website/pages/industries/gardener.html.twig', [
            'page_title' => $this->translator->trans(
                'web.digiconstruct.industries.titles.gardener',
                [],
                'websiteBundle'
            )
        ]);
    }

    #[Route(path: [
        'en' => '/en/industries/bricklayer-software-from-digiconstruct',
        'de' => '/de/gewerke/maurer-software-von-digiconstruct'
    ], name: 'web.app.industries.bricklayer')]
    public function bricklayerAction(): Response
    {
        return $this->render('@Website/pages/industries/bricklayer.html.twig', [
            'page_title' => $this->translator->trans(
                'web.digiconstruct.industries.titles.bricklayer',
                [],
                'websiteBundle'
            )
        ]);
    }

    #[Route(path: [
        'en' => '/en/industries/plasterer-software-from-digiconstruct',
        'de' => '/de/gewerke/stuckateur-software-von-digiconstruct'
    ], name: 'web.app.industries.plasterer')]
    public function plastererAction(): Response
    {
        return $this->render('@Website/pages/industries/plasterer.html.twig', [
            'page_title' => $this->translator->trans(
                'web.digiconstruct.industries.titles.plasterer',
                [],
                'websiteBundle'
            )
        ]);
    }

    #[Route(path: [
        'en' => '/en/industries/floor-layer-software-from-digiconstruct',
        'de' => '/de/gewerke/bodenleger-software-von-digiconstruct'
    ], name: 'web.app.industries.floorLayer')]
    public function floorLayerAction(): Response
    {
        return $this->render('@Website/pages/industries/floorLayer.html.twig', [
            'page_title' => $this->translator->trans(
                'web.digiconstruct.industries.titles.floorLayer',
                [],
                'websiteBundle'
            )
        ]);
    }

    #[Route(path: [
        'en' => '/en/industries/window-fitter-software-from-digiconstruct',
        'de' => '/de/gewerke/fensterbauer-software-von-digiconstruct'
    ], name: 'web.app.industries.windowFitter')]
    public function windowFitterAction(): Response
    {
        return $this->render('@Website/pages/industries/windowFitter.html.twig', [
            'page_title' => $this->translator->trans(
                'web.digiconstruct.industries.titles.windowFitter',
                [],
                'websiteBundle'
            )
        ]);
    }

    #[Route(path: [
        'en' => '/en/industries/metalworker-software-from-digiconstruct',
        'de' => '/de/gewerke/metallbauer-software-von-digiconstruct'
    ], name: 'web.app.industries.metalworker')]
    public function metalworkerAction(): Response
    {
        return $this->render('@Website/pages/industries/metalworker.html.twig', [
            'page_title' => $this->translator->trans(
                'web.digiconstruct.industries.titles.metalworker',
                [],
                'websiteBundle'
            )
        ]);
    }

    #[Route(path: [
        'en' => '/en/industries/construction-company-software-from-digiconstruct',
        'de' => '/de/gewerke/bauunternehmen-software-von-digiconstruct'
    ], name: 'web.app.industries.constructionCompany')]
    public function constructionCompanyAction(): Response
    {
        return $this->render('@Website/pages/industries/constructionCompany.html.twig', [
            'page_title' => $this->translator->trans(
                'web.digiconstruct.industries.titles.constructionCompany',
                [],
                'websiteBundle'
            )
        ]);
    }

    #[Route(path: [
        'en' => '/en/industries/architect-software-from-digiconstruct',
        'de' => '/de/gewerke/architekt-software-von-digiconstruct'
    ], name: 'web.app.industries.architect')]
    public function architectAction(): Response
    {
        return $this->render('@Website/pages/industries/architect.html.twig', [
            'page_title' => $this->translator->trans(
                'web.digiconstruct.industries.titles.architect',
                [],
                'websiteBundle'
            )
        ]);
    }

    #[Route(path: [
        'en' => '/en/industries/civil-engineering-software-from-digiconstruct',
        'de' => '/de/gewerke/tiefbau-software-von-digiconstruct'
    ], name: 'web.app.industries.civilEngineering')]
    public function civilEngineeringAction(): Response
    {
        return $this->render('@Website/pages/industries/civilEngineering.html.twig', [
            'page_title' => $this->translator->trans(
                'web.digiconstruct.industries.titles.civilEngineering',
                [],
                'websiteBundle'
            )
        ]);
    }

    #[Route(path: [
        'en' => '/en/industries/building-construction-software-from-digiconstruct',
        'de' => '/de/gewerke/hochbau-software-von-digiconstruct'
    ], name: 'web.app.industries.buildingConstruction')]
    public function buildingConstructionAction(): Response
    {
        return $this->render('@Website/pages/industries/buildingConstruction.html.twig', [
            'page_title' => $this->translator->trans(
                'web.digiconstruct.industries.titles.buildingConstruction',
                [],
                'websiteBundle'
            )
        ]);
    }

    #[Route(path: [
        'en' => '/en/industries/roofing-software-from-digiconstruct',
        'de' => '/de/gewerke/dachdecker-software-von-digiconstruct'
    ], name: 'web.app.industries.roofing')]
    public function roofingAction(): Response
    {
        return $this->render('@Website/pages/industries/roofing.html.twig', [
            'page_title' => $this->translator->trans(
                'web.digiconstruct.industries.titles.roofing',
                [],
                'websiteBundle'
            )
        ]);
    }

    #[Route(path: [
        'en' => '/en/industries/flooring-software-from-digiconstruct',
        'de' => '/de/gewerke/fliessen-bodenleger-software-von-digiconstruct'
    ], name: 'web.app.industries.flooring')]
    public function flooringAction(): Response
    {
        return $this->render('@Website/pages/industries/flooring.html.twig', [
            'page_title' => $this->translator->trans(
                'web.digiconstruct.industries.titles.flooring',
                [],
                'websiteBundle'
            )
        ]);
    }

    #[Route(path: [
        'en' => '/en/industries/plumber-software-from-digiconstruct',
        'de' => '/de/gewerke/installateur-software-von-digiconstruct'
    ], name: 'web.app.industries.plumber')]
    public function plumberAction(): Response
    {
        return $this->render('@Website/pages/industries/plumber.html.twig', [
            'page_title' => $this->translator->trans(
                'web.digiconstruct.industries.titles.plumber',
                [],
                'websiteBundle'
            )
        ]);
    }

    #[Route(path: [
        'en' => '/en/industries/heating-software-from-digiconstruct',
        'de' => '/de/gewerke/heizungsbauer-software-von-digiconstruct'
    ], name: 'web.app.industries.heating')]
    public function heatingAction(): Response
    {
        return $this->render('@Website/pages/industries/heating.html.twig', [
            'page_title' => $this->translator->trans(
                'web.digiconstruct.industries.titles.heating',
                [],
                'websiteBundle'
            )
        ]);
    }

    #[Route(path: [
        'en' => '/en/industries/air-conditioning-software-from-digiconstruct',
        'de' => '/de/gewerke/klimaanlagenbauer-software-von-digiconstruct'
    ], name: 'web.app.industries.airConditioning')]
    public function airConditioningAction(): Response
    {
        return $this->render('@Website/pages/industries/airConditioning.html.twig', [
            'page_title' => $this->translator->trans(
                'web.digiconstruct.industries.titles.airConditioning',
                [],
                'websiteBundle'
            )
        ]);
    }

    #[Route(path: [
        'en' => '/en/industries/cleaning-services-software-from-digiconstruct',
        'de' => '/de/gewerke/reinigungsdienst-software-von-digiconstruct'
    ], name: 'web.app.industries.cleaningServices')]
    public function cleaningServicesAction(): Response
    {
        return $this->render('@Website/pages/industries/cleaningServices.html.twig', [
            'page_title' => $this->translator->trans(
                'web.digiconstruct.industries.titles.cleaningServices',
                [],
                'websiteBundle'
            )
        ]);
    }

    #[Route(path: [
        'en' => '/en/industries/solar-construction-software-from-digiconstruct',
        'de' => '/de/gewerke/solarbau-software-von-digiconstruct'
    ], name: 'web.app.industries.solarConstruction')]
    public function solarConstructionAction(): Response
    {
        return $this->render('@Website/pages/industries/solarConstruction.html.twig', [
            'page_title' => $this->translator->trans(
                'web.digiconstruct.industries.titles.solarConstruction',
                [],
                'websiteBundle'
            )
        ]);
    }
}
