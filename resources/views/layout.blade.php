<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" href="img/icon_amd.png" type="image/gif" sizes="16x16">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Data Table -->
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">

    <title> Lista Aspire 5 </title>
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <span class="navbar-brand mb-0 h1 "> Lista Aspire 5</span>
    </nav>

    <div class="container" style="padding-top: 25px;">
        @yield('content')
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js">
    </script>

    <script>
        $(document).ready(function() {
            $('#lista').DataTable({
                "order": [[ 0, "asc" ]],
                "paging": true,
                "ordering": true,
                "info": true
            });
        });
    </script>
</body>

</html>
