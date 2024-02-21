<?php 
use App\Http\Controllers\ProductController;
$total = 0;
if(Session::has('user')){
    $total = ProductController::cartItem();
}
$totalOrder = 0;
if(Session::has('user')){
    $totalOrder = ProductController::orderItem();
}
?>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">MoSH<i class="bi bi-brilliance"></i></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                {{-- <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link" href="/my-order">Orders({{ $totalOrder }})<i class="bi bi-clipboard2"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/show-cart">Cart({{ $total }})<i class="bi bi-cart"></i></a>
                </li>
                @if(Session::has('user'))
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">{{ Session::get('user')->name }}</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="/logout">Logout</a></li>
                    </ul>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="/login">Login</a>
                </li>
                @endif
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li> --}}
                {{-- <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </li> --}}
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
