@extends('layouts.web')

@push('styles')
<style>
    hr {
        border: 0;
        height: 1px;
        max-width: 500px;
        margin-left: auto;
        margin-right: auto;
        background-image: linear-gradient(to right, rgba(8, 197, 70, 0), rgba(8, 197, 70, 0.75), rgba(8, 197, 70, 0));
    }

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
    <h3 class="text-center text-3xl leading-8 font-extrabold text-gray-800 sm:text-4xl sm:leading-10">
        Unsere Mission
    </h3>
    <p class="text-center uppercase text-green-600 font-bold text-sm -mt-4">
        Das Modell der 24 Stunden Pflege
    </p>
    <p class="text-center md:text-left mt-4 max-w-3xl mx-auto text-lg leading-relaxed text-gray-600">
        Das Modell der 24 Stunden Pflege zu Hause bietet Ihren hilfebedürftigen Angehörigen professionelle Unterstützung im Alltag und entlastet Sie von den vielfältigen und zeitintensiven Aufgaben, die eine professionelle Rundumbetreuung mit sich bringt. Erfahrene osteuropäische Betreuungs- und Pflegekräfte aus Rumänien kümmern sich fürsorglich um die Bedürfnisse Ihrer liebsten.
    </p>
    <p class="text-center md:text-left mt-4 max-w-3xl mx-auto text-lg leading-relaxed text-gray-600">
        <span class="font-bold">Kurz: </span>
        Betreuungsbedürftigen Menschen ein würdevolles Leben im vertrauten Umfeld ermöglichen. &#128522;
    </p>
</section>

<hr>

<section id="vielfalt" class="container text-center mt-20">
    <h3 class="text-3xl leading-8 font-extrabold text-gray-800 sm:text-4xl sm:leading-10">
        Vielf&auml;ltigkeit
    </h3>
    <p class="uppercase text-green-600 font-bold text-sm -mt-4">
        Wir unterst&uuml;tzen Sie liebevoll und routiniert
    </p>
</section>

