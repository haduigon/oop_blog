<?php
/* Smarty version 3.1.36, created on 2020-11-11 15:23:07
  from '/laravel/Views/test.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fac01db137c81_61105155',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0a5e7db06c6ef8119414c588b866011c61a2128' => 
    array (
      0 => '/laravel/Views/test.tpl',
      1 => 1605108157,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fac01db137c81_61105155 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13836171705fac01db10c320_34967163', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'body'} */
class Block_13836171705fac01db10c320_34967163 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_13836171705fac01db10c320_34967163',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <form  method="POST" class="form-group">

        <input class="form-control" type="text" name="text" placeholder="Text">
        <input type="submit" class="btn btn-success" value="LOGOUT" formaction="/Auth/userLogout"></a>
        <input type="submit" class="btn btn-success" value="PUBLISH" formaction="/Post/post"></a>
        <input type="submit" class="btn btn-success" value="Manage your posts" formaction="/Post/managePost"></a>
    </form>

    <blockquote class="blockquote text-center">
        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
        <footer class="blockquote-footer">Кто-то знаменитый в <cite title="Название источника">Название источника</cite></footer>
    </blockquote>

    <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts']->value, 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>

            <li><?php echo $_smarty_tpl->tpl_vars['post']->value['post'];?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>

<?php
}
}
/* {/block 'body'} */
}
