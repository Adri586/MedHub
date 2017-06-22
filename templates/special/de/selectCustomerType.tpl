{include file="../../global/header.tpl"}
{include file="../../global/navbar.tpl"}
<div class="jumbotron">
    <div class="container">
        <h1>Willkommen auf MedHub!</h1>
        <p>Um ihnen eine bestmögliche Erklärung unserer Dienste zu geben, sagen sie uns bitte zunächst ob sie ein
            Patient oder ein Arzt sind. Sie können diese Entscheidung jederzeit über das obige Menü ändern</p>
    </div>
</div>

<div class="container">
    <div class="col-md-4">
        <a class="btn btn-lg btn-success" onclick="setParam('customerType', 'patient');" role="button">Patient</a>
    </div>

    <div class="col-md-4">
        <a class="btn btn-lg btn-success" onclick="setParam('customerType', 'doctor');" role="button">Doktor</a>
    </div>
</div>
{include file="../../global/footer.tpl"}