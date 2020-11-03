<?php
/* Smarty version 3.1.36, created on 2020-11-10 15:43:10
  from '/laravel/Views/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5faab50e157156_82506539',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6dfb002db87864e5730a50783441bef8200f8763' => 
    array (
      0 => '/laravel/Views/index.tpl',
      1 => 1605022985,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5faab50e157156_82506539 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11322065365faab50e130811_19666221', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'body'} */
class Block_11322065365faab50e130811_19666221 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_11322065365faab50e130811_19666221',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <form  method="POST" class="form-group">
        <input class="form-control" type="email" name="email" placeholder="example@email.com">
        <input class="form-control" type="password" name="password" placeholder="Password">
        <input type="submit" class="btn btn-success" value="LOGIN" formaction="/Auth/loginUser">
         <input type="submit" class="btn btn-success" value="CREATE USER" formaction="/Auth/createUser">
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
