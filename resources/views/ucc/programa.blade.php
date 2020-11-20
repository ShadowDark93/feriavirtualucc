<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $programa->nombre_programa }}
        </h2>
    </x-slot>

    <div class="container">

        <div class="row" style="margin-top: 5rem">
            <div class="col-md-6 mb-3">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="560" height="315" src="{{ $programa->video_programa }}" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>

            <div class="col-md-6">
                <br><br>
                @if ($programa->decano)
                    <h4 style="font-family: serif"><b>DECANO:</b> {{ $programa->decano }}</h4>
                @endif
                @if ($programa->jefe_programa)
                    <h4 style="font-family: serif"> <b>JEFE DE PROGRAMA:</b> {{ $programa->jefe_programa }} </h4>
                @endif
                @if ($programa->secretario1)
                    <h4 style="font-family: serif"><b>SECRETARIO:</b> {{ $programa->secretario1 }}</h4>
                @endif
                @if ($programa->secretario2)
                    <h4 style="font-family: serif"> <b>SECRETARIO:</b> {{ $programa->secretario2 }} </h4>
                @endif
                @if ($programa->telefono1)
                    <h4 style="font-family: serif"> <b>TELÉFONO:</b> {{ $programa->telefono1 }} </h4>
                @endif
                @if ($programa->telefono2)
                    <h4 style="font-family: serif"> <b>TELÉFONO:</b> {{ $programa->telefono2 }} </h4>
                @endif
                @if ($programa->valor_semestre)
                    <h4 style="font-family: serif"> <b>VALOR SEMESTRE:</b> {{ $programa->valor_semestre }} </h4>
                @endif
                @if ($programa->correo_programa)
                    <h4 style="font-family: serif"> <b>CORREO:</b> {{ $programa->correo_programa }} </h4>
                @endif
            </div>
        </div>
        <div class="row" style="margin-top: 2rem">

            <div class="col-md-4">
                <a class="btn btn-primary btn-lg" href="{{ route('pregrado') }}">Volver</a>
            </div>

            <div class="col-md-4">
                <a href="{{ $programa->url }}" class="btn btn-lg btn-primary"
                    style="background-color: purple; color:white">Más
                    Información</a>
            </div>

            <div id="btnEnviar" class="col-md-4">
                <button type="submit" class="btn btn-primary btn-lg" onclick="alerta()">Enviar</button>
            </div>
        </div>
    </div>

</x-app-layout>
