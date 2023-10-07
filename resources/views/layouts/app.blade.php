<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <header>
        @include("layouts.header")
    </header>
    <div class="container-fluid">
        <div class="row">
            @if(Request::path() == '/')
            <div class="col-lg-12">
                @yield('content')
            </div>
            
            @else
            <div class="col-lg-1 bg-sombre big-min-height pt-5">
                @include("layouts.sidebar")
            </div>
            <div class="col-lg-11 pt-5">
                @yield('content')
            </div>
            
            @endif
        </div>
    </div>
    <footer class="w-100 bg-vert-dark" style="min-height:220px">
        @include("layouts.footer")
    </footer>
</body>
</html>