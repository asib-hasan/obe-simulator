<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OBE SIMULATOR</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container-fluid">
  <div class="row">
    
    <div class="col-md-2 bg-white border-end vh-100 p-3">
      <div class="list-group">
        <a href="#" class="list-group-item list-group-item-action active">Setup</a>
        <a href="#" class="list-group-item list-group-item-action">Setup1</a>
        <a href="#" class="list-group-item list-group-item-action">Setup2</a>
        <a href="#" class="list-group-item list-group-item-action">Setup3</a>
        <a href="#" class="list-group-item list-group-item-action">Setup4</a>
        <a href="#" class="list-group-item list-group-item-action">Setup5</a>

        <a href="#" class="list-group-item list-group-item-action active mt-3">Core Part</a>
        <a href="#" class="list-group-item list-group-item-action">Attainment</a>
        <a href="#" class="list-group-item list-group-item-action">CO Attainment</a>
        <a href="#" class="list-group-item list-group-item-action">PO Attainment</a>
      </div>
    </div>

    <div class="col-md-10 p-4">
      <div class="text-center border-bottom border-primary pb-3 mb-4">
        <img src="{{ asset('images/logo.png') }}" width="200" alt="Logo" class="mb-2">
        <h4 class="fw-bold text-primary">OBE SIMULATOR</h4>
      </div>
      
      <div class="p-3 bg-white rounded shadow-sm">
        @yield('content')
      </div>
    </div>

  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

