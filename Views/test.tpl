{extends file="layout.tpl"}
{block name=body}


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
        {foreach from=$posts item=post}

            <li>{$post['post']}</li>
        {/foreach}
    </ul>

{/block}