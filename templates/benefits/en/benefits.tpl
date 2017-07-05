{include file="../../global/header.tpl"}
{include file="../../global/navbar.tpl"}
<div class="jumbotron">
    <div class="container">
        <h2>Your Benefits</h2>
        {if $config.customerType == "patient"}
            <p class="text-warning">100 mg in the morning, 200 mg in the evening. Two tablets of these meds at noon,
                another one every three days...</p>
            <br>
            <p>Have you lost track in the mess of tablets? Do the pharmacological interactions cause anxiety?</p>
            <p>Do you spend more time extending your recipes and increasing your medical stock than with your loved ones or at
                work?</p>
            <br>
            <p>Let us help! {$config.pageName} provides easy-to-understand and secure support in everyday life</p>
            <p>Enjoy the beautiful things of life while leaving the planning of your intake cycles to us.</p>
            <br>
            <p>Have we piqued your interest?</p>
            <br>
            <p>Then write to us: EMAIL EINFÜGEN</p>
        {elseif $config.customerType == "medical_staff"}
            <h2>Sie sind nen geiler Dude</h2>
            <p> Doktor DoktoDoktor DoktoDoktor DoktoDoktor DoktoDoktor DoktoDoktor DoktoDoktor Doktor</p>
        {/if}


    </div>
</div>
{include file="../../global/footer.tpl"}
