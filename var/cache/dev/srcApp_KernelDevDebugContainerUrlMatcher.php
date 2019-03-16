<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = [
            '/' => [
                [['_route' => 'app_actors_actors', '_controller' => 'App\\Controller\\ActorsController::actors'], null, null, null, false, false, null],
                [['_route' => 'app_blogpost_blogpost', '_controller' => 'App\\Controller\\BlogPostController::blogpost'], null, null, null, false, false, null],
                [['_route' => 'app_blogpostlist_blogpostlist', '_controller' => 'App\\Controller\\BlogPostListController::blogpostlist'], null, null, null, false, false, null],
            ],
            '/actors' => [[['_route' => 'actors', '_controller' => 'App\\Controller\\ActorsController::actors'], null, null, null, false, false, null]],
            '/alexmartin' => [[['_route' => 'alexmartin', '_controller' => 'App\\Controller\\AlexMartinController::alexmartin'], null, null, null, false, false, null]],
            '/antoineb' => [[['_route' => 'antoineb', '_controller' => 'App\\Controller\\AntoinebController::antoineb'], null, null, null, false, false, null]],
            '/blog-post' => [[['_route' => 'blog-post', '_controller' => 'App\\Controller\\BlogPostController::blogpost'], null, null, null, false, false, null]],
            '/blog-post-list' => [[['_route' => 'blog-post-list', '_controller' => 'App\\Controller\\BlogPostListController::blogpostlist'], null, null, null, false, false, null]],
            '/christianm' => [[['_route' => 'christianm', '_controller' => 'App\\Controller\\ChristianmController::christianm'], null, null, null, false, false, null]],
            '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::contact'], null, null, null, false, false, null]],
            '/edgars' => [[['_route' => 'edgars', '_controller' => 'App\\Controller\\EdgarsController::edgars'], null, null, null, false, false, null]],
            '/extraits' => [[['_route' => 'extraits', '_controller' => 'App\\Controller\\ExtraitsController::extraits'], null, null, null, false, false, null]],
            '/gallery' => [[['_route' => 'gallery', '_controller' => 'App\\Controller\\GalleryController::gallery'], null, null, null, false, false, null]],
            '/genese' => [[['_route' => 'genese', '_controller' => 'App\\Controller\\GeneseController::genese'], null, null, null, false, false, null]],
            '/jmc' => [[['_route' => 'jmc', '_controller' => 'App\\Controller\\JmcController::jmc'], null, null, null, false, false, null]],
            '/jmg' => [[['_route' => 'jmg', '_controller' => 'App\\Controller\\JmgController::jmg'], null, null, null, false, false, null]],
            '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\LoginController::login'], null, null, null, false, false, null]],
            '/massimob' => [[['_route' => 'massimob', '_controller' => 'App\\Controller\\MassimobController::massimob'], null, null, null, false, false, null]],
            '/melaniepeyre' => [[['_route' => 'melaniepeyre', '_controller' => 'App\\Controller\\MelaniePeyreController::melaniepeyre'], null, null, null, false, false, null]],
            '/mentions' => [[['_route' => 'mentions', '_controller' => 'App\\Controller\\MentionsController::mentions'], null, null, null, false, false, null]],
            '/registration' => [[['_route' => 'registration', '_controller' => 'App\\Controller\\RegistrationController::registration'], null, null, null, false, false, null]],
            '/scenario' => [[['_route' => 'scenario', '_controller' => 'App\\Controller\\ScenarioController::scenario'], null, null, null, false, false, null]],
            '/zbds' => [[['_route' => 'zbds', '_controller' => 'App\\Controller\\ZbdsController::zbds'], null, null, null, false, false, null]],
            '/admin' => [[['_route' => 'easyadmin', '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\EasyAdminController::indexAction'], null, null, null, true, false, null]],
            '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
            '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
            '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
            '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
            '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        ];
        $this->regexpList = [
            0 => '{^(?'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                        .'|wdt/([^/]++)(*:57)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:102)'
                                .'|router(*:116)'
                                .'|exception(?'
                                    .'|(*:136)'
                                    .'|\\.css(*:149)'
                                .')'
                            .')'
                            .'|(*:159)'
                        .')'
                    .')'
                .')/?$}sDu',
        ];
        $this->dynamicRoutes = [
            38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
            57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
            102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
            116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
            136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
            149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
            159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        ];
    }
}
