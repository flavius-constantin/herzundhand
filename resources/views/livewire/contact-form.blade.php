@section('header')
<x-static-page-title title="Kontakt" subtitle="Wir sind gerne für Sie da">
    Sie haben hier die Möglichkeit, mit uns in Kontakt zu treten.
    <br class="md:block hidden" />
    Wir möchten Sie bitten, das Formulat vollständig auszufüllen.
</x-static-page-title>
@endsection

<div>
    <section class="z-10 mt-20 px-6 md:px-0 max-w-3xl mx-auto leading-relaxed text-gray-600">
        <div class="container">
            <form wire:submit.prevent="store" class="mb-12">
                <div class="flex flex-wrap mb-6 -mx-3">
                    <div class="w-full md:w-1/2 mb-6 md:mb-0 px-3">
                        <label class="block mb-2 text-gray-800 text-xs font-bold uppercase tracking-wide" for="contact-first_name">
                            Vorname:
                        </label>

                        <input wire:model="first_name" type="text" id="contact-first_name" placeholder="Max" name="first_name" class="block w-full bg-gray-200 text-gray-700 border shadow rounded-lg focus:outline-none focus:bg-white focus:border-gray-500 mb-2 px-4 py-3">
                        @error('first_name')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="w-full px-3 md:w-1/2">
                        <label class="block mb-2 text-gray-800 text-xs font-bold uppercase tracking-wide" for="contact-surname">
                            Nachname
                        </label>

                        <input wire:model="surname" type="text" id="contact-surname" placeholder="Mustermann" name="surname" class="block w-full bg-gray-200 text-gray-700 border shadow rounded-lg focus:outline-none focus:bg-white focus:border-gray-500 mb-2 px-4 py-3">
                        @error('surname')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="flex flex-wrap mb-6 -mx-3">
                    <div class="w-full md:w-1/2 mb-6 md:mb-0 px-3">
                        <label class="block mb-2 text-gray-800 text-xs font-bold uppercase tracking-wide" for="contact-phone">
                            Telefon
                        </label>

                        <input wire:model="phone" type="text" id="contact-phone" placeholder="01234 567890" name="phone" class="block w-full bg-gray-200 text-gray-700 border shadow rounded-lg focus:outline-none focus:bg-white focus:border-gray-500 mb-2 px-4 py-3">
                        @error('phone')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="w-full px-3 md:w-1/2">
                        <label class="block mb-2 text-gray-800 text-xs font-bold uppercase tracking-wide" for="contact-email">
                            E-Mail Adresse
                        </label>

                        <input wire:model="email" type="text" id="contact-email" placeholder="max@mustermann.de" name="email" class="block w-full bg-gray-200 text-gray-700 border shadow rounded-lg focus:outline-none focus:bg-white focus:border-gray-500 mb-2 px-4 py-3">
                        @error('email')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="w-full mb-6">
                    <label class="block mb-2 text-gray-800 text-xs font-bold uppercase tracking-wide" for="contact-message">
                        Nachricht
                    </label>

                    <textarea wire:model="message" id="contact-message" rows="4" name="message" class="block w-full border shadow rounded-lg appearance-none bg-gray-200 text-gray-700 focus:outline-none focus:bg-white focus:border-gray-500 mb-2 px-4 py-3" placeholder="A lovely message here."></textarea>
                    @error('message')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="border border-l-4 border-orange-400 bg-orange-100 px-6 mb-6 rounded-lg">
                    <p class="text-sm">
                        Mit der Eingabe und Absendung Ihrer Daten erklären Sie sich einverstanden,
                        dass wir Ihre Angaben zum Zwecke der Beantwortung Ihrer Anfrage und etwaiger Rückfragen entgegennehmen,
                        zwischenspeichern und auswerten. Sie können diese Erklärung jederzeit per E-Mail an <span class="font-bold text-orange-500 hover:text-orange-400 cursor-pointer">datenschutz(at)herzundhand24.de</span> widerrufen.
                        Lesen Sie auch unsere <a href="{{ route('disclaimer') }}" class="font-bold text-orange-500 hover:text-orange-400">Datenschutzhinweise</a> dazu.
                    </p>
                </div>

                <div class="flex justify-between items-center w-full">
                    <span class="text-sm">
                        Alle Felder sind Pflichtfelder.
                        <span class="text-green-600 text-base absolute -mt-1">*</span>
                    </span>

                    <div>
                        @if(session()->has('success'))
                        <span class="cursor-not-allowed inline-flex items-center justify-center py-3 px-4 border border-transparent text-xs uppercase font-bold rounded-full text-white bg-green-600 focus:outline-none focus:shadow-outline transition duration-150 ease-in-out cursor-pointer">
                            {{ session()->get('success') }}
                        </span>
                        @else
                        <button type="submit" wire:target="store" wire:loading.attr="disabled" wire:loading.class="bg-green-600 cursor-wait" class="inline-flex items-center justify-center py-3 px-4 border border-transparent text-xs uppercase font-bold rounded-full text-green-600 hover:text-white bg-green-200 hover:bg-green-600 focus:outline-none focus:shadow-outline transition duration-150 ease-in-out cursor-pointer">
                            <!-- By Sam Herbert (@sherb), for everyone. More @ http://goo.gl/7AJzbL -->
                            <svg wire:target="store" wire:loading class="w-16 h-5" viewBox="0 0 140 64" xmlns="http://www.w3.org/2000/svg" fill="#fff">
                                <path d="M30.262 57.02L7.195 40.723c-5.84-3.976-7.56-12.06-3.842-18.063 3.715-6 11.467-7.65 17.306-3.68l4.52 3.76 2.6-5.274c3.717-6.002 11.47-7.65 17.305-3.68 5.84 3.97 7.56 12.054 3.842 18.062L34.49 56.118c-.897 1.512-2.793 1.915-4.228.9z" fill-opacity=".5">
                                    <animate attributeName="fill-opacity" begin="0s" dur="1.4s" values="0.5;1;0.5" calcMode="linear" repeatCount="indefinite" />
                                </path>
                                <path d="M105.512 56.12l-14.44-24.272c-3.716-6.008-1.996-14.093 3.843-18.062 5.835-3.97 13.588-2.322 17.306 3.68l2.6 5.274 4.52-3.76c5.84-3.97 13.592-2.32 17.307 3.68 3.718 6.003 1.998 14.088-3.842 18.064L109.74 57.02c-1.434 1.014-3.33.61-4.228-.9z" fill-opacity=".5">
                                    <animate attributeName="fill-opacity" begin="0.7s" dur="1.4s" values="0.5;1;0.5" calcMode="linear" repeatCount="indefinite" />
                                </path>
                                <path d="M67.408 57.834l-23.01-24.98c-5.864-6.15-5.864-16.108 0-22.248 5.86-6.14 15.37-6.14 21.234 0L70 16.168l4.368-5.562c5.863-6.14 15.375-6.14 21.235 0 5.863 6.14 5.863 16.098 0 22.247l-23.007 24.98c-1.43 1.556-3.757 1.556-5.188 0z" />
                            </svg>
                            <span wire:target="store" wire:loading.remove>Absenden</span>
                        </button>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>