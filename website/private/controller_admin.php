<?php
/* TODO
 * SITESETTINGS ARRAY
 * SITESETTINGS DATABASE
 * LANGUAGEPAGE
 *
 *
 */
function cms_login()
{
    global $smarty;

    //MODEL
    $language = getLanguage();
    $smarty->assign('language', $language);

    $pagename = 'Login';
    $smarty->assign('pagename', $pagename);

    //VIEW
    $smarty->display('header.tpl');
    $smarty->display('login.tpl');

}

function cms_dashboard()
{
    global $smarty;
    //MODEL
    $language = getLanguage();
    $smarty->assign('language', $language);

    $settings = getSettings();
    $smarty->assign('settings', $settings);

    $countedarticles = getArticleCount();
    $smarty->assign('totalArticles', $countedarticles);

    $pagename = 'Dashboard';
    $smarty->assign('pagename', $pagename);

    $user = getUsername();
    $smarty->assign('user', $user);

    $registeredusers = getUserCount();
    $smarty->assign('registeredusers', $registeredusers);

    $missedmessages = getMissedMessagesCount();
    $smarty->assign('missedmessages', $missedmessages);

    //VIEW
    $smarty->display('header.tpl');
    $smarty->display('sidebar.tpl');
    $smarty->display('dashboard.tpl');
    $smarty->display('footer.tpl');
}

function cms_posts()
{
    global $smarty;
    //MODEL
    $language = getLanguage();
    $smarty->assign('language', $language);

    $settings = getSettings();
    $smarty->assign('settings', $settings);

    $pagename = 'Posts';
    $smarty->assign('pagename', $pagename);

    $articles = getArticles();
    $smarty->assign('articles', $articles);

    $user = getUsername();
    $smarty->assign('user', $user);

    //VIEW
    $smarty->display('header.tpl');
    $smarty->display('sidebar.tpl');
    $smarty->display('posts.tpl');
    $smarty->display('footer.tpl');
}
    function cms_events()
    {
        global $smarty;
        //MODEL
        $language = getLanguage();
        $smarty->assign('language', $language);

        $settings = getSettings();
        $smarty->assign('settings', $settings);

        $pagename = 'Events';
        $smarty->assign('pagename', $pagename);

        $events = getCalendarContentAdmin();
        $smarty->assign('events', $events);


        $user = getUsername();
        $smarty->assign('user', $user);

        //VIEW
        $smarty->display('header.tpl');
        $smarty->display('sidebar.tpl');
        $smarty->display('events.tpl');
        $smarty->display('footer.tpl');
}
?>