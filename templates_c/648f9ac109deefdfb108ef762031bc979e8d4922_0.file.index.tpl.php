<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-05 23:23:00
  from 'E:\xampp\htdocs\web\templates\tpl\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e6119541084a6_36591992',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '648f9ac109deefdfb108ef762031bc979e8d4922' => 
    array (
      0 => 'E:\\xampp\\htdocs\\web\\templates\\tpl\\index.tpl',
      1 => 1583421778,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl/contact_form.tpl' => 1,
    'file:tpl/ok.tpl' => 1,
    'file:tpl/login_form.tpl' => 1,
    'file:tpl/reg_form.tpl' => 1,
    'file:tpl/news_list.tpl' => 1,
    'file:tpl/body.tpl' => 1,
  ),
),false)) {
function content_5e6119541084a6_36591992 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['op']->value == 'contact_form') {?>
    <?php $_smarty_tpl->_subTemplateRender("file:tpl/contact_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['op']->value == 'ok') {?>
    <?php $_smarty_tpl->_subTemplateRender("file:tpl/ok.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['op']->value == 'login_form') {?>
    <?php $_smarty_tpl->_subTemplateRender("file:tpl/login_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['op']->value == 'reg_form') {?>
    <?php $_smarty_tpl->_subTemplateRender("file:tpl/reg_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['op']->value == 'news_list') {?>
    <?php $_smarty_tpl->_subTemplateRender("file:tpl/news_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} else { ?>
    <?php $_smarty_tpl->_subTemplateRender("file:tpl/body.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
}
