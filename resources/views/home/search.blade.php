@include('sub.subview')



    <form class="form-inline form-control form-control-lg mx-auto row" action="{{URL('/search/index/'=>$search)}}" method="GET">
        <input class="form-control mr-sm-2" type="search" name="sreach" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>

    </form>

