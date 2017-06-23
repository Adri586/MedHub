{include file="../../global/header.tpl"}
{include file="../../global/navbar.tpl"}
<div class="jumbotron">
    <div class="container">
        <h1>Willkommen auf {$config.pageName}!</h1>
        <p>Um ihnen eine bestmögliche Erklärung unserer Dienste zu geben, sagen sie uns bitte
            zunächst ob sie ein
            Patient oder ein Arzt sind. Sie können diese Entscheidung jederzeit über das obige Menü
            ändern</p>
    </div>
</div>

<div class="container" style="margin-top: 2%;">
    <div class="col-xs-2"></div>
    <div class="col-xs-3 text-center">
        <a class="btn btn-lg btn-success" onclick="setParam('customerType', 'patient');"
           role="button">Patient</a>
    </div>
    <div class="col-xs-2"></div>
    <div class="col-xs-3 text-center">
        <a class="btn btn-lg btn-success" onclick="setParam('customerType', 'doctor');"
           role="button">Doktor</a>
    </div>
    <div class="col-xs-2"></div>
</div>
{include file="../../global/footer.tpl"}