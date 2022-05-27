<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mon super site</title>
    {{-- après avoir npm run dev via webpack on inclus le fichier css/app.css --}}
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    
</head>
<body>
    {{-- inclus la navbar du dossier partials dans le app --}}
    @include('partials.navbar')
    <div class='container mx-auto'>
        @yield('content')
    </div>
    
    {{-- après avoir npm run dev via webpack on inclus le fichier js/app.js --}}
    <script src="{{ asset('js/app.js')}}"></script>
    
</body>
</html>