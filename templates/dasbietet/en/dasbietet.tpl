{include file="../../global/header.tpl"}
{include file="../../global/navbar.tpl"}
<div class="jumbotron">
    <div class="container">
        <h1>Information</h1>

        {if $config.customerType == "patient"}
            <h2>This is what you get lolololol</h2>
            <p>
                100 mg in the morning, 200 mg in the evening. Two tablets of these meds at noon, another one every three days...
                Have you lost track in the mess of tablets? Do the pharmacological interactions cause anxiety? Do you spend more time extending your recipes and increasing your medical stock than with your loved ones or at work?
                Let us help! MedHub provides easy-to-understand and secure support in everyday life

                Enjoy the beautiful things of life while leaving theplanning of your intake cycles to us.

                Have we piqued your interest? Then write to us: (Email)</p>
        {elseif $config.customerType == "medical_staff"}
            <h2>Sie sind nen geiler Dude</h2>
            <p> Doktor DoktoDoktor DoktoDoktor DoktoDoktor DoktoDoktor DoktoDoktor DoktoDoktor Doktor</p>
        {/if}



    </div>
</div>
{include file="../../global/footer.tpl"}