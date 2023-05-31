<header>
    <nav class="navbar navbar-expand-sm navbar-light">
        <div class="container">
            <div>
                <img class="img-fluid" width="150" src="http://ilfattoalimentare.it/wp-content/uploads/2016/07/Logo_mulino_bianco.png" alt="">
            </div>
            <div class="collapse navbar-collapse " id="collapsibleNavId">
                <ul class="navbar-nav mt-2 mt-lg-0 ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('home')}}" aria-current="page">Home<span class="visually-hidden">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('products')}}">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-secondary admin" href="{{route('admin.products.index')}}">Admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>