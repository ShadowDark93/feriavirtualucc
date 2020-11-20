<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Posgrados
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container" style="margin-top: 3rem">
                    <div class="row">
                        @foreach ($programa as $p)
                            <div class="col-md-3" align="center" style="margin-top: 1rem">
                                <img src="{{ asset('img/stand.png') }}" alt="" width="320" height="240">
                                <br>
                                <a href="{{ route('programa.id', $p->id) }}" style="color: teal">
                                    {{ $p->nombre_programa }}</a>

                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
