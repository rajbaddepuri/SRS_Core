<?php
/* Smarty version 4.3.4, created on 2024-04-04 12:31:55
  from '/home/u255923749/domains/smartrecruitmentsolution.com/public_html/bare/layouts/v7/modules/Install/InstallPreProcess.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_660e8fab0c1a69_76399207',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9cecd4c4d1a216885f374f4d8d687e9fe81cc162' => 
    array (
      0 => '/home/u255923749/domains/smartrecruitmentsolution.com/public_html/bare/layouts/v7/modules/Install/InstallPreProcess.tpl',
      1 => 1706189738,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660e8fab0c1a69_76399207 (Smarty_Internal_Template $_smarty_tpl) {
?>
<input type="hidden" id="module" value="Install" />
<input type="hidden" id="view" value="Index" />
<div class="container-fluid page-container">
	<div class="row">
		<div class="col-sm-6">
			<div class="logo">
				<img src="<?php echo vimage_path('logo.png');?>
"/>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="head pull-right">
				<h3><?php echo vtranslate('LBL_INSTALLATION_WIZARD','Install');?>
</h3>
			</div>
		</div>
	</div>
<?php }
}
