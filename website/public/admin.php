<?php
//All the required things to get it to work
require('../private/smarty/Smarty.class.php');
require('../private/model_admin.php');
require('../private/model.php');
require('../private/controller_admin.php');

//Defining Smarty
$smarty = new Smarty();
$smarty->setCompileDir('../private/tmp_admin');
$smarty->setTemplateDir('../private/views_admin');

//Defining stuff
define('ARTICLES_PER_PAGE',10);

//See if GET variables are filled
$pagenumber = isset($_GET['pagenumber']) ? $_GET['pagenumber'] : '1';
$page = isset($_GET['page']) ? $_GET['page'] : 'login';
$data = isset($_GET['data']) ? $_GET['data'] : 'none';

//Use the data from the above statements to see which data or page needs to be loaded
switch ($data) {
    case 'login': processLogin(); break;
    case 'logout': processLogout(); break;
    case 'setLanguage': setLanguage(); break;
    default: break;
}

switch($page) {
    case 'login': cms_login(); break;
    case 'dashboard': cms_dashboard(); break;
    case 'analytics': cms_analytics(); break;
    case 'posts': cms_posts(); break;
    case 'mail': cms_mail(); break;
    case 'events': cms_events(); break;
    case 'users': cms_users(); break;
    case 'langsettings': cms_langsettings(); break;
    case 'sitesettings': cms_sitesettings(); break;
    default: cms_dashboard(); break;
}
?>
