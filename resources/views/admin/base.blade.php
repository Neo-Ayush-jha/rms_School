<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel | Indianresult</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href="/admin">Indianresult</a>
          <button class="navbar-toggle" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggle-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  mb-2 mb-lg-0 ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/admin">Home</a>
              </li>
              @guest
                  <li class="nav-item"><a href="" class="nav-link">Login</a></li>
                  <li class="nav-item"><a href="" class="nav-link">Register</a></li>
              @endguest
            </ul>
        </nav>
            <nav class="navbar navbar-expand-lg navbar-dark bg-secondary py-0">
                <div class="container">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Manage Schools</a>
                            <div class="dropdown-menu">
                                <a href="{{route("school.create")}}" class="dropdown-item">Add School</a>
                                <a href="{{route("school.index")}}" class="dropdown-item">Manage All School</a>
                                <a href="" class="dropdown-item">Reports</a>

                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Manage Result</a>
                            <div class="dropdown-menu">
                                <a href="{{route("student.index")}}" class="dropdown-item">Manage All Result</a>
                                <a href="" class="dropdown-item">Reports</a>
                            </div>
                        </li>
                        {{-- <li class="nav-item"><a href="" class="nav-link">Reports</a></li> --}}
                        <li class="nav-item"><a href="" class="nav-link">Setting</a></li>
                    </ul>
                </div>                    
            </nav>
          {{-- </div>
        </div>
      </nav> --}}
      @section('content')
          
      @show
</body>
</html>