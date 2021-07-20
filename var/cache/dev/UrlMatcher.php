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
        '/' => [[['_route' => 'app_default_index', '_controller' => 'App\\Controller\\DefaultController::indexAction'], null, null, null, false, false, null]],
        '/robots.txt' => [[['_route' => 'KunstmaanSeoBundle_robots', '_format' => 'txt', '_controller' => 'Kunstmaan\\SeoBundle\\Controller\\RobotsController::indexAction'], null, null, null, false, false, null]],
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
                .'|/(nl|fr|en)/(?'
                    .'|a(?'
                        .'|dmin(?'
                            .'|/(?'
                                .'|l(?'
                                    .'|ike(?'
                                        .'|(*:209)'
                                        .'|/(?'
                                            .'|add(*:224)'
                                            .'|(\\d+)(*:237)'
                                            .'|(\\d+)/view(*:255)'
                                            .'|(\\d+)/delete(*:275)'
                                            .'|export\\.(csv|ods|xlsx)(*:305)'
                                        .')'
                                    .')'
                                    .'|og(?'
                                        .'|in(?'
                                            .'|(*:325)'
                                            .'|_check(*:339)'
                                        .')'
                                        .'|out(*:351)'
                                    .')'
                                .')'
                                .'|user(?'
                                    .'|(*:368)'
                                    .'|/(?'
                                        .'|add(*:383)'
                                        .'|(\\d+)(*:396)'
                                        .'|(\\d+)/view(*:414)'
                                        .'|(\\d+)/delete(*:434)'
                                        .'|export\\.(csv|ods|xlsx)(*:464)'
                                    .')'
                                .')'
                                .'|adminindex(*:484)'
                                .'|m(?'
                                    .'|odules(*:502)'
                                    .'|e(?'
                                        .'|dia/(?'
                                            .'|(\\d+)(*:526)'
                                            .'|d(?'
                                                .'|elete/(\\d+)(*:549)'
                                                .'|rop/(\\d+)(*:566)'
                                            .')'
                                            .'|bulk(?'
                                                .'|upload(?'
                                                    .'|/(\\d+)(*:597)'
                                                    .'|submit/(\\d+)(*:617)'
                                                .')'
                                                .'|\\-move(*:632)'
                                            .')'
                                            .'|c(?'
                                                .'|reate/(?'
                                                    .'|(\\d+)/(.+)(*:664)'
                                                    .'|modal/(\\d+)/(.+)(*:688)'
                                                .')'
                                                .'|hooser(?'
                                                    .'|(*:706)'
                                                    .'|/(\\d+)(*:720)'
                                                .')'
                                            .')'
                                            .'|move(*:734)'
                                            .'|folder/(?'
                                                .'|(\\d+)(*:757)'
                                                .'|delete/(\\d+)(*:777)'
                                                .'|subcreate/(\\d+)(*:800)'
                                                .'|empty/(\\d+)(*:819)'
                                                .'|reorder(*:834)'
                                            .')'
                                            .'|icon\\-font/chooser(*:861)'
                                        .')'
                                        .'|nu(?'
                                            .'|(*:875)'
                                            .'|/([^/]++)/items(?'
                                                .'|(*:901)'
                                                .'|/(?'
                                                    .'|add(*:916)'
                                                    .'|(\\d+)/edit(*:934)'
                                                    .'|(\\d+)/delete(*:954)'
                                                    .'|([^/]++)/move\\-(?'
                                                        .'|up(*:982)'
                                                        .'|down(*:994)'
                                                    .')'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                                .'|settings(?'
                                    .'|(*:1019)'
                                    .'|/(?'
                                        .'|bundle\\-version(*:1047)'
                                        .'|exception(?'
                                            .'|(*:1068)'
                                            .'|/(?'
                                                .'|resolve_all(*:1092)'
                                                .'|toggle_resolve/([^/]++)(*:1124)'
                                            .')'
                                        .')'
                                        .'|config/([^/]++)(*:1150)'
                                        .'|r(?'
                                            .'|edirect(?'
                                                .'|(*:1173)'
                                                .'|/(?'
                                                    .'|add(*:1189)'
                                                    .'|(\\d+)(*:1203)'
                                                    .'|(\\d+)/delete(*:1224)'
                                                    .'|export\\.(csv|xlsx|ods)(*:1255)'
                                                .')'
                                            .')'
                                            .'|obots(*:1271)'
                                        .')'
                                    .')'
                                .')'
                                .'|profile(?'
                                    .'|(*:1293)'
                                    .'|/(?'
                                        .'|edit(*:1310)'
                                        .'|change\\-password(*:1335)'
                                    .')'
                                .')'
                                .'|resetting/(?'
                                    .'|re(?'
                                        .'|quest(*:1369)'
                                        .'|set/([^/]++)(*:1390)'
                                    .')'
                                    .'|send\\-email(*:1411)'
                                    .'|check\\-email(*:1432)'
                                .')'
                                .'|google_signin_check(*:1461)'
                                .'|entity/lock/check/(\\d+)/([^/]++)(*:1502)'
                                .'|dashboard(?'
                                    .'|(*:1523)'
                                    .'|/(?'
                                        .'|widget/googleanalytics(?'
                                            .'|(*:1561)'
                                            .'|/(?'
                                                .'|setToken(*:1582)'
                                                .'|config(*:1597)'
                                                .'|resetPro(?'
                                                    .'|file(*:1621)'
                                                    .'|perty(*:1635)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|ajax/(?'
                                            .'|updateData(*:1665)'
                                            .'|getOverview/(\\d+)(*:1691)'
                                            .'|account(?'
                                                .'|s(*:1711)'
                                                .'|/save(*:1725)'
                                            .')'
                                            .'|pro(?'
                                                .'|pert(?'
                                                    .'|ies(*:1751)'
                                                    .'|y/save(*:1766)'
                                                .')'
                                                .'|file(?'
                                                    .'|s(*:1784)'
                                                    .'|/save(*:1798)'
                                                .')'
                                            .')'
                                            .'|config/(?'
                                                .'|save(*:1823)'
                                                .'|remove(*:1838)'
                                                .'|get(*:1850)'
                                            .')'
                                            .'|segment/(?'
                                                .'|add(*:1874)'
                                                .'|delete(*:1889)'
                                                .'|edit(*:1902)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                                .'|formsubmissions(?'
                                    .'|(*:1933)'
                                    .'|/(?'
                                        .'|list/(?'
                                            .'|(\\d+)(*:1959)'
                                            .'|(\\d+)/(\\d+)(*:1979)'
                                        .')'
                                        .'|export/(\\d+)\\.(csv|xlsx|ods)(*:2017)'
                                        .'|(\\d+)/delete(*:2038)'
                                    .')'
                                .')'
                                .'|n(?'
                                    .'|ode(?'
                                        .'|widgets/(?'
                                            .'|ckselecturl(*:2081)'
                                            .'|select(?'
                                                .'|url(*:2102)'
                                                .'|\\-nodes\\-lazy(?'
                                                    .'|_search(*:2134)'
                                                    .'|(*:2143)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|s(?'
                                            .'|(*:2159)'
                                            .'|/(?'
                                                .'|(\\d+)/copyfromotherlanguage(*:2199)'
                                                .'|(\\d+)/recopyfromotherlanguage(*:2237)'
                                                .'|(\\d+)/createemptypage(*:2267)'
                                                .'|(\\d+)/publish(*:2289)'
                                                .'|(\\d+)/unpublish(*:2313)'
                                                .'|(\\d+)/unschedulepublish(*:2345)'
                                                .'|(\\d+)/delete(*:2366)'
                                                .'|(\\d+)/duplicate(*:2390)'
                                                .'|(\\d+)/duplicate\\-with\\-children(*:2430)'
                                                .'|(\\d+)/revert(*:2451)'
                                                .'|(\\d+)/add(*:2469)'
                                                .'|add\\-homepage(*:2491)'
                                                .'|reorder(*:2507)'
                                                .'|(\\d+)(?:/([^/]++))?(*:2535)'
                                                .'|checkNodeVersionLock/(\\d+)/((?:0|1))(*:2580)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|ewPagePart(*:2602)'
                                .')'
                            .')'
                            .'|(*:2613)'
                        .')'
                        .'|viary/(\\d+)/(\\d+)(*:2640)'
                    .')'
                    .'|replace(*:2657)'
                .')'
                .'|/sitemap(?'
                    .'|\\-([^/\\.]++)\\.(xml)(*:2697)'
                    .'|\\.(xml)(*:2713)'
                .')'
                .'|/(nl|fr|en)/admin/settings/(?'
                    .'|translations(?'
                        .'|(*:2768)'
                        .'|/(?'
                            .'|add(*:2784)'
                            .'|(\\d+)/edit(*:2803)'
                            .'|upload(*:2818)'
                            .'|export\\.(csv|ods|xlsx)(*:2849)'
                            .'|(\\d+)/delete(*:2870)'
                            .'|i(?'
                                .'|nline\\-edit(*:2894)'
                                .'|mport(?'
                                    .'|(*:2911)'
                                    .'|\\-forced(*:2928)'
                                .')'
                            .')'
                            .'|clear\\-cache(*:2951)'
                            .'|export(*:2966)'
                        .')'
                    .')'
                    .'|users(?'
                        .'|(*:2985)'
                        .'|/(?'
                            .'|add(*:3001)'
                            .'|(\\d+)/edit(*:3020)'
                            .'|(\\d+)/delete(*:3041)'
                            .'|form\\-delete/(\\d+)(*:3068)'
                        .')'
                    .')'
                    .'|groups(?'
                        .'|(*:3088)'
                        .'|/(?'
                            .'|add(*:3104)'
                            .'|(\\d+)/edit(*:3123)'
                            .'|(\\d+)/delete(*:3144)'
                        .')'
                    .')'
                    .'|roles(?'
                        .'|(*:3163)'
                        .'|/(?'
                            .'|add(*:3179)'
                            .'|(\\d+)/edit(*:3198)'
                            .'|(\\d+)/delete(*:3219)'
                        .')'
                    .')'
                .')'
                .'|/media/cache/resolve/(?'
                    .'|([A-z0-9_-]*)/rc/([^/]++)/(.+)(*:3285)'
                    .'|([A-z0-9_-]*)/(.+)(*:3312)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        209 => [[['_route' => 'app_admin_like', '_controller' => 'App\\Controller\\LikeAdminListController::indexAction'], ['_locale'], null, null, true, false, null]],
        224 => [[['_route' => 'app_admin_like_add', '_controller' => 'App\\Controller\\LikeAdminListController::addAction'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        237 => [[['_route' => 'app_admin_like_edit', '_controller' => 'App\\Controller\\LikeAdminListController::editAction'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        255 => [[['_route' => 'app_admin_like_view', '_controller' => 'App\\Controller\\LikeAdminListController::viewAction'], ['_locale', 'id'], ['GET' => 0], null, false, false, null]],
        275 => [[['_route' => 'app_admin_like_delete', '_controller' => 'App\\Controller\\LikeAdminListController::deleteAction'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        305 => [[['_route' => 'app_admin_like_export', '_controller' => 'App\\Controller\\LikeAdminListController::exportAction'], ['_locale', '_format'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        325 => [[['_route' => 'fos_user_security_login', '_controller' => 'fos_user.security.controller:loginAction'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        339 => [[['_route' => 'fos_user_security_check', '_controller' => 'fos_user.security.controller:checkAction'], ['_locale'], ['POST' => 0], null, false, false, null]],
        351 => [[['_route' => 'fos_user_security_logout', '_controller' => 'fos_user.security.controller:logoutAction'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        368 => [[['_route' => 'app_admin_user', '_controller' => 'App\\Controller\\UserAdminListController::indexAction'], ['_locale'], null, null, true, false, null]],
        383 => [[['_route' => 'app_admin_user_add', '_controller' => 'App\\Controller\\UserAdminListController::addAction'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        396 => [[['_route' => 'app_admin_user_edit', '_controller' => 'App\\Controller\\UserAdminListController::editAction'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        414 => [[['_route' => 'app_admin_user_view', '_controller' => 'App\\Controller\\UserAdminListController::viewAction'], ['_locale', 'id'], ['GET' => 0], null, false, false, null]],
        434 => [[['_route' => 'app_admin_user_delete', '_controller' => 'App\\Controller\\UserAdminListController::deleteAction'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        464 => [[['_route' => 'app_admin_user_export', '_controller' => 'App\\Controller\\UserAdminListController::exportAction'], ['_locale', '_format'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        484 => [[['_route' => 'KunstmaanAdminBundle_homepage_admin', '_controller' => 'Kunstmaan\\AdminBundle\\Controller\\DefaultController::editIndexAction'], ['_locale'], null, null, false, false, null]],
        502 => [[['_route' => 'KunstmaanAdminBundle_modules', '_controller' => 'Kunstmaan\\AdminBundle\\Controller\\ModulesController::indexAction'], ['_locale'], null, null, true, false, null]],
        526 => [[['_route' => 'KunstmaanMediaBundle_media_show', '_controller' => 'Kunstmaan\\MediaBundle\\Controller\\MediaController::showAction'], ['_locale', 'mediaId'], null, null, false, true, null]],
        549 => [[['_route' => 'KunstmaanMediaBundle_media_delete', '_controller' => 'Kunstmaan\\MediaBundle\\Controller\\MediaController::deleteAction'], ['_locale', 'mediaId'], null, null, false, true, null]],
        566 => [[['_route' => 'KunstmaanMediaBundle_media_drop_upload', '_controller' => 'Kunstmaan\\MediaBundle\\Controller\\MediaController::dropAction'], ['_locale', 'folderId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        597 => [[['_route' => 'KunstmaanMediaBundle_media_bulk_upload', '_controller' => 'Kunstmaan\\MediaBundle\\Controller\\MediaController::bulkUploadAction'], ['_locale', 'folderId'], null, null, false, true, null]],
        617 => [[['_route' => 'KunstmaanMediaBundle_media_bulk_upload_submit', '_controller' => 'Kunstmaan\\MediaBundle\\Controller\\MediaController::bulkUploadSubmitAction'], ['_locale', 'folderId'], ['POST' => 0], null, false, true, null]],
        632 => [[['_route' => 'KunstmaanMediaBundle_media_bulk_move', '_controller' => 'Kunstmaan\\MediaBundle\\Controller\\MediaController::bulkMoveAction'], ['_locale'], null, null, false, false, null]],
        664 => [[['_route' => 'KunstmaanMediaBundle_media_create', '_controller' => 'Kunstmaan\\MediaBundle\\Controller\\MediaController::createAction'], ['_locale', 'folderId', 'type'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        688 => [[['_route' => 'KunstmaanMediaBundle_media_modal_create', '_controller' => 'Kunstmaan\\MediaBundle\\Controller\\MediaController::createModalAction'], ['_locale', 'folderId', 'type'], ['POST' => 0], null, false, true, null]],
        706 => [[['_route' => 'KunstmaanMediaBundle_chooser', '_controller' => 'Kunstmaan\\MediaBundle\\Controller\\ChooserController::chooserIndexAction'], ['_locale'], null, null, false, false, null]],
        720 => [[['_route' => 'KunstmaanMediaBundle_chooser_show_folder', '_controller' => 'Kunstmaan\\MediaBundle\\Controller\\ChooserController::chooserShowFolderAction'], ['_locale', 'folderId'], null, null, false, true, null]],
        734 => [[['_route' => 'KunstmaanMediaBundle_media_move', '_controller' => 'Kunstmaan\\MediaBundle\\Controller\\MediaController::moveMedia'], ['_locale'], ['POST' => 0], null, true, false, null]],
        757 => [[['_route' => 'KunstmaanMediaBundle_folder_show', '_controller' => 'Kunstmaan\\MediaBundle\\Controller\\FolderController::showAction'], ['_locale', 'folderId'], null, null, false, true, null]],
        777 => [[['_route' => 'KunstmaanMediaBundle_folder_delete', '_controller' => 'Kunstmaan\\MediaBundle\\Controller\\FolderController::deleteAction'], ['_locale', 'folderId'], null, null, false, true, null]],
        800 => [[['_route' => 'KunstmaanMediaBundle_folder_sub_create', '_controller' => 'Kunstmaan\\MediaBundle\\Controller\\FolderController::subCreateAction'], ['_locale', 'folderId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        819 => [[['_route' => 'KunstmaanMediaBundle_folder_empty', '_controller' => 'Kunstmaan\\MediaBundle\\Controller\\FolderController::emptyAction'], ['_locale', 'folderId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        834 => [[['_route' => 'KunstmaanMediaBundle_folder_reorder', '_controller' => 'Kunstmaan\\MediaBundle\\Controller\\FolderController::reorderAction'], ['_locale'], null, null, false, false, null]],
        861 => [[['_route' => 'KunstmaanMediaBundle_icon_font_chooser', '_controller' => 'Kunstmaan\\MediaBundle\\Controller\\IconFontController::iconFontChooserAction'], ['_locale'], null, null, false, false, null]],
        875 => [[['_route' => 'kunstmaanmenubundle_admin_menu', '_controller' => 'Kunstmaan\\MenuBundle\\Controller\\MenuAdminListController::indexAction'], ['_locale'], null, null, true, false, null]],
        901 => [[['_route' => 'kunstmaanmenubundle_admin_menuitem', '_controller' => 'Kunstmaan\\MenuBundle\\Controller\\MenuItemAdminListController::indexAction'], ['_locale', 'menuid'], null, null, false, false, null]],
        916 => [[['_route' => 'kunstmaanmenubundle_admin_menuitem_add', '_controller' => 'Kunstmaan\\MenuBundle\\Controller\\MenuItemAdminListController::addAction'], ['_locale', 'menuid'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        934 => [[['_route' => 'kunstmaanmenubundle_admin_menuitem_edit', '_controller' => 'Kunstmaan\\MenuBundle\\Controller\\MenuItemAdminListController::editAction'], ['_locale', 'menuid', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        954 => [[['_route' => 'kunstmaanmenubundle_admin_menuitem_delete', '_controller' => 'Kunstmaan\\MenuBundle\\Controller\\MenuItemAdminListController::deleteAction'], ['_locale', 'menuid', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        982 => [[['_route' => 'kunstmaanmenubundle_admin_menuitem_move_up', '_controller' => 'Kunstmaan\\MenuBundle\\Controller\\MenuItemAdminListController::moveUpAction'], ['_locale', 'menuid', 'item'], ['GET' => 0], null, false, false, null]],
        994 => [[['_route' => 'kunstmaanmenubundle_admin_menuitem_move_down', '_controller' => 'Kunstmaan\\MenuBundle\\Controller\\MenuItemAdminListController::moveDownAction'], ['_locale', 'menuid', 'item'], ['GET' => 0], null, false, false, null]],
        1019 => [[['_route' => 'KunstmaanAdminBundle_settings', '_controller' => 'Kunstmaan\\AdminBundle\\Controller\\SettingsController::indexAction'], ['_locale'], null, null, true, false, null]],
        1047 => [[['_route' => 'KunstmaanAdminBundle_settings_bundle_version', '_controller' => 'Kunstmaan\\AdminBundle\\Controller\\SettingsController::bundleVersionAction'], ['_locale'], null, null, false, false, null]],
        1068 => [[['_route' => 'kunstmaanadminbundle_admin_exception', '_controller' => 'Kunstmaan\\AdminBundle\\Controller\\ExceptionController::indexAction'], ['_locale'], null, null, true, false, null]],
        1092 => [[['_route' => 'kunstmaanadminbundle_admin_exception_resolve_all', '_controller' => 'Kunstmaan\\AdminBundle\\Controller\\ExceptionController::resolveAllAction'], ['_locale'], null, null, false, false, null]],
        1124 => [[['_route' => 'kunstmaanadminbundle_admin_exception_toggle_resolve', '_controller' => 'Kunstmaan\\AdminBundle\\Controller\\ExceptionController::toggleResolveAction'], ['_locale', 'id'], null, null, false, true, null]],
        1150 => [[['_route' => 'kunstmaanconfigbundle_default', '_controller' => 'kunstmaan_config.controller.config:indexAction'], ['_locale', 'internalName'], null, null, false, true, null]],
        1173 => [[['_route' => 'kunstmaanredirectbundle_admin_redirect', '_controller' => 'Kunstmaan\\RedirectBundle\\Controller\\RedirectAdminListController::indexAction'], ['_locale'], null, null, true, false, null]],
        1189 => [[['_route' => 'kunstmaanredirectbundle_admin_redirect_add', '_controller' => 'Kunstmaan\\RedirectBundle\\Controller\\RedirectAdminListController::addAction'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1203 => [[['_route' => 'kunstmaanredirectbundle_admin_redirect_edit', '_controller' => 'Kunstmaan\\RedirectBundle\\Controller\\RedirectAdminListController::editAction'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1224 => [[['_route' => 'kunstmaanredirectbundle_admin_redirect_delete', '_controller' => 'Kunstmaan\\RedirectBundle\\Controller\\RedirectAdminListController::deleteAction'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1255 => [[['_route' => 'kunstmaanredirectbundle_admin_redirect_export', '_controller' => 'Kunstmaan\\RedirectBundle\\Controller\\RedirectAdminListController::exportAction'], ['_locale', '_format'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1271 => [[['_route' => 'KunstmaanSeoBundle_settings_robots', '_controller' => 'Kunstmaan\\SeoBundle\\Controller\\Admin\\SettingsController::robotsSettingsAction'], ['_locale'], null, null, true, false, null]],
        1293 => [[['_route' => 'fos_user_profile_show', '_controller' => 'fos_user.profile.controller:showAction'], ['_locale'], ['GET' => 0], null, true, false, null]],
        1310 => [[['_route' => 'fos_user_profile_edit', '_controller' => 'fos_user.profile.controller:editAction'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1335 => [[['_route' => 'fos_user_change_password', '_controller' => 'fos_user.change_password.controller:changePasswordAction'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1369 => [[['_route' => 'fos_user_resetting_request', '_controller' => 'fos_user.resetting.controller:requestAction'], ['_locale'], ['GET' => 0], null, false, false, null]],
        1390 => [[['_route' => 'fos_user_resetting_reset', '_controller' => 'fos_user.resetting.controller:resetAction'], ['_locale', 'token'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1411 => [[['_route' => 'fos_user_resetting_send_email', '_controller' => 'fos_user.resetting.controller:sendEmailAction'], ['_locale'], ['POST' => 0], null, false, false, null]],
        1432 => [[['_route' => 'fos_user_resetting_check_email', '_controller' => 'fos_user.resetting.controller:checkEmailAction'], ['_locale'], ['GET' => 0], null, false, false, null]],
        1461 => [[['_route' => 'KunstmaanAdminBundle_oauth_signin', '_controller' => 'KunstmaanAdminBundle:OAuth:check'], ['_locale'], null, null, false, false, null]],
        1502 => [[['_route' => 'KunstmaanAdminListBundle_entity_lock_check', '_controller' => 'Kunstmaan\\AdminListBundle\\Controller\\EntityLockCheckController::checkAction'], ['_locale', 'id', 'repository'], null, null, false, true, null]],
        1523 => [[['_route' => 'kunstmaan_dashboard', '_controller' => 'Kunstmaan\\DashboardBundle\\Controller\\DashboardController::indexAction'], ['_locale'], null, null, true, false, null]],
        1561 => [[['_route' => 'KunstmaanDashboardBundle_widget_googleanalytics', '_controller' => 'Kunstmaan\\DashboardBundle\\Controller\\GoogleAnalyticsController::widgetAction'], ['_locale'], null, null, true, false, null]],
        1582 => [[['_route' => 'KunstmaanDashboardBundle_setToken', '_controller' => 'Kunstmaan\\DashboardBundle\\Controller\\GoogleAnalyticsController::setTokenAction'], ['_locale'], null, null, true, false, null]],
        1597 => [[['_route' => 'KunstmaanDashboardBundle_Config', '_controller' => 'Kunstmaan\\DashboardBundle\\Controller\\GoogleAnalyticsController::configAction'], ['_locale'], null, null, false, false, null]],
        1621 => [[['_route' => 'KunstmaanDashboardBundle_analytics_resetProfile', '_controller' => 'Kunstmaan\\DashboardBundle\\Controller\\GoogleAnalyticsController::resetProfileAction'], ['_locale'], null, null, false, false, null]],
        1635 => [[['_route' => 'KunstmaanDashboardBundle_analytics_resetProperty', '_controller' => 'Kunstmaan\\DashboardBundle\\Controller\\GoogleAnalyticsController::resetPropertyAction'], ['_locale'], null, null, false, false, null]],
        1665 => [[['_route' => 'KunstmaanDashboardBundle_analytics_update', '_controller' => 'Kunstmaan\\DashboardBundle\\Controller\\GoogleAnalyticsAJAXController::runUpdateAction'], ['_locale'], null, null, false, false, null]],
        1691 => [[['_route' => 'KunstmaanDashboardBundle_analytics_overview_ajax', '_controller' => 'Kunstmaan\\DashboardBundle\\Controller\\GoogleAnalyticsAJAXController::getOverviewAction'], ['_locale', 'id'], null, null, false, true, null]],
        1711 => [[['_route' => 'kunstmaan_dashboard_ajax_accounts', '_controller' => 'Kunstmaan\\DashboardBundle\\Controller\\GoogleAnalyticsAJAXController::getAccountsAction'], ['_locale'], null, null, true, false, null]],
        1725 => [[['_route' => 'kunstmaan_dashboard_ajax_account_save', '_controller' => 'Kunstmaan\\DashboardBundle\\Controller\\GoogleAnalyticsAJAXController::saveAccountAction'], ['_locale'], null, null, false, false, null]],
        1751 => [[['_route' => 'kunstmaan_dashboard_ajax_properties', '_controller' => 'Kunstmaan\\DashboardBundle\\Controller\\GoogleAnalyticsAJAXController::getPropertiesAction'], ['_locale'], null, null, true, false, null]],
        1766 => [[['_route' => 'kunstmaan_dashboard_ajax_property_save', '_controller' => 'Kunstmaan\\DashboardBundle\\Controller\\GoogleAnalyticsAJAXController::savePropertyAction'], ['_locale'], null, null, false, false, null]],
        1784 => [[['_route' => 'kunstmaan_dashboard_ajax_profiles', '_controller' => 'Kunstmaan\\DashboardBundle\\Controller\\GoogleAnalyticsAJAXController::getProfilesAction'], ['_locale'], null, null, true, false, null]],
        1798 => [[['_route' => 'kunstmaan_dashboard_ajax_profile_save', '_controller' => 'Kunstmaan\\DashboardBundle\\Controller\\GoogleAnalyticsAJAXController::saveProfileAction'], ['_locale'], null, null, false, false, null]],
        1823 => [[['_route' => 'kunstmaan_dashboard_ajax_config_save', '_controller' => 'Kunstmaan\\DashboardBundle\\Controller\\GoogleAnalyticsAJAXController::saveConfigAction'], ['_locale'], null, null, false, false, null]],
        1838 => [[['_route' => 'kunstmaan_dashboard_ajax_config_remove', '_controller' => 'Kunstmaan\\DashboardBundle\\Controller\\GoogleAnalyticsAJAXController::removeConfigAction'], ['_locale'], null, null, false, false, null]],
        1850 => [[['_route' => 'kunstmaan_dashboard_ajax_config_get', '_controller' => 'Kunstmaan\\DashboardBundle\\Controller\\GoogleAnalyticsAJAXController::getConfigAction'], ['_locale'], null, null, false, false, null]],
        1874 => [[['_route' => 'kunstmaan_dashboard_ajax_segment_add', '_controller' => 'Kunstmaan\\DashboardBundle\\Controller\\GoogleAnalyticsAJAXController::addSegmentAction'], ['_locale'], null, null, true, false, null]],
        1889 => [[['_route' => 'kunstmaan_dashboard_ajax_segment_delete', '_controller' => 'Kunstmaan\\DashboardBundle\\Controller\\GoogleAnalyticsAJAXController::deleteSegmentAction'], ['_locale'], null, null, false, false, null]],
        1902 => [[['_route' => 'kunstmaan_dashboard_ajax_segment_edit', '_controller' => 'Kunstmaan\\DashboardBundle\\Controller\\GoogleAnalyticsAJAXController::editSegmentAction'], ['_locale'], null, null, false, false, null]],
        1933 => [[['_route' => 'KunstmaanFormBundle_formsubmissions', '_controller' => 'Kunstmaan\\FormBundle\\Controller\\FormSubmissionsController::indexAction'], ['_locale'], null, null, true, false, null]],
        1959 => [[['_route' => 'KunstmaanFormBundle_formsubmissions_list', '_controller' => 'Kunstmaan\\FormBundle\\Controller\\FormSubmissionsController::listAction'], ['_locale', 'nodeTranslationId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1979 => [[['_route' => 'KunstmaanFormBundle_formsubmissions_list_edit', '_controller' => 'Kunstmaan\\FormBundle\\Controller\\FormSubmissionsController::editAction'], ['_locale', 'nodeTranslationId', 'submissionId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        2017 => [[['_route' => 'KunstmaanFormBundle_formsubmissions_export', '_controller' => 'Kunstmaan\\FormBundle\\Controller\\FormSubmissionsController::exportAction'], ['_locale', 'nodeTranslationId', '_format'], ['GET' => 0], null, false, true, null]],
        2038 => [[['_route' => 'KunstmaanFormBundle_formsubmissions_delete', '_controller' => 'Kunstmaan\\FormBundle\\Controller\\FormSubmissionsController::deleteAction'], ['_locale', 'id'], ['POST' => 0], null, false, false, null]],
        2081 => [[['_route' => 'KunstmaanNodeBundle_ckselecturl', '_controller' => 'Kunstmaan\\NodeBundle\\Controller\\WidgetsController::ckSelectLinkAction'], ['_locale'], null, null, false, false, null]],
        2102 => [[['_route' => 'KunstmaanNodeBundle_selecturl', '_controller' => 'Kunstmaan\\NodeBundle\\Controller\\WidgetsController::selectLinkAction'], ['_locale'], null, null, false, false, null]],
        2134 => [[['_route' => 'KunstmaanNodeBundle_nodes_lazy_search', '_controller' => 'Kunstmaan\\NodeBundle\\Controller\\WidgetsController::selectNodesLazySearch'], ['_locale'], null, null, false, false, null]],
        2143 => [[['_route' => 'KunstmaanNodeBundle_nodes_lazy', '_controller' => 'Kunstmaan\\NodeBundle\\Controller\\WidgetsController::selectNodesLazy'], ['_locale'], null, null, false, false, null]],
        2159 => [[['_route' => 'KunstmaanNodeBundle_nodes', '_controller' => 'Kunstmaan\\NodeBundle\\Controller\\NodeAdminController::indexAction'], ['_locale'], null, null, true, false, null]],
        2199 => [[['_route' => 'KunstmaanNodeBundle_nodes_copyfromotherlanguage', '_controller' => 'Kunstmaan\\NodeBundle\\Controller\\NodeAdminController::copyFromOtherLanguageAction'], ['_locale', 'id'], ['GET' => 0], null, false, false, null]],
        2237 => [[['_route' => 'KunstmaanNodeBundle_nodes_recopyfromotherlanguage', '_controller' => 'Kunstmaan\\NodeBundle\\Controller\\NodeAdminController::recopyFromOtherLanguageAction'], ['_locale', 'id'], ['POST' => 0], null, false, false, null]],
        2267 => [[['_route' => 'KunstmaanNodeBundle_nodes_createemptypage', '_controller' => 'Kunstmaan\\NodeBundle\\Controller\\NodeAdminController::createEmptyPageAction'], ['_locale', 'id'], ['GET' => 0], null, false, false, null]],
        2289 => [[['_route' => 'KunstmaanNodeBundle_nodes_publish', '_controller' => 'Kunstmaan\\NodeBundle\\Controller\\NodeAdminController::publishAction'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2313 => [[['_route' => 'KunstmaanNodeBundle_nodes_unpublish', '_controller' => 'Kunstmaan\\NodeBundle\\Controller\\NodeAdminController::unPublishAction'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2345 => [[['_route' => 'KunstmaanNodeBundle_nodes_unschedule_publish', '_controller' => 'Kunstmaan\\NodeBundle\\Controller\\NodeAdminController::unSchedulePublishAction'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2366 => [[['_route' => 'KunstmaanNodeBundle_nodes_delete', '_controller' => 'Kunstmaan\\NodeBundle\\Controller\\NodeAdminController::deleteAction'], ['_locale', 'id'], ['POST' => 0], null, false, false, null]],
        2390 => [[['_route' => 'KunstmaanNodeBundle_nodes_duplicate', '_controller' => 'Kunstmaan\\NodeBundle\\Controller\\NodeAdminController::duplicateAction'], ['_locale', 'id'], ['POST' => 0], null, false, false, null]],
        2430 => [[['_route' => 'KunstmaanNodeBundle_nodes_duplicate_with_children', '_controller' => 'Kunstmaan\\NodeBundle\\Controller\\NodeAdminController::duplicateWithChildrenAction'], ['_locale', 'id'], ['POST' => 0], null, false, false, null]],
        2451 => [[['_route' => 'KunstmaanNodeBundle_nodes_revert', 'subaction' => 'public', '_controller' => 'Kunstmaan\\NodeBundle\\Controller\\NodeAdminController::revertAction'], ['_locale', 'id'], ['GET' => 0], null, false, false, null]],
        2469 => [[['_route' => 'KunstmaanNodeBundle_nodes_add', '_controller' => 'Kunstmaan\\NodeBundle\\Controller\\NodeAdminController::addAction'], ['_locale', 'id'], ['POST' => 0], null, false, false, null]],
        2491 => [[['_route' => 'KunstmaanNodeBundle_nodes_add_homepage', '_controller' => 'Kunstmaan\\NodeBundle\\Controller\\NodeAdminController::addHomepageAction'], ['_locale'], ['POST' => 0], null, false, false, null]],
        2507 => [[['_route' => 'KunstmaanNodeBundle_nodes_reorder', '_controller' => 'Kunstmaan\\NodeBundle\\Controller\\NodeAdminController::reorderAction'], ['_locale'], ['POST' => 0], null, false, false, null]],
        2535 => [[['_route' => 'KunstmaanNodeBundle_nodes_edit', 'subaction' => 'public', '_controller' => 'Kunstmaan\\NodeBundle\\Controller\\NodeAdminController::editAction'], ['_locale', 'id', 'subaction'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        2580 => [[['_route' => 'KunstmaanNodeBundle_nodes_versionlock_check', '_controller' => 'Kunstmaan\\NodeBundle\\Controller\\NodeAdminController::checkNodeVersionLockAction'], ['_locale', 'id', 'public'], null, null, false, true, null]],
        2602 => [[['_route' => 'KunstmaanPagePartBundle_admin_newpagepart', '_controller' => 'Kunstmaan\\PagePartBundle\\Controller\\PagePartAdminController::newPagePartAction'], ['_locale'], null, null, false, false, null]],
        2613 => [[['_route' => 'KunstmaanAdminBundle_homepage', '_controller' => 'Kunstmaan\\AdminBundle\\Controller\\DefaultController::indexAction'], ['_locale'], null, null, true, false, null]],
        2640 => [[['_route' => 'KunstmaanMediaBundle_aviary', '_controller' => 'Kunstmaan\\MediaBundle\\Controller\\AviaryController::indexAction'], ['_locale', 'folderId', 'mediaId'], null, null, false, true, null]],
        2657 => [[['_route' => 'KunstmaanNodeBundle_urlchooser_replace', '_controller' => 'kunstmaan_node.url_replace.controller:replaceURLAction'], ['_locale'], null, null, false, false, null]],
        2697 => [[['_route' => 'KunstmaanSitemapBundle_sitemap', '_controller' => 'Kunstmaan\\SitemapBundle\\Controller\\SitemapController::sitemapAction'], ['locale', '_format'], null, null, false, true, null]],
        2713 => [[['_route' => 'KunstmaanSitemapBundle_sitemapindex', '_controller' => 'Kunstmaan\\SitemapBundle\\Controller\\SitemapController::sitemapIndexAction'], ['_format'], null, null, false, true, null]],
        2768 => [[['_route' => 'KunstmaanTranslatorBundle_settings_translations', '_controller' => 'Kunstmaan\\TranslatorBundle\\Controller\\TranslatorController::indexAction'], ['_locale'], null, null, true, false, null]],
        2784 => [[['_route' => 'KunstmaanTranslatorBundle_settings_translations_add', '_controller' => 'Kunstmaan\\TranslatorBundle\\Controller\\TranslatorController::addAction'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2803 => [[['_route' => 'KunstmaanTranslatorBundle_settings_translations_edit', '_controller' => 'Kunstmaan\\TranslatorBundle\\Controller\\TranslatorController::editAction'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2818 => [[['_route' => 'KunstmaanTranslatorBundle_settings_translations_upload', '_controller' => 'Kunstmaan\\TranslatorBundle\\Controller\\TranslatorController::uploadFileAction'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2849 => [[['_route' => 'KunstmaanTranslatorBundle_settings_translations_export', '_controller' => 'Kunstmaan\\TranslatorBundle\\Controller\\TranslatorController::exportAction'], ['_locale', '_format'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        2870 => [[['_route' => 'KunstmaanTranslatorBundle_settings_translations_delete', '_controller' => 'Kunstmaan\\TranslatorBundle\\Controller\\TranslatorController::deleteAction'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2894 => [[['_route' => 'KunstmaanTranslatorBundle_settings_translations_inline_edit', '_controller' => 'Kunstmaan\\TranslatorBundle\\Controller\\TranslatorController::inlineEditAction'], ['_locale'], ['POST' => 0], null, false, false, null]],
        2911 => [[['_route' => 'KunstmaanTranslatorBundle_command_import', '_controller' => 'Kunstmaan\\TranslatorBundle\\Controller\\TranslatorCommandController::importAction'], ['_locale'], null, null, false, false, null]],
        2928 => [[['_route' => 'KunstmaanTranslatorBundle_command_import_forced', '_controller' => 'Kunstmaan\\TranslatorBundle\\Controller\\TranslatorCommandController::importForcedAction'], ['_locale'], null, null, false, false, null]],
        2951 => [[['_route' => 'KunstmaanTranslatorBundle_command_clear_cache', '_controller' => 'Kunstmaan\\TranslatorBundle\\Controller\\TranslatorCommandController::clearCacheAction'], ['_locale'], null, null, false, false, null]],
        2966 => [[['_route' => 'KunstmaanTranslatorBundle_command_export', '_controller' => 'Kunstmaan\\TranslatorBundle\\Controller\\TranslatorCommandController::exportAction'], ['_locale'], null, null, false, false, null]],
        2985 => [[['_route' => 'KunstmaanUserManagementBundle_settings_users', '_controller' => 'Kunstmaan\\UserManagementBundle\\Controller\\UsersController::listAction'], ['_locale'], null, null, true, false, null]],
        3001 => [[['_route' => 'KunstmaanUserManagementBundle_settings_users_add', '_controller' => 'Kunstmaan\\UserManagementBundle\\Controller\\UsersController::addAction'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        3020 => [[['_route' => 'KunstmaanUserManagementBundle_settings_users_edit', '_controller' => 'Kunstmaan\\UserManagementBundle\\Controller\\UsersController::editAction'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        3041 => [[['_route' => 'KunstmaanUserManagementBundle_settings_users_delete', '_controller' => 'Kunstmaan\\UserManagementBundle\\Controller\\UsersController::deleteAction'], ['_locale', 'id'], ['POST' => 0], null, false, false, null]],
        3068 => [[['_route' => 'KunstmaanUserManagementBundle_settings_users_form_delete', '_controller' => 'Kunstmaan\\UserManagementBundle\\Controller\\UsersController::deleteFormAction'], ['_locale', 'id'], ['POST' => 0], null, false, true, null]],
        3088 => [[['_route' => 'KunstmaanUserManagementBundle_settings_groups', '_controller' => 'Kunstmaan\\UserManagementBundle\\Controller\\GroupsController::listAction'], ['_locale'], null, null, true, false, null]],
        3104 => [[['_route' => 'KunstmaanUserManagementBundle_settings_groups_add', '_controller' => 'Kunstmaan\\UserManagementBundle\\Controller\\GroupsController::addAction'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        3123 => [[['_route' => 'KunstmaanUserManagementBundle_settings_groups_edit', '_controller' => 'Kunstmaan\\UserManagementBundle\\Controller\\GroupsController::editAction'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        3144 => [[['_route' => 'KunstmaanUserManagementBundle_settings_groups_delete', '_controller' => 'Kunstmaan\\UserManagementBundle\\Controller\\GroupsController::deleteAction'], ['_locale', 'id'], ['POST' => 0], null, false, false, null]],
        3163 => [[['_route' => 'KunstmaanUserManagementBundle_settings_roles', '_controller' => 'Kunstmaan\\UserManagementBundle\\Controller\\RolesController::listAction'], ['_locale'], null, null, true, false, null]],
        3179 => [[['_route' => 'KunstmaanUserManagementBundle_settings_roles_add', '_controller' => 'Kunstmaan\\UserManagementBundle\\Controller\\RolesController::addAction'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        3198 => [[['_route' => 'KunstmaanUserManagementBundle_settings_roles_edit', '_controller' => 'Kunstmaan\\UserManagementBundle\\Controller\\RolesController::editAction'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        3219 => [[['_route' => 'KunstmaanUserManagementBundle_settings_roles_delete', '_controller' => 'Kunstmaan\\UserManagementBundle\\Controller\\RolesController::deleteAction'], ['_locale', 'id'], ['POST' => 0], null, false, false, null]],
        3285 => [[['_route' => 'liip_imagine_filter_runtime', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction'], ['filter', 'hash', 'path'], ['GET' => 0], null, false, true, null]],
        3312 => [
            [['_route' => 'liip_imagine_filter', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction'], ['filter', 'path'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
