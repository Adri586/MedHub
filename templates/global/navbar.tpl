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
            <a class="navbar-brand" href="/"><img src="/web/img/logo.png" alt="Medhub"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li {if $config.requestedSite == "index"} class="active" {/if}><a href="/">Home</a></li>
                <li>
                    <a href="/about" {if $config.requestedSite == "about"} class="active" {/if}>{if $config.language == "en"}About us{elseif $config.language == "de"}Über uns{/if}</a>
                </li>
                <li>
                    <a href="/impressum" {if $config.requestedSite == "impressum"} class="active" {/if}>{if $config.language == "en"}Impress{elseif $config.language == "de"}Impressum{/if}</a>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="100"
                       data-close-others="true" role="button" aria-haspopup="true"
                       aria-expanded="false">
                        {if $config.language == "en"}Language{elseif $config.language == "de"}Sprache{/if}
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
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
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="100"
                       data-close-others="true" role="button" aria-haspopup="true"
                       aria-expanded="false">
                        {if $config.language == "en"}Theme{elseif $config.language == "de"}Design{/if}
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li {if $config.theme == "dark"}class="active"{/if}>
                            <a onclick="setParam('theme', 'dark');">
                                {if $config.language == "en"}Dark{elseif $config.language == "de"}Dunkel{/if}
                            </a>
                        </li>
                        <li {if $config.theme == "bright"}class="active"{/if}>
                            <a onclick="setParam('theme', 'bright');">
                                {if $config.language == "en"}Bright{elseif $config.language == "de"}Hell{/if}
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="100"
                       data-close-others="true" role="button" aria-haspopup="true"
                       aria-expanded="false">
                        {if $config.language == "en"}Customer Type{elseif $config.language == "de"}Käuferart{/if}
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li {if $config.customerType == "normal"}class="active"{/if}>
                            <a onclick="setParam('customerType', 'normal');">
                                {if $config.language == "en"}Normal{elseif $config.language == "de"}Normal{/if}
                            </a>
                        </li>
                        <li {if $config.customerType == "doctor"}class="active"{/if}>
                            <a onclick="setParam('customerType', 'doctor');">
                                {if $config.language == "en"}Doctor{elseif $config.language == "de"}Doktor{/if}
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>