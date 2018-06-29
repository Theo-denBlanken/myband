<?php
require('../private/smarty/Smarty.class.php');
require('../private/model_admin.php');
require('../private/model.php');
require('../private/controller_admin.php');

$smarty = new Smarty();
$smarty->setCompileDir('../private/tmp_admin');
$smarty->setTemplateDir('../private/views_admin');

$page = isset($_GET['page']) ? $_GET['page'] : 'login';
$data = isset($_GET['data']) ? $_GET['data'] : 'none';

switch ($data) {
    case 'login': process_login();
    default: break;
}

switch($page) {
    case 'login': cms_login(); break;
    case 'dashboard': cms_dashboard(); break;
    default: break;
}
?>
