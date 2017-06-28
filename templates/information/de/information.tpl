{include file="../../global/header.tpl"}
{include file="../../global/navbar.tpl"}
<div class="jumbotron">
    <div class="container">
        <h1>Impressum</h1>

        {if $config.customerType == "patient"}
            <h2>Sie sind nur ein Opfer der Pharmaindustrie</h2>
        {elseif $config.customerType == "medical_staff"}
            <h2>Sie sind nen geiler Dude</h2>
        {/if}

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