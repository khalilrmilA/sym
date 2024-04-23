<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'app_conference' => [[], ['_controller' => 'App\\Controller\\ConferenceController::showReclamations'], [], [['text', '/conference']], [], [], []],
    'get_latest_reclamations' => [[], ['_controller' => 'App\\Controller\\ConferenceController::getLatestReclamations'], [], [['text', '/get-latest-reclamations']], [], [], []],
    'add_response_to_reclamation' => [['id'], ['_controller' => 'App\\Controller\\ConferenceController::addResponseToReclamation'], [], [['text', '/add-response'], ['variable', '/', '[^/]++', 'id', true], ['text', '/reclamation']], [], [], []],
    'get_responses_for_reclamation' => [['id'], ['_controller' => 'App\\Controller\\ConferenceController::getResponsesForReclamation'], [], [['text', '/get-responses'], ['variable', '/', '[^/]++', 'id', true], ['text', '/reclamation']], [], [], []],
    'app_reclamation' => [[], ['_controller' => 'App\\Controller\\ReclamationController::addReclamation'], [], [['text', '/reclamation']], [], [], []],
    'reclamationsh' => [[], ['_controller' => 'App\\Controller\\ReclamationshController::index'], [], [['text', '/b']], [], [], []],
    'reclamationsh.modifer' => [['id'], ['_controller' => 'App\\Controller\\ReclamationshController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/a']], [], [], []],
    'reclamationsh.del' => [['id'], ['_controller' => 'App\\Controller\\ReclamationshController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/b']], [], [], []],
    'reclamation_details' => [['id'], ['_controller' => 'App\\Controller\\ReclamationshController::getReclamationDetails'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reclamation/details']], [], [], []],
];
