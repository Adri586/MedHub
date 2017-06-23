{include file="../../global/header.tpl"}
{include file="../../global/navbar.tpl"}
<div class="site-wrapper">
    <div class="site-wrapper-inner">
        <div class="cover-container">
            <div class="masthead clearfix">
                <div class="inner">
                    <div class="jumbotron">
                        <div class="container" style="max-width: 60%;">
                            <h1>Welcome to MedHub!</h1>
                            <p>To grand you the best possible explanation about our services, please first say us if you
                                are a Doctor or a
                                Patient. You can change this selection afterwards over the Topmenu</p>
                        </div>
                    </div>

                    <div class="container">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <div class="col-md-6 text-center">
                                <a class="btn btn-lg btn-success" onclick="setParam('customerType', 'patient');"
                                   role="button">Patient</a>
                            </div>

                            <div class="col-md-6 text-center">
                                <a class="btn btn-lg btn-success" onclick="setParam('customerType', 'doctor');"
                                   role="button">Doctor</a>
                            </div>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{include file="../../global/footer.tpl"}