<section class="container relative px-6 md:px-0 my-20 overflow-hidden">
    <div class="grid md:grid-cols-2 grid-cols-1 gap-16 flex items-center">
        <div class="mx-auto md:w-10/12  w-6/12 h-6/12">
            <svg class="opacity-50" id="ba7a25ce-c07b-4ac4-a0ea-a259ac25350d" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 886 757.3">
                <defs>
                    <linearGradient id="ed8d860b-00cf-433a-95e5-cbf5c617e18b" x1="709" y1="237.54" x2="768" y2="237.54" gradientUnits="userSpaceOnUse">
                        <stop offset="0" stop-color="gray" stop-opacity="0.25" />
                        <stop offset="0.54" stop-color="gray" stop-opacity="0.12" />
                        <stop offset="1" stop-color="gray" stop-opacity="0.1" />
                    </linearGradient>
                    <linearGradient id="6339929e-befe-4c3c-83b4-b4b07511d1c6" x1="816" y1="110" x2="816" y2="0" xlink:href="#ed8d860b-00cf-433a-95e5-cbf5c617e18b" />
                    <linearGradient id="c68f5f28-28ea-478e-a627-cc48dbc11db2" x1="347.64" y1="559.73" x2="347.64" y2="158.42" xlink:href="#ed8d860b-00cf-433a-95e5-cbf5c617e18b" />
                    <linearGradient id="af0c75ea-b6a9-473b-a441-46b6eb7aabaa" x1="205.4" y1="660.58" x2="205.4" y2="215.07" xlink:href="#ed8d860b-00cf-433a-95e5-cbf5c617e18b" />
                    <linearGradient id="07c293ef-2e04-47b9-9dab-05744944918b" x1="527.17" y1="577.53" x2="527.17" y2="241.78" xlink:href="#ed8d860b-00cf-433a-95e5-cbf5c617e18b" />
                    <linearGradient id="99ecabf1-6663-4199-9e30-2b1879a6e68f" x1="356.61" y1="658.33" x2="356.61" y2="284.4" xlink:href="#ed8d860b-00cf-433a-95e5-cbf5c617e18b" />
                    <linearGradient id="a5323f77-a164-4403-a4a3-e3bb80b3dd3a" x1="719.08" y1="790.22" x2="719.08" y2="410" xlink:href="#ed8d860b-00cf-433a-95e5-cbf5c617e18b" />
                    <linearGradient id="2adf7edc-03a9-497d-bc9b-be51c3b9abee" x1="561.04" y1="372.91" x2="561.04" y2="256.23" xlink:href="#ed8d860b-00cf-433a-95e5-cbf5c617e18b" />
                    <linearGradient id="fc6d08f3-e0d9-4b30-9f4b-e3e40f68421d" x1="400.09" y1="530.21" x2="400.09" y2="427.08" xlink:href="#ed8d860b-00cf-433a-95e5-cbf5c617e18b" />
                    <linearGradient id="b061de97-efb2-47d4-a738-e03d872c7bb2" x1="719.9" y1="530.21" x2="719.9" y2="427.08" xlink:href="#ed8d860b-00cf-433a-95e5-cbf5c617e18b" />
                    <linearGradient id="629934b4-7f6d-4a9f-b25a-bd23c5ea943e" x1="560.01" y1="430.7" x2="560.01" y2="100.75" xlink:href="#ed8d860b-00cf-433a-95e5-cbf5c617e18b" />
                    <linearGradient id="ff5f70b0-5412-4b05-8af3-9cc71edd9fb3" x1="560.52" y1="716.16" x2="560.52" y2="543.75" xlink:href="#ed8d860b-00cf-433a-95e5-cbf5c617e18b" />
                    <linearGradient id="55ccc14f-2d64-46f4-b390-94f238de28f8" x1="592.29" y1="643.76" x2="592.29" y2="618.76" xlink:href="#ed8d860b-00cf-433a-95e5-cbf5c617e18b" />
                    <linearGradient id="dc666d0b-2aa0-4660-9d56-037189502a05" x1="558.44" y1="741.68" x2="558.44" y2="691.68" xlink:href="#ed8d860b-00cf-433a-95e5-cbf5c617e18b" />
                    <linearGradient id="fa11ad7e-aa97-42a8-8299-cf9535b348d8" x1="424.15" y1="725.92" x2="424.15" y2="540.93" xlink:href="#ed8d860b-00cf-433a-95e5-cbf5c617e18b" />
                    <linearGradient id="54170ddb-90d4-4c6b-9aec-414726b57e5b" x1="273.95" y1="740.07" x2="273.95" y2="534.71" xlink:href="#ed8d860b-00cf-433a-95e5-cbf5c617e18b" />
                    <linearGradient id="35371f95-6706-4e56-a6fb-3c3dca9d719e" x1="506.91" y1="734.12" x2="506.91" y2="579.36" xlink:href="#ed8d860b-00cf-433a-95e5-cbf5c617e18b" />
                    <linearGradient id="71e42c26-8972-4331-ac1b-fe8028f46264" x1="343.65" y1="739.03" x2="343.65" y2="566.66" xlink:href="#ed8d860b-00cf-433a-95e5-cbf5c617e18b" />
                    <linearGradient id="b530f945-63fc-46f4-8c64-420d03be0b8a" x1="45.22" y1="748.2" x2="45.22" y2="468.2" xlink:href="#ed8d860b-00cf-433a-95e5-cbf5c617e18b" />
                    <linearGradient id="6434ea8d-22a5-4ded-b4fb-b816fb6aaf11" x1="147" y1="528.64" x2="147" y2="479.76" xlink:href="#ed8d860b-00cf-433a-95e5-cbf5c617e18b" />
                    <linearGradient id="ce587cc2-5f44-4d09-a37f-cbd1d4582cbf" x1="45.67" y1="511.76" x2="45.67" y2="495.76" xlink:href="#ed8d860b-00cf-433a-95e5-cbf5c617e18b" />
                    <linearGradient id="44f2908b-b842-425b-90b7-6a504dcafb19" x1="259.89" y1="511.76" x2="259.89" y2="495.76" xlink:href="#ed8d860b-00cf-433a-95e5-cbf5c617e18b" />
                    <linearGradient id="18c6eef5-8ad4-4423-849c-53e6d88fcc26" x1="75.89" y1="627.76" x2="247.44" y2="627.76" xlink:href="#ed8d860b-00cf-433a-95e5-cbf5c617e18b" />
                    <linearGradient id="6cad729a-3ab6-44c4-8c11-5c0a64ee20ab" x1="500.45" y1="749.89" x2="500.45" y2="581.7" gradientTransform="matrix(-1, 0, 0, 1, 1458.08, 0)" xlink:href="#ed8d860b-00cf-433a-95e5-cbf5c617e18b" />
                    <linearGradient id="b6203ec6-a956-4b17-9931-78587025ff07" x1="506.63" y1="817.3" x2="506.63" y2="630.59" gradientTransform="matrix(-1, 0, 0, 1, 1301.08, -60)" xlink:href="#ed8d860b-00cf-433a-95e5-cbf5c617e18b" />
                    <linearGradient id="b6cb1d8e-c69c-4d33-a5df-3c3a5a49df8c" x1="575.69" y1="757.35" x2="575.69" y2="616.64" gradientTransform="matrix(-1, 0, 0, 1, 1458.08, 0)" xlink:href="#ed8d860b-00cf-433a-95e5-cbf5c617e18b" />
                    <linearGradient id="7de7dbdc-b07f-446b-8432-6deb6240c5ca" x1="570.01" y1="816.36" x2="570.01" y2="659.65" gradientTransform="matrix(-1, 0, 0, 1, 1301.08, -60)" xlink:href="#ed8d860b-00cf-433a-95e5-cbf5c617e18b" />
                </defs>
                <title>Haushaltsführung</title>
                <polygon points="709 242.4 709 176 768 176 768 299.07 709 242.4" fill="url(#ed8d860b-00cf-433a-95e5-cbf5c617e18b)" />
                <polygon points="716 247 716 189 760 189 760 299.07 716 247" fill="#53e683" />
                <circle cx="816" cy="55" r="55" fill="url(#6339929e-befe-4c3c-83b4-b4b07511d1c6)" />
                <circle cx="816" cy="55" r="44" fill="#ff9800" />
                <g id="f741385e-e577-4271-b030-1aa9bd75830a" data-name="&lt;Group&gt;">
                    <path d="M502.49,365.47A86.18,86.18,0,0,0,484.7,236.57a51,51,0,0,0,8.16-27.75c0-27.84-22.07-50.41-49.29-50.41-22.42,0-41.32,15.33-47.29,36.29-12.87-21.75-36.22-36.29-62.89-36.29-40.57,0-73.45,33.63-73.45,75.12a76.49,76.49,0,0,0,4.5,25.93c-1.49-.12-3-.23-4.5-.23-32.56,0-59,27-59,60.3,0,2.05.1,4.08.3,6.09A74.94,74.94,0,0,0,157,394.41c0,41.35,32.78,74.88,73.21,74.88a72,72,0,0,0,12.67-1.14c-.22,2.49-.35,5-.35,7.57,0,46.4,36.78,84,82.15,84a80.5,80.5,0,0,0,46.78-15,60.29,60.29,0,0,0,39.72,15c33.89,0,61.37-28.1,61.37-62.77,0-1.5-.12-3-.22-4.45h.22c36.3,0,65.72-30.09,65.72-67.21A67.38,67.38,0,0,0,502.49,365.47Z" transform="translate(-157 -60)" fill="url(#c68f5f28-28ea-478e-a627-cc48dbc11db2)" />
                </g>
                <path id="aa86aca2-1def-4b5e-bdbf-3429bf39090e" data-name="&lt;Path&gt;" d="M493,365.07a80.89,80.89,0,0,0-16.7-121,47.84,47.84,0,0,0,7.66-26c0-26.13-20.71-47.32-46.27-47.32-21,0-38.78,14.39-44.39,34.06a68.61,68.61,0,0,0-59-34.06c-38.08,0-68.95,31.57-68.95,70.51a71.8,71.8,0,0,0,4.22,24.34c-1.4-.11-2.8-.22-4.22-.22C234.75,265.37,210,290.7,210,322c0,1.93.1,3.83.28,5.71a70.34,70.34,0,0,0-41.56,64.57c0,38.82,30.77,70.28,68.72,70.28a67.57,67.57,0,0,0,11.89-1.07c-.2,2.34-.33,4.71-.33,7.1,0,43.55,34.52,78.86,77.11,78.86a75.56,75.56,0,0,0,43.91-14,56.59,56.59,0,0,0,37.28,14c31.81,0,57.61-26.38,57.61-58.92,0-1.41-.11-2.79-.21-4.18h.21c34.07,0,61.69-28.25,61.69-63.09A63.24,63.24,0,0,0,493,365.07Z" transform="translate(-157 -60)" fill="#00897b" />
                <rect x="196.44" y="215.07" width="17.91" height="445.51" fill="url(#af0c75ea-b6a9-473b-a441-46b6eb7aabaa)" />
                <rect x="201.53" y="221.33" width="9.01" height="439.25" fill="#795548" />
                <rect x="343.58" y="369.44" width="108.81" height="9.01" transform="translate(-303.8 351.85) rotate(-47.2)" fill="#795548" />
                <rect x="318.19" y="406.26" width="9.01" height="95.48" transform="translate(-391.19 382.39) rotate(-53.4)" fill="#795548" />
                <g id="b1e29bf6-85c6-472a-ba69-b630e8d8f49d" data-name="&lt;Group&gt;">
                    <path d="M390,415a69.52,69.52,0,0,1-18.86-47.52c0-25.44,13.83-47.74,34.61-60.31A41,41,0,0,1,398.57,284c0-23.29,19.54-42.17,43.65-42.17,19.86,0,36.59,12.82,41.88,30.36a65.5,65.5,0,0,1,55.69-30.36c35.93,0,65,28.14,65,62.85a60.83,60.83,0,0,1-4,21.69c1.32-.1,2.64-.19,4-.19,28.84,0,52.21,22.58,52.21,50.44a49.31,49.31,0,0,1-.27,5.09c23.06,9.6,39.21,31.75,39.21,57.55,0,34.6-29,62.64-64.84,62.64a67.38,67.38,0,0,1-11.22-1c.19,2.09.31,4.19.31,6.33,0,38.82-32.57,70.29-72.75,70.29A74.16,74.16,0,0,1,506.07,565a55.23,55.23,0,0,1-35.18,12.52c-30,0-54.35-23.51-54.35-52.51,0-1.26.1-2.49.19-3.73h-.19c-32.14,0-58.2-25.18-58.2-56.23C358.34,443.23,371.23,424.32,390,415Z" transform="translate(-157 -60)" fill="url(#07c293ef-2e04-47b9-9dab-05744944918b)" />
                </g>
                <path id="da8ae254-7852-462b-b033-1b79dc847a6a" data-name="&lt;Path&gt;" d="M395.91,414.77a66.54,66.54,0,0,1-18-45.49c0-24.35,13.24-45.69,33.13-57.72a39.2,39.2,0,0,1-6.91-22.22c0-22.29,18.71-40.37,41.78-40.37,19,0,35,12.27,40.09,29.06A62.7,62.7,0,0,1,539.25,249c34.39,0,62.26,26.93,62.26,60.15a58.22,58.22,0,0,1-3.81,20.77c1.26-.09,2.52-.19,3.81-.19,27.6,0,50,21.62,50,48.28a47.2,47.2,0,0,1-.25,4.87c22.07,9.19,37.53,30.39,37.53,55.08,0,33.11-27.78,60-62.06,60A64.49,64.49,0,0,1,616,497c.18,2,.29,4,.29,6.06,0,37.16-31.18,67.28-69.63,67.28a71,71,0,0,1-39.65-12,52.86,52.86,0,0,1-33.67,12c-28.73,0-52-22.5-52-50.26,0-1.2.1-2.38.19-3.57h-.19c-30.77,0-55.71-24.1-55.71-53.82C365.58,441.79,377.91,423.69,395.91,414.77Z" transform="translate(-157 -60)" fill="#009688" />
                <line id="d827a518-3361-4086-b50f-c6b47e6818cd" data-name="&lt;Path&gt;" x1="356.95" y1="284.4" x2="356.95" y2="658.33" fill="#795548" />
                <rect x="346.43" y="284.4" width="20.37" height="373.92" fill="url(#99ecabf1-6663-4199-9e30-2b1879a6e68f)" />
                <rect x="351.32" y="284.4" width="11.26" height="373.92" fill="#795548" />
                <line id="4a2b3956-f53f-4918-93e5-f7b78a79ae92" data-name="&lt;Path&gt;" x1="358.09" y1="396.39" x2="291.32" y2="328.28" fill="#795548" />
                <rect x="476.07" y="374.65" width="11.26" height="95.38" transform="translate(-314.94 397.95) rotate(-44.43)" fill="#795548" />
                <line id="100a92bc-a3f1-4f9a-a93f-0d91ae55d71b" data-name="&lt;Path&gt;" x1="358.09" y1="454.93" x2="427.31" y2="406.36" fill="#795548" />
                <rect x="507.42" y="485.01" width="84.56" height="11.26" transform="translate(-339.1 344.78) rotate(-35.06)" fill="#795548" />
                <path d="M970.21,410H468c-11.47,0-20.76,5.16-20.76,11.54V790.22H991V421.54C991,415.16,981.68,410,970.21,410Z" transform="translate(-157 -60)" fill="url(#a5323f77-a164-4403-a4a3-e3bb80b3dd3a)" />
                <polygon points="560.52 139.04 298.53 333.64 298.53 716.16 824.08 716.16 824.08 347.52 560.52 139.04" fill="#fff" />
                <circle cx="561.04" cy="314.57" r="58.34" fill="url(#2adf7edc-03a9-497d-bc9b-be51c3b9abee)" />
                <rect x="348.53" y="427.08" width="103.13" height="103.13" fill="url(#fc6d08f3-e0d9-4b30-9f4b-e3e40f68421d)" />
                <rect x="668.34" y="427.08" width="103.13" height="103.13" fill="url(#b061de97-efb2-47d4-a738-e03d872c7bb2)" />
                <polygon points="248 430.7 234.03 352.56 561.67 100.75 886 357.59 877 427.7 561.62 189.72 248 430.7" fill="url(#629934b4-7f6d-4a9f-b25a-bd23c5ea943e)" />
                <polygon points="248.64 415.01 239.03 361.02 561.59 109.32 881 361.04 871.33 414.98 561.54 170.84 248.64 415.01" fill="#53e683" />
                <rect x="497.5" y="543.75" width="126.05" height="172.41" fill="url(#ff5f70b0-5412-4b05-8af3-9cc71edd9fb3)" />
                <rect x="501.14" y="547.4" width="118.76" height="168.76" fill="#53e683" />
                <rect x="353.22" y="430.72" width="95.84" height="33.86" fill="#53e683" />
                <rect x="353.22" y="464.58" width="95.84" height="61.98" fill="#53e683" opacity="0.2" />
                <rect x="671.99" y="430.72" width="95.84" height="33.86" fill="#53e683" />
                <rect x="671.99" y="464.58" width="95.84" height="61.98" fill="#53e683" opacity="0.2" />
                <path d="M717.52,427.18A53.13,53.13,0,0,0,770.65,374H664.39A53.13,53.13,0,0,0,717.52,427.18Z" transform="translate(-157 -60)" fill="#53e683" />
                <path d="M717.52,426.66a53.13,53.13,0,0,0,53.13-53.13H664.39A53.13,53.13,0,0,0,717.52,426.66Z" transform="translate(-157 -60)" opacity="0.2" />
                <path d="M717.52,320.92A53.13,53.13,0,0,0,664.39,374H770.65A53.13,53.13,0,0,0,717.52,320.92Z" transform="translate(-157 -60)" fill="#53e683" opacity="0.2" />
                <path d="M717.52,320.92A53.13,53.13,0,0,0,664.39,374H770.65A53.13,53.13,0,0,0,717.52,320.92Z" transform="translate(-157 -60)" fill="#53e683" opacity="0.2" />
                <circle cx="592.29" cy="631.26" r="12.5" fill="url(#55ccc14f-2d64-46f4-b390-94f238de28f8)" />
                <circle cx="592.29" cy="631.26" r="9.38" fill="#263238" />
                <rect x="481.87" y="691.68" width="153.13" height="50" fill="url(#dc666d0b-2aa0-4660-9d56-037189502a05)" />
                <rect x="484.99" y="695.84" width="146.88" height="42.71" fill="#fff" />
                <g id="06ed4a51-c0d7-4f18-ace3-f8895d5abf4f" data-name="&lt;Group&gt;">
                    <path d="M495.53,636.37a39.73,39.73,0,0,0-8.2-59.41,23.49,23.49,0,0,0,3.76-12.79,22.66,22.66,0,0,0-44.52-6.51,33.69,33.69,0,0,0-29-16.73c-18.7,0-33.86,15.5-33.86,34.63a35.26,35.26,0,0,0,2.07,12c-.69-.05-1.37-.11-2.07-.11-15,0-27.18,12.44-27.18,27.79,0,.95,0,1.88.14,2.81a34.55,34.55,0,0,0-20.41,31.71c0,19.06,15.11,34.51,33.75,34.51a33.18,33.18,0,0,0,5.84-.53c-.1,1.15-.16,2.31-.16,3.49,0,21.39,17,38.73,37.87,38.73a37.11,37.11,0,0,0,21.56-6.9,27.79,27.79,0,0,0,18.31,6.9c15.62,0,28.29-13,28.29-28.93,0-.69-.05-1.37-.1-2.05h.1c16.73,0,30.29-13.87,30.29-31A31.06,31.06,0,0,0,495.53,636.37Z" transform="translate(-157 -60)" fill="url(#fa11ad7e-aa97-42a8-8299-cf9535b348d8)" />
                </g>
                <path id="78683fa5-7813-42ce-9e3f-16828d09ffb2" data-name="&lt;Path&gt;" d="M491.15,636.19a37.29,37.29,0,0,0-7.7-55.77,22.05,22.05,0,0,0,3.53-12,21.27,21.27,0,0,0-41.79-6.11A31.63,31.63,0,0,0,418,546.61c-17.55,0-31.78,14.55-31.78,32.5a33.1,33.1,0,0,0,1.95,11.22c-.64,0-1.29-.1-1.95-.1-14.09,0-25.51,11.68-25.51,26.09,0,.89,0,1.77.13,2.63a32.43,32.43,0,0,0-19.16,29.76c0,17.89,14.18,32.4,31.68,32.4a31.15,31.15,0,0,0,5.48-.49c-.09,1.08-.15,2.17-.15,3.27,0,20.08,15.91,36.35,35.54,36.35a34.83,34.83,0,0,0,20.24-6.48,26.09,26.09,0,0,0,17.19,6.48c14.67,0,26.55-12.16,26.55-27.16,0-.65-.05-1.29-.1-1.93h.1c15.7,0,28.44-13,28.44-29.08A29.15,29.15,0,0,0,491.15,636.19Z" transform="translate(-157 -60)" fill="#00897b" />
                <rect x="269.82" y="534.71" width="8.26" height="205.36" fill="url(#54170ddb-90d4-4c6b-9aec-414726b57e5b)" />
                <rect x="272.17" y="537.59" width="4.15" height="202.48" fill="#795548" />
                <rect x="422.28" y="638.2" width="50.16" height="4.15" transform="translate(-483.38 473.44) rotate(-47.2)" fill="#795548" />
                <rect x="410.57" y="655.18" width="4.15" height="44.01" transform="translate(-534.04 544.73) rotate(-53.4)" fill="#795548" />
                <g id="972b0d41-b6e5-4c12-bd64-332f8d6d9bc4" data-name="&lt;Group&gt;">
                    <path d="M443.69,659.21A32,32,0,0,1,435,637.3a32.52,32.52,0,0,1,16-27.8,18.88,18.88,0,0,1-3.33-10.7c0-10.74,9-19.44,20.12-19.44a20,20,0,0,1,19.31,14,30.19,30.19,0,0,1,25.67-14c16.56,0,30,13,30,29a28,28,0,0,1-1.84,10c.61,0,1.22-.09,1.84-.09,13.29,0,24.07,10.41,24.07,23.25a22.73,22.73,0,0,1-.12,2.35,28.88,28.88,0,0,1,18.07,26.53c0,15.95-13.38,28.88-29.89,28.88a31.06,31.06,0,0,1-5.17-.44c.09,1,.14,1.93.14,2.92,0,17.89-15,32.4-33.54,32.4a34.19,34.19,0,0,1-19.1-5.77A25.46,25.46,0,0,1,481,734.12c-13.84,0-25.05-10.84-25.05-24.21,0-.58,0-1.15.09-1.72h-.09c-14.82,0-26.83-11.61-26.83-25.92A25.83,25.83,0,0,1,443.69,659.21Z" transform="translate(-157 -60)" fill="url(#35371f95-6706-4e56-a6fb-3c3dca9d719e)" />
                </g>
                <path id="b9cc99c1-468f-47c5-9d53-f370b6656f3a" data-name="&lt;Path&gt;" d="M446.4,659.1a30.67,30.67,0,0,1-8.32-21,31.13,31.13,0,0,1,15.27-26.61,18.07,18.07,0,0,1-3.19-10.24c0-10.28,8.62-18.61,19.26-18.61a19.18,19.18,0,0,1,18.48,13.39,28.9,28.9,0,0,1,24.57-13.39c15.85,0,28.7,12.41,28.7,27.73a26.84,26.84,0,0,1-1.76,9.57c.58,0,1.16-.09,1.76-.09,12.72,0,23,10,23,22.26a21.76,21.76,0,0,1-.12,2.25,27.64,27.64,0,0,1,17.3,25.39c0,15.26-12.81,27.64-28.61,27.64a29.73,29.73,0,0,1-5-.42c.09.92.14,1.85.14,2.79,0,17.13-14.37,31-32.1,31a32.72,32.72,0,0,1-18.28-5.52,24.37,24.37,0,0,1-15.52,5.52c-13.24,0-24-10.37-24-23.17,0-.55,0-1.1.09-1.64h-.09c-14.18,0-25.68-11.11-25.68-24.81A24.72,24.72,0,0,1,446.4,659.1Z" transform="translate(-157 -60)" fill="#009688" />
                <line id="7a451371-7fbb-4ddd-b5af-3dcf3eef4c8e" data-name="&lt;Path&gt;" x1="343.81" y1="566.66" x2="343.81" y2="739.03" fill="#795548" />
                <rect x="338.96" y="566.66" width="9.39" height="172.36" fill="url(#71e42c26-8972-4331-ac1b-fe8028f46264)" />
                <rect x="341.22" y="566.66" width="5.19" height="172.36" fill="#795548" />
                <line id="f8907fab-e671-432b-8785-92f5b3540283" data-name="&lt;Path&gt;" x1="344.34" y1="618.29" x2="313.56" y2="586.89" fill="#795548" />
                <rect x="483.35" y="640.61" width="5.19" height="43.97" transform="translate(-481.91 469.61) rotate(-44.43)" fill="#795548" />
                <line id="83bfd14d-9fcf-4efd-aa6d-a51063723d88" data-name="&lt;Path&gt;" x1="344.34" y1="645.27" x2="376.25" y2="622.88" fill="#795548" />
                <rect x="497.8" y="691.48" width="38.98" height="5.19" transform="translate(-461.83 363.07) rotate(-35.06)" fill="#795548" />
                <polyline points="89.22 503.76 156.78 573.98 233.22 503.76" fill="none" stroke="#37474f" stroke-miterlimit="10" />
                <rect x="22.56" y="468.2" width="45.33" height="280" fill="url(#b530f945-63fc-46f4-8c64-420d03be0b8a)" />
                <rect x="26.11" y="473.53" width="38.22" height="264.89" fill="#f5f5f5" />
                <rect x="11" y="479.76" width="272" height="48.89" fill="url(#6434ea8d-22a5-4ded-b4fb-b816fb6aaf11)" />
                <rect x="284.89" y="431.76" width="38.22" height="264.89" transform="translate(-417.2 808.2) rotate(-90)" fill="#f5f5f5" />
                <circle cx="45.67" cy="503.76" r="8" fill="url(#ce587cc2-5f44-4d09-a37f-cbd1d4582cbf)" />
                <circle cx="259.89" cy="503.76" r="8" fill="url(#44f2908b-b842-425b-90b7-6a504dcafb19)" />
                <circle cx="45.67" cy="503.76" r="6.22" fill="#e6e6e6" />
                <circle cx="259.89" cy="503.76" r="6.22" fill="#e6e6e6" />
                <rect x="75.89" y="569.53" width="171.56" height="116.44" fill="url(#18c6eef5-8ad4-4423-849c-53e6d88fcc26)" />
                <rect x="77.22" y="570.87" width="168.89" height="112" fill="#53e683" />
                <rect x="96.78" y="588.64" width="119.11" height="10.67" fill="#fff" />
                <rect x="118.56" y="609.53" width="84.44" height="10.67" fill="#fff" />
                <rect x="107.89" y="630.42" width="102.22" height="10.67" fill="#fff" />
                <rect x="98.11" y="651.31" width="119.11" height="10.67" fill="#fff" />
                <g id="63650477-b8a1-43d8-a2c1-7cd9fae56092" data-name="&lt;Group&gt;">
                    <path d="M892.74,668.47a36.12,36.12,0,0,1,7.46-54,21.36,21.36,0,0,1-3.42-11.63,20.6,20.6,0,0,1,40.48-5.92,30.63,30.63,0,0,1,26.36-15.21c17,0,30.78,14.1,30.78,31.48a32.06,32.06,0,0,1-1.88,10.87c.62,0,1.25-.1,1.88-.1,13.65,0,24.71,11.31,24.71,25.27,0,.86,0,1.71-.13,2.55a31.41,31.41,0,0,1,18.56,28.83c0,17.33-13.74,31.38-30.68,31.38a30.17,30.17,0,0,1-5.31-.48c.09,1,.15,2.1.15,3.17,0,19.45-15.41,35.21-34.43,35.21a33.74,33.74,0,0,1-19.61-6.27A25.27,25.27,0,0,1,931,749.89c-14.2,0-25.72-11.78-25.72-26.31,0-.63,0-1.25.09-1.87h-.09c-15.21,0-27.54-12.61-27.54-28.17A28.24,28.24,0,0,1,892.74,668.47Z" transform="translate(-157 -60)" fill="url(#6cad729a-3ab6-44c4-8c11-5c0a64ee20ab)" />
                </g>
                <path id="d9fb3d72-af8e-4f1d-b977-47710d21b422" data-name="&lt;Path&gt;" d="M896.72,668.31a33.9,33.9,0,0,1,7-50.7,20,20,0,0,1-3.21-10.91,19.34,19.34,0,0,1,38-5.56,28.75,28.75,0,0,1,24.74-14.28c16,0,28.89,13.23,28.89,29.55a30.09,30.09,0,0,1-1.77,10.2c.59,0,1.17-.09,1.77-.09,12.81,0,23.19,10.62,23.19,23.72,0,.81,0,1.61-.12,2.39a29.48,29.48,0,0,1,17.42,27.06c0,16.27-12.89,29.45-28.8,29.45a28.32,28.32,0,0,1-5-.45c.09,1,.14,2,.14,3,0,18.25-14.47,33.05-32.32,33.05a31.67,31.67,0,0,1-18.4-5.89,23.72,23.72,0,0,1-15.62,5.89c-13.33,0-24.14-11.05-24.14-24.69,0-.59,0-1.17.09-1.75h-.09c-14.28,0-25.85-11.84-25.85-26.44A26.51,26.51,0,0,1,896.72,668.31Z" transform="translate(-157 -60)" fill="#00897b" />
                <rect x="790.69" y="570.59" width="7.51" height="186.71" fill="url(#b6203ec6-a956-4b17-9931-78587025ff07)" />
                <rect x="792.29" y="573.21" width="3.78" height="184.09" fill="#795548" />
                <rect x="934.64" y="649.22" width="3.78" height="45.6" transform="translate(-364.22 755.33) rotate(-42.8)" fill="#795548" />
                <rect x="948.08" y="703.69" width="40.02" height="3.78" transform="translate(-386.79 656.31) rotate(-36.6)" fill="#795548" />
                <g id="ea5e6e86-8f22-4c0d-a253-147f504d396e" data-name="&lt;Group&gt;">
                    <path d="M939.86,689.23a29.13,29.13,0,0,0,7.9-19.92A29.57,29.57,0,0,0,933.26,644a17.16,17.16,0,0,0,3-9.73c0-9.76-8.19-17.68-18.29-17.68a18.21,18.21,0,0,0-17.55,12.72,27.45,27.45,0,0,0-23.34-12.72c-15.06,0-27.26,11.79-27.26,26.34a25.49,25.49,0,0,0,1.67,9.09c-.55,0-1.11-.08-1.67-.08-12.08,0-21.88,9.46-21.88,21.14a20.67,20.67,0,0,0,.11,2.13,26.25,26.25,0,0,0-16.43,24.12c0,14.5,12.17,26.25,27.17,26.25a28.24,28.24,0,0,0,4.7-.4c-.08.87-.13,1.76-.13,2.65,0,16.27,13.65,29.46,30.49,29.46a31.08,31.08,0,0,0,17.36-5.25A23.15,23.15,0,0,0,906,757.35c12.58,0,22.78-9.85,22.78-22,0-.53,0-1-.08-1.56h.08c13.47,0,24.39-10.55,24.39-23.57A23.48,23.48,0,0,0,939.86,689.23Z" transform="translate(-157 -60)" fill="url(#b6cb1d8e-c69c-4d33-a5df-3c3a5a49df8c)" />
                </g>
                <path id="79f8c247-f548-4c1c-8f49-a16aaa215201" data-name="&lt;Path&gt;" d="M937.4,689.14A27.89,27.89,0,0,0,945,670.07a28.3,28.3,0,0,0-13.88-24.19,16.43,16.43,0,0,0,2.9-9.31c0-9.34-7.84-16.92-17.51-16.92a17.43,17.43,0,0,0-16.8,12.18,26.28,26.28,0,0,0-22.34-12.18c-14.41,0-26.09,11.29-26.09,25.21a24.4,24.4,0,0,0,1.6,8.7c-.53,0-1.06-.08-1.6-.08-11.57,0-20.94,9.06-20.94,20.23a19.78,19.78,0,0,0,.11,2,25.13,25.13,0,0,0-15.73,23.08c0,13.88,11.64,25.13,26,25.13a27,27,0,0,0,4.5-.38c-.08.84-.12,1.68-.12,2.54,0,15.57,13.07,28.2,29.18,28.2a29.75,29.75,0,0,0,16.62-5,22.15,22.15,0,0,0,14.11,5c12,0,21.8-9.43,21.8-21.06,0-.5,0-1-.08-1.49h.08c12.89,0,23.35-10.1,23.35-22.56A22.48,22.48,0,0,0,937.4,689.14Z" transform="translate(-157 -60)" fill="#009688" />
                <line id="86901f0c-b7b5-4ba8-942f-e54f281a8bcd" data-name="&lt;Path&gt;" x1="730.93" y1="599.65" x2="730.93" y2="756.36" fill="#795548" />
                <rect x="726.81" y="599.65" width="8.54" height="156.71" fill="url(#7de7dbdc-b07f-446b-8432-6deb6240c5ca)" />
                <rect x="728.57" y="599.65" width="4.72" height="156.71" fill="#795548" />
                <line id="63650f42-d3c3-489e-a647-f3904e46b7bd" data-name="&lt;Path&gt;" x1="730.46" y1="646.58" x2="758.44" y2="618.04" fill="#795548" />
                <rect x="881.46" y="689.95" width="39.97" height="4.72" transform="translate(-380.98 791.4) rotate(-45.57)" fill="#795548" />
                <line id="25077b7e-584e-4c29-8c8c-a60ca5d6c1ae" data-name="&lt;Path&gt;" x1="730.46" y1="671.11" x2="701.44" y2="650.76" fill="#795548" />
                <rect x="870.59" y="703.21" width="4.72" height="35.44" transform="translate(-375.62 961.38) rotate(-54.94)" fill="#795548" />
            </svg>
            <!-- <img alt="..." class="max-w-full rounded-lg shadow-lg" src="https://images.unsplash.com/photo-1555212697-194d092e3b8f?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=634&amp;q=80" /> -->
        </div>
        <div>
            <!-- <div class="text-green-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 shadow-lg rounded-full bg-green-300">
                            <i class="fas fa-rocket text-xl"></i>
                        </div> -->
            <h3 class="text-3xl font-semibold text-gray-900">Führen des Haushaltes</h3>
            <p class="mt-4 text-lg leading-relaxed text-gray-600">
                The extension comes with three pre-built pages to help you get
                started faster. You can change the text and images and you're
                good to go.
            </p>

            <ul class="list-none mt-4">
                <li>
                    <div class="flex items-center">
                        <div>
                            <span class="w-10 h-10 text-base font-semibold flex justify-center items-center uppercase rounded-full text-green-600 bg-green-200 mr-3">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8">
                                    <path d="M5 13l4 4L19 7"></path>
                                </svg>
                            </span>
                        </div>
                        <div>
                            <p class="text-gray-600">
                                Haus/Wohnung reinigen
                            </p>
                        </div>
                    </div>
                </li>
                <li class="md:-mt-4">
                    <div class="flex items-center">
                        <div>
                            <span class="w-10 h-10 text-base font-semibold flex justify-center items-center uppercase rounded-full text-green-600 bg-green-200 mr-3">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8">
                                    <path d="M5 13l4 4L19 7"></path>
                                </svg>
                            </span>
                        </div>
                        <div>
                            <p class="text-gray-600">
                                Geschirr absp&uuml;len
                            </p>
                        </div>
                    </div>
                </li>
                <li class="md:-mt-4">
                    <div class="flex items-center">
                        <div>
                            <span class="w-10 h-10 text-base font-semibold flex justify-center items-center uppercase rounded-full text-green-600 bg-green-200 mr-3">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8">
                                    <path d="M5 13l4 4L19 7"></path>
                                </svg>
                            </span>
                        </div>
                        <div>
                            <p class="text-gray-600">
                                Wechseln und waschen von Wäsche und Kleidung
                            </p>
                        </div>
                    </div>
                </li>
                <!--<li class="mt-4">
                                <a href="#" class="text-green-600 hover:text-green-700">
                                    .. mehr erfahren.
                                </a>
                            </li>-->
                <li class="mt-4">
                    <a href="#" class="group py-3 px-4 border border-transparent text-xs uppercase font-bold rounded-full text-green-600 hover:text-white bg-green-200 hover:bg-green-600 focus:outline-none focus:shadow-outline transition duration-150 ease-in-out">
                        <!-- <span class="hidden group-hover:inline-block"> -->
                        Weiterlesen
                        <span class="hidden group-hover:inline-block">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-5 h-5 inline-flex -mt-1">
                                <path d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"></path>
                            </svg>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</section>

