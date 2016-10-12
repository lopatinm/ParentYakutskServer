<?php /* Smarty version 3.1.27, created on 2016-10-12 23:26:24
         compiled from "C:\wamp\www\ParentYakutskServer\setup\templates\footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2733357feaa80a10418_72672540%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62af61b0e78c257ceacfc7ec9e17f6f9c29e2a4e' => 
    array (
      0 => 'C:\\wamp\\www\\ParentYakutskServer\\setup\\templates\\footer.tpl',
      1 => 1469056422,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2733357feaa80a10418_72672540',
  'variables' => 
  array (
    '_lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57feaa80a48c86_98793807',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57feaa80a48c86_98793807')) {
function content_57feaa80a48c86_98793807 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once 'C:/wamp/www/ParentYakutskServer/core/model/smarty/plugins\\modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '2733357feaa80a10418_72672540';
?>
        </div>
        <!-- end content -->
        <div class="clear">&nbsp;</div>
    </div>
</div>

<!-- start footer -->
<div id="footer">
    <div id="footer-inner">
    <div class="container_12">
        <p><?php ob_start();
echo date('Y');
$_tmp1=ob_get_clean();
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['_lang']->value['modx_footer1'],'[[+current_year]]',$_tmp1);?>
</p>
        <p><?php echo $_smarty_tpl->tpl_vars['_lang']->value['modx_footer2'];?>
</p>
    </div>
    </div>
</div>

<div class="post_body">

</div>
<!-- end footer -->
</body>
</html><?php }
}
?>