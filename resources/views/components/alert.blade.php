{{-- Traemos la propiedad type de la alerta que tenemos en nuestra vista home.blade.php --}}
@props(['type'])

@php
    switch ($type) {
        case 'info':
            $class = 'bg-blue-300';
            break;
        case 'success':
            $class = 'bg-green-300';
            break;
        case 'warning':
            $class = 'bg-yellow-300';
            break;
        case 'error':
            $class = 'bg-red-300';
            break;
        default:
            $class = 'bg-black';
            $title = 'Algo ha ido mal!';
            $message = 'Revisa el tipo de la alerta que hayas enviado';
            break;
    }
@endphp

<div {{$attributes->merge(['class' => 'border-l-4 p-4 rounded-lg '.$class])}}>
    {{-- Componente que muestra una alerta y le pasamos lo que contiene la alerta por variables --}}
    <span class="font-medium">{{$title ?? 'Info Title!'}}</span> {{$message ?? 'este es el mensaje predeterminado'}}
</div>