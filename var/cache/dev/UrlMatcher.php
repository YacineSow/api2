<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/partenaires' => [[['_route' => 'add_partenaire', '_controller' => 'App\\Controller\\PartenaireController::new'], null, ['POST' => 0], null, false, false, null]],
        '/api/transaction' => [[['_route' => 'transaction', '_controller' => 'App\\Controller\\TransactionController::index'], null, null, null, false, false, null]],
        '/api/depots' => [[['_route' => 'add_depot', '_controller' => 'App\\Controller\\TransactionController::addDepot'], null, ['POST' => 0], null, false, false, null]],
        '/api/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\WariController::register'], null, ['POST' => 0], null, false, false, null]],
        '/api/login' => [
            [['_route' => 'login', '_controller' => 'App\\Controller\\WariController::login'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_login_check'], null, null, null, false, false, null],
        ],
        '/api/users/bloquer' => [[['_route' => 'userBlock', '_controller' => 'App\\Controller\\WariController::userBloquer'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/api/users/debloquer' => [[['_route' => 'userDeblock', '_controller' => 'App\\Controller\\WariController::userBloquer'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/api(?'
                    .'|/partenaire(?'
                        .'|/([^/]++)(*:72)'
                        .'|s/([^/]++)(*:89)'
                    .')'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:125)'
                    .'|/(?'
                        .'|d(?'
                            .'|ocs(?:\\.([^/]++))?(*:159)'
                            .'|epots(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:193)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:231)'
                                .')'
                            .')'
                        .')'
                        .'|contexts/(.+)(?:\\.([^/]++))?(*:270)'
                        .'|utilisateurs(?'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:311)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:349)'
                            .')'
                        .')'
                        .'|partenaires(?'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:391)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:429)'
                            .')'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        72 => [[['_route' => 'show_partenaire', '_controller' => 'App\\Controller\\PartenaireController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        89 => [[['_route' => 'update_partenaire', '_controller' => 'App\\Controller\\PartenaireController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        125 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        159 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        193 => [
            [['_route' => 'api_depots_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Depot', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_depots_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Depot', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        231 => [
            [['_route' => 'api_depots_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Depot', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_depots_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Depot', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_depots_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Depot', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        270 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        311 => [
            [['_route' => 'api_utilisateurs_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Utilisateur', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_utilisateurs_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Utilisateur', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        349 => [
            [['_route' => 'api_utilisateurs_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Utilisateur', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_utilisateurs_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Utilisateur', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_utilisateurs_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Utilisateur', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        391 => [
            [['_route' => 'api_partenaires_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Partenaire', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_partenaires_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Partenaire', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        429 => [
            [['_route' => 'api_partenaires_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Partenaire', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_partenaires_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Partenaire', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_partenaires_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Partenaire', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
