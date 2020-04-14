<div class="flex
            justify-center
            sticky
            bottom-0
            w-full
            px-8
            bg-valencia-300
            text-valencia-900
            text-xs
            border-t
            border-valencia-400
            leading-relaxed
            opacity-85
            js-cookie-consent cookie-consent">
    <div class="flex items-center">
        <p class="cookie-consent__message">
            {!! trans('cookieConsent::texts.message') !!}
        </p>

        <button class="md:ml-4
                        ml-0
                        py-1
                        px-2
                        border
                        border-transparent
                        text-xs
                        uppercase
                        font-bold
                        rounded-full
                        text-valencia-600
                        hover:text-white
                        bg-valencia-200
                        hover:bg-valencia-600
                        focus:outline-none
                        focus:shadow-outline
                        transition
                        duration-150
                        ease-in-out
                        cursor-pointer
                        js-cookie-consent-agree cookie-consent__agree">
            {{ trans('cookieConsent::texts.agree') }}
        </button>
    </div>
</div>