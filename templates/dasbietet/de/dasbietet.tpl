{include file="../../global/header.tpl"}
{include file="../../global/navbar.tpl"}
<div class="jumbotron">
    <div class="container">
        <h1>Information</h1>

        {if $config.customerType == "patient"}
            <h2>Vorteile für Sie</h2>
            <p>Morgens 100 mg, abends 200 mg. Mittags zwei Tabletten von diesem Medikament, alle drei Tage jenes…
                Haben sie den Überblick im Tablettenjungel verloren? Machen ihnen Wechselwirkungen Angst? Verbringen sie mehr Zeit mit der Verlängerung ihrer Rezepte und Aufstockung ihres Medikamentenvorrats, als mit ihren Lieben oder auf der Arbeit?
                Lassen sie uns ihnen helfen! MedHub bietet eine leicht verständliche und sichere Unterstützung im Alltag.
                Beschäftigen sie sich wieder mit den schönen Dingen des Lebens und überlassen sie uns das Lesen ihrer Beipackzettel und das planen der Einnahmezyklen.

                Haben wir ihr Interesse geweckt? Dann schreiben sie uns: (Email) .</p>
        {elseif $config.customerType == "medical_staff"}
            <h2>Vorteile für Sie</h2>
            <p> Wechselwirkungen? Verfügbarkeit? Einnahmesicherheit?
                Immer mehr Menschen nehmen mehr als ein verschreibungspflichtiges Medikament, häufig von unterschiedlichen Fachärzten verordnet.
                Wir bieten ihnen und ihren Patienten einen einfachen und sicheren Weg, den Überblick im Tablettenjungle zu behalten. MedHub.
                Sparen sie Zeit und Geld bei der Erstellung von Rezepten. Nutzen sie unsere Datenbank zum automatischen Vergleich von Wechselwirkung und Verordnungsrichtlinien.
                Schaffen sie Freiräume, um wieder mehr Zeit für das persönliche Gespräch mit ihren Patienten zu haben.
                Unsere BSI zertifizierte Plattform und Anwendung schafft maximale Sicherheit und Übersicht und bietet Ihnen und Ihrem Praxisteam die Möglichkeit, zeiteffizient zu arbeiten. Dabei steht stets der Mensch und sein Wohlbefinden im Mittelpunkt.
                Haben wir ihr Interesse geweckt? Dann schreiben sie uns: (Email) </p>
        {/if}


    </div>
</div>
{include file="../../global/footer.tpl"}