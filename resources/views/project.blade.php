<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Projects</title>

        @livewireStyles
    </head>
    <body>

        @livewire('projects')
        @livewire('tasks')

        @livewireScripts
    </body>
</html>