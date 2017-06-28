{include file="../../global/header.tpl"}
{include file="../../global/navbar.tpl"}
<div class="jumbotron">
    <div class="container">
        <h1>Information</h1>

        {if $config.customerType == "patient"}
            <h2>Sie sind nur ein Opfer der Pharmaindustrie</h2>
            <p>Durch {$config.pageName} wird Ihnen die Organisation Ihrer einzunehmenden Medikamente im Alltag erleichtert. Die Kooperation mit Apotheken und Krankenhäusern ermöglicht Ihnen eine unkomplizierte Integration Ihrer Medikamente in {$config.pageName}.
                Durch den Wegfall der ursprünglichen Rezepte bleiben Ihnen unnötige Apothekenbesuche erspart. {$config.pageName} integriert, automatisiert Ihre verschriebenen Medikamente, diese werden Ihnen schnellstmöglich, durch Kooperation mit Online-Versandapotheken, zu Ihrer Adresse geschickt.
                Diverse, in {$config.pageName} integrierte, Bezahlmethoden werden Ihnen bargeldlose Transaktionen gewährleisten.

                {$config.pageName} bietet Ihnen Erinnerungsfunktionen, zur kontrollierten Einnahme Ihrer Medikamente. Einnahmeverordnungen werden durch das Fachpersonal in Krankenhäusern, Arztpraxen etc. in Ihren persönlichen Einnahmeplan eingefügt, sodass Sie sich voll und ganz auf {$config.pageName} verlassen können.
                Erinnerungen können optisch, durch Vibration oder durch Töne angezeigt werden. Des Weiteren bietet {$config.pageName} Ihnen verschiedene Schriftgrößen um {$config.pageName} an Ihre Bedürfnisse anzupassen.
                Regelmäßige Aktualisierungen halten {$config.pageName} dauerhaft auf dem neuesten Stand.</p>
        {elseif $config.customerType == "medical_staff"}
            <h2>Sie sind nen geiler Dude</h2>
            <p> Nutzen sie unsere Kooperationen zwischen Apotheken, Ärzt*innen und Krankenhäusern, um ihren Alltag zu revolutionieren.
                Die Einbindung einer Datenbank mit allen in Deutschland zugelassenen, verschreibungspflichtigen Medikamenten, ermöglicht eine wechselwirkungsfreie Zusammenstellung , komplexer Wirkstoffkombinationen, mit wenigen Klicks.
                Von der Erstellung des qualifiziert signierten Rezepts, bis zur Lieferung des Medikaments, vergehen wenige Stunden.
                Dank unserer PatientenApp, ist eine sichere und regelmäßige Einnahme besser gewährleistet.
                Apotheken bietet {$config.pageName} eine Gesamtübersicht der eingenommenen und verordneten Medikamente. Außerdem werden Lagerzeiten von Medikamenten reduziert, da eine Just-in-Time-Lieferung möglich wird.
                Krankenhäuser können ambulante Medikation anstoßen, bevor Patent*Innen ihre Einrichtungen  verlassen. Hausärzt*Innen werden nahtlos über eingesetzte Wirkstoffe informiert und können so umgehend in die Weiterbehandlung einsteigen.
                Haben wir ihr Interesse geweckt? </p>
        {/if}


    </div>
</div>
{include file="../../global/footer.tpl"}