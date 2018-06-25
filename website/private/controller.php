<?php
//GET DATA AN PUT THEM ON THE SCREEN

function homepage_action() {
    global $smarty;
    $language = getLanguage();
    print_r($language);
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
function adminpage_action() {
    global $smarty;
    //MODEL
    $pagename = 'Admin';
    $smarty->assign('pagename', $pagename);

    $username = getUsername();
    $smarty->assign('username', $username);
    //VIEW
    $smarty->display('header.tpl');
    $smarty->display('navbar.tpl');
    $smarty->display('admin.tpl');
    $smarty->display('footer.tpl');
}

function articlepage_action() {
    global $smarty;
    $username = getUsername();
    $smarty->assign('username', $username);

//    $article = getArticleContents();
    $article = "Title";
    $smarty->assign('article', $article);

    $pagename = 'Home';
    $smarty->assign('pagename', $pagename);

    $smarty->display('header.tpl');
    $smarty->display('navbar.tpl');
    $smarty->display('article.tpl');
    $smarty->display('footer.tpl');
}