<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><img src="/web/img/logo.png" alt="Medhub"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="?requestedSite=about">About</a></li>
                <li>
                    <a href="?requestedSite=about">{if $config.language == "en"}About us{elseif $config.language == "de"}Über uns{/if}</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="100"
                       data-close-others="true" role="button" aria-haspopup="true"
                       aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li class="dropdown-header">Nav header</li>
                        <li><a href="#">Separated link</a></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">

                <li {if $config.language == "de"}class="active"{/if}>
                    <a onclick="setParam('language', 'de');">
                        {if $config.language == "en"}German{elseif $config.language == "de"}Deutsch{/if}
                    </a>
                </li>
                <li {if $config.language == "en"}class="active"{/if}>
                    <a onclick="setParam('language', 'en');">
                        {if $config.language == "en"}English{elseif $config.language == "de"}Englisch{/if}
                    </a>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>