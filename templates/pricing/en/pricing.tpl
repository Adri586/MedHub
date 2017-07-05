{include file="../../global/header.tpl"}
{include file="../../global/navbar.tpl"}
<div class="jumbotron">
    <div class="container">
        <h2>Preise</h2>
        {if $config.customerType == "patient"}
            <script>
                location.href = window.location.origin;
            </script>
            <p>MedHub is free for you</p>
        {elseif $config.customerType == "medical_staff"}
            <table class="table">
                <tr>
                    <th>Produktname</th>
                    <th>Servieumfang</th>
                    <th>Preis in Euro</th>
                    <th>Preis in US-Dollar</th>
                </tr>
                <tr>
                    <td>MedHub Mini</td>
                    <td>Datenbank für 50 Patienten/ 2 Servicestunden per Telefon</td>
                    <td>kostenlos</td>
                    <td>kostenlos</td>
                </tr>
                <tr>
                    <td>MedHub Small</td>
                    <td>Datenbank für bis zu 250 Patienten/ 8 Servicestunden vor Ort/ 2 Stunden Schulung</td>
                    <td>2500 Euro</td>
                    <td>2838 $</td>
                </tr>
                <tr>
                    <td>MedHub Midi</td>
                    <td>Datenbank für bis zu 500 Patienten/ 12 Servicestunden vor Ort und Telefon/ 2 Stunden
                        Schulung</td>
                    <td>5000 Euro</td>
                    <td>5676 $</td>
                </tr>
                <tr>
                    <td>MedHub Pro</td>
                    <td>Datenbank für bis zu 750 Patienten/ 16 Servicestunden beliebig verteilt/ 4 Stundenschulungen
                    </td>
                    <td>6750 Euro </td>
                    <td></td>
                </tr>
            </table>
        {/if}
    </div>
</div>
{include file="../../global/footer.tpl"}
