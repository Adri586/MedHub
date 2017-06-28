{include file="../../global/header.tpl"}
{include file="../../global/navbar.tpl"}
<div class="jumbotron">
    <div class="container">
        <h1>Information</h1>

        {if $config.customerType == "patient"}
            <h2>Sie sind nur ein Opfer der Pharmaindustrie</h2>
            <p>Patient PatientPatient PatientPatient PatientPatient PatientPatient PatientPatient Patient</p>
        {elseif $config.customerType == "medical_staff"}
            <h2>Sie sind nen geiler Dude</h2>
            <p> Doktor DoktoDoktor DoktoDoktor DoktoDoktor DoktoDoktor DoktoDoktor DoktoDoktor Doktor</p>
        {/if}



    </div>
</div>
{include file="../../global/footer.tpl"}