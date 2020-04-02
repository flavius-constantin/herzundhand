@extends('layouts.web')

@section('title', 'Kontakt')

@section('content')
<div class="container mt-20 px-6 md:px-0 max-w-3xl mx-auto">
    <div class="text-center md:text-left">
        <h3 class="text-3xl leading-8 font-extrabold text-gray-800 sm:text-4xl sm:leading-10">
            Kontakt
        </h3>
        <p class="uppercase text-green-600 font-bold text-sm -mt-4">
            Wir sind gerne für Sie da
        </p>

        <p class="mb-8">
            Sie haben hier die Möglichkeit, mit uns in Kontakt zu treten.
            <br class="md:block hidden" />
            Wir möchten Sie bitten, das Formulat vollständig auszufüllen.
        </p>
    </div>

    <hr>

    <form action="{{ route('contact') }}" class="mb-12">
        <div class="flex flex-wrap mb-6 -mx-3">
            <div class="w-full md:w-1/2 mb-6 md:mb-0 px-3">
                <label class="block mb-2 text-gray-800 text-xs font-bold uppercase tracking-wide" for="contact-first_name">
                    Vorname
                </label>

                <input type="text" id="contact-first_name" placeholder="Max" name="first_name" class="block w-full bg-gray-200 text-gray-700 border shadow rounded-lg focus:outline-none focus:bg-white focus:border-gray-500 mb-2 px-4 py-3" required>
            </div>

            <div class="w-full px-3 md:w-1/2">
                <label class="block mb-2 text-gray-800 text-xs font-bold uppercase tracking-wide" for="contact-surname">
                    Nachname
                </label>

                <input type="text" id="contact-surname" placeholder="Mustermann" name="surname" class="block w-full bg-gray-200 text-gray-700 border shadow rounded-lg focus:outline-none focus:bg-white focus:border-gray-500 mb-2 px-4 py-3" required>
            </div>
        </div>

        <div class="flex flex-wrap mb-6 -mx-3">
            <div class="w-full md:w-1/2 mb-6 md:mb-0 px-3">
                <label class="block mb-2 text-gray-800 text-xs font-bold uppercase tracking-wide" for="contact-phone">
                    Telefon
                </label>

                <input type="text" id="contact-phone" placeholder="01234 567890" name="phone" class="block w-full bg-gray-200 text-gray-700 border shadow rounded-lg focus:outline-none focus:bg-white focus:border-gray-500 mb-2 px-4 py-3" required>
            </div>

            <div class="w-full px-3 md:w-1/2">
                <label class="block mb-2 text-gray-800 text-xs font-bold uppercase tracking-wide" for="contact-email">
                    E-Mail Adresse
                </label>

                <input type="text" id="contact-email" placeholder="max@mustermann.de" name="email" class="block w-full bg-gray-200 text-gray-700 border shadow rounded-lg focus:outline-none focus:bg-white focus:border-gray-500 mb-2 px-4 py-3" required>
            </div>
        </div>

        <div class="w-full mb-6">
            <label class="block mb-2 text-gray-800 text-xs font-bold uppercase tracking-wide" for="contact-message">
                Nachricht
            </label>

            <textarea id="contact-message" rows="4" name="message" class="block w-full border shadow rounded-lg appearance-none bg-gray-200 text-gray-700 focus:outline-none focus:bg-white focus:border-gray-500 mb-2 px-4 py-3" placeholder="A lovely message here." required></textarea>
        </div>

        <div class="border border-l-4 border-orange-400 bg-orange-100 px-6 mb-6 rounded-lg">
            <p class="text-sm">
                Mit der Eingabe und Absendung Ihrer Daten erklären Sie sich einverstanden,
                dass wir Ihre Angaben zum Zwecke der Beantwortung Ihrer Anfrage und etwaiger Rückfragen entgegennehmen,
                zwischenspeichern und auswerten. Sie können diese Erklärung jederzeit per E-Mail an <span class="font-bold text-orange-500 hover:text-orange-400 cursor-pointer">datenschutz(at)herzundhand24.de</span> widerrufen.
                Lesen Sie auch unsere <a href="#" class="font-bold text-orange-500 hover:text-orange-400">Datenschutzhinweise</a> dazu.
            </p>
        </div>

        <div class="flex justify-between items-center w-full">
            <span class="text-sm">
                Alle Felder sind Pflichtfelder.
                <span class="text-green-600 text-base absolute -mt-1">*</span>
            </span>
            <input type="submit" value="Absenden" class="py-3 px-4 border border-transparent text-xs uppercase font-bold rounded-full text-green-600 hover:text-white bg-green-200 hover:bg-green-600 focus:outline-none focus:shadow-outline transition duration-150 ease-in-out cursor-pointer">
        </div>
    </form>
</div>
@endsection