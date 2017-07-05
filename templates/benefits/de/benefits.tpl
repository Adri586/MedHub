{include file="../../global/header.tpl"}
{include file="../../global/navbar.tpl"}
<div class="jumbotron">
    <div class="container">
        <h2>Ihre Vorteile</h2>
        {if $config.customerType == "patient"}
        <p class="text-warning">Morgens 100 mg, abends 200 mg. Mittags zwei Tabletten von diesem Medikament, alle
            drei Tage jenes…</p>
        <br>
        <div class="col-md-9">
            <p>Haben sie den Überblick im Tablettenjungel verloren? Machen ihnen Wechselwirkungen Angst? </p>
            <p>Verbringen sie mehr Zeit mit der Verlängerung ihrer Rezepte und Aufstockung ihres
                Medikamentenvorrats, als mit ihren Lieben oder auf der Arbeit?</p>
            <br>
            <p>Lassen sie uns ihnen helfen! {$config.pageName} bietet eine leicht verständliche und sichere
                Unterstützung im Alltag.</p>
            <p>Beschäftigen sie sich wieder mit den schönen Dingen des Lebens und überlassen sie uns das Lesen ihrer
                Beipackzettel und das planen der Einnahmezyklen.</p>
        </div>
        <div class="col-md-3"><img src="/web/img/screenshot_2.jpeg" class="img-responsive img-rounded"
                                   style="max-width: 100%;"></div>
        <br>
        <p>Haben wir ihr Interesse geweckt?</p>
        <br>
        <p>Dann schreiben sie uns: (Email)</p>
        {elseif $config.customerType == "medical_staff"}
        <p class="text-warning">Wechselwirkungen? Verfügbarkeit? Einnahmesicherheit?</p>
        <br>
        <div class="col-md-9">
            <p>Immer mehr Menschen nehmen mehr als ein verschreibungspflichtiges Medikament, häufig von
                unterschiedlichen Fachärzten verordnet.</p>
            <p>Wir bieten ihnen und ihren Patienten einen einfachen und sicheren Weg, den Überblick im Tablettenjungle
                zu behalten.</p>
            <br>
            <p>Sparen sie Zeit und Geld bei der Erstellung von Rezepten. Nutzen sie unsere Datenbank zum automatischen
                Vergleich von Wechselwirkung und Verordnungsrichtlinien.</p>
            <p>Schaffen sie Freiräume, um wieder mehr Zeit für das persönliche Gespräch mit ihren Patienten zu haben.
                Unsere BSI zertifizierte Plattform und Anwendung schafft maximale Sicherheit und Übersicht und bietet
                Ihnen und Ihrem Praxisteam die Möglichkeit, zeiteffizient zu arbeiten. Dabei steht stets der Mensch und
                sein Wohlbefinden im Mittelpunkt.</p>
            <div class="col-md-3"><img src="/web/img/screenshot_2.jpeg" class="img-responsive img-rounded"
                                       style="max-width: 100%;"></div>
            <br>
            <p>Haben wir ihr Interesse geweckt?</p>
            <br>
            <p>Dann schreiben sie uns: (Email)</p>
            {/if}


        </div>
    </div>
{include file="../../global/footer.tpl"}