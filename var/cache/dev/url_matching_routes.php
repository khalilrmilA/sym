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
        '/conference' => [[['_route' => 'app_conference', '_controller' => 'App\\Controller\\ConferenceController::showReclamations'], null, null, null, false, false, null]],
        '/get-latest-reclamations' => [[['_route' => 'get_latest_reclamations', '_controller' => 'App\\Controller\\ConferenceController::getLatestReclamations'], null, null, null, false, false, null]],
        '/reclamation' => [[['_route' => 'app_reclamation', '_controller' => 'App\\Controller\\ReclamationController::addReclamation'], null, null, null, false, false, null]],
        '/b' => [[['_route' => 'reclamationsh', '_controller' => 'App\\Controller\\ReclamationshController::index'], null, null, null, false, false, null]],
        '/process-text' => [[['_route' => 'process_text', '_controller' => 'App\\Controller\\TextProcessController'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
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
                .'|/reclamation/(?'
                    .'|([^/]++)/(?'
                        .'|add\\-response(*:210)'
                        .'|get\\-responses(*:232)'
                    .')'
                    .'|details/([^/]++)(*:257)'
                .')'
                .'|/a/([^/]++)(*:277)'
                .'|/b/([^/]++)(*:296)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        210 => [[['_route' => 'add_response_to_reclamation', '_controller' => 'App\\Controller\\ConferenceController::addResponseToReclamation'], ['id'], ['POST' => 0], null, false, false, null]],
        232 => [[['_route' => 'get_responses_for_reclamation', '_controller' => 'App\\Controller\\ConferenceController::getResponsesForReclamation'], ['id'], ['GET' => 0], null, false, false, null]],
        257 => [[['_route' => 'reclamation_details', '_controller' => 'App\\Controller\\ReclamationshController::getReclamationDetails'], ['id'], null, null, false, true, null]],
        277 => [[['_route' => 'reclamationsh.modifer', '_controller' => 'App\\Controller\\ReclamationshController::show'], ['id'], null, null, false, true, null]],
        296 => [
            [['_route' => 'reclamationsh.del', '_controller' => 'App\\Controller\\ReclamationshController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
