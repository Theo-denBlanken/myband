<?php
function cms_login() {
    global $smarty;
    //MODEL
    $language = getLanguage();
    $smarty->assign('language', $language);

    $pagename = 'Login';
    $smarty->assign('pagename', $pagename);

    //VIEW
    $smarty->display('header.tpl');
    $smarty->display('login.tpl');
    $smarty->display('footer.tpl');

}
function cms_dashboard() {
    global $smarty;
    //MODEL
    $language = getLanguage();
    $smarty->assign('language', $language);

    $pagename = 'Dashboard';
    $smarty->assign('pagename', $pagename);

    //VIEW
    $smarty->display('header.tpl');
    $smarty->display('sidebar.tpl');
    $smarty->display('dashboard.tpl');
    $smarty->display('footer.tpl');
}




//PROCESS
?>