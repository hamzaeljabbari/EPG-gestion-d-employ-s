<!DOCTYPE html>
<html>
<head>
  <title>EPGemploi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">

          <title>EPGemploi</title>

          <!-- Fonts -->
          <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


          <!-- Styles -->
          <style>
              form.example input[type=text] {
              padding: 10px;
              font-size: 17px;
              border: 1px solid grey;
              float: left;
              width: 80%;
              background: #f1f1f1;
            }

            form.example button {
              float: left;
              width: 20%;
              padding: 10px;
              background: #2196F3;
              color: white;
              font-size: 17px;
              border: 1px solid grey;
              border-left: none;
              cursor: pointer;
            }

            form.example button:hover {
              background: #0b7dda;
            }

            form.example::after {
              content: "";
              clear: both;
              display: table;
            }
              html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
          </style>

          <style>
            .my-div {

  background-color: rgb(205, 201, 201);
  transition: all 0.3s ease;
}

.my-div:hover {
  transform: scale(1.1);
}

              body {
                  font-family: 'Nunito', sans-serif;
              }
          </style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">EPGemploi</a>
    </div>
    <ul class="nav navbar-nav">
      @if (Route::has('login'))
      @auth
          <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
      @else
      <li><a href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span>Employer Connection</a></li>

          @if (Route::has('register'))
          <li><a href="{{ route('register') }}"><span class="glyphicon glyphicon-user"></span>Employer Inscription</a></li>
          @endif
      @endauth

@endif
@if (Route::has('admin.login'))
@auth('admin')
  <li><a href="{{ url('/admin/dashboard') }}" >Recruteur Dashboard</a></li>
@else
<li><a href="{{ route('admin.login') }}" ><span class="glyphicon glyphicon-log-in"></span>Recruteur Connection</a></li>

  @if (Route::has('register'))
  <li><a href="{{ route('admin.register') }}" ><span class="glyphicon glyphicon-user"></span>Recruteur Inscription</a></li>
  @endif
@endauth
@endif
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="{{ route('contact') }}">Contactez nous</a></li>
      <li><a href="{{ route('about') }}">Qui sommes-nous ?</a></li>
    </ul>
  </div>
</nav>

<div class="jumbotron animate-top">
  <div class="container text-center">
    <h1>Bienvenue au EPGemploi</h1><br><br>
    <!--<div class="container p-3 my-3 bg-orange text-white">
        <h1>EPGemploi</h1>
         <p>Le présent Site est d’accès libre et gratuit à tout Internaute candidat.<b style="color: black">Il consiste en une plateforme Internet permettant aux Internautes candidats de publier un profil anonymisé et de postuler à des annonces d’emploi et à des recruteurs de publier des annonces d’emploi</b>, de prendre connaissance des CV de candidats ou encore de diffuser des bannières publicitaires. Les services proposés sur le présent Site sont entièrement gratuits pour les particuliers, personnes physiques non commerçantes.</p>
      </div>-->
    <p>Trouver un travail</p>
    <form class="example" style="margin:auto;max-width:300px" action="{{ route('search3') }}" method="get">
        @csrf
        <input type="text" placeholder="Rechercher.." name="search3">
        <button type="submit"><i class="fa fa-search"></i></button>
      </form>

  </form>
  <div class="">
</div>
</div>
<div class="container">
<h2 align='center'>Les annonces</h2>
<div class="container">
    <div class="row">
      @foreach ($announces as $announce)
        <div class="col-lg-4 col-md-6 mb-4" >
          <div class="card" >
            <div class="card-body my-div">
                <blockquote class="blockquote mb-0">
                    <p align='center' style="color: darkblue">{{$announce->poste}}</p>
                    <p align='center' style="color: darkblue">{{$announce->délais}}</p>
                    <p align='center' style="color: darkblue">{{$announce->description}}</p>
                    <p align='center' style="color: darkblue"><a href="{{ route('postuler',$announce->admin_id) }}" class="btn btn-outline-primary">Postuler</a></p>
                </blockquote>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div><br><br><br><br><br>
<!-- Footer -->
<footer class="container-fluid text-center">
<p>EPGemploi &copy; 2023</p>
</footer>
</body>
</html>
