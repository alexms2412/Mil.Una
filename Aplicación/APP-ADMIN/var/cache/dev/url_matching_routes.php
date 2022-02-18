<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/api/contenido/obtenerTodos' => [[['_route' => 'get_all_contenidos', '_controller' => 'App\\Controller\\ApiContenidoController::getAll'], null, ['GET' => 0], null, false, false, null]],
        '/api/contenido/new' => [[['_route' => 'add_contenido', '_controller' => 'App\\Controller\\ApiContenidoController::newContenido'], null, ['POST' => 0], null, false, false, null]],
        '/api/empleo/obtenerTodos' => [[['_route' => 'get_all_empleos', '_controller' => 'App\\Controller\\ApiEmpleoController::getAll'], null, ['GET' => 0], null, false, false, null]],
        '/api/empleo/new' => [[['_route' => 'add_empleo', '_controller' => 'App\\Controller\\ApiEmpleoController::newEmpleo'], null, ['POST' => 0], null, false, false, null]],
        '/api/evento/obtenerTodos' => [[['_route' => 'get_all_eventos', '_controller' => 'App\\Controller\\ApiEventoController::getAll'], null, ['GET' => 0], null, false, false, null]],
        '/api/evento/new' => [[['_route' => 'add_evento', '_controller' => 'App\\Controller\\ApiEventoController::newRegion'], null, ['POST' => 0], null, false, false, null]],
        '/api/usuario/obtenerTodos' => [[['_route' => 'get_all_usuarios', '_controller' => 'App\\Controller\\ApiUsuarioController::getAll'], null, ['GET' => 0], null, false, false, null]],
        '/api/usuario/new' => [[['_route' => 'add_usuario', '_controller' => 'App\\Controller\\ApiUsuarioController::newUsuario'], null, ['POST' => 0], null, false, false, null]],
        '/contenido' => [[['_route' => 'contenido_index', '_controller' => 'App\\Controller\\ContenidoController::index'], null, ['GET' => 0], null, true, false, null]],
        '/contenido/new' => [[['_route' => 'contenido_new', '_controller' => 'App\\Controller\\ContenidoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/empleo' => [[['_route' => 'empleo_index', '_controller' => 'App\\Controller\\EmpleoController::index'], null, ['GET' => 0], null, true, false, null]],
        '/empleo/new' => [[['_route' => 'empleo_new', '_controller' => 'App\\Controller\\EmpleoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/evento' => [[['_route' => 'evento_index', '_controller' => 'App\\Controller\\EventoController::index'], null, ['GET' => 0], null, true, false, null]],
        '/evento/new' => [[['_route' => 'evento_new', '_controller' => 'App\\Controller\\EventoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/main' => [[['_route' => 'main', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\EventoController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/api/(?'
                    .'|contenido/(?'
                        .'|obtener/([^/]++)(*:205)'
                        .'|delete/([^/]++)(*:228)'
                        .'|update/([^/]++)(*:251)'
                    .')'
                    .'|e(?'
                        .'|mpleo/(?'
                            .'|obtener/([^/]++)(*:289)'
                            .'|delete/([^/]++)(*:312)'
                            .'|update/([^/]++)(*:335)'
                        .')'
                        .'|vento/(?'
                            .'|obtener/([^/]++)(*:369)'
                            .'|delete/([^/]++)(*:392)'
                            .'|update/([^/]++)(*:415)'
                        .')'
                    .')'
                    .'|usuario/(?'
                        .'|obtener/([^/]++)(*:452)'
                        .'|delete/([^/]++)(*:475)'
                        .'|update/([^/]++)(*:498)'
                    .')'
                .')'
                .'|/contenido/([^/]++)(?'
                    .'|(*:530)'
                    .'|/edit(*:543)'
                    .'|(*:551)'
                .')'
                .'|/e(?'
                    .'|mpleo/([^/]++)(?'
                        .'|(*:582)'
                        .'|/edit(*:595)'
                        .'|(*:603)'
                    .')'
                    .'|vento/([^/]++)(?'
                        .'|(*:629)'
                        .'|/edit(*:642)'
                        .'|(*:650)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        205 => [[['_route' => 'get_one_contenido', '_controller' => 'App\\Controller\\ApiContenidoController::obtenerUno'], ['idContenido'], ['GET' => 0], null, false, true, null]],
        228 => [[['_route' => 'delete_contenido', '_controller' => 'App\\Controller\\ApiContenidoController::borrar'], ['idContenido'], ['DELETE' => 0], null, false, true, null]],
        251 => [[['_route' => 'update_contenido', '_controller' => 'App\\Controller\\ApiContenidoController::actualizar'], ['idContenido'], ['PUT' => 0], null, false, true, null]],
        289 => [[['_route' => 'get_one_empleo', '_controller' => 'App\\Controller\\ApiEmpleoController::obtenerUno'], ['idEmpleo'], ['GET' => 0], null, false, true, null]],
        312 => [[['_route' => 'delete_empleo', '_controller' => 'App\\Controller\\ApiEmpleoController::borrar'], ['idEmpleo'], ['DELETE' => 0], null, false, true, null]],
        335 => [[['_route' => 'update_empleo', '_controller' => 'App\\Controller\\ApiEmpleoController::actualizar'], ['idEmpleo'], ['PUT' => 0], null, false, true, null]],
        369 => [[['_route' => 'get_one_evento', '_controller' => 'App\\Controller\\ApiEventoController::obtenerUno'], ['idEvento'], ['GET' => 0], null, false, true, null]],
        392 => [[['_route' => 'delete_evento', '_controller' => 'App\\Controller\\ApiEventoController::borrar'], ['idEvento'], ['DELETE' => 0], null, false, true, null]],
        415 => [[['_route' => 'update_evento', '_controller' => 'App\\Controller\\ApiEventoController::actualizar'], ['idEvento'], ['PUT' => 0], null, false, true, null]],
        452 => [[['_route' => 'get_one_usuario', '_controller' => 'App\\Controller\\ApiUsuarioController::obtenerUno'], ['idUsuario'], ['GET' => 0], null, false, true, null]],
        475 => [[['_route' => 'delete_usuario', '_controller' => 'App\\Controller\\ApiUsuarioController::borrar'], ['idUsuario'], ['DELETE' => 0], null, false, true, null]],
        498 => [[['_route' => 'update_usuario', '_controller' => 'App\\Controller\\ApiUsuarioController::actualizar'], ['idUsuario'], ['PUT' => 0], null, false, true, null]],
        530 => [[['_route' => 'contenido_show', '_controller' => 'App\\Controller\\ContenidoController::show'], ['idContenido'], ['GET' => 0], null, false, true, null]],
        543 => [[['_route' => 'contenido_edit', '_controller' => 'App\\Controller\\ContenidoController::edit'], ['idContenido'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        551 => [[['_route' => 'contenido_delete', '_controller' => 'App\\Controller\\ContenidoController::delete'], ['idContenido'], ['POST' => 0], null, false, true, null]],
        582 => [[['_route' => 'empleo_show', '_controller' => 'App\\Controller\\EmpleoController::show'], ['idEmpleo'], ['GET' => 0], null, false, true, null]],
        595 => [[['_route' => 'empleo_edit', '_controller' => 'App\\Controller\\EmpleoController::edit'], ['idEmpleo'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        603 => [[['_route' => 'empleo_delete', '_controller' => 'App\\Controller\\EmpleoController::delete'], ['idEmpleo'], ['POST' => 0], null, false, true, null]],
        629 => [[['_route' => 'evento_show', '_controller' => 'App\\Controller\\EventoController::show'], ['idEvento'], ['GET' => 0], null, false, true, null]],
        642 => [[['_route' => 'evento_edit', '_controller' => 'App\\Controller\\EventoController::edit'], ['idEvento'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        650 => [
            [['_route' => 'evento_delete', '_controller' => 'App\\Controller\\EventoController::delete'], ['idEvento'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
