@extends('layouts.web')

@section('title', 'Impressum')

@section('header')
<x-static-page-title title="Impressum" subtitle="Informationspflicht laut §5 E-Commerce Gesetz, §14 Unternehmensgesetzbuch, §63 Gewerbeordnung und Offenlegungspflicht laut §25 Mediengesetz">

</x-static-page-title>
@endsection

@section('content')
<section class="mt-20 px-6 md:px-0 max-w-3xl mx-auto leading-relaxed text-gray-600">
    <div class="container">

        <h3 class="text-xl font-extrabold text-gray-800  sm:text-2xl">
            Angaben gem. §5 TMG
        </h3>
        <ul class="list-none ml-6">
            <li><strong>{{ config('app.name') }}</strong></li>
            <li>Kirchrimbach 5</li>
            <li>96152 Burghaslach</li>
            <li>Deutschland</li>
        </ul>

        <ul class="list-none ml-6">
            <li><strong>USt-IdNr.</strong> DE329079244</li>
        </ul>

        <ul class="list-none ml-6">
            <li class="flex">
                <svg class="w-6 h-6 mr-1" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                </svg>
                <a href="tel:+49 (0)171 158 44 83">0171 158 44 83</a>
            </li>
            <li class="flex">
                <svg class="w-6 h-6 mr-1" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"></path>
                </svg>
                <a href="{{ route('contact') }}">info(at)herzundhand24.de</a>
            </li>
        </ul>

        <hr>
        <h3 class="text-xl font-extrabold text-gray-800  sm:text-2xl md:-mb-4 -mb-1">
            EU-Streitschlichtung
        </h3>
        <p>
            Gemäß Verordnung über Online-Streitbeilegung in Verbraucherangelegenheiten (ODR-Verordnung) möchten wir Sie über die Online-Streitbeilegungsplattform (OS-Plattform) informieren.
            Verbraucher haben die Möglichkeit, Beschwerden an die Online Streitbeilegungsplattform der Europäischen Kommission unter <a href="http://ec.europa.eu/odr?tid=121258585" target="_blank">http://ec.europa.eu/odr?tid=121258585</a> zu richten. Die dafür notwendigen Kontaktdaten finden Sie oberhalb in unserem Impressum.
        </p>
        <p>
            Wir möchten Sie jedoch darauf hinweisen, dass wir nicht bereit oder verpflichtet sind, an Streitbeilegungsverfahren vor einer Verbraucherschlichtungsstelle teilzunehmen.
        </p>

        <hr>
        <h3 class="text-xl font-extrabold text-gray-800  sm:text-2xl md:-mb-4 -mb-1">
            Haftung für Inhalte dieser Webseite
        </h3>
        <p>
            Wir entwickeln die Inhalte dieser Webseite ständig weiter und bemühen uns korrekte und aktuelle Informationen bereitzustellen. Leider können wir keine Haftung für die Korrektheit aller Inhalte auf dieser Webseite übernehmen, speziell für jene die seitens Dritter bereitgestellt wurden.
        </p>
        <p>
            Sollten Ihnen problematische oder rechtswidrige Inhalte auffallen, bitten wir Sie uns umgehend zu kontaktieren, Sie finden die Kontaktdaten im Impressum.
        </p>

        <hr>
        <h3 class="text-xl font-extrabold text-gray-800  sm:text-2xl md:-mb-4 -mb-1">
            Haftung für Links auf dieser Webseite
        </h3>
        <p>
            Unsere Webseite enthält Links zu anderen Webseiten für deren Inhalt wir nicht verantwortlich sind. Haftung für verlinkte Websites besteht laut <a href="https://www.ris.bka.gv.at/Dokument.wxe?Abfrage=Bundesnormen&Dokumentnummer=NOR40025813&tid=121258585" target="_blank">§ 17 ECG</a> für uns nicht, da wir keine Kenntnis rechtswidriger Tätigkeiten hatten und haben, uns solche Rechtswidrigkeiten auch bisher nicht aufgefallen sind und wir Links sofort entfernen würden, wenn uns Rechtswidrigkeiten bekannt werden.
        </p>
        <p>
            Wenn Ihnen rechtswidrige Links auf unserer Website auffallen, bitten wir Sie uns zu kontaktieren, Sie finden die Kontaktdaten im Impressum.
        </p>

        <hr>
        <h3 class="text-xl font-extrabold text-gray-800  sm:text-2xl md:-mb-4 -mb-1">
            Urheberrechtshinweis
        </h3>
        <p>
            Alle Inhalte dieser Webseite (Bilder, Fotos, Texte, Videos) unterliegen dem Urheberrecht. Falls notwendig, werden wir die unerlaubte Nutzung von Teilen der Inhalte unserer Seite rechtlich verfolgen.
        </p>
        <p>
            Sollten Sie auf dieser Webseite Inhalte finden, die das Urheberrecht verletzen, bitten wir Sie uns zu kontaktieren.
        </p>

        <!-- <hr>
        <h3 class="text-xl font-extrabold text-gray-800  sm:text-2xl md:-mb-4 -mb-1">
            Bildernachweis
        </h3>
        <p>
            Die Bilder, Fotos und Grafiken auf dieser Webseite sind urheberrechtlich geschützt.
        </p>
        <p>
            Die Bilderrechte liegen bei den folgenden Fotografen und Unternehmen:
        </p>
        <ul>
            <li>Fotograf Max</li>
        </ul> -->

        <div class="border border-l-4 border-blue-400 bg-blue-100 px-6 mb-6 rounded-lg">
            <p class="text-sm">
                <span class="font-bold">Quelle: </span>
                Erstellt mit dem Impressum Generator von <a class="text-blue-600 hover:text-blue-700" href="https://www.adsimple.at/" target="_blank">www.adsimple.at</a> in Kooperation mit <a class="text-blue-600 hover:text-blue-700" href="https://www.adsimple.at/" target="_blank">allesfashion.at</a>
            </p>
        </div>
    </div>
</section>
@endsection