<section class="px-6 md:px-0 py-10 bg-pattern">
    <div class="container text-center">
        <!-- <p class="text-base leading-6 text-indigo-600 font-semibold tracking-wide uppercase">Transactions</p> -->
        <h3 class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-800 sm:text-4xl sm:leading-10">
            Körperpflege
        </h3>
        <p class="mt-4 max-w-2xl text-xl leading-7 text-gray-600 lg:mx-auto">
            Lorem ipsum dolor sit amet consect adipisicing elit. Possimus magnam voluptatum cupiditate veritatis in accusamus quisquam.
        </p>
        <div class="grid grid-cols-1 md:grid-cols-2 mt-8 col-gap-16">
            <div class="flex items-center lg:ml-20">
                <span class="w-10 h-10 text-base font-semibold flex justify-center items-center uppercase rounded-full text-green-600 bg-green-200 mr-3">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8">
                        <path d="M5 13l4 4L19 7"></path>
                    </svg>
                </span>
                <p class="text-gray-700">
                    Waschen (Teil- und Ganzkörperwäsche)
                </p>
            </div>
            <div class="flex items-center">
                <span class="w-10 h-10 text-base font-semibold flex justify-center items-center uppercase rounded-full text-green-600 bg-green-200 mr-3">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8">
                        <path d="M5 13l4 4L19 7"></path>
                    </svg>
                </span>
                <p class="text-gray-700">
                    Zahnpflege
                </p>
            </div>
            <div class="flex items-center lg:ml-20">
                <span class="w-10 h-10 text-base font-semibold flex justify-center items-center uppercase rounded-full text-green-600 bg-green-200 mr-3">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8">
                        <path d="M5 13l4 4L19 7"></path>
                    </svg>
                </span>
                <p class="text-gray-700">
                    Wechseln von Inkontinenzmaterial
                </p>
            </div>
            <div class="mt-6 text-left">
                <a href="#" class="group py-3 px-4 border border-transparent text-xs uppercase font-bold rounded-full text-green-600 hover:text-white bg-green-200 hover:bg-green-600 focus:outline-none focus:shadow-outline transition duration-150 ease-in-out">
                    <!-- <span class="hidden group-hover:inline-block"> -->
                    Weiterlesen
                    <span class="hidden group-hover:inline-block">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-5 h-5 inline-flex -mt-1">
                            <path d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"></path>
                        </svg>
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="container relative px-6 md:px-0 my-20">
    <div class="grid md:grid-cols-2 grid-cols-1 gap-16 flex items-center">
        <div class="mx-auto md:w-10/12 w-6/12 h-6/12">
            <svg class="opacity-50" id="a3fec48f-3481-4190-9b24-b4f8cfdaa861" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 888 677.20707">
                <title>Mobilität</title>
                <path d="M1043.6747,508.0556A98.57952,98.57952,0,1,0,854.45407,546.865c-.0964-.10719-.196-.21147-.29192-.31907a98.666,98.666,0,0,0,17.95428,27.78281c.02242.02466.04544.04871.0679.07338.6056.66,1.21467,1.3166,1.8378,1.9599a98.28015,98.28015,0,0,0,69.52936,30.25355L940.2204,787.54475h10.29127l-2.08284-119.41539,14.88675-7.83759-2.27095-4.31351-12.711,6.692-.97788-56.06376A98.57817,98.57817,0,0,0,1043.6747,508.0556Z" transform="translate(-156 -111.39647)" fill="#e6e6e6" />
                <path d="M751.08711,460.00819a115.52648,115.52648,0,1,0-221.74983,45.4812c-.113-.12561-.22968-.24782-.34211-.37392a115.62781,115.62781,0,0,0,21.04083,32.559c.02627.02891.05325.05709.07957.086.70971.7735,1.42348,1.54294,2.15374,2.29683a115.1756,115.1756,0,0,0,81.48225,35.45448l-3.90373,212.033h12.06045l-2.44091-139.94427,17.446-9.185-2.66136-5.05506-14.89615,7.84247-1.146-65.70176A115.5249,115.5249,0,0,0,751.08711,460.00819Z" transform="translate(-156 -111.39647)" fill="#e6e6e6" />
                <path d="M419.2589,414.81471A131.46682,131.46682,0,1,0,166.912,466.5714c-.12856-.14294-.26138-.282-.38931-.42552a131.58182,131.58182,0,0,0,23.944,37.05149c.02989.03289.06059.065.09055.09786.80763.88023,1.61989,1.75584,2.45091,2.61375a131.0676,131.0676,0,0,0,92.72517,40.34649L281.291,787.54475h13.72455L292.23788,628.291,312.091,617.83868l-3.02857-5.75256-16.95153,8.92457-1.30412-74.76729A131.465,131.465,0,0,0,419.2589,414.81471Z" transform="translate(-156 -111.39647)" fill="#e6e6e6" />
                <circle cx="756.68549" cy="85.97574" r="85.97574" fill="#ff6584" />
                <circle cx="245.55884" cy="187.61627" r="172.31169" fill="#53e683" />
                <path d="M274.32944,183.92206A172.32513,172.32513,0,0,0,561.45166,366.29171,172.32654,172.32654,0,1,1,274.32944,183.92206Z" transform="translate(-156 -111.39647)" opacity="0.2" />
                <polygon points="246.032 187.616 246.506 187.616 255.027 676.148 237.038 676.148 246.032 187.616" fill="#3f3d56" />
                <rect x="412.92005" y="552.74643" width="8.52091" height="32.1901" transform="translate(570.17726 -176.70103) rotate(62.23413)" fill="#3f3d56" />
                <path d="M665.11522,782.975s.62169-13.02675,13.36641-11.51257" transform="translate(-156 -111.39647)" fill="#3f3d56" />
                <circle cx="505.51414" cy="652.80329" r="6.37864" fill="#53e683" />
                <rect x="504.47624" y="663.54454" width="1.80054" height="12.60377" fill="#3f3d56" />
                <path d="M223.08289,781.17442s.62169-13.02675,13.36641-11.51256" transform="translate(-156 -111.39647)" fill="#3f3d56" />
                <circle cx="63.48181" cy="651.00275" r="6.37864" fill="#53e683" />
                <rect x="62.44391" y="661.744" width="1.80054" height="12.60377" fill="#3f3d56" />
                <path d="M327.51415,782.07469s.6217-13.02675,13.36642-11.51256" transform="translate(-156 -111.39647)" fill="#3f3d56" />
                <circle cx="167.91308" cy="651.90302" r="6.37864" fill="#53e683" />
                <rect x="166.87518" y="662.64427" width="1.80054" height="12.60377" fill="#3f3d56" />
                <path d="M605.24329,194.695l12.79484-10.23342c-9.93974-1.09662-14.02379,4.3243-15.69523,8.615-7.76533-3.22445-16.21882,1.00136-16.21882,1.00136l25.6001,9.29374A19.3721,19.3721,0,0,0,605.24329,194.695Z" transform="translate(-156 -111.39647)" fill="#3f3d56" />
                <path d="M799.827,298.93628l12.79483-10.23342c-9.93974-1.09662-14.02379,4.3243-15.69523,8.615-7.76533-3.22445-16.21881,1.00135-16.21881,1.00135l25.6001,9.29375A19.37224,19.37224,0,0,0,799.827,298.93628Z" transform="translate(-156 -111.39647)" fill="#3f3d56" />
                <path d="M589.95458,387.88881l12.79483-10.23342c-9.93974-1.09662-14.02379,4.3243-15.69523,8.615-7.76533-3.22445-16.21881,1.00136-16.21881,1.00136l25.6001,9.29374A19.37224,19.37224,0,0,0,589.95458,387.88881Z" transform="translate(-156 -111.39647)" fill="#3f3d56" />
                <path d="M515.25534,729.27564s10.02117,29.34773,5.72638,40.0847l12.88437,11.45277,7.87378-10.02118s-8.58958-8.58957-7.87378-15.03176,1.43159-29.34772,1.43159-29.34772Z" transform="translate(-156 -111.39647)" fill="#ffb9b9" />
                <path d="M563.20986,786.53557c-.58519.34211-1.14336.66619-1.65652.9633H517.12507a2.34481,2.34481,0,0,1-1.15232-2.39475c.207-1.06231.73817-3.22293,1.39541-5.70768,1.55744-5.87878,3.84411-13.57608,4.3393-12.75686a.00881.00881,0,0,1,.009.009c.69322,1.27843,2.12468,7.00413,5.70773,6.29288,3.58306-.72021,9.30881-2.1516,9.30881-2.1516s-2.04363-4.59141-.09006-6.446a2.7381,2.7381,0,0,1,1.52146-.7112c4.2943-.71119,4.2943,5.7257,4.2943,5.7257l15.74571,8.58861a26.15485,26.15485,0,0,1,3.9612,1.44942C565.36152,780.89086,568.52148,783.44765,563.20986,786.53557Z" transform="translate(-156 -111.39647)" fill="#2f2e41" />
                <path d="M486.62341,718.53867l-18.61075,22.18974-5.01059,11.45277,6.44219,5.01059,5.72638-2.14739s5.01059-12.88437,10.02118-15.03176S502.371,723.54926,502.371,723.54926Z" transform="translate(-156 -111.39647)" fill="#ffb9b9" />
                <path d="M525.63441,701.50981l-9.49149,17.59433-6.80008,12.59807c-2.176,1.29559-5.075,1.2741-8.1959.50819a31.39068,31.39068,0,0,1-4.26613-1.42443c-8.518-3.48594-17.1577-10.40769-17.1577-10.40769L496.072,699.94937l5.33982-6.66408,1.267-1.58905,6.10578,2.61264,10.77275,4.60258Z" transform="translate(-156 -111.39647)" fill="#2f2e41" />
                <path d="M483.27421,549.581l-7.58182,31.1003,7.8042,39.89975s.19224,16.31058,7.34388,15.07281-.34315-17.68773-.34315-17.68773l-3.49816-32.71568L498.18357,552.929a5.93875,5.93875,0,0,0-2.86235-7.03152h0C490.89281,543.19281,484.59952,545.11708,483.27421,549.581Z" transform="translate(-156 -111.39647)" fill="#ffb9b9" />
                <path d="M509.88685,522.76789l-6.44218,20.04234-12.16857-6.44218s5.01059-14.316,5.01059-16.46336S509.88685,522.76789,509.88685,522.76789Z" transform="translate(-156 -111.39647)" fill="#ffb9b9" />
                <circle cx="348.87626" cy="404.21344" r="15.03176" fill="#ffb9b9" />
                <path d="M508.81315,547.46292,505.95,544.59973l-.7158-3.579s-9.30537-12.16857-17.17915-7.87378c-2.46056,1.34212-4.292,4.4318-5.64722,8.04574a39.08474,39.08474,0,0,0,.89905,29.07228l12.62195,29.4512,28.63192-2.86319-5.01058-18.61075s5.01058-11.45277-4.29479-19.32655Z" transform="translate(-156 -111.39647)" fill="#53e683" />
                <path d="M525.63441,701.50981l-9.49149,17.59433-6.80008,12.59807c-2.176,1.29559-5.075,1.2741-8.1959.50819-.544-3.62194,2.70574-22.76237.15033-38.36676l.11451-.55835,1.267-1.58905,6.10578,2.61264,10.77275,4.60258Z" transform="translate(-156 -111.39647)" opacity="0.3" />
                <path d="M525.63441,595.0635s-18.61075-11.45277-31.49512,2.86319l.7158,4.29479s-10.737,12.16857-4.29479,37.9373,16.46336,93.05375,16.46336,93.05375,23.62134,1.4316,34.35831-6.44218c0,0-3.579-88.759-15.74756-97.34854Z" transform="translate(-156 -111.39647)" fill="#2f2e41" />
                <path d="M486.82706,555.19609l20.1966,24.83565,36.5057,17.89495s13.11132,9.70389,16.44713,3.25793-14.29973-10.41591-14.29973-10.41591l-28.17964-16.98413-18.99238-28.44394a5.93875,5.93875,0,0,0-7.332-1.96888h0C486.34156,545.2655,484.07144,551.44245,486.82706,555.19609Z" transform="translate(-156 -111.39647)" fill="#ffb9b9" />
                <path d="M473.44616,753.47183s4.38754-5.51807,7.00852-2.04129-3.09079,6.4563-3.09079,6.4563l-.33243,17.93477s3.11688,13.71345-5.29829,8.41516-8.74622-5.93293-10.4015-9.10613-5.07575-15.92095-8.02778-20.03238-5.65544-12.38922-2.15118-13.40987,19.83839-4.65445,19.02463-3.444-5.22876,5.12816-2.93884,7.9703S473.44616,753.47183,473.44616,753.47183Z" transform="translate(-156 -111.39647)" fill="#2f2e41" />
                <path d="M512.74865,502.78028c0-.01835.00139-.03639.00139-.05474a20.75815,20.75815,0,1,0-20.75814,20.75814c.48224,0,2.38917,3.61137,2.86319,3.579C494.88353,516.10547,501.97152,503.516,512.74865,502.78028Z" transform="translate(-156 -111.39647)" fill="#2f2e41" />
                <circle cx="313.80216" cy="375.58152" r="13.60016" fill="#2f2e41" />
                <path d="M469.17825,466.376a13.5814,13.5814,0,0,1,3.88007,26.62165,13.59039,13.59039,0,1,0-3.88007-26.62165Z" transform="translate(-156 -111.39647)" fill="#2f2e41" />
                <path d="M345.29727,387.03429h7.158a12.88435,12.88435,0,0,1,12.88435,12.88435v0a0,0,0,0,1,0,0H345.29727a0,0,0,0,1,0,0V387.03429A0,0,0,0,1,345.29727,387.03429Z" fill="#2f2e41" />
                <path d="M839.65525,787.70327s.6217-13.02675,13.36642-11.51257" transform="translate(-156 -111.39647)" fill="#3f3d56" />
                <path d="M719.91941,787.70327s.62169-13.02675,13.36641-11.51257" transform="translate(-156 -111.39647)" fill="#3f3d56" />
                <path d="M283.2887,787.70327s.62169-13.02675,13.36641-11.51257" transform="translate(-156 -111.39647)" fill="#3f3d56" />
                <path d="M893.67142,787.70327s.6217-13.02675,13.36642-11.51257" transform="translate(-156 -111.39647)" fill="#3f3d56" />
                <path d="M868.46388,787.70327s.62169-13.02675,13.36641-11.51257" transform="translate(-156 -111.39647)" fill="#3f3d56" />
                <path d="M816.46505,787.70327s-.62169-13.02675-13.36641-11.51257" transform="translate(-156 -111.39647)" fill="#3f3d56" />
                <path d="M609.40307,787.70327s-.6217-13.02675-13.36642-11.51257" transform="translate(-156 -111.39647)" fill="#3f3d56" />
                <path d="M437.45159,787.70327s-.62169-13.02675-13.36641-11.51257" transform="translate(-156 -111.39647)" fill="#3f3d56" />
                <path d="M254.69688,787.70327s-.6217-13.02675-13.36641-11.51257" transform="translate(-156 -111.39647)" fill="#3f3d56" />
                <path d="M947.9044,787.70327s-.62169-13.02675-13.36641-11.51257" transform="translate(-156 -111.39647)" fill="#3f3d56" />
                <path d="M870.48122,788.60353s-.62169-13.02674-13.36641-11.51256" transform="translate(-156 -111.39647)" fill="#3f3d56" />
                <rect y="674.60353" width="888" height="2" fill="#3f3d56" />
            </svg>
            <!-- <img alt="..." class="max-w-full rounded-lg shadow-lg" src="https://images.unsplash.com/photo-1555212697-194d092e3b8f?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=634&amp;q=80" /> -->
        </div>
        <div>
            <!-- <div class="text-green-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 shadow-lg rounded-full bg-green-300">
                            <i class="fas fa-rocket text-xl"></i>
                        </div> -->
            <h3 class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-800 sm:text-4xl sm:leading-10">
                Mobilität
            </h3>
            <p class="mt-4 max-w-2xl text-xl leading-7 text-gray-600 lg:mx-auto">
                Lorem ipsum dolor sit amet consect adipisicing elit. Possimus magnam voluptatum cupiditate veritatis in accusamus quisquam.
            </p>

            <ul class="list-none mt-4">
                <li>
                    <div class="flex items-center">
                        <div>
                            <span class="w-10 h-10 text-base font-semibold flex justify-center items-center uppercase rounded-full text-green-600 bg-green-200 mr-3">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8">
                                    <path d="M5 13l4 4L19 7"></path>
                                </svg>
                            </span>
                        </div>
                        <div>
                            <p class="text-gray-600">
                                Hilfe beim Aufstehen und Zubettgehen
                            </p>
                        </div>
                    </div>
                </li>
                <li class="md:-mt-4">
                    <div class="flex items-center">
                        <div>
                            <span class="w-10 h-10 text-base font-semibold flex justify-center items-center uppercase rounded-full text-green-600 bg-green-200 mr-3">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8">
                                    <path d="M5 13l4 4L19 7"></path>
                                </svg>
                            </span>
                        </div>
                        <div>
                            <p class="text-gray-600">
                                Lagern
                            </p>
                        </div>
                    </div>
                </li>
                <li class="md:-mt-4">
                    <div class="flex items-center">
                        <div>
                            <span class="w-10 h-10 text-base font-semibold flex justify-center items-center uppercase rounded-full text-green-600 bg-green-200 mr-3">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8">
                                    <path d="M5 13l4 4L19 7"></path>
                                </svg>
                            </span>
                        </div>
                        <div>
                            <p class="text-gray-600">
                                An- und Auskleiden
                            </p>
                        </div>
                    </div>
                </li>
                <!--<li class="mt-4">
                                <a href="#" class="text-green-600 hover:text-green-700">
                                    .. mehr erfahren.
                                </a>
                            </li>-->
                <li class="mt-4">
                    <a href="#" class="group py-3 px-4 border border-transparent text-xs uppercase font-bold rounded-full text-green-600 hover:text-white bg-green-200 hover:bg-green-600 focus:outline-none focus:shadow-outline transition duration-150 ease-in-out">
                        <!-- <span class="hidden group-hover:inline-block"> -->
                        Weiterlesen
                        <span class="hidden group-hover:inline-block">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-5 h-5 inline-flex -mt-1">
                                <path d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"></path>
                            </svg>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</section>

