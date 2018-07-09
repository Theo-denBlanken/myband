<?php
//All the required things to get it to work
require('../private/smarty/Smarty.class.php');
require('../private/model.php');
require('../private/controller.php');

//Defining Smarty
$smarty = new Smarty();
$smarty->setCompileDir('../private/tmp');
$smarty->setTemplateDir('../private/views');

//Defining stuff
define('ARTICLES_PER_PAGE',10);

//See if GET variables are filled
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$data = isset($_GET['data']) ? $_GET['data'] : 'none';
$pagenumber = isset($_GET['pagenumber']) ? $_GET['pagenumber'] : '1';
$articleid= isset($_GET['articleid']) ? $_GET['articleid'] : '1';

//Use the data from the above statements to see which data or page needs to be loaded
switch ($data) {
    case 'calendar': getCalendarContent(); break;
    case 'search': searchArticle(); break;
    default: break;
}

switch ($page) {
    //User stuff
    case 'home': homepage_action(); break;
    case 'news': newspage_action($pagenumber); break;
    case 'contact': contactpage_action(); break;
    case 'agenda': agendapage_action(); break;
    case 'article': articlepage_action($articleid); break;
    case 'search': searchpage_action(); break;

    //Admin stuff
    case 'admin': header('Location: admin.php'); break;
    case 'none': break;
    default: notfoundpage_action(); break;
}