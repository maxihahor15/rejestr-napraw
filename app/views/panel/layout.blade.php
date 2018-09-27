<html>
    <head>
        <meta charset="UTF-8">
        {{ HTML::style('css/style.css') }}
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>

    <style>
        .container, .row
        {
            padding: 0;
        }
    </style>

    @yield('style')

    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12 ot-header">
                    <img src="{{ URL::asset('img/logo.png') }}" class="logo-ot">
                </div>
            </div>
            <div class="row">
                <nav class="navbar navbar-default navbar-static-top">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="#">
                                    Home
                                </a>
                            </li>
                        </ul>
                    </dvi>
                </nav>
            </div>
        </div>
        <div class="container">
            @yield('content')
        </div>

        <footer class="footer">
            <div class="container">
                <p> &copy; 2018 Opoltrans Sp. z o.o. </p>
            </div>
        </footer>
    </body>
</html>