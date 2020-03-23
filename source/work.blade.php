@extends('_layouts.master')

@section('body')
    <div class="py-32 top-0 w-full px-5">
        <div class="grid grid-cols-3 gap-10">
            <div>
                <h1 class="font-bold text-6xl">Work.</h1>
            </div>
            @for($i=0;$i<=10;$i++)
            <a href="#">
                <div class="w-full rounded overflow-hidden shadow-lg transition duration-300 transform hover:shadow-2xl hover:scale-105 ">
                    <img class="w-full"
                         src="https://d33wubrfki0l68.cloudfront.net/fb3bac881e62c3424be2730cad9adaac00e21b00/2d31f/media/work/beanify@2x.jpg"
                         alt="Sunset in the mountains">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">Beanify</div>
                        <p class="text-gray-700 text-base">
                            Identify the flavours of CapitalOne's promotional jelly beans using a CNN.
                        </p>
                    </div>
                </div>
            </a>
            @endfor
        </div>
    </div>
@endsection