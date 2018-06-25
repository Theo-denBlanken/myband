<?php
/* Smarty version 3.1.32, created on 2018-06-25 08:47:23
  from 'D:\MediaCollege\bewijzenmap\periode1.4\proj\myband\website\private\views\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b308ffb7feee7_67752018',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e09a9239400f821df4e6cfeb3211c50191e53e28' => 
    array (
      0 => 'D:\\MediaCollege\\bewijzenmap\\periode1.4\\proj\\myband\\website\\private\\views\\home.tpl',
      1 => 1529908182,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b308ffb7feee7_67752018 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\MediaCollege\\bewijzenmap\\periode1.4\\proj\\myband\\website\\private\\smarty\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?><h1 class="twocolumns page_title">10 Latest articles</h1>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articles']->value, 'article');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
?>
<div class="twocolumns">
    <h2 class="article_title"><?php echo $_smarty_tpl->tpl_vars['article']->value[0];?>
</h2>
    <h5 class="article_info">Publish Date: <?php echo $_smarty_tpl->tpl_vars['article']->value[2];?>
</h5>
    <h5 class="article_info"> Author: <?php echo $_smarty_tpl->tpl_vars['article']->value[3];?>
</h5>
    <p class="article_content"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['article']->value[1],500,"... </br><a href='index.php?page=article&articleid=".((string)$_smarty_tpl->tpl_vars['article']->value[4])."'>Read more</a>");?>
</p>
    <p class </p>
    <br />
</div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<div class="onecolumn rowthree">
</div>
<?php }
}
