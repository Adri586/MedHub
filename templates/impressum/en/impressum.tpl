{include file="../../global/header.tpl"}
{include file="../../global/navbar.tpl"}
<div class="jumbotron">
    <div class="container">
        <h1>Imprint</h1>
        <h2>{$config.pageName} is a Project from:</h2>
        <ul>
            {foreach $config.projectMembers as $member}
                <li>{$member}</li>
            {/foreach}
        </ul>
        <br>
        <p>For more Information please refer to <a
                    href="https://www.fionera.de/?page_id=68">Fionera</a></p>
    </div>
</div>
{include file="../../global/footer.tpl"}