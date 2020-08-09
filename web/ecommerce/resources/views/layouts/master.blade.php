<!DOCTYPE html>
<html>
    <head>
    <title>{{!empty($name)?$name : 'No Title'}}</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('/css/bootstrap.css')}}" type="text/css" rel="stylesheet" media="all">
    <link href="{{asset('/css/custom.css')}}" type="text/css" rel="stylesheet" media="all">
    </head>
    <body>
        <header>
            <div class="container">
                @foreach($headerComponents as $component)
                    @include("/components.$component")
                @endforeach
            </div>
        </header>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        @foreach($leftComponents as $component)
                    @include("/components.$component")
                @endforeach
                    </div>
                    <div class="col-md-8 col-sm-8">
                        @foreach($mainComponents as $component)
                    @include("/components.$component")
                @endforeach
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container hidden-xs">
                @foreach($bottomComponents as $component)
                    @include("/components.$component")
                @endforeach
            </div>
        </section>
        <footer>
            <div class="container">
                @foreach($footerComponents as $component)
                    @include("/components.$component")
                @endforeach
            </div>
        </footer>
    <script src="{{asset('/js/jquery.js')}}" type="text/javascript"></script>
    <script src="{{asset('/js/bootstrap.js')}}" type="text/javascript"></script>
    <script src="{{asset('/js/custom.js')}}" type="text/javascript"></script>
    </body>
</html>
