{extends file="layout.tpl"}
{block name=body}

    <blockquote class="blockquote text-center">
        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
        <footer class="blockquote-footer">Кто-то знаменитый в <cite title="Название источника">Название источника</cite></footer>
    </blockquote>
<form  method="POST" class="form-group">
    <input type="submit" class="btn btn-success" value="LOGOUT" formaction="/Auth/userLogout">
</form>
    {foreach from=$posts item=post}


        <form  method="POST" class="form-group">

            <input class="form-control" type="text" name="text" placeholder="INPUT TEXT">


            <li>
                {$post['id']}
                {$post['post']}


                <input type="submit" class="btn btn-success" method="POST" name="id" value="UPDATE POST # {$post['id']}" formaction="/Post/updatePost"></a>
                <input type="submit" class="btn btn-success" method="POST" name="id" value="DELETE POST # {$post['id']}" formaction="/Post/deletePost">
            </li>
        </form>
        {/foreach}





{/block}

