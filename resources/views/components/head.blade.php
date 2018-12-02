<head>
    <meta charset="utf-8">

    <title>{{ $title }}</title>
    <meta name="description" content="Employees management application">
    <meta name="author" content="BoomTech">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url("/css/style.css") }}" />

    <link rel="icon" href="{{ url("/img/favicon.png") }}" />


    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

    <script> var _token = "{{ csrf_token() }}" </script>
</head>
