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
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'tv_database_home_homepage');
            }

            return array (  '_controller' => 'TvDatabase\\HomeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'tv_database_home_homepage',);
        }

        // tv_database_stations_page
        if ($pathinfo === '/tvstations') {
            return array (  '_controller' => 'TvDatabase\\HomeBundle\\Controller\\DefaultController::tvStationsAction',  '_route' => 'tv_database_stations_page',);
        }

        // tv_database_program_page
        if ($pathinfo === '/advancedsearch') {
            return array (  '_controller' => 'TvDatabase\\HomeBundle\\Controller\\DefaultController::advancedSearchAction',  '_route' => 'tv_database_program_page',);
        }

        // tv_database_show_broadcast
        if (0 === strpos($pathinfo, '/show') && preg_match('#^/show/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'TvDatabase\\HomeBundle\\Controller\\DefaultController::showAction',)), array('_route' => 'tv_database_show_broadcast'));
        }

        // tv_database_show_tv
        if (0 === strpos($pathinfo, '/tv') && preg_match('#^/tv/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'TvDatabase\\HomeBundle\\Controller\\DefaultController::showTVAction',)), array('_route' => 'tv_database_show_tv'));
        }

        // acme_store_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\StoreBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'acme_store_default_index'));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
