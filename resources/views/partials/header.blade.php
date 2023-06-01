<header>
    <nav class="navbar navbar-expand-sm navbar-light">
        <div class="container">
            <div>
                <img class="img-fluid" width="150" src="http://ilfattoalimentare.it/wp-content/uploads/2016/07/Logo_mulino_bianco.png" alt="">
            </div>
            <div class="collapse navbar-collapse " id="collapsibleNavId">
                <ul class="navbar-nav mt-2 mt-lg-0 ms-auto">
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="{{route('home')}}" aria-current="page">HOME<span class="visually-hidden">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="{{route('products')}}">PRODOTTI</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-secondary text-white admin" href="{{route('admin.products.index')}}">ADMIN</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>