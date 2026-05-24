<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sajilo Student Manager</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container-fluid">
  <div class="row">
    <aside class="col-md-2 bg-primary text-white min-vh-100 p-3">
      <h5>Sajilo</h5>
      <ul class="nav flex-column gap-2">
        <li><a class="text-white" href="/">Dashboard</a></li><li><a class="text-white" href="/students">Students</a></li>
        <li><a class="text-white" href="/teachers">Teachers</a></li><li><a class="text-white" href="/classes">Classes</a></li>
        <li><a class="text-white" href="/subjects">Subjects</a></li><li><a class="text-white" href="/attendance">Attendance</a></li>
        <li><a class="text-white" href="/marks">Marks</a></li>
      </ul>
    </aside>
    <main class="col-md-10 p-4">@yield('content')</main>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@stack('scripts')
</body>
</html>
