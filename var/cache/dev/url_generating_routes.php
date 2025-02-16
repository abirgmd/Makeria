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
    '_profiler_font' => [['fontName'], ['_controller' => 'web_profiler.controller.profiler::fontAction'], [], [['text', '.woff2'], ['variable', '/', '[^/\\.]++', 'fontName', true], ['text', '/_profiler/font']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'app_categorie_index' => [[], ['_controller' => 'App\\Controller\\CategorieController::index'], [], [['text', '/categorie']], [], [], []],
    'app_categorie_new' => [[], ['_controller' => 'App\\Controller\\CategorieController::new'], [], [['text', '/categorie/new']], [], [], []],
    'app_categorie_show' => [['id'], ['_controller' => 'App\\Controller\\CategorieController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/categorie']], [], [], []],
    'app_categorie_edit' => [['id'], ['_controller' => 'App\\Controller\\CategorieController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/categorie']], [], [], []],
    'app_categorie_delete' => [['id'], ['_controller' => 'App\\Controller\\CategorieController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/categorie']], [], [], []],
    'app_commentaire_index' => [[], ['_controller' => 'App\\Controller\\CommentaireController::index'], [], [['text', '/commentaire']], [], [], []],
    'app_commentaire_new' => [[], ['_controller' => 'App\\Controller\\CommentaireController::new'], [], [['text', '/commentaire/new']], [], [], []],
    'app_commentaire_show' => [['id'], ['_controller' => 'App\\Controller\\CommentaireController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/commentaire']], [], [], []],
    'app_commentaire_edit' => [['id'], ['_controller' => 'App\\Controller\\CommentaireController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/commentaire']], [], [], []],
    'app_commentaire_delete' => [['id'], ['_controller' => 'App\\Controller\\CommentaireController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/commentaire']], [], [], []],
    'app_evaluation_index' => [[], ['_controller' => 'App\\Controller\\EvaluationController::index'], [], [['text', '/evaluation']], [], [], []],
    'app_evaluation_new' => [[], ['_controller' => 'App\\Controller\\EvaluationController::new'], [], [['text', '/evaluation/new']], [], [], []],
    'app_evaluation_show' => [['id'], ['_controller' => 'App\\Controller\\EvaluationController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/evaluation']], [], [], []],
    'app_evaluation_edit' => [['id'], ['_controller' => 'App\\Controller\\EvaluationController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/evaluation']], [], [], []],
    'app_evaluation_delete' => [['id'], ['_controller' => 'App\\Controller\\EvaluationController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/evaluation']], [], [], []],
    'app_event_index' => [[], ['_controller' => 'App\\Controller\\EventController::index'], [], [['text', '/event']], [], [], []],
    'app_event_new' => [[], ['_controller' => 'App\\Controller\\EventController::new'], [], [['text', '/event/new']], [], [], []],
    'app_event_show' => [['id'], ['_controller' => 'App\\Controller\\EventController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/event']], [], [], []],
    'app_event_edit' => [['id'], ['_controller' => 'App\\Controller\\EventController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/event']], [], [], []],
    'app_event_delete' => [['id'], ['_controller' => 'App\\Controller\\EventController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/event']], [], [], []],
    'app_message_index' => [[], ['_controller' => 'App\\Controller\\MessageController::index'], [], [['text', '/message']], [], [], []],
    'app_message_new' => [[], ['_controller' => 'App\\Controller\\MessageController::new'], [], [['text', '/message/new']], [], [], []],
    'app_message_show' => [['id'], ['_controller' => 'App\\Controller\\MessageController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/message']], [], [], []],
    'app_message_edit' => [['id'], ['_controller' => 'App\\Controller\\MessageController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/message']], [], [], []],
    'app_message_delete' => [['id'], ['_controller' => 'App\\Controller\\MessageController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/message/message']], [], [], []],
    'app_message_delete2' => [['id'], ['_controller' => 'App\\Controller\\MessageController::delete2'], [], [['text', '/delete2'], ['variable', '/', '[^/]++', 'id', true], ['text', '/message/message']], [], [], []],
    'app_homepage' => [[], ['_controller' => 'App\\Controller\\PageController::index'], [], [['text', '/']], [], [], []],
    'app_about' => [[], ['_controller' => 'App\\Controller\\PageController::aboutus'], [], [['text', '/about.html']], [], [], []],
    'app_produits' => [[], ['_controller' => 'App\\Controller\\PageController::product'], [], [['text', '/photography.html']], [], [], []],
    'app_blog' => [[], ['_controller' => 'App\\Controller\\PageController::blog'], [], [['text', '/blog.html']], [], [], []],
    'app_contact' => [[], ['_controller' => 'App\\Controller\\PageController::contact'], [], [['text', '/contact.html']], [], [], []],
    'app_detail' => [['id'], ['id' => '1', '_controller' => 'App\\Controller\\PageController::detail'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/detail']], [], [], []],
    'app_bdetail' => [['id'], ['_controller' => 'App\\Controller\\PageController::bdetail'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/bdetail']], [], [], []],
    'app_forum' => [[], ['_controller' => 'App\\Controller\\PageController::forum'], [], [['text', '/forum']], [], [], []],
    'app_dashboard' => [[], ['_controller' => 'App\\Controller\\PageController::dashboard'], [], [['text', '/dashboard']], [], [], []],
    'app_produit_index' => [[], ['_controller' => 'App\\Controller\\ProduitController::index'], [], [['text', '/produit/produit']], [], [], []],
    'app_produit_new' => [[], ['_controller' => 'App\\Controller\\ProduitController::new'], [], [['text', '/produit/new']], [], [], []],
    'app_produit_show' => [['id'], ['_controller' => 'App\\Controller\\ProduitController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/produit']], [], [], []],
    'app_produit_edit' => [['id'], ['_controller' => 'App\\Controller\\ProduitController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/produit']], [], [], []],
    'app_produit_delete' => [['id'], ['_controller' => 'App\\Controller\\ProduitController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/produit']], [], [], []],
    'app_reclamation_index' => [[], ['_controller' => 'App\\Controller\\ReclamationController::index'], [], [['text', '/reclamation']], [], [], []],
    'app_reclamation_new' => [[], ['_controller' => 'App\\Controller\\ReclamationController::new'], [], [['text', '/reclamation/new']], [], [], []],
    'app_reclamation_show' => [['id'], ['_controller' => 'App\\Controller\\ReclamationController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reclamation']], [], [], []],
    'app_reclamation_edit' => [['id'], ['_controller' => 'App\\Controller\\ReclamationController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/reclamation']], [], [], []],
    'app_reclamation_delete' => [['id'], ['_controller' => 'App\\Controller\\ReclamationController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reclamation']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_reply_index' => [[], ['_controller' => 'App\\Controller\\ReplyController::index'], [], [['text', '/reply']], [], [], []],
    'app_reply_new' => [[], ['_controller' => 'App\\Controller\\ReplyController::new'], [], [['text', '/reply/new']], [], [], []],
    'app_reply_show' => [['id'], ['_controller' => 'App\\Controller\\ReplyController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reply']], [], [], []],
    'app_reply_edit' => [['id'], ['_controller' => 'App\\Controller\\ReplyController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/reply']], [], [], []],
    'app_reply_delete' => [['id'], ['_controller' => 'App\\Controller\\ReplyController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/reply/reply']], [], [], []],
    'app_reply_delete2' => [['id'], ['_controller' => 'App\\Controller\\ReplyController::delete2'], [], [['text', '/delete2'], ['variable', '/', '[^/]++', 'id', true], ['text', '/reply/reply']], [], [], []],
    'app_reponses_index' => [[], ['_controller' => 'App\\Controller\\ReponsesController::index'], [], [['text', '/reponses']], [], [], []],
    'app_reponses_new' => [[], ['_controller' => 'App\\Controller\\ReponsesController::new'], [], [['text', '/reponses/new']], [], [], []],
    'app_reponses_show' => [['id'], ['_controller' => 'App\\Controller\\ReponsesController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reponses']], [], [], []],
    'app_reponses_edit' => [['id'], ['_controller' => 'App\\Controller\\ReponsesController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/reponses']], [], [], []],
    'app_reponses_delete' => [['id'], ['_controller' => 'App\\Controller\\ReponsesController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reponses']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'app_user_index' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/user']], [], [], []],
    'app_user_new' => [[], ['_controller' => 'App\\Controller\\UserController::new'], [], [['text', '/user/new']], [], [], []],
    'app_artist_add' => [[], ['_controller' => 'App\\Controller\\UserController::artist'], [], [['text', '/user/new/artist']], [], [], []],
    'app_user_show' => [['id'], ['_controller' => 'App\\Controller\\UserController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
    'app_user_edit' => [['id'], ['_controller' => 'App\\Controller\\UserController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
    'app_user_delete' => [['id'], ['_controller' => 'App\\Controller\\UserController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
    'App\Controller\CategorieController::index' => [[], ['_controller' => 'App\\Controller\\CategorieController::index'], [], [['text', '/categorie']], [], [], []],
    'App\Controller\CategorieController::new' => [[], ['_controller' => 'App\\Controller\\CategorieController::new'], [], [['text', '/categorie/new']], [], [], []],
    'App\Controller\CategorieController::show' => [['id'], ['_controller' => 'App\\Controller\\CategorieController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/categorie']], [], [], []],
    'App\Controller\CategorieController::edit' => [['id'], ['_controller' => 'App\\Controller\\CategorieController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/categorie']], [], [], []],
    'App\Controller\CategorieController::delete' => [['id'], ['_controller' => 'App\\Controller\\CategorieController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/categorie']], [], [], []],
    'App\Controller\CommentaireController::index' => [[], ['_controller' => 'App\\Controller\\CommentaireController::index'], [], [['text', '/commentaire']], [], [], []],
    'App\Controller\CommentaireController::new' => [[], ['_controller' => 'App\\Controller\\CommentaireController::new'], [], [['text', '/commentaire/new']], [], [], []],
    'App\Controller\CommentaireController::show' => [['id'], ['_controller' => 'App\\Controller\\CommentaireController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/commentaire']], [], [], []],
    'App\Controller\CommentaireController::edit' => [['id'], ['_controller' => 'App\\Controller\\CommentaireController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/commentaire']], [], [], []],
    'App\Controller\CommentaireController::delete' => [['id'], ['_controller' => 'App\\Controller\\CommentaireController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/commentaire']], [], [], []],
    'App\Controller\DashboardController::index' => [[], ['_controller' => 'App\\Controller\\PageController::dashboard'], [], [['text', '/dashboard']], [], [], []],
    'App\Controller\EvaluationController::index' => [[], ['_controller' => 'App\\Controller\\EvaluationController::index'], [], [['text', '/evaluation']], [], [], []],
    'App\Controller\EvaluationController::new' => [[], ['_controller' => 'App\\Controller\\EvaluationController::new'], [], [['text', '/evaluation/new']], [], [], []],
    'App\Controller\EvaluationController::show' => [['id'], ['_controller' => 'App\\Controller\\EvaluationController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/evaluation']], [], [], []],
    'App\Controller\EvaluationController::edit' => [['id'], ['_controller' => 'App\\Controller\\EvaluationController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/evaluation']], [], [], []],
    'App\Controller\EvaluationController::delete' => [['id'], ['_controller' => 'App\\Controller\\EvaluationController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/evaluation']], [], [], []],
    'App\Controller\EventController::index' => [[], ['_controller' => 'App\\Controller\\EventController::index'], [], [['text', '/event']], [], [], []],
    'App\Controller\EventController::new' => [[], ['_controller' => 'App\\Controller\\EventController::new'], [], [['text', '/event/new']], [], [], []],
    'App\Controller\EventController::show' => [['id'], ['_controller' => 'App\\Controller\\EventController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/event']], [], [], []],
    'App\Controller\EventController::edit' => [['id'], ['_controller' => 'App\\Controller\\EventController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/event']], [], [], []],
    'App\Controller\EventController::delete' => [['id'], ['_controller' => 'App\\Controller\\EventController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/event']], [], [], []],
    'App\Controller\MessageController::index' => [[], ['_controller' => 'App\\Controller\\MessageController::index'], [], [['text', '/message']], [], [], []],
    'App\Controller\MessageController::new' => [[], ['_controller' => 'App\\Controller\\MessageController::new'], [], [['text', '/message/new']], [], [], []],
    'App\Controller\MessageController::show' => [['id'], ['_controller' => 'App\\Controller\\MessageController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/message']], [], [], []],
    'App\Controller\MessageController::edit' => [['id'], ['_controller' => 'App\\Controller\\MessageController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/message']], [], [], []],
    'App\Controller\MessageController::delete' => [['id'], ['_controller' => 'App\\Controller\\MessageController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/message/message']], [], [], []],
    'App\Controller\MessageController::delete2' => [['id'], ['_controller' => 'App\\Controller\\MessageController::delete2'], [], [['text', '/delete2'], ['variable', '/', '[^/]++', 'id', true], ['text', '/message/message']], [], [], []],
    'App\Controller\PageController::index' => [[], ['_controller' => 'App\\Controller\\PageController::index'], [], [['text', '/']], [], [], []],
    'App\Controller\PageController::aboutus' => [[], ['_controller' => 'App\\Controller\\PageController::aboutus'], [], [['text', '/about.html']], [], [], []],
    'App\Controller\PageController::product' => [[], ['_controller' => 'App\\Controller\\PageController::product'], [], [['text', '/photography.html']], [], [], []],
    'App\Controller\PageController::register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'App\Controller\PageController::blog' => [[], ['_controller' => 'App\\Controller\\PageController::blog'], [], [['text', '/blog.html']], [], [], []],
    'App\Controller\PageController::contact' => [[], ['_controller' => 'App\\Controller\\PageController::contact'], [], [['text', '/contact.html']], [], [], []],
    'App\Controller\PageController::detail' => [['id'], ['id' => '1', '_controller' => 'App\\Controller\\PageController::detail'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/detail']], [], [], []],
    'App\Controller\PageController::bdetail' => [['id'], ['_controller' => 'App\\Controller\\PageController::bdetail'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/bdetail']], [], [], []],
    'App\Controller\PageController::forum' => [[], ['_controller' => 'App\\Controller\\PageController::forum'], [], [['text', '/forum']], [], [], []],
    'App\Controller\PageController::dashboard' => [[], ['_controller' => 'App\\Controller\\PageController::dashboard'], [], [['text', '/dashboard']], [], [], []],
    'App\Controller\ProduitController::index' => [[], ['_controller' => 'App\\Controller\\ProduitController::index'], [], [['text', '/produit/produit']], [], [], []],
    'App\Controller\ProduitController::new' => [[], ['_controller' => 'App\\Controller\\ProduitController::new'], [], [['text', '/produit/new']], [], [], []],
    'App\Controller\ProduitController::show' => [['id'], ['_controller' => 'App\\Controller\\ProduitController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/produit']], [], [], []],
    'App\Controller\ProduitController::edit' => [['id'], ['_controller' => 'App\\Controller\\ProduitController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/produit']], [], [], []],
    'App\Controller\ProduitController::delete' => [['id'], ['_controller' => 'App\\Controller\\ProduitController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/produit']], [], [], []],
    'App\Controller\ReclamationController::index' => [[], ['_controller' => 'App\\Controller\\ReclamationController::index'], [], [['text', '/reclamation']], [], [], []],
    'App\Controller\ReclamationController::new' => [[], ['_controller' => 'App\\Controller\\ReclamationController::new'], [], [['text', '/reclamation/new']], [], [], []],
    'App\Controller\ReclamationController::show' => [['id'], ['_controller' => 'App\\Controller\\ReclamationController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reclamation']], [], [], []],
    'App\Controller\ReclamationController::edit' => [['id'], ['_controller' => 'App\\Controller\\ReclamationController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/reclamation']], [], [], []],
    'App\Controller\ReclamationController::delete' => [['id'], ['_controller' => 'App\\Controller\\ReclamationController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reclamation']], [], [], []],
    'App\Controller\RegistrationController::register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'App\Controller\ReplyController::index' => [[], ['_controller' => 'App\\Controller\\ReplyController::index'], [], [['text', '/reply']], [], [], []],
    'App\Controller\ReplyController::new' => [[], ['_controller' => 'App\\Controller\\ReplyController::new'], [], [['text', '/reply/new']], [], [], []],
    'App\Controller\ReplyController::show' => [['id'], ['_controller' => 'App\\Controller\\ReplyController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reply']], [], [], []],
    'App\Controller\ReplyController::edit' => [['id'], ['_controller' => 'App\\Controller\\ReplyController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/reply']], [], [], []],
    'App\Controller\ReplyController::delete' => [['id'], ['_controller' => 'App\\Controller\\ReplyController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/reply/reply']], [], [], []],
    'App\Controller\ReplyController::delete2' => [['id'], ['_controller' => 'App\\Controller\\ReplyController::delete2'], [], [['text', '/delete2'], ['variable', '/', '[^/]++', 'id', true], ['text', '/reply/reply']], [], [], []],
    'App\Controller\ReponsesController::index' => [[], ['_controller' => 'App\\Controller\\ReponsesController::index'], [], [['text', '/reponses']], [], [], []],
    'App\Controller\ReponsesController::new' => [[], ['_controller' => 'App\\Controller\\ReponsesController::new'], [], [['text', '/reponses/new']], [], [], []],
    'App\Controller\ReponsesController::show' => [['id'], ['_controller' => 'App\\Controller\\ReponsesController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reponses']], [], [], []],
    'App\Controller\ReponsesController::edit' => [['id'], ['_controller' => 'App\\Controller\\ReponsesController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/reponses']], [], [], []],
    'App\Controller\ReponsesController::delete' => [['id'], ['_controller' => 'App\\Controller\\ReponsesController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reponses']], [], [], []],
    'App\Controller\SecurityController::login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'App\Controller\SecurityController::logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'App\Controller\UserController::index' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/user']], [], [], []],
    'App\Controller\UserController::new' => [[], ['_controller' => 'App\\Controller\\UserController::new'], [], [['text', '/user/new']], [], [], []],
    'App\Controller\UserController::artist' => [[], ['_controller' => 'App\\Controller\\UserController::artist'], [], [['text', '/user/new/artist']], [], [], []],
    'App\Controller\UserController::show' => [['id'], ['_controller' => 'App\\Controller\\UserController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
    'App\Controller\UserController::edit' => [['id'], ['_controller' => 'App\\Controller\\UserController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
    'App\Controller\UserController::delete' => [['id'], ['_controller' => 'App\\Controller\\UserController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
];
