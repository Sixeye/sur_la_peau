<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = [
        'app_actors_actors' => [[], ['_controller' => 'App\\Controller\\ActorsController::actors'], [], [['text', '/']], [], []],
        'actors' => [[], ['_controller' => 'App\\Controller\\ActorsController::actors'], [], [['text', '/actors']], [], []],
        'alexmartin' => [[], ['_controller' => 'App\\Controller\\AlexMartinController::alexmartin'], [], [['text', '/alexmartin']], [], []],
        'antoineb' => [[], ['_controller' => 'App\\Controller\\AntoinebController::antoineb'], [], [['text', '/antoineb']], [], []],
        'app_blogpost_blogpost' => [[], ['_controller' => 'App\\Controller\\BlogPostController::blogpost'], [], [['text', '/']], [], []],
        'blog-post' => [[], ['_controller' => 'App\\Controller\\BlogPostController::blogpost'], [], [['text', '/blog-post']], [], []],
        'app_blogpostlist_blogpostlist' => [[], ['_controller' => 'App\\Controller\\BlogPostListController::blogpostlist'], [], [['text', '/']], [], []],
        'blog-post-list' => [[], ['_controller' => 'App\\Controller\\BlogPostListController::blogpostlist'], [], [['text', '/blog-post-list']], [], []],
        'christianm' => [[], ['_controller' => 'App\\Controller\\ChristianmController::christianm'], [], [['text', '/christianm']], [], []],
        'contact' => [[], ['_controller' => 'App\\Controller\\ContactController::contact'], [], [['text', '/contact']], [], []],
        'edgars' => [[], ['_controller' => 'App\\Controller\\EdgarsController::edgars'], [], [['text', '/edgars']], [], []],
        'extraits' => [[], ['_controller' => 'App\\Controller\\ExtraitsController::extraits'], [], [['text', '/extraits']], [], []],
        'gallery' => [[], ['_controller' => 'App\\Controller\\GalleryController::gallery'], [], [['text', '/gallery']], [], []],
        'genese' => [[], ['_controller' => 'App\\Controller\\GeneseController::genese'], [], [['text', '/genese']], [], []],
        'home' => [[], ['_controller' => 'App\\Controller\\HomeController::home'], [], [['text', '/home']], [], []],
        'jmc' => [[], ['_controller' => 'App\\Controller\\JmcController::jmc'], [], [['text', '/jmc']], [], []],
        'jmg' => [[], ['_controller' => 'App\\Controller\\JmgController::jmg'], [], [['text', '/jmg']], [], []],
        'massimob' => [[], ['_controller' => 'App\\Controller\\MassimobController::massimob'], [], [['text', '/massimob']], [], []],
        'melaniepeyre' => [[], ['_controller' => 'App\\Controller\\MelaniePeyreController::melaniepeyre'], [], [['text', '/melaniepeyre']], [], []],
        'mentions' => [[], ['_controller' => 'App\\Controller\\MentionsController::mentions'], [], [['text', '/mentions']], [], []],
        'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], []],
        'scenario' => [[], ['_controller' => 'App\\Controller\\ScenarioController::scenario'], [], [['text', '/scenario']], [], []],
        'login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
        'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
        'zbds' => [[], ['_controller' => 'App\\Controller\\ZbdsController::zbds'], [], [['text', '/zbds']], [], []],
        'easyadmin' => [[], ['_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\EasyAdminController::indexAction'], [], [['text', '/admin/']], [], []],
        '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
        '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
        '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
        '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
        '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
        '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
        '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
        '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception::showAction'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception::cssAction'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    ];
        }
    }

    public function generate($name, $parameters = [], $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && null !== $name) {
            do {
                if ((self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
                    unset($parameters['_locale']);
                    $name .= '.'.$locale;
                    break;
                }
            } while (false !== $locale = strstr($locale, '_', true));
        }

        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
