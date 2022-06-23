<nav class="navbar navbar-light bg-light">
    <div class="row d-flex">
        <div class="col-4">
            <a class="row navbar-brand" href="{{ route('klien.list_tukang') }}">
                <img src="../../assets/img/logo-amplas.png" width="50" height="50"
                    class="d-inline-block align-top ml-3">
            </a>
        </div>
        <a class="col-4 d-flex text-dark" style="text-decoration: none;" href="{{ route('klien.profile') }}">
            <h5 class="mt-3 mr-4" style="margin-left: 800px;">{{ auth()->user()->name }}</h5>
            <img src="{{ asset('assets/faces/face23.jpg') }}" width="50" height="50"
                class="mt-1 rounded-circle d-inline-block align-top">
        </a>
    </div>
</nav>