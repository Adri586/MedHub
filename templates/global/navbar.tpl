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
                    <a href="/about" {if $config.requestedSite == "about"} class="active" {/if}>{if $config.language == "en"}About us{elseif $config.language == "de"}Über uns{/if}</a>
                </li>
                <li>
                    <a href="/impressum" {if $config.requestedSite == "impressum"} class="active" {/if}>{if $config.language == "en"}Legal notice{elseif $config.language == "de"}Impressum{/if}</a>
                </li>
                <li>
                    <a href="/information" {if $config.requestedSite == "information"} class="active" {/if}>{if $config.language == "en"}Information{elseif $config.language == "de"}Information{/if}</a>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">

                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="100"
                       data-close-others="true" role="button" aria-haspopup="true"
                       aria-expanded="false">
                        {$config["translations"]["language"]["label"]}
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        {foreach $config["translations"]["language"]["values"] as $languageKey => $language}
                            <li {if $config.language == $languageKey}class="active"{/if}>
                                <a onclick="setParam('language', '{$languageKey}');">
                                    {$language}
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
                        {foreach $config["translations"]["theme"]["values"] as $languageKey => $language}
                            <li {if $config.language == $languageKey}class="active"{/if}>
                                <a onclick="setParam('theme', '{$languageKey}');">
                                    {$language}
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
                        {foreach $config["translations"]["customerType"]["values"] as $languageKey => $language}
                            {if $languageKey != "null"}
                                <li {if $config.language == $languageKey}class="active"{/if}>
                                    <a onclick="setParam('customerType', '{$languageKey}');">
                                        {$language}
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
