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
    echo "Demo Credentials: <br />";
    echo "Username: demo@demo.nl <br />";
    echo "Password: demo<br />";

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
    $smarty->display('pagetop.tpl');
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

    $articles = getSomeArticles();
    $smarty->assign('articles', $articles);

    $user = getUsername();
    $smarty->assign('user', $user);

    $missedmessages = getMissedMessagesCount();
    $smarty->assign('missedmessages', $missedmessages);

    $calculatePages = calculatePages();
    $smarty->assign('calculatepages', $calculatePages);

    //VIEW
    $smarty->display('header.tpl');
    $smarty->display('sidebar.tpl');
    $smarty->display('pagetop.tpl');
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

    $missedmessages = getMissedMessagesCount();
    $smarty->assign('missedmessages', $missedmessages);

    //VIEW
    $smarty->display('header.tpl');
    $smarty->display('sidebar.tpl');
    $smarty->display('pagetop.tpl');
    $smarty->display('events.tpl');
    $smarty->display('footer.tpl');
}

function cms_mail()
{
    global $smarty;
//MODEL
    $language = getLanguage();
    $smarty->assign('language', $language);

    $settings = getSettings();
    $smarty->assign('settings', $settings);

    $pagename = 'Mail';
    $smarty->assign('pagename', $pagename);

    $user = getUsername();
    $smarty->assign('user', $user);

    $mails = getAllMessages();
    $smarty->assign('mails', $mails);

    $missedmessages = getMissedMessagesCount();
    $smarty->assign('missedmessages', $missedmessages);

//VIEW
    $smarty->display('header.tpl');
    $smarty->display('sidebar.tpl');
    $smarty->display('pagetop.tpl');
    $smarty->display('mailinbox.tpl');
    $smarty->display('footer.tpl');
}

function cms_sitesettings()
{

    global $smarty;

    $language = getLanguage();
    $smarty->assign('language', $language);

    $settings = getSettings();
    $smarty->assign('settings', $settings);

    $pagename = 'Site Settings';
    $smarty->assign('pagename', $pagename);

    $user = getUsername();
    $smarty->assign('user', $user);

    $missedmessages = getMissedMessagesCount();
    $smarty->assign('missedmessages', $missedmessages);

    //VIEW
    $smarty->display('header.tpl');
    $smarty->display('sidebar.tpl');
    $smarty->display('pagetop.tpl');
    $smarty->display('sitesettings.tpl');
    $smarty->display('footer.tpl');
}

function cms_langsettings()
{

    //MODEL
    global $smarty;

    $language = getLanguage();
    $smarty->assign('language', $language);

    $settings = getSettings();
    $smarty->assign('settings', $settings);

    $pagename = 'Language Settings';
    $smarty->assign('pagename', $pagename);

    $user = getUsername();
    $smarty->assign('user', $user);

    $missedmessages = getMissedMessagesCount();
    $smarty->assign('missedmessages', $missedmessages);

    //VIEW
    $smarty->display('header.tpl');
    $smarty->display('sidebar.tpl');
    $smarty->display('pagetop.tpl');
    $smarty->display('langsettings.tpl');
    $smarty->display('footer.tpl');

}

function cms_analytics()
{

    //MODEL
    global $smarty;

    $language = getLanguage();
    $smarty->assign('language', $language);

    $settings = getSettings();
    $smarty->assign('settings', $settings);

    $pagename = 'Analytics';
    $smarty->assign('pagename', $pagename);

    $user = getUsername();
    $smarty->assign('user', $user);

    $missedmessages = getMissedMessagesCount();
    $smarty->assign('missedmessages', $missedmessages);

    //VIEW
    $smarty->display('header.tpl');
    $smarty->display('sidebar.tpl');
    $smarty->display('pagetop.tpl');
    $smarty->display('analytics.tpl');
    $smarty->display('footer.tpl');
}

function cms_users()
{

    //MODEL
    global $smarty;

    $language = getLanguage();
    $smarty->assign('language', $language);

    $settings = getSettings();
    $smarty->assign('settings', $settings);

    $pagename = 'Users';
    $smarty->assign('pagename', $pagename);

    $user = getUsername();
    $smarty->assign('user', $user);

    $users = getUsers();
    $smarty->assign('users', $users);

    $missedmessages = getMissedMessagesCount();
    $smarty->assign('missedmessages', $missedmessages);

    //VIEW
    $smarty->display('header.tpl');
    $smarty->display('sidebar.tpl');
    $smarty->display('pagetop.tpl');
    $smarty->display('manage_users.tpl');
    $smarty->display('footer.tpl');
}
function cms_editpost()
{
    global $smarty;
//MODEL
    $language = getLanguage();
    $smarty->assign('language', $language);

    $settings = getSettings();
    $smarty->assign('settings', $settings);

    $pagename = 'Edit article';
    $smarty->assign('pagename', $pagename);

    $article = getSpecificArticle($_GET['articleid']);
    $smarty->assign('article', $article);

    $user = getUsername();
    $smarty->assign('user', $user);

    $missedmessages = getMissedMessagesCount();
    $smarty->assign('missedmessages', $missedmessages);

    $calculatePages = calculatePages();
    $smarty->assign('calculatepages', $calculatePages);

//VIEW
    $smarty->display('header.tpl');
    $smarty->display('sidebar.tpl');
    $smarty->display('pagetop.tpl');
    $smarty->display('post_edit.tpl');
    $smarty->display('footer.tpl');
}
?>
