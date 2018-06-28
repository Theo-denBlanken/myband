<?php
header('Content-Type: text/html; charset=utf-8');
//echo("\x48\x65\x6C\x6C\x6F\x20\x57\x6F\x72\x6C\x64\x21");

require('../private/smarty/Smarty.class.php');
require('../private/model.php');
require('../private/controller.php');

$smarty = new Smarty();
$smarty->setCompileDir('../private/tmp');
$smarty->setTemplateDir('../private/views');

//Set certain variables
define('ARTICLES_PER_PAGE',10);

//TERNARY OPERATOR
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$data = isset($_GET['data']) ? $_GET['data'] : 'none';
$pagenumber = isset($_GET['pagenumber']) ? $_GET['pagenumber'] : '1';
$articleid= isset($_GET['articleid']) ? $_GET['articleid'] : '1';

switch ($data) {
    case 'calendar': getCalendarContent();break;
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
    case 'admin': adminpage_action(); break;
    default: notfoundpage_action(); break;
}