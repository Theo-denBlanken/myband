<?php
//GET DATA AN PUT THEM ON THE SCREEN

function homepage_action() {
    global $smarty;
    $language = getLanguage();
    $smarty->assign('language', $language);

    $username = getUsername();
    $smarty->assign('username', $username);

    $articles = getArticles();
    $smarty->assign('articles', $articles);

    $pagename = 'Home';
    $smarty->assign('pagename', $pagename);

    $smarty->display('header.tpl');
    $smarty->display('home_image.tpl');
    $smarty->display('navbar.tpl');

    $smarty->display('home.tpl');
    $smarty->display('footer.tpl');
}

function notfoundpage_action() {
    global $smarty;
    //MODEL
    $language = getLanguage();
    $smarty->assign('language', $language);

    $pagename = 'Uh oh';
    $smarty->assign('pagename', $pagename);

    $username = getUsername();
    $smarty->assign('username', $username);
    //VIEWS
    $smarty->display('header.tpl');
    $smarty->display('navbar.tpl');
    $smarty->display('404.tpl');
    $smarty->display('footer.tpl');



}

function contactpage_action() {
    global $smarty;
    //MODEL
    $language = getLanguage();
    $smarty->assign('language', $language);

    $pagename = 'Contact';
    $smarty->assign('pagename', $pagename);

    $username = getUsername();
    $smarty->assign('username', $username);
    //VIEWS
    $smarty->display('header.tpl');
    $smarty->display('navbar.tpl');
    $smarty->display('contact.tpl');
    $smarty->display('footer.tpl');

}
function newspage_action($pagenumber) {
    global $smarty;
    //MODEL
    $language = getLanguage();
    $smarty->assign('language', $language);

    $pagename = 'News';
    $smarty->assign('pagename', $pagename);

    $username = getUsername();
    $smarty->assign('username', $username);

    $somenews = getSomeArticles();
    $smarty->assign('articles', $somenews);

    $smarty->assign('pagenumber', $pagenumber);
    $numberOfPages = calculatePages();
    $smarty->assign('numberOfPages', $numberOfPages);
    //VIEW
    $smarty->display('header.tpl');
    $smarty->display('navbar.tpl');
    $smarty->display('news.tpl');
    $smarty->display('footer.tpl');
}
function agendapage_action() {
    global $smarty;
    //MODEL
    $language = getLanguage();
    $smarty->assign('language', $language);

    $pagename = 'Agenda';
    $smarty->assign('pagename', $pagename);

    $username = getUsername();
    $smarty->assign('username', $username);

    //VIEW
    $smarty->display('header.tpl');
    $smarty->display('navbar.tpl');
    $smarty->display('agenda.tpl');
    $smarty->display('footer.tpl');
}

function articlepage_action($articleID) {
    global $smarty;

    $article = getSpecificArticle($articleID);
    $smarty->assign('article', $article);

    $language = getLanguage();
    $smarty->assign('language', $language);

    $username = getUsername();
    $smarty->assign('username', $username);



    $pagename = 'Article';
    $smarty->assign('pagename', $pagename);

    $smarty->display('header.tpl');
    $smarty->display('navbar.tpl');
    $smarty->display('article.tpl');
    $smarty->display('footer.tpl');
}
function searchpage_action() {
    global $smarty;
    //MODEL
    $language = getLanguage();
    $smarty->assign('language', $language);

    $username = getUsername();
    $smarty->assign('username', $username);

    $pagename = 'Search';
    $smarty->assign('pagename', $pagename);

    //VIEWS
    $smarty->display('header.tpl');
    $smarty->display('navbar.tpl');
    $smarty->display('search.tpl');
    $smarty->display('footer.tpl');
}