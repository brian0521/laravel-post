<nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary">
  <a class="navbar-brand" href="{{route('posts.index')}}">BLOGS Brian S.A</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('posts.index')}}">HOME <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('articles.create')}}">Articulos</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Sitios de interes
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="https://www.xataka.com/">tecnología</a>
          <a class="dropdown-item" href="http://www.espn.com.co/">deporte</a>
          <a class="dropdown-item" href="https://www.investigacionyciencia.es/">ciencia</a>
        </div>
      </li>
    </ul>
  </div>
</nav>