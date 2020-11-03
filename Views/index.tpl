{extends file="layout.tpl"}
{block name=body}


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
        {foreach from=$posts item=post}

            <li>{$post['post']}</li>
        {/foreach}
    </ul>

{/block}