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
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/login' => [
            [['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null],
            [['_route' => 'login', '_controller' => '../src/Controller/LogiController::index'], null, null, null, false, false, null],
        ],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\LoginController::logout'], null, ['GET' => 0], null, false, false, null]],
        '/nota' => [[['_route' => 'app_nota', '_controller' => 'App\\Controller\\NotaController::index'], null, null, null, false, false, null]],
        '/nota/publica' => [[['_route' => 'app_nota_publica', '_controller' => 'App\\Controller\\NotaController::publicas'], null, null, null, false, false, null]],
        '/nota/eliminadas' => [[['_route' => 'app_nota_eliminada', '_controller' => 'App\\Controller\\NotaController::eliminadas'], null, null, null, false, false, null]],
        '/nota/busqueda' => [[['_route' => 'app_nota_busqueda', '_controller' => 'App\\Controller\\NotaController::busqueda'], null, ['POST' => 0], null, false, false, null]],
        '/nota/insert' => [[['_route' => 'new_nota', '_controller' => 'App\\Controller\\NotaController::insertar'], null, null, null, false, false, null]],
        '/register' => [
            [['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null],
            [['_route' => 'register', '_controller' => '../src/Controller/RegistrationController::register'], null, null, null, false, false, null],
        ],
        '/cambiar/passw' => [[['_route' => 'app_change_passw', '_controller' => 'App\\Controller\\RegistrationController::passw'], null, null, null, false, false, null]],
        '/cambiar/p' => [[['_route' => 'app_change_passw_post', '_controller' => 'App\\Controller\\RegistrationController::busqueda'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api(?'
                    .'|/\\.well\\-known/genid/([^/]++)(*:43)'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:78)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:108)'
                        .'|contexts/([^.]+)(?:\\.(jsonld))?(*:147)'
                        .'|notas(?'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:189)'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:215)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:253)'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:296)'
                    .'|wdt/([^/]++)(*:316)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:362)'
                            .'|router(*:376)'
                            .'|exception(?'
                                .'|(*:396)'
                                .'|\\.css(*:409)'
                            .')'
                        .')'
                        .'|(*:419)'
                    .')'
                .')'
                .'|/nota/([^/]++)/(?'
                    .'|edit(*:451)'
                    .'|delete(*:465)'
                    .'|restore(*:480)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        43 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], ['id'], null, null, false, true, null]],
        78 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        108 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        147 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        189 => [[['_route' => '_api_/notas/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Nota', '_api_operation_name' => '_api_/notas/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        215 => [
            [['_route' => '_api_/notas{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Nota', '_api_operation_name' => '_api_/notas{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/notas{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Nota', '_api_operation_name' => '_api_/notas{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        253 => [
            [['_route' => '_api_/notas/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Nota', '_api_operation_name' => '_api_/notas/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/notas/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Nota', '_api_operation_name' => '_api_/notas/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/notas/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Nota', '_api_operation_name' => '_api_/notas/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        296 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        316 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        362 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        376 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        396 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        409 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        419 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        451 => [[['_route' => 'app_nota_edit', '_controller' => 'App\\Controller\\NotaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        465 => [[['_route' => 'app_nota_delete_soft', '_controller' => 'App\\Controller\\NotaController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        480 => [
            [['_route' => 'app_nota_restaurar', '_controller' => 'App\\Controller\\NotaController::restaurar'], ['id'], ['POST' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
