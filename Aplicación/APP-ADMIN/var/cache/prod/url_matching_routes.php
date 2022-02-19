<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
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
                .'|/api/(?'
                    .'|contenido/(?'
                        .'|obtener/([^/]++)(*:44)'
                        .'|delete/([^/]++)(*:66)'
                        .'|update/([^/]++)(*:88)'
                    .')'
                    .'|e(?'
                        .'|mpleo/(?'
                            .'|obtener/([^/]++)(*:125)'
                            .'|delete/([^/]++)(*:148)'
                            .'|update/([^/]++)(*:171)'
                        .')'
                        .'|vento/(?'
                            .'|obtener/([^/]++)(*:205)'
                            .'|delete/([^/]++)(*:228)'
                            .'|update/([^/]++)(*:251)'
                        .')'
                    .')'
                    .'|usuario/(?'
                        .'|obtener/([^/]++)(*:288)'
                        .'|delete/([^/]++)(*:311)'
                        .'|update/([^/]++)(*:334)'
                    .')'
                .')'
                .'|/contenido/([^/]++)(?'
                    .'|(*:366)'
                    .'|/edit(*:379)'
                    .'|(*:387)'
                .')'
                .'|/e(?'
                    .'|mpleo/([^/]++)(?'
                        .'|(*:418)'
                        .'|/edit(*:431)'
                        .'|(*:439)'
                    .')'
                    .'|vento/([^/]++)(?'
                        .'|(*:465)'
                        .'|/edit(*:478)'
                        .'|(*:486)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        44 => [[['_route' => 'get_one_contenido', '_controller' => 'App\\Controller\\ApiContenidoController::obtenerUno'], ['idContenido'], ['GET' => 0], null, false, true, null]],
        66 => [[['_route' => 'delete_contenido', '_controller' => 'App\\Controller\\ApiContenidoController::borrar'], ['idContenido'], ['DELETE' => 0], null, false, true, null]],
        88 => [[['_route' => 'update_contenido', '_controller' => 'App\\Controller\\ApiContenidoController::actualizar'], ['idContenido'], ['PUT' => 0], null, false, true, null]],
        125 => [[['_route' => 'get_one_empleo', '_controller' => 'App\\Controller\\ApiEmpleoController::obtenerUno'], ['idEmpleo'], ['GET' => 0], null, false, true, null]],
        148 => [[['_route' => 'delete_empleo', '_controller' => 'App\\Controller\\ApiEmpleoController::borrar'], ['idEmpleo'], ['DELETE' => 0], null, false, true, null]],
        171 => [[['_route' => 'update_empleo', '_controller' => 'App\\Controller\\ApiEmpleoController::actualizar'], ['idEmpleo'], ['PUT' => 0], null, false, true, null]],
        205 => [[['_route' => 'get_one_evento', '_controller' => 'App\\Controller\\ApiEventoController::obtenerUno'], ['idEvento'], ['GET' => 0], null, false, true, null]],
        228 => [[['_route' => 'delete_evento', '_controller' => 'App\\Controller\\ApiEventoController::borrar'], ['idEvento'], ['DELETE' => 0], null, false, true, null]],
        251 => [[['_route' => 'update_evento', '_controller' => 'App\\Controller\\ApiEventoController::actualizar'], ['idEvento'], ['PUT' => 0], null, false, true, null]],
        288 => [[['_route' => 'get_one_usuario', '_controller' => 'App\\Controller\\ApiUsuarioController::obtenerUno'], ['idUsuario'], ['GET' => 0], null, false, true, null]],
        311 => [[['_route' => 'delete_usuario', '_controller' => 'App\\Controller\\ApiUsuarioController::borrar'], ['idUsuario'], ['DELETE' => 0], null, false, true, null]],
        334 => [[['_route' => 'update_usuario', '_controller' => 'App\\Controller\\ApiUsuarioController::actualizar'], ['idUsuario'], ['PUT' => 0], null, false, true, null]],
        366 => [[['_route' => 'contenido_show', '_controller' => 'App\\Controller\\ContenidoController::show'], ['idContenido'], ['GET' => 0], null, false, true, null]],
        379 => [[['_route' => 'contenido_edit', '_controller' => 'App\\Controller\\ContenidoController::edit'], ['idContenido'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        387 => [[['_route' => 'contenido_delete', '_controller' => 'App\\Controller\\ContenidoController::delete'], ['idContenido'], ['POST' => 0], null, false, true, null]],
        418 => [[['_route' => 'empleo_show', '_controller' => 'App\\Controller\\EmpleoController::show'], ['idEmpleo'], ['GET' => 0], null, false, true, null]],
        431 => [[['_route' => 'empleo_edit', '_controller' => 'App\\Controller\\EmpleoController::edit'], ['idEmpleo'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        439 => [[['_route' => 'empleo_delete', '_controller' => 'App\\Controller\\EmpleoController::delete'], ['idEmpleo'], ['POST' => 0], null, false, true, null]],
        465 => [[['_route' => 'evento_show', '_controller' => 'App\\Controller\\EventoController::show'], ['idEvento'], ['GET' => 0], null, false, true, null]],
        478 => [[['_route' => 'evento_edit', '_controller' => 'App\\Controller\\EventoController::edit'], ['idEvento'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        486 => [
            [['_route' => 'evento_delete', '_controller' => 'App\\Controller\\EventoController::delete'], ['idEvento'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
