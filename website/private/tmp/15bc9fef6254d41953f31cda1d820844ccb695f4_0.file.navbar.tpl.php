<?php
/* Smarty version 3.1.32, created on 2018-06-25 08:47:23
  from 'D:\MediaCollege\bewijzenmap\periode1.4\proj\myband\website\private\views\navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b308ffb6766e6_22075785',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15bc9fef6254d41953f31cda1d820844ccb695f4' => 
    array (
      0 => 'D:\\MediaCollege\\bewijzenmap\\periode1.4\\proj\\myband\\website\\private\\views\\navbar.tpl',
      1 => 1529908182,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b308ffb6766e6_22075785 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar">
    <input type="checkbox" id='menuToggle'">
    <label for="menuToggle" class="menuToggle">
        <i style="color:white" class="show-menu fa fa-arrow-down"></i>
        <i style="color:white" class="hide-menu fa fa-arrow-up"></i>
    </label>
    <ul>
        <li><a href="index.php?page=home">Home</a></li>
        <li><a href="index.php?page=news">News</a></li>
        <li><a href="index.php?page=agenda">Agenda</a></li>
        <li><a href="index.php?page=contact">Contact</a></li>
        <li><a href="index.php?page=search">Search</a></li>
                <li><a id='user' href="#"><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</a></li>
    </ul>
</nav>
</header>
<main><?php }
}