<!--
            <section class="container relative px-6 md:px-0 my-20 overflow-hidden">
                    <div class="mx-auto w-full lg:w-10/12">
                    -->
<section class="relative px-6 md:px-0 py-20 bg-gray-200 overflow-hidden">
    <div class="container">
        <div class="grid md:grid-cols-2 grid-cols-1 gap-16 flex items-center">
            <div class="lg:pl-20">
                <!-- <div class="text-green-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 shadow-lg rounded-full bg-green-300">
                                <i class="fas fa-rocket text-xl"></i>
                            </div> -->
                <h3 class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-800 sm:text-4xl sm:leading-10">
                    Ernährung
                </h3>
                <p class="mt-4 max-w-2xl text-xl leading-7 text-gray-600 lg:mx-auto">
                    Lorem ipsum dolor sit amet consect adipisicing elit. Possimus magnam voluptatum cupiditate veritatis in accusamus quisquam.
                </p>

                <ul class="list-none mt-4">
                    <li>
                        <div class="flex items-center">
                            <div>
                                <span class="w-10 h-10 text-base font-semibold flex justify-center items-center uppercase rounded-full text-green-600 bg-green-200 mr-3">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8">
                                        <path d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </span>
                            </div>
                            <div>
                                <p class="text-gray-600">
                                    Erstellung von Speiseplänen
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="md:-mt-4">
                        <div class="flex items-center">
                            <div>
                                <span class="w-10 h-10 text-base font-semibold flex justify-center items-center uppercase rounded-full text-green-600 bg-green-200 mr-3">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8">
                                        <path d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </span>
                            </div>
                            <div>
                                <p class="text-gray-600">
                                    Zubereitung der Speisen
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="md:-mt-4">
                        <div class="flex items-center">
                            <div>
                                <span class="w-10 h-10 text-base font-semibold flex justify-center items-center uppercase rounded-full text-green-600 bg-green-200 mr-3">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8">
                                        <path d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </span>
                            </div>
                            <div>
                                <p class="text-gray-600">
                                    <span class="font-bold sm:block">für Diabetiker: </span>
                                    Speisezubereitung nach Diätregeln
                                </p>
                            </div>
                        </div>
                    </li>
                    <!--<li class="mt-4">
                                <a href="#" class="text-green-600 hover:text-green-700">
                                    .. mehr erfahren.
                                </a>
                            </li>-->
                    <li class="mt-4">
                        <a href="#" class="group py-3 px-4 border border-transparent text-xs uppercase font-bold rounded-full text-green-600 hover:text-white bg-green-200 hover:bg-green-600 focus:outline-none focus:shadow-outline transition duration-150 ease-in-out">
                            <!-- <span class="hidden group-hover:inline-block"> -->
                            Weiterlesen
                            <span class="hidden group-hover:inline-block">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-5 h-5 inline-flex -mt-1">
                                    <path d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"></path>
                                </svg>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="mx-auto md:w-full w-6/12 h-6/12">
                <svg class="opacity-25" id="e8a6e089-f0a2-4336-8fc5-733c88302415" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 888 485.489">
                    <title>Ernährung</title>
                    <path d="M275.41211,460.30048H246.99329a3.76777,3.76777,0,0,0-3.76777,3.76776v12.47387a3.76777,3.76777,0,0,0,3.76777,3.76777h4.70941V499h19V480.30988h4.70941a3.76777,3.76777,0,0,0,3.76776-3.76777V464.06824A3.76777,3.76777,0,0,0,275.41211,460.30048Z" transform="translate(-156 -207.2555)" fill="#53e683" />
                    <path d="M303.87661,574.46128a146.10549,146.10549,0,0,1-25.418-86.62437,3.08142,3.08142,0,0,0-2.40522-3.075V479.372H246.03933v5.315h-.41356a3.07971,3.07971,0,0,0-3.06724,3.30786q3.54683,49.44186-23.95358,88.677a8.4873,8.4873,0,0,0-1.53606,5.14352l3.28188,101.51817a8.78815,8.78815,0,0,0,8.713,8.48191h67.88732a8.79123,8.79123,0,0,0,8.71824-8.63152l1.26471-98.56588A17.78875,17.78875,0,0,0,303.87661,574.46128Z" transform="translate(-156 -207.2555)" fill="#3f3d56" />
                    <path d="M269.48783,464.36493a8.12881,8.12881,0,0,1-16.25763,0" transform="translate(-156 -207.2555)" opacity="0.2" />
                    <path d="M293.12991,608.18244h-8.22064a21.57614,21.57614,0,0,0-42.6488,0h-8.22118a6.06671,6.06671,0,0,0-5.99616,6.98918l8.92944,58.04135h51.27407l10.84608-57.84582A6.0667,6.0667,0,0,0,293.12991,608.18244Z" transform="translate(-156 -207.2555)" fill="#53e683" />
                    <polygon points="827.952 307.634 825.98 386.448 823.538 484.181 740.414 484.181 737.552 369.675 736 307.634 827.952 307.634" fill="#e6e6e6" />
                    <rect x="775.72312" y="265.70393" width="11.76981" height="155.95002" fill="#53e683" />
                    <path d="M978.06676,574.27527l-2.22611,112.02H900.07391l-2.60826-131.24365a51.63393,51.63393,0,0,1,40.82688,5.61536C950.95161,568.15405,965.173,572.18424,978.06676,574.27527Z" transform="translate(-156 -207.2555)" fill="#3f3d56" />
                    <rect x="752.03074" y="379.63032" width="10.79992" height="10.79992" fill="#e6e6e6" />
                    <rect x="759.38688" y="357.56192" width="10.79992" height="10.79992" fill="#e6e6e6" />
                    <rect x="936.42384" y="575.81564" width="10.79992" height="10.79992" transform="translate(375.57517 -653.92108) rotate(36.56259)" fill="#e6e6e6" />
                    <rect x="955.93676" y="594.95132" width="10.79992" height="10.79992" transform="translate(390.81432 -661.77916) rotate(36.56259)" fill="#e6e6e6" />
                    <rect x="922.83416" y="605.98552" width="10.79992" height="10.79992" transform="translate(390.87303 -639.88846) rotate(36.56259)" fill="#e6e6e6" />
                    <circle cx="805.14765" cy="351.03508" r="2.20684" fill="#3f3d56" />
                    <circle cx="760.27524" cy="336.32281" r="2.20684" fill="#3f3d56" />
                    <circle cx="797.79152" cy="320.87493" r="2.20684" fill="#3f3d56" />
                    <circle cx="444.50808" cy="241.75402" r="241.75402" fill="#53e683" />
                    <path d="M600.50808,625.46663a176.45595,176.45595,0,1,1,124.77436-51.68275A175.30352,175.30352,0,0,1,600.50808,625.46663Zm0-342.0314c-91.29808,0-165.5743,74.27621-165.5743,165.57429,0,91.2977,74.27622,165.5743,165.5743,165.5743,91.2977,0,165.57429-74.2766,165.57429-165.5743C766.08237,357.71144,691.80578,283.43523,600.50808,283.43523Z" transform="translate(-156 -207.2555)" opacity="0.2" />
                    <circle cx="444.50808" cy="241.75402" r="171.0157" fill="#3f3d56" />
                    <path d="M473.32742,380.62742a21.704,21.704,0,1,1,38.68118-19.69819l48.31632,94.87836a21.704,21.704,0,1,1-38.68118,19.69819Z" transform="translate(-156 -207.2555)" fill="#ff6584" />
                    <path d="M478.71655,391.21l-2.23-4.379c11.12916-8.64736,24.19788-15.007,38.68118-19.69819l2.23,4.379C501.72232,374.77607,488.38616,380.817,478.71655,391.21Z" transform="translate(-156 -207.2555)" opacity="0.2" />
                    <path d="M489.12314,411.64534l-2.23-4.379c11.12915-8.64736,24.19788-15.007,38.68117-19.69819l2.23,4.379C512.12891,395.21141,498.79275,401.25236,489.12314,411.64534Z" transform="translate(-156 -207.2555)" opacity="0.2" />
                    <path d="M499.52973,432.08068l-2.23-4.379c11.12915-8.64736,24.19788-15.007,38.68118-19.69819l2.23,4.379C522.5355,415.64675,509.19935,421.6877,499.52973,432.08068Z" transform="translate(-156 -207.2555)" opacity="0.2" />
                    <path d="M509.93632,452.516l-2.23-4.379c11.12916-8.64736,24.19788-15.007,38.68118-19.69819l2.23,4.379C532.94209,436.08209,519.60594,442.123,509.93632,452.516Z" transform="translate(-156 -207.2555)" opacity="0.2" />
                    <path d="M520.34292,472.95136l-2.23-4.379c11.12916-8.64736,24.19788-15.007,38.68118-19.69819l2.23,4.379C543.34868,456.51743,530.01253,462.55838,520.34292,472.95136Z" transform="translate(-156 -207.2555)" opacity="0.2" />
                    <path d="M437.07906,416.14643a21.704,21.704,0,1,1,38.68118-19.6982l48.31632,94.87837a21.704,21.704,0,0,1-38.68118,19.69819Z" transform="translate(-156 -207.2555)" fill="#ff6584" />
                    <path d="M442.46819,426.729l-2.23-4.379c11.12916-8.64736,24.19788-15.007,38.68118-19.69819l2.23,4.379C465.474,410.29508,452.1378,416.336,442.46819,426.729Z" transform="translate(-156 -207.2555)" opacity="0.2" />
                    <path d="M452.87478,447.16435l-2.23-4.379c11.12915-8.64736,24.19788-15.007,38.68118-19.69819l2.23,4.379C475.88055,430.73042,462.5444,436.77137,452.87478,447.16435Z" transform="translate(-156 -207.2555)" opacity="0.2" />
                    <path d="M463.28137,467.59969l-2.23-4.379c11.12915-8.64736,24.19788-15.007,38.68118-19.69819l2.23,4.379C486.28714,451.16576,472.951,457.20671,463.28137,467.59969Z" transform="translate(-156 -207.2555)" opacity="0.2" />
                    <path d="M473.688,488.035l-2.23-4.379c11.12916-8.64736,24.19788-15.007,38.68118-19.69819l2.23,4.379C496.69373,471.6011,483.35758,477.64205,473.688,488.035Z" transform="translate(-156 -207.2555)" opacity="0.2" />
                    <path d="M484.09456,508.47037l-2.23-4.379c11.12916-8.64736,24.19788-15.007,38.68118-19.69819l2.23,4.379C507.10032,492.03644,493.76417,498.07739,484.09456,508.47037Z" transform="translate(-156 -207.2555)" opacity="0.2" />
                    <path d="M714.77766,454.45093l.15257.00013a25.8881,25.8881,0,0,0,24.23924-16.23619,84.50284,84.50284,0,0,0,5.9231-31.69393c-.27144-45.91073-37.62223-83.57515-83.52936-84.21021a84.74394,84.74394,0,0,0-35.27687,162.32018,25.66668,25.66668,0,0,0,28.50566-5.28585A84.45815,84.45815,0,0,1,714.77766,454.45093Z" transform="translate(-156 -207.2555)" fill="#e6e6e6" />
                    <circle cx="515.24639" cy="193.55868" r="27.98439" fill="#f9a825" />
                    <circle cx="454.42624" cy="187.11516" r="3.29669" fill="#3f3d56" />
                    <circle cx="345.59806" cy="190.22453" r="3.29669" fill="#3f3d56" />
                    <circle cx="471.99609" cy="152.94948" r="3.29669" fill="#3f3d56" />
                    <circle cx="471.90243" cy="247.97277" r="3.29669" fill="#3f3d56" />
                    <circle cx="537.19934" cy="146.14069" r="3.29669" fill="#3f3d56" />
                    <circle cx="324.20705" cy="236.31261" r="3.29669" fill="#3f3d56" />
                    <circle cx="348.30472" cy="283.7306" r="3.29669" fill="#3f3d56" />
                    <circle cx="499.69951" cy="289.94935" r="12.43751" fill="#ff6584" />
                    <path d="M665.02764,497.9822a9.32813,9.32813,0,0,1-18.65626,0" transform="translate(-156 -207.2555)" opacity="0.2" />
                    <path d="M646.37138,496.42751a9.32813,9.32813,0,0,1,18.65626,0" transform="translate(-156 -207.2555)" opacity="0.2" />
                    <ellipse cx="495.03545" cy="285.67396" rx="0.77734" ry="1.16602" fill="#ff6584" />
                    <ellipse cx="499.69951" cy="284.11927" rx="0.77734" ry="1.16602" fill="#ff6584" />
                    <ellipse cx="499.69951" cy="294.22475" rx="0.77734" ry="1.16602" fill="#ff6584" />
                    <ellipse cx="504.36357" cy="288.00599" rx="0.77734" ry="1.16602" fill="#ff6584" />
                    <ellipse cx="503.58623" cy="296.55678" rx="0.77734" ry="1.16602" fill="#ff6584" />
                    <ellipse cx="494.2581" cy="292.67006" rx="0.77734" ry="1.16602" fill="#ff6584" />
                    <circle cx="524.57452" cy="256.52356" r="12.43751" fill="#ff6584" />
                    <path d="M689.90265,464.5564a9.32813,9.32813,0,0,1-18.65626,0" transform="translate(-156 -207.2555)" opacity="0.2" />
                    <path d="M671.24639,463.00172a9.32813,9.32813,0,0,1,18.65626,0" transform="translate(-156 -207.2555)" opacity="0.2" />
                    <ellipse cx="519.91046" cy="252.24816" rx="0.77734" ry="1.16602" fill="#ff6584" />
                    <ellipse cx="524.57452" cy="250.69348" rx="0.77734" ry="1.16602" fill="#ff6584" />
                    <ellipse cx="524.57452" cy="260.79895" rx="0.77734" ry="1.16602" fill="#ff6584" />
                    <ellipse cx="529.23859" cy="254.5802" rx="0.77734" ry="1.16602" fill="#ff6584" />
                    <ellipse cx="528.46124" cy="263.13098" rx="0.77734" ry="1.16602" fill="#ff6584" />
                    <ellipse cx="519.13311" cy="259.24426" rx="0.77734" ry="1.16602" fill="#ff6584" />
                    <circle cx="549.44953" cy="273.62513" r="12.43751" fill="#53e683" />
                    <path d="M714.77766,481.658a9.32813,9.32813,0,0,1-18.65626,0" transform="translate(-156 -207.2555)" opacity="0.2" />
                    <path d="M696.1214,480.10329a9.32813,9.32813,0,0,1,18.65626,0" transform="translate(-156 -207.2555)" opacity="0.2" />
                    <ellipse cx="544.78547" cy="269.34974" rx="0.77734" ry="1.16602" fill="#53e683" />
                    <ellipse cx="549.44953" cy="267.79505" rx="0.77734" ry="1.16602" fill="#53e683" />
                    <ellipse cx="549.44953" cy="277.90052" rx="0.77734" ry="1.16602" fill="#53e683" />
                    <ellipse cx="554.1136" cy="271.68177" rx="0.77734" ry="1.16602" fill="#53e683" />
                    <ellipse cx="553.33625" cy="280.23255" rx="0.77734" ry="1.16602" fill="#53e683" />
                    <ellipse cx="544.00812" cy="276.34583" rx="0.77734" ry="1.16602" fill="#53e683" />
                    <circle cx="487.262" cy="275.17982" r="12.43751" fill="#53e683" />
                    <path d="M652.59013,483.21266a9.32813,9.32813,0,0,1-18.65626,0" transform="translate(-156 -207.2555)" opacity="0.2" />
                    <path d="M633.93387,481.658a9.32813,9.32813,0,0,1,18.65626,0" transform="translate(-156 -207.2555)" opacity="0.2" />
                    <ellipse cx="482.59794" cy="270.90442" rx="0.77734" ry="1.16602" fill="#53e683" />
                    <ellipse cx="487.262" cy="269.34974" rx="0.77734" ry="1.16602" fill="#53e683" />
                    <ellipse cx="487.262" cy="279.45521" rx="0.77734" ry="1.16602" fill="#53e683" />
                    <ellipse cx="491.92607" cy="273.23646" rx="0.77734" ry="1.16602" fill="#53e683" />
                    <ellipse cx="491.14872" cy="281.78724" rx="0.77734" ry="1.16602" fill="#53e683" />
                    <ellipse cx="481.8206" cy="277.90052" rx="0.77734" ry="1.16602" fill="#53e683" />
                    <circle cx="515.24639" cy="280.62122" r="12.43751" fill="#53e683" />
                    <path d="M680.57452,488.65407a9.32813,9.32813,0,1,1-18.65626,0" transform="translate(-156 -207.2555)" opacity="0.2" />
                    <path d="M661.91826,487.09938a9.32813,9.32813,0,1,1,18.65626,0" transform="translate(-156 -207.2555)" opacity="0.2" />
                    <ellipse cx="510.58233" cy="276.34583" rx="0.77734" ry="1.16602" fill="#53e683" />
                    <ellipse cx="515.24639" cy="274.79114" rx="0.77734" ry="1.16602" fill="#53e683" />
                    <ellipse cx="515.24639" cy="284.89662" rx="0.77734" ry="1.16602" fill="#53e683" />
                    <ellipse cx="519.91046" cy="278.67786" rx="0.77734" ry="1.16602" fill="#53e683" />
                    <ellipse cx="519.13311" cy="287.22865" rx="0.77734" ry="1.16602" fill="#53e683" />
                    <ellipse cx="509.80498" cy="283.34193" rx="0.77734" ry="1.16602" fill="#53e683" />
                    <circle cx="534.68" cy="293.83607" r="12.43751" fill="#ff6584" />
                    <path d="M700.00812,501.86892a9.32812,9.32812,0,1,1-18.65625,0" transform="translate(-156 -207.2555)" opacity="0.2" />
                    <path d="M681.35187,500.31423a9.32812,9.32812,0,1,1,18.65625,0" transform="translate(-156 -207.2555)" opacity="0.2" />
                    <ellipse cx="530.01593" cy="289.56068" rx="0.77734" ry="1.16602" fill="#ff6584" />
                    <ellipse cx="534.68" cy="288.00599" rx="0.77734" ry="1.16602" fill="#ff6584" />
                    <ellipse cx="534.68" cy="298.11147" rx="0.77734" ry="1.16602" fill="#ff6584" />
                    <ellipse cx="539.34406" cy="291.89271" rx="0.77734" ry="1.16602" fill="#ff6584" />
                    <ellipse cx="538.56672" cy="300.4435" rx="0.77734" ry="1.16602" fill="#ff6584" />
                    <ellipse cx="529.23859" cy="296.55678" rx="0.77734" ry="1.16602" fill="#ff6584" />
                    <circle cx="374.73442" cy="246.41808" r="3.29669" fill="#3f3d56" />
                    <polygon points="464.345 366.08 385.17 344.123 388.203 332.857 467.378 354.815 464.345 366.08" fill="#f9a825" />
                    <path d="M608.73806,569.57043a218.26828,218.26828,0,0,1-82.07767,0V557.89212a250.99129,250.99129,0,0,0,82.07767,0Z" transform="translate(-156 -207.2555)" fill="#f9a825" />
                    <path d="M617.17595,534.53552a218.26828,218.26828,0,0,1-82.07767,0V522.85721a250.99184,250.99184,0,0,0,82.07767,0Z" transform="translate(-156 -207.2555)" fill="#f9a825" />
                    <path d="M645.558,548.54948a218.26833,218.26833,0,0,1-82.07768,0v-11.6783a250.9919,250.9919,0,0,0,82.07768,0Z" transform="translate(-156 -207.2555)" fill="#f9a825" />
                    <path d="M652.46168,561.78489a218.26787,218.26787,0,0,1-82.07767,0v-11.6783a250.99184,250.99184,0,0,0,82.07767,0Z" transform="translate(-156 -207.2555)" fill="#f9a825" />
                    <polygon points="520.531 371.824 439.554 385.426 437.676 373.904 518.652 360.302 520.531 371.824" fill="#f9a825" />
                    <path d="M664.43494,580.57677a219.97,219.97,0,0,1-74.58008,34.78439l-4.80446-10.61152a252.95437,252.95437,0,0,0,74.58007-34.78439Z" transform="translate(-156 -207.2555)" fill="#f9a825" />
                    <path d="M657.68866,545.16625a219.96991,219.96991,0,0,1-74.58007,34.78439l-4.80446-10.61152a252.95437,252.95437,0,0,0,74.58007-34.78439Z" transform="translate(-156 -207.2555)" fill="#f9a825" />
                    <path d="M689.24339,545.87182a219.96977,219.96977,0,0,1-74.58008,34.78439l-4.80446-10.61151a252.95471,252.95471,0,0,0,74.58008-34.7844Z" transform="translate(-156 -207.2555)" fill="#f9a825" />
                    <path d="M700.96153,554.97242a219.96991,219.96991,0,0,1-74.58007,34.78439L621.577,579.14529a252.95437,252.95437,0,0,0,74.58007-34.78439Z" transform="translate(-156 -207.2555)" fill="#f9a825" />
                    <rect x="442.95339" y="324.92984" width="3.88672" height="3.88672" fill="#00bf71" />
                    <rect x="454.61355" y="392.55878" width="3.88672" height="3.88672" fill="#00bf71" />
                    <rect x="392.42602" y="324.92984" width="3.88672" height="3.88672" fill="#00bf71" />
                    <rect x="482.59794" y="373.12517" width="3.88672" height="3.88672" fill="#00bf71" />
                    <rect x="484.92997" y="350.5822" width="3.88672" height="3.88672" fill="#00bf71" />
                    <rect x="574.85572" y="545.40019" width="5.44141" height="3.10938" transform="translate(250.70796 -437.19066) rotate(34.15572)" fill="#00bf71" />
                    <rect x="620.71902" y="553.95098" width="5.44141" height="3.10938" transform="translate(263.41949 -461.46545) rotate(34.15572)" fill="#00bf71" />
                    <rect x="564.75025" y="568.72051" width="5.44141" height="3.10938" transform="translate(262.05797 -427.49459) rotate(34.15572)" fill="#00bf71" />
                    <rect x="596.62136" y="565.61114" width="5.44141" height="3.10938" transform="translate(1249.17714 182.37779) rotate(124.15572)" fill="#00bf71" />
                    <rect x="617.60965" y="571.05255" width="5.44141" height="3.10938" transform="translate(1286.45203 173.50612) rotate(124.15572)" fill="#00bf71" />
                    <rect x="673.57842" y="552.39629" width="5.44141" height="3.10938" transform="matrix(-0.56144, 0.82751, -0.82751, -0.56144, 1358.40581, 98.06043)" fill="#00bf71" />
                    <rect y="483.24828" width="888" height="2.24072" fill="#3f3d56" />
                </svg>
            </div>
        </div>
    </div>
