<!DOCTYPE html>
<html lang="en">
  <head>
    <title>fishreport | development</title>

    <!-- CSS и JavaScript -->
	<link rel="shortcut icon" href="https://www.rubios.com/sites/default/files/rubios_favicon_fish_0.png" type="image/png">
	<link href="{{ elixir('css/app.css') }}" rel="stylesheet">
  </head>

  <body>
    <div class="container">
      <nav class="navbar navbar-default">
        <!-- Содержимое Navbar -->
      </nav>
    </div>

    @yield('content')
  </body>
</html>