<div class="container d-block">
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <a class="navbar-brand" href="#">Laravel Library</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="{{URL('book/index')}}">Book <span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{URL('writer/index')}}">Writer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{URL('publisher/index')}}">Publisher</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{URL('category/index')}}">Category</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>

            </form>
            
                <div style="margin-left: 15px" class="btn btn-outline-info my-2 my-sm-0" aria-labelledby="navbarDropdown">
                    <a class="" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ URL('/logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
        </div>
    </nav>