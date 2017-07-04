{include file="../../global/header.tpl"}
{include file="../../global/navbar.tpl"}
<div class="jumbotron">
    <div class="container">
        <h1>Information</h1>

        {if $config.customerType == "patient"}
            <p>MedHub helps organizing your daily medical-intake. By cooperating with pharmacies, hospitals and doctors,
                MedHub allows an uncomplicated integration of your intake schedule into MedHub and eliminates the
                necessity of paper-based prescriptions. </p>
            <p>This makes unnecessary visits to the pharmacy a thing of the
                past. MedHub detects your prescripted meds and notifies you when to refill your storage. Our cooperation
                with online pharmacies and the doctor of your choice enables us to send your meds right to your
                doorstep.</p>
            <p>MedHub offers you reminders for the controlled use of your medication. Prescripted medication is
                inserted into your personal intake plan by your doctor or hospital staff so you can safely rely entirely
                on MedHub.</p>
            <p>Memories can be displayed visually, by vibration or by sound. MedHub also offers you different font
                sizes to suit your needs.</p>
            <p>Regular updates keep MedHub up-to-date.</p>
        {elseif $config.customerType == "medical_staff"}

        {/if}
    </div>
</div>
{include file="../../global/footer.tpl"}