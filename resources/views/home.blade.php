<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex flex-col justify-center items-center bg-gray-100">
    <div class="title w-full flex justify-center">
        <h1 class="text-4xl font-bold text-center text-gray-800">Hola</h1>
    </div>
    <h3>Este es mi portFolio</h3>
    <p style="max-width: 80ch">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil, id voluptate aut facilis repellat dignissimos itaque corporis sint, esse qui commodi, at nesciunt similique dolores hic quibusdam illo incidunt perferendis!</p>

    <x-alert type='success' class="mb-4">
        <x-slot name='title'>
            Correct!
        </x-slot>
        <x-slot name='message'>
            Todo ha ido segun lo planeado
        </x-slot>
    </x-alert>

    <p>Hola soy Antonio y este es mi primer proyecto en Laravel</p>
</body>
</html>