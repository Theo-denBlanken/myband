<?php
/* Smarty version 3.1.32, created on 2018-06-25 08:52:07
  from 'D:\MediaCollege\bewijzenmap\periode1.4\proj\myband\website\private\views\news.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b3091172ce855_07056541',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a22a3810f81528d5e57f82acea8ff22e52212e51' => 
    array (
      0 => 'D:\\MediaCollege\\bewijzenmap\\periode1.4\\proj\\myband\\website\\private\\views\\news.tpl',
      1 => 1529908275,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b3091172ce855_07056541 (Smarty_Internal_Template $_smarty_tpl) {
?><h1 class="centered_text twocolumns ">Our latest and greatest news!</h1>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articles']->value, 'article');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
?>
    <div class="twocolumns">
    <h2 class="article_title"><?php echo $_smarty_tpl->tpl_vars['article']->value[0];?>
</h2>
    <h5 class="article_content">Author: <?php echo $_smarty_tpl->tpl_vars['article']->value[4];?>
</h5>
    <h5 class="article_content">Date of publication: <?php echo $_smarty_tpl->tpl_vars['article']->value[3];?>
</h5>
    <img class="article_content" src="<?php echo $_smarty_tpl->tpl_vars['article']->value[2];?>
">
    <p class="article_content"><?php echo $_smarty_tpl->tpl_vars['article']->value[1];?>
</p>
    </div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


<div class="twocolumns centered_text centered_block">
<table>
    <tr>
        <td id="left">
            <?php if ($_smarty_tpl->tpl_vars['pagenumber']->value > 1) {?>
                <a class="navigation_arrows fas fa-arrow-left" href="index.php?page=news&pagenumber=<?php echo $_smarty_tpl->tpl_vars['pagenumber']->value-1;?>
"></a>
                <?php } else { ?>
                <a class="disabled_navigation_arrows fas fa-arrow-left"></a>
            <?php }?>
        </td>
        <td>
            <p class="pagenumber">Page <?php echo $_smarty_tpl->tpl_vars['pagenumber']->value;?>
</p>
        </td>
        <td id="right">
            <?php if ($_smarty_tpl->tpl_vars['pagenumber']->value < $_smarty_tpl->tpl_vars['numberOfPages']->value) {?>
                <a class="navigation_arrows fas fa-arrow-right" href="index.php?page=news&pagenumber=<?php echo $_smarty_tpl->tpl_vars['pagenumber']->value+1;?>
"></a>
                <?php } else { ?>
                <a class="disabled_navigation_arrows fas fa-arrow-right"></a>
            <?php }?>
        </td>
    </tr>
</table>
</div><?php }
}
