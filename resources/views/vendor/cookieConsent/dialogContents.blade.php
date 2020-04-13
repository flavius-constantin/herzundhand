 <div class="flex justify-center sticky bottom-0 w-full md:px-0 px-8 bg-orange-300 text-orange-900 border-t border-orange-400 leading-relaxed js-cookie-consent cookie-consent">
     <div class="flex items-center">

         <p class="cookie-consent__message">
             {!! trans('cookieConsent::texts.message') !!}
         </p>

         <button class="md:ml-4 ml-0 py-1 px-2 border border-transparent text-xs uppercase font-bold rounded-full text-orange-600 hover:text-white bg-orange-200 hover:bg-orange-600 focus:outline-none focus:shadow-outline transition duration-150 ease-in-out cursor-pointer js-cookie-consent-agree cookie-consent__agree">
             {{ trans('cookieConsent::texts.agree') }}
         </button>

     </div>
 </div>