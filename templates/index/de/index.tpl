{include file="../../global/header.tpl"}
{include file="../../global/navbar.tpl"}
<style>
    .site-wrapper {
        display: table;
        width: 100%;
        height: 100%; /* For at least Firefox */
        min-height: 100%;
        -webkit-box-shadow: inset 0 0 100px rgba(0,0,0,.5);
        box-shadow: inset 0 0 100px rgba(0,0,0,.5);
    }
    .site-wrapper-inner {
        display: table-cell;
        vertical-align: top;
    }
    .cover-container {
        margin-right: auto;
        margin-left: auto;
    }

    /* Padding for spacing */
    .inner {
        padding: 30px;
    }

    /*
     * Cover
     */

    .cover {
        padding: 0 20px;
    }
</style>

<div class="site-wrapper">
    <div class="site-wrapper-inner">
        <div class="cover-container">
            <div class="masthead clearfix">
                <div class="inner">
                    <div class="jumbotron">
                        <div class="container">
                            <h1>Hello, world!</h1>
                            <p>This is a template for a simple marketing or informational website. It includes a large
                                callout called a
                                jumbotron and three supporting pieces of content. Use it as a starting point to create
                                something more
                                unique.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="inner cover">
                <div class="col-md-4">

                </div>

                <div class="col-md-4">

                </div>
            </div>
        </div>
    </div>
</div>
{include file="../../global/footer.tpl"}