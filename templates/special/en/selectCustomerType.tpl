{include file="../../global/header.tpl"}
{include file="../../global/navbar.tpl"}
<div class="jumbotron">
    <div class="container">
        <h1>Welcome to {$config.pageName}!</h1>
        <p>To grand you the best possible explanation about our services, please first say us if you
            are a Doctor or a
            Patient. You can change this selection afterwards over the Topmenu</p>
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
           role="button">Medical staff</a>
    </div>
    <div class="col-xs-2"></div>
</div>
{include file="../../global/footer.tpl"}
