{include file="../../global/header.tpl"}
{include file="../../global/navbar.tpl"}
<div class="jumbotron">
    <div class="container">
        <h1>Impressum</h1>
        <h2>{$config.pageName} ist ein Projekt von:</h2>
        <ul>
            {foreach $config.projectMembers as $member}
                <li>{$member}</li>
            {/foreach}
        </ul>
        <br>
        <p>Für weitere Informationen bitte bei <a
                    href="https://www.fionera.de/?page_id=68">Fionera</a> anfragen</p>
    </div>
</div>
{include file="../../global/footer.tpl"}