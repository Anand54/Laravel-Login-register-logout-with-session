<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('css/style.css');}}">
    <title>Ananda</title>
    <link rel="shortcut icon" href="{{asset('images/logo/favicon.ico')}}" type="image/x-icon">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold iconText" href="{{url('home')}}">Ananda</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{url('home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('about')}}">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Services
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Web Development</a></li>
            <li><a class="dropdown-item" href="#">Web Design</a></li>
            <li><a class="dropdown-item" href="#">Desktop App Design</a></li>
            <li><a class="dropdown-item" href="#">Desktop App Development</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('portfolio')}}">Portfolio</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="{{url('contact')}}">Contact</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      <a href="{{url('login')}}" class="btn btn-secondary ms-2"><i class="bi bi-person"></i></a>
    </div>
  </div>
</nav>
    
