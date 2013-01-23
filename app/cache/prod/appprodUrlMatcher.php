<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        // tv_database_home_homepage
        if (preg_match('#^/(?P<_locale>[^/]+)?$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'TvDatabase\\HomeBundle\\Controller\\DefaultController::indexAction',  '_locale' => 'en',)), array('_route' => 'tv_database_home_homepage'));
        }

        // tv_database_stations_page
        if (preg_match('#^/(?P<_locale>[^/]+)/tvstations$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'TvDatabase\\HomeBundle\\Controller\\TVController::tvStationsAction',  '_locale' => 'en',)), array('_route' => 'tv_database_stations_page'));
        }

        // tv_database_program_page
        if (preg_match('#^/(?P<_locale>[^/]+)/advancedsearch$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'TvDatabase\\HomeBundle\\Controller\\AdvancedSearchController::advancedSearchAction',  '_locale' => 'en',)), array('_route' => 'tv_database_program_page'));
        }

        // tv_database_advanced_search_response
        if (preg_match('#^/(?P<_locale>[^/]+)/advancedsearchresponse(?:/(?P<page>[^/]+))?$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'TvDatabase\\HomeBundle\\Controller\\AdvancedSearchController::advancedSearchResponseAction',  'page' => NULL,  '_locale' => 'en',)), array('_route' => 'tv_database_advanced_search_response'));
        }

        // tv_database_show_broadcast
        if (preg_match('#^/(?P<_locale>[^/]+)/show/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'TvDatabase\\HomeBundle\\Controller\\ShowController::showAction',  '_locale' => 'en',)), array('_route' => 'tv_database_show_broadcast'));
        }

        // tv_database_show_tv
        if (preg_match('#^/(?P<_locale>[^/]+)/tv/(?P<id>[^/]+)(?:/(?P<date>[^/]+))?$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'TvDatabase\\HomeBundle\\Controller\\TVController::showTVAction',  'date' => 'today',  '_locale' => 'en',)), array('_route' => 'tv_database_show_tv'));
        }

        // acme_store_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\StoreBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'acme_store_default_index'));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
