@include('sub.subview')
    <body>
        @include('sub.navsub')
            <div class=" d-block">
                @yield('Forms')
                @yield("dataTable")
            </div>
        </div>


    </body>
    