</section>

<section class="relative block bg-gray-900">
    <!-- <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20" style="height: 80px; transform: translateZ(0px);">
            <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                <polygon class="text-gray-900 fill-current" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div> -->
    <div class="container mx-auto px-4 lg:pt-24 lg:pb-12">
        <div class="flex flex-wrap text-center justify-center">
            <div class="w-full lg:w-6/12 px-4">
                <h2 class="text-4xl font-semibold text-white">Build something</h2>
                <p class="text-lg leading-relaxed mt-4 mb-4 text-gray-500">
                    Put the potentially record low maximum sea ice extent tihs year
                    down to low ice. According to the National Oceanic and
                    Atmospheric Administration, Ted, Scambos.
                </p>
            </div>
        </div>
        <div class="flex flex-wrap mt-12 justify-center">
            <div class="w-full lg:w-3/12 px-4 text-center">
                <div class="text-gray-900 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center">
                    <i class="fas fa-medal text-xl"></i>
                </div>
                <h6 class="text-xl mt-5 font-semibold text-white">
                    Excelent Services
                </h6>
                <p class="mt-2 mb-4 text-gray-500">
                    Some quick example text to build on the card title and make up
                    the bulk of the card's content.
                </p>
            </div>
            <div class="w-full lg:w-3/12 px-4 text-center">
                <div class="text-gray-900 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center">
                    <i class="fas fa-poll text-xl"></i>
                </div>
                <h5 class="text-xl mt-5 font-semibold text-white">
                    Grow your market
                </h5>
                <p class="mt-2 mb-4 text-gray-500">
                    Some quick example text to build on the card title and make up
                    the bulk of the card's content.
                </p>
            </div>
            <div class="w-full lg:w-3/12 px-4 text-center">
                <div class="text-gray-900 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center">
                    <i class="fas fa-lightbulb text-xl"></i>
                </div>
                <h5 class="text-xl mt-5 font-semibold text-white">Launch time</h5>
                <p class="mt-2 mb-4 text-gray-500">
                    Some quick example text to build on the card title and make up
                    the bulk of the card's content.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection