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
            <a class="navbar-brand" href="/"><img src="{$config.logoUrl}" alt="{$config.pageName}"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li {if $config.requestedSite == "index"} class="active" {/if}><a href="/">Home</a></li>

                <li>
                    <a href="/information" {if $config.requestedSite == "information"} class="active" {/if}>{if $config.language == "en"}Information{elseif $config.language == "de" || $config.language == "de_easy"}Information{/if}</a>
                </li>
                <li>
                    <a href="/about" {if $config.requestedSite == "about"} class="active" {/if}>{if $config.language == "en"}About {$config.pageName}{elseif $config.language == "de" || $config.language == "de_easy"}Über {$config.pageName}{/if}</a>
                </li>
                <li>
                    <a href="/impressum" {if $config.requestedSite == "impressum"} class="active" {/if}>{if $config.language == "en"}Legal notice{elseif $config.language == "de" || $config.language == "de_easy"}Impressum{/if}</a>
                </li>

            </ul>

            <a class="nav navbar-nav navbar-right easy_lang" onclick="setParam('language', 'de_easy');" href="#"><img src="/web/img/easy_lang.png" alt="{if $config.language == "en"}Easy Lang{elseif $config.language == "de" || $config.language == "de_easy"}Einfache Sprache{/if}"></a>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">

                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="100"
                       data-close-others="true" role="button" aria-haspopup="true"
                       aria-expanded="false">
                        {$config["translations"]["language"]["label"]}
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        {foreach $config["translations"]["language"]["values"] as $key => $value}
                            <li {if $config.language == $key}class="active"{/if}>
                                <a onclick="setParam('language', '{$key}');">
                                    {$value}
                                </a>
                            </li>
                        {/foreach}
                    </ul>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="100"
                       data-close-others="true" role="button" aria-haspopup="true"
                       aria-expanded="false">
                        {$config["translations"]["theme"]["label"]}
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        {foreach $config["translations"]["theme"]["values"] as $key => $value}
                            <li {if $config.theme == $key}class="active"{/if}>
                                <a onclick="setParam('theme', '{$key}');">
                                    {$value}
                                </a>
                            </li>
                        {/foreach}
                    </ul>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="100"
                       data-close-others="true" role="button" aria-haspopup="true"
                       aria-expanded="false">
                        {$config["translations"]["customerType"]["label"]}
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        {foreach $config["translations"]["customerType"]["values"] as $key => $value}
                            {if $key != "null"}
                                <li {if $config.customerType == $key}class="active"{/if}>
                                    <a onclick="setParam('customerType', '{$key}');">
                                        {$value}
                                    </a>
                                </li>
                            {/if}
                        {/foreach}
                    </ul>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
