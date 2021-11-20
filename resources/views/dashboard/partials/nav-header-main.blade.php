<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('home')}}">BlogNew</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            CRUD
          </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('post.index')}}">Post</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('category.index')}}">Categorias</a>
            </div>
        </li>

      </ul>

      {{-- <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            CRUD1
          </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('post.index')}}">Post</a>
                <div class="dropdown-divider"></div>
            </div>
        </li>
        

      </ul> --}}

      <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">Login <span class="sr-only">(current)</span></a>
               
            </li>
            <li class="nav-item">
                
                <a class="nav-link" href="#">Logout <span class="sr-only">(current)</span></a>
            </li>

            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Perfil
                  </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('post.index')}}">Post</a>
                        <div class="dropdown-divider"></div>
                        
                    </div>
                </li>
        
              </ul>

      </ul>


      {{-- <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form> --}}
    </div>
  </nav>
