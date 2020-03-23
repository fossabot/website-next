<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
</head>
<body class="font-sans subpixel-antialiased bg-gray-100">

<div class="flex justify-between flex-row z-50">
    <svg xmlns="http://www.w3.org/2000/svg" width="100" viewBox="0 0 273 279">
        <a href="/">
            <g fill="none" fill-rule="evenodd">
                <path fill="#F94D00" fill-rule="nonzero"
                      d="M407.948066,31.3157617 C449.751644,62.7916146 474.200403,116.894687 484.461281,170.365714 C494.595482,223.710333 490.668479,276.675724 473.947048,324.584753 C457.225617,372.620191 427.836435,415.599267 388.059698,430.389126 C348.409638,445.052575 298.245344,431.400398 251.374667,426.849672 C204.630666,422.172538 161.180281,426.723263 121.023511,412.059814 C80.8667407,397.522773 44.0035859,363.897967 21.3283119,319.6548 C-1.34696199,275.411633 -9.70767752,220.676515 15.1211141,186.672481 C40.0765831,152.668448 98.2215593,139.521907 142.685365,108.804508 C187.022492,78.0871094 217.551772,29.9252621 262.39561,10.3318597 C307.11277,-9.26154271 366.271166,-0.286500308 407.948066,31.3157617 Z"
                      transform="translate(-217 -158)"/>
                <text fill="#FFF" font-family="Inter-Bold, Inter" font-size="200" font-weight="bold"
                      letter-spacing="-10.8">
                    <tspan x="28.306" y="200">fh</tspan>
                </text>
            </g>
        </a>
    </svg>

    <ul class="text-center text-lg items-start list-none content-center md:mr-5 md:text-right sm:flex font-bold">
        <li class="sm:ml-3 mt-5"><a href="/"
                                    class="bg-brand text-white rounded-l-full sm:rounded-full py-2 px-4">home</a></li>
        <li class="sm:ml-3 mt-5"><a href="/blog" class="rounded-l-full py-2 px-4 sm:rounded-full">blog</a></li>
        <li class="sm:ml-3 mt-5"><a href="/work" class="rounded-l-full py-2 px-4 sm:rounded-full">work</a></li>
        <li class="sm:ml-3 mt-5"><a href="/contact" class="rounded-l-full py-2 px-4 sm:rounded-full">contact</a></li>
    </ul>
</div>

<div>
    @yield('body')
</div>

<div class="text-gray-600 border-gray-300 border-t py-5 ">
    <div class="container mx-auto px-5">
        <p>&copy; Freddy Heppell 2016-20</p>
        <ul class="mt-3 flex font-medium">
            <li class="mr-3"><a href="https://twitter.com/freddyheppell">Twitter</a></li>
            <li class="mr-3"><a href="https://github.com/freddyheppell">GitHub</a></li>
            <li class="mr-3"><a href="https://keybase.io/freddyheppell">Keybase</a></li>
            <li class="mr-3"><a href="/blog/feeds">Feeds</a></li>
        </ul>
    </div>
</div>

</body>
</html>
