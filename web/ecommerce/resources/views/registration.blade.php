<!DOCTYPE html>
<html>
    <head>
    <title>{{$name}}</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('/css/bootstrap.css')}}" type="text/css" rel="stylesheet" media="all">
    <link href="{{asset('/css/custom.css')}}" type="text/css" rel="stylesheet" media="all">
    </head>
    <body>
        <header>
            <div class="container">
                @include('/components.logo_sec')
                @include('/components.navigation')
                @include('/components.home_slider')
            </div>
        </header>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        @include('/components.left_aside')
                    </div>
                    <div class="col-md-8 col-sm-8">
                        @include('/components.registration_form')
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container hidden-xs">
                @include('/components.carousel')
            </div>
        </section>
        <footer>
            <div class="container">
                @include('/components.footer_info')
            </div>
        </footer>
    <script src="{{asset('/js/jquery.js')}}" type="text/javascript"></script>
    <script src="{{asset('/js/bootstrap.js')}}" type="text/javascript"></script>
    <script src="{{asset('/js/custom.js')}}" type="text/javascript"></script>
    </body>
</html>
