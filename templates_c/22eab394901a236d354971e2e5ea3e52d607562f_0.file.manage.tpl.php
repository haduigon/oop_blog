<?php
/* Smarty version 3.1.36, created on 2020-11-11 16:42:38
  from '/laravel/Views/manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fac147ea874a0_45975282',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22eab394901a236d354971e2e5ea3e52d607562f' => 
    array (
      0 => '/laravel/Views/manage.tpl',
      1 => 1605112955,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fac147ea874a0_45975282 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3689554855fac147ea65d04_57488111', 'body');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'body'} */
class Block_3689554855fac147ea65d04_57488111 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_3689554855fac147ea65d04_57488111',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <blockquote class="blockquote text-center">
        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
        <footer class="blockquote-footer">Кто-то знаменитый в <cite title="Название источника">Название источника</cite></footer>
    </blockquote>
<form  method="POST" class="form-group">
    <input type="submit" class="btn btn-success" value="LOGOUT" formaction="/Auth/userLogout">
</form>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts']->value, 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>


        <form  method="POST" class="form-group">

            <input class="form-control" type="text" name="text" placeholder="INPUT TEXT">


            <li>
                <?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>

                <?php echo $_smarty_tpl->tpl_vars['post']->value['post'];?>



                <input type="submit" class="btn btn-success" method="POST" name="id" value="UPDATE POST # <?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
" formaction="/Post/updatePost"></a>
                <input type="submit" class="btn btn-success" method="POST" name="id" value="DELETE POST # <?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
" formaction="/Post/deletePost">
            </li>
        </form>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>





<?php
}
}
/* {/block 'body'} */
}
