{include file="../../global/header.tpl"}
{include file="../../global/navbar.tpl"}
<div class="jumbotron">
    <div class="container">
        <h1>Information</h1>

        {if $config.customerType == "patient"}
            <p>Durch {$config.pageName} wird Ihnen die Organisation Ihrer einzunehmenden Medikamente im Alltag
                erleichtert. Die Kooperation mit Apotheken und Krankenhäusern ermöglicht Ihnen eine unkomplizierte
                Integration Ihrer Medikamente in {$config.pageName}.</p>
            <p>Durch den Wegfall der ursprünglichen Rezepte bleiben Ihnen unnötige Apothekenbesuche
                erspart. {$config.pageName} integriert, automatisiert Ihre verschriebenen Medikamente, diese werden
                Ihnen schnellstmöglich, durch Kooperation mit Online-Versandapotheken, zu Ihrer Adresse geschickt.
                Diverse, in {$config.pageName} integrierte, Bezahlmethoden werden Ihnen bargeldlose Transaktionen
                gewährleisten.</p>
            <p>{$config.pageName} bietet Ihnen Erinnerungsfunktionen, zur kontrollierten Einnahme Ihrer Medikamente.
                Einnahmeverordnungen werden durch das Fachpersonal in Krankenhäusern, Arztpraxen etc. in Ihren
                persönlichen Einnahmeplan eingefügt, sodass Sie sich voll und ganz auf {$config.pageName} verlassen
                können.</p>
            <p>Erinnerungen können optisch, durch Vibration oder durch Töne angezeigt werden. Des Weiteren
                bietet {$config.pageName} Ihnen verschiedene Schriftgrößen um {$config.pageName} an Ihre Bedürfnisse
                anzupassen.</p>
            <p>Regelmäßige Aktualisierungen halten {$config.pageName} dauerhaft auf dem neuesten Stand.</p>
        {elseif $config.customerType == "medical_staff"}
            <p>Nutzen sie unsere Kooperationen zwischen Apotheken, ÄrztInnen und Krankenhäusern, um ihren Alltag zu
                revolutionieren.</p>
            <p>Von der Erstellung des qualifiziert signierten Rezepts, bis zur Lieferung des Medikaments, vergehen
                wenige Stunden.</p>
            <p>Die Einbindung einer Datenbank mit allen in Deutschland zugelassenen, verschreibungspflichtigen
                Medikamenten, ermöglicht eine wechselwirkungsfreie Zusammenstellung , komplexer Wirkstoffkombinationen,
                mit wenigen Klicks.</p>
            <p>Von der Erstellung des qualifiziert signierten Rezepts, bis zur Lieferung des Medikaments, vergehen
                wenige Stunden.</p>
            <p>Dank unserer PatientenApp, ist eine sichere und regelmäßige Einnahme besser gewährleistet.
                Apotheken bietet {$config.pageName} eine Gesamtübersicht der eingenommenen und verordneten Medikamente.
                Außerdem werden Lagerzeiten von Medikamenten reduziert, da eine Just-in-Time-Lieferung möglich wird.
                Krankenhäuser können ambulante Medikation anstoßen, bevor PatentInnen ihre Einrichtungen verlassen.
                HausärztInnen werden nahtlos über eingesetzte Wirkstoffe informiert und können so umgehend in die
                Weiterbehandlung einsteigen.</p>
            <p>Haben wir ihr Interesse geweckt?</p>

        {/if}
    </div>
</div>
{include file="../../global/footer.tpl"}