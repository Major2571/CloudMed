<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Error 404</title>
</head>

<style>

    section {
        background-color: rgb(129, 129, 129);
    }
    div.flex{
        height: 100vh;
    }
    
</style>

<body>
    
    <section>
        <div class="flex items-center justify-center bg-slate-400">
            <div class="w-1/3">
                <img src="{{ url('assets/img/svg/404.svg') }}" alt="">
            </div>
        </div>
    </section>

</body>

</html>
