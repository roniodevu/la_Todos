<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title> TODO APP - @yield('title') </title>
</head>
<body>
    
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav m-auto mb-2 mb-lg-0">
           <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('Home') ? 'text-primary' : '' }}" aria-current="page" href="{{ route('Home') }}">Home</a>

        </li>
        
      <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('Todos') ? 'text-primary' : '' }}" aria-current="page" href="{{ route('Todos') }}">All Todo</a>

        </li>
        
          </ul>
        </li>
        
      </ul>
      
    </div>
  </div>
</nav>

<main>
   @yield ('content')
</main>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>

  const Toast = Swal.mixin({
  toast: true,
  position: "top-end",
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.onmouseenter = Swal.stopTimer;
    toast.onmouseleave = Swal.resumeTimer;
  }
});
</script>


  @if (session()->has('msg'))
    <script>

       Toast.fire({
            icon: `{{ session('msg')['type'] ?? 'success'}}`,
            title: `{{ session('res')['type'] ?? 'success'}}`
       });
    </script>
  @endif


</body>
</html>