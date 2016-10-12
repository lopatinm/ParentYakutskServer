<?php /* Smarty version 3.1.27, created on 2016-10-12 23:26:42
         compiled from "C:\wamp\www\ParentYakutskServer\manager\templates\default\welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:27657feaa92b19075_00188165%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9cf82a1f4704b34c580d3261adaa8f0b5480ee14' => 
    array (
      0 => 'C:\\wamp\\www\\ParentYakutskServer\\manager\\templates\\default\\welcome.tpl',
      1 => 1469056422,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27657feaa92b19075_00188165',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57feaa92b25f28_32517600',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57feaa92b25f28_32517600')) {
function content_57feaa92b25f28_32517600 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '27657feaa92b19075_00188165';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>