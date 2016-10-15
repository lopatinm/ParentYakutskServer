<?php /* Smarty version 3.1.27, created on 2016-10-13 17:25:10
         compiled from "C:\wamp\www\ParentYakutskServer\manager\templates\default\workspaces\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:385257ffa756217ae3_60453462%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7e148df2a620f5b0231ac413cb5c8ca56307e41' => 
    array (
      0 => 'C:\\wamp\\www\\ParentYakutskServer\\manager\\templates\\default\\workspaces\\index.tpl',
      1 => 1469056422,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '385257ffa756217ae3_60453462',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57ffa756250759_03673235',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57ffa756250759_03673235')) {
function content_57ffa756250759_03673235 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '385257ffa756217ae3_60453462';
echo (($tmp = @$_smarty_tpl->tpl_vars['error']->value)===null||$tmp==='' ? '' : $tmp);?>

<div id="modx-panel-workspace-div"></div>
<?php }
}
?>