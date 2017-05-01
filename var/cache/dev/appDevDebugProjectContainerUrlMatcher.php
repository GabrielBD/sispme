<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ($pathinfo === '/_profiler/open') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\AnonimousController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // admin_homepage
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin_homepage');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAdminAction',  '_route' => 'admin_homepage',);
            }

            if (0 === strpos($pathinfo, '/admin/destinatario')) {
                // admin_destinatario_index
                if (rtrim($pathinfo, '/') === '/admin/destinatario') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_destinatario_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_destinatario_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\DestinatarioController::indexAction',  '_route' => 'admin_destinatario_index',);
                }
                not_admin_destinatario_index:

                // admin_destinatario_new
                if ($pathinfo === '/admin/destinatario/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_destinatario_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\DestinatarioController::newAction',  '_route' => 'admin_destinatario_new',);
                }
                not_admin_destinatario_new:

                // admin_destinatario_show
                if (preg_match('#^/admin/destinatario/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_destinatario_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_destinatario_show')), array (  '_controller' => 'AppBundle\\Controller\\DestinatarioController::showAction',));
                }
                not_admin_destinatario_show:

                // admin_destinatario_edit
                if (preg_match('#^/admin/destinatario/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_destinatario_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_destinatario_edit')), array (  '_controller' => 'AppBundle\\Controller\\DestinatarioController::editAction',));
                }
                not_admin_destinatario_edit:

                // admin_destinatario_delete
                if (preg_match('#^/admin/destinatario/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_destinatario_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_destinatario_delete')), array (  '_controller' => 'AppBundle\\Controller\\DestinatarioController::deleteAction',));
                }
                not_admin_destinatario_delete:

            }

            if (0 === strpos($pathinfo, '/admin/estado')) {
                if (0 === strpos($pathinfo, '/admin/estadoformulario')) {
                    // admin_estadoformulario_index
                    if (rtrim($pathinfo, '/') === '/admin/estadoformulario') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_estadoformulario_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'admin_estadoformulario_index');
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\EstadoFormularioController::indexAction',  '_route' => 'admin_estadoformulario_index',);
                    }
                    not_admin_estadoformulario_index:

                    // admin_estadoformulario_new
                    if ($pathinfo === '/admin/estadoformulario/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_admin_estadoformulario_new;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\EstadoFormularioController::newAction',  '_route' => 'admin_estadoformulario_new',);
                    }
                    not_admin_estadoformulario_new:

                    // admin_estadoformulario_show
                    if (preg_match('#^/admin/estadoformulario/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_estadoformulario_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_estadoformulario_show')), array (  '_controller' => 'AppBundle\\Controller\\EstadoFormularioController::showAction',));
                    }
                    not_admin_estadoformulario_show:

                    // admin_estadoformulario_edit
                    if (preg_match('#^/admin/estadoformulario/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_admin_estadoformulario_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_estadoformulario_edit')), array (  '_controller' => 'AppBundle\\Controller\\EstadoFormularioController::editAction',));
                    }
                    not_admin_estadoformulario_edit:

                    // admin_estadoformulario_delete
                    if (preg_match('#^/admin/estadoformulario/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_admin_estadoformulario_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_estadoformulario_delete')), array (  '_controller' => 'AppBundle\\Controller\\EstadoFormularioController::deleteAction',));
                    }
                    not_admin_estadoformulario_delete:

                }

                if (0 === strpos($pathinfo, '/admin/estadonota')) {
                    // admin_estadonota_index
                    if (rtrim($pathinfo, '/') === '/admin/estadonota') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_estadonota_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'admin_estadonota_index');
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\EstadoNotaController::indexAction',  '_route' => 'admin_estadonota_index',);
                    }
                    not_admin_estadonota_index:

                    // admin_estadonota_new
                    if ($pathinfo === '/admin/estadonota/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_admin_estadonota_new;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\EstadoNotaController::newAction',  '_route' => 'admin_estadonota_new',);
                    }
                    not_admin_estadonota_new:

                    // admin_estadonota_show
                    if (preg_match('#^/admin/estadonota/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_estadonota_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_estadonota_show')), array (  '_controller' => 'AppBundle\\Controller\\EstadoNotaController::showAction',));
                    }
                    not_admin_estadonota_show:

                    // admin_estadonota_edit
                    if (preg_match('#^/admin/estadonota/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_admin_estadonota_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_estadonota_edit')), array (  '_controller' => 'AppBundle\\Controller\\EstadoNotaController::editAction',));
                    }
                    not_admin_estadonota_edit:

                    // admin_estadonota_delete
                    if (preg_match('#^/admin/estadonota/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_admin_estadonota_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_estadonota_delete')), array (  '_controller' => 'AppBundle\\Controller\\EstadoNotaController::deleteAction',));
                    }
                    not_admin_estadonota_delete:

                }

            }

        }

        if (0 === strpos($pathinfo, '/formulario')) {
            // formulario_index
            if (rtrim($pathinfo, '/') === '/formulario/admin') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_formulario_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'formulario_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\FormularioController::indexAction',  '_route' => 'formulario_index',);
            }
            not_formulario_index:

            // formulario_new
            if ($pathinfo === '/formulario/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_formulario_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\FormularioController::newAction',  '_route' => 'formulario_new',);
            }
            not_formulario_new:

            // formulario_show
            if (preg_match('#^/formulario/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_formulario_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'formulario_show')), array (  '_controller' => 'AppBundle\\Controller\\FormularioController::showAction',));
            }
            not_formulario_show:

            // formulario_edit
            if (preg_match('#^/formulario/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_formulario_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'formulario_edit')), array (  '_controller' => 'AppBundle\\Controller\\FormularioController::editAction',));
            }
            not_formulario_edit:

            // formulario_confirmar
            if (preg_match('#^/formulario/(?P<id>[^/]++)/confirmar$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'formulario_confirmar')), array (  '_controller' => 'AppBundle\\Controller\\FormularioController::confirmarAction',));
            }

            // formulario_delete
            if (preg_match('#^/formulario/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_formulario_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'formulario_delete')), array (  '_controller' => 'AppBundle\\Controller\\FormularioController::deleteAction',));
            }
            not_formulario_delete:

        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/nota')) {
                // admin_nota_index
                if (rtrim($pathinfo, '/') === '/admin/nota') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_nota_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_nota_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\NotaController::indexAction',  '_route' => 'admin_nota_index',);
                }
                not_admin_nota_index:

                // admin_nota_new
                if ($pathinfo === '/admin/nota/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_nota_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\NotaController::newAction',  '_route' => 'admin_nota_new',);
                }
                not_admin_nota_new:

                // admin_nota_show
                if (preg_match('#^/admin/nota/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_nota_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nota_show')), array (  '_controller' => 'AppBundle\\Controller\\NotaController::showAction',));
                }
                not_admin_nota_show:

                // admin_nota_edit
                if (preg_match('#^/admin/nota/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_nota_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nota_edit')), array (  '_controller' => 'AppBundle\\Controller\\NotaController::editAction',));
                }
                not_admin_nota_edit:

                // admin_nota_delete
                if (preg_match('#^/admin/nota/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_nota_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nota_delete')), array (  '_controller' => 'AppBundle\\Controller\\NotaController::deleteAction',));
                }
                not_admin_nota_delete:

            }

            if (0 === strpos($pathinfo, '/admin/p')) {
                if (0 === strpos($pathinfo, '/admin/postulante')) {
                    // admin_postulante_index
                    if (rtrim($pathinfo, '/') === '/admin/postulante') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_postulante_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'admin_postulante_index');
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\PostulanteController::indexAction',  '_route' => 'admin_postulante_index',);
                    }
                    not_admin_postulante_index:

                    // admin_postulante_new
                    if ($pathinfo === '/admin/postulante/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_admin_postulante_new;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\PostulanteController::newAction',  '_route' => 'admin_postulante_new',);
                    }
                    not_admin_postulante_new:

                    // admin_postulante_show
                    if (preg_match('#^/admin/postulante/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_postulante_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_postulante_show')), array (  '_controller' => 'AppBundle\\Controller\\PostulanteController::showAction',));
                    }
                    not_admin_postulante_show:

                    // admin_postulante_edit
                    if (preg_match('#^/admin/postulante/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_admin_postulante_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_postulante_edit')), array (  '_controller' => 'AppBundle\\Controller\\PostulanteController::editAction',));
                    }
                    not_admin_postulante_edit:

                    // admin_postulante_delete
                    if (preg_match('#^/admin/postulante/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_admin_postulante_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_postulante_delete')), array (  '_controller' => 'AppBundle\\Controller\\PostulanteController::deleteAction',));
                    }
                    not_admin_postulante_delete:

                }

                if (0 === strpos($pathinfo, '/admin/preinscripcion')) {
                    // admin_preinscripcion_index
                    if (rtrim($pathinfo, '/') === '/admin/preinscripcion') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_preinscripcion_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'admin_preinscripcion_index');
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\PreinscripcionController::indexAction',  '_route' => 'admin_preinscripcion_index',);
                    }
                    not_admin_preinscripcion_index:

                    // admin_preinscripcion_new
                    if ($pathinfo === '/admin/preinscripcion/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_admin_preinscripcion_new;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\PreinscripcionController::newAction',  '_route' => 'admin_preinscripcion_new',);
                    }
                    not_admin_preinscripcion_new:

                    // admin_preinscripcion_show
                    if (preg_match('#^/admin/preinscripcion/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_preinscripcion_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_preinscripcion_show')), array (  '_controller' => 'AppBundle\\Controller\\PreinscripcionController::showAction',));
                    }
                    not_admin_preinscripcion_show:

                    // admin_preinscripcion_edit
                    if (preg_match('#^/admin/preinscripcion/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_admin_preinscripcion_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_preinscripcion_edit')), array (  '_controller' => 'AppBundle\\Controller\\PreinscripcionController::editAction',));
                    }
                    not_admin_preinscripcion_edit:

                    // admin_preinscripcion_delete
                    if (preg_match('#^/admin/preinscripcion/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_admin_preinscripcion_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_preinscripcion_delete')), array (  '_controller' => 'AppBundle\\Controller\\PreinscripcionController::deleteAction',));
                    }
                    not_admin_preinscripcion_delete:

                }

            }

            if (0 === strpos($pathinfo, '/admin/usuarioexterno')) {
                // admin_usuarioexterno_index
                if (rtrim($pathinfo, '/') === '/admin/usuarioexterno') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_usuarioexterno_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_usuarioexterno_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\UsuarioExternoController::indexAction',  '_route' => 'admin_usuarioexterno_index',);
                }
                not_admin_usuarioexterno_index:

                // admin_usuarioexterno_new
                if ($pathinfo === '/admin/usuarioexterno/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_usuarioexterno_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\UsuarioExternoController::newAction',  '_route' => 'admin_usuarioexterno_new',);
                }
                not_admin_usuarioexterno_new:

                // admin_usuarioexterno_show
                if (preg_match('#^/admin/usuarioexterno/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_usuarioexterno_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_usuarioexterno_show')), array (  '_controller' => 'AppBundle\\Controller\\UsuarioExternoController::showAction',));
                }
                not_admin_usuarioexterno_show:

                // admin_usuarioexterno_edit
                if (preg_match('#^/admin/usuarioexterno/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_usuarioexterno_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_usuarioexterno_edit')), array (  '_controller' => 'AppBundle\\Controller\\UsuarioExternoController::editAction',));
                }
                not_admin_usuarioexterno_edit:

                // admin_usuarioexterno_delete
                if (preg_match('#^/admin/usuarioexterno/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_usuarioexterno_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_usuarioexterno_delete')), array (  '_controller' => 'AppBundle\\Controller\\UsuarioExternoController::deleteAction',));
                }
                not_admin_usuarioexterno_delete:

            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
