@extends('layouts.web')

@push('styles')
<style>
    /* Background Pattern
     *  Hero Patterns (https: //www.heropatterns.com)
     *  by Steve Schoger (https://twitter.com/steveschoger)
    */
    .bg-pattern {
        background-color: #e6fbed;
        background-image: url("data:image/svg+xml,%3Csvg width='80' height='88' viewBox='0 0 80 88' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M22 21.91V26h-2c-9.94 0-18 8.06-18 18 0 9.943 8.058 18 18 18h2v4.09c8.012.722 14.785 5.738 18 12.73 3.212-6.99 9.983-12.008 18-12.73V62h2c9.94 0 18-8.06 18-18 0-9.943-8.058-18-18-18h-2v-4.09c-8.012-.722-14.785-5.738-18-12.73-3.212 6.99-9.983 12.008-18 12.73zM54 58v4.696c-5.574 1.316-10.455 4.428-14 8.69-3.545-4.262-8.426-7.374-14-8.69V58h-5.993C12.27 58 6 51.734 6 44c0-7.732 6.275-14 14.007-14H26v-4.696c5.574-1.316 10.455-4.428 14-8.69 3.545 4.262 8.426 7.374 14 8.69V30h5.993C67.73 30 74 36.266 74 44c0 7.732-6.275 14-14.007 14H54zM42 88c0-9.94 8.06-18 18-18h2v-4.09c8.016-.722 14.787-5.738 18-12.73v7.434c-3.545 4.262-8.426 7.374-14 8.69V74h-5.993C52.275 74 46 80.268 46 88h-4zm-4 0c0-9.943-8.058-18-18-18h-2v-4.09c-8.012-.722-14.785-5.738-18-12.73v7.434c3.545 4.262 8.426 7.374 14 8.69V74h5.993C27.73 74 34 80.266 34 88h4zm4-88c0 9.943 8.058 18 18 18h2v4.09c8.012.722 14.785 5.738 18 12.73v-7.434c-3.545-4.262-8.426-7.374-14-8.69V14h-5.993C52.27 14 46 7.734 46 0h-4zM0 34.82c3.213-6.992 9.984-12.008 18-12.73V18h2c9.94 0 18-8.06 18-18h-4c0 7.732-6.275 14-14.007 14H14v4.696c-5.574 1.316-10.455 4.428-14 8.69v7.433z' fill='%2308c546' fill-opacity='0.02' fill-rule='evenodd'/%3E%3C/svg%3E");
    }
</style>
@endpush

@section('content')
<section id="modell" class="container mt-20 px-6 md:px-0">
    <x-page-title title="Unsere Mission" sub="Das Modell der 24 Stunden Pflege" />
    <p class="text-center md:text-left mt-4 max-w-3xl mx-auto text-lg leading-relaxed text-gray-600">
        Das Modell der 24 Stunden Pflege zu Hause bietet Ihren hilfebedürftigen Angehörigen professionelle Unterstützung im Alltag und entlastet Sie von den vielfältigen und zeitintensiven Aufgaben, die eine professionelle Rundumbetreuung mit sich bringt. Erfahrene osteuropäische Betreuungs- und Pflegekräfte aus Rumänien kümmern sich fürsorglich um die Bedürfnisse Ihrer liebsten.
    </p>
    <p class="text-center md:text-left mt-4 max-w-3xl mx-auto text-lg leading-relaxed text-gray-600">
        <span class="font-bold">Kurz: </span>
        Betreuungsbedürftigen Menschen ein würdevolles Leben im vertrauten Umfeld ermöglichen. &#128522;
    </p>
</section>

<hr>

<section id="vielfalt" class="container text-center md:text-left max-w-3xl mx-auto mt-20">
    <x-page-title title="Vielfältigkeit" sub="Wir unterstützen Sie liebevoll und routiniert" />
</section>

@include('welcome.haushalt')
@include('welcome.koerperpflege')
@include('welcome.mobilitaet')
@include('welcome.ernaehrung')
@include('welcome.extra')

@endsection