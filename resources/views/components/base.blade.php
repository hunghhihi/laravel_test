<!DOCTYPE html>
<html lang="en">
<head>
  <title>Local Library</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   
  <link rel="stylesheet" href="{{ asset('css\style.css') }}">
</head>
<body>
  
 {{ $slot }}  
 <footer>
  
{{ $footer ?? null }}
 </footer>
</body>
</html>