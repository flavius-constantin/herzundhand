@extends('layouts.web')

@section('title', 'Datenschutz')

@section('content')
<section class="mt-20 px-6 md:px-0 max-w-3xl mx-auto leading-relaxed text-gray-600">
    <div class="container">
        <h3 class="text-3xl leading-8 font-extrabold text-gray-800 sm:text-4xl sm:leading-10">
            Datenschutzerklärung
        </h3>
        <p class="uppercase text-green-600 font-bold text-sm -mt-4">
            Weil uns die Sicherheit Ihrer Daten am Herzen liegt
        </p>

        <p>
            Wir haben diese Datenschutzerklärung (Fassung 02.04.2020-311166606) verfasst,
            um Ihnen gemäß der Vorgaben der <a href="https://eur-lex.europa.eu/legal-content/DE/ALL/?uri=celex%3A32016R0679&tid=311166606" target="_blank">Datenschutz-Grundverordnung (EU) 2016/679</a> zu erklären,
            welche Informationen wir sammeln, wie wir Daten verwenden und welche Entscheidungsmöglichkeiten Sie als Besucher dieser Webseite haben.
        </p>
        <p>
            Leider liegt es in der Natur der Sache, dass diese Erklärungen sehr technisch klingen,
            wir haben uns bei der Erstellung jedoch bemüht die wichtigsten Dinge so einfach und klar wie möglich zu beschreiben.
        </p>

        @include('disclaimer.cookies')

        @include('disclaimer.speicherung-daten')

        @include('disclaimer.rechte-dsgvo')

        @include('disclaimer.auswertung-besucherverhalten')

        @include('disclaimer.tls')

        @include('disclaimer.google.fonts')

        @include('disclaimer.google.fonts-lokal')

        @include('disclaimer.google.analytics')

        @include('disclaimer.google.analytics-ip')

        @include('disclaimer.google.analytics-zusatz')

        @include('disclaimer.google.tagmanager')

        @include('disclaimer.cloudflare')

        @include('disclaimer.google.recaptcha')

        <div class="border border-l-4 border-blue-400 bg-blue-100 px-6 mb-6 rounded-lg">
            <p class="text-sm">
                <span class="font-bold">Quelle: </span>
                Erstellt mit dem Datenschutz Generator von AdSimple in Kooperation mit <a class="text-blue-600 hover:text-blue-700" href="https://www.justmed.de/" target="_blank">justmed.de</a>
            </p>
        </div>
    </div>
</section>
@endsection