<?php
/* Smarty version 4.3.4, created on 2024-04-04 13:03:19
  from '/home/u255923749/domains/smartrecruitmentsolution.com/public_html/bare/layouts/v7/modules/Vtiger/DetailViewHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_660ea517078b73_18233999',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a49746cef58be2c7e62995f0d00b61b359b2f177' => 
    array (
      0 => '/home/u255923749/domains/smartrecruitmentsolution.com/public_html/bare/layouts/v7/modules/Vtiger/DetailViewHeader.tpl',
      1 => 1706189738,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660ea517078b73_18233999 (Smarty_Internal_Template $_smarty_tpl) {
?><div class=" detailview-header-block"><div class="detailview-header"><div class="row"><?php $_smarty_tpl->_subTemplateRender(vtemplate_path("DetailViewHeaderTitle.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
$_smarty_tpl->_subTemplateRender(vtemplate_path("DetailViewActions.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div><?php }
}
