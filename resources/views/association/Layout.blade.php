<html>
<head>
    <title>association Laravel 8 CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <form class="form-inline my-2 my-lg-0" type="get" action="">
        
  @if($errors->any())
  @foreach($errors->all() as $error) 
  <div class="alert alert-danger" role="alert">
{{$error}}
    </div>
     @endforeach
    @endif 
<div class="container">
    @yield('content')
</div>
   
</body>
</html>