<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/stores">
            <i class="bi bi-shop"></i> My Trades
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="navbar-nav mx-auto">
                <a class="nav-link" href="/stores">My stores</a>
            </div>

            <div class="d-flex">
                @guest    
                    <button class="btn btn-outline-light me-2">Log in <i class="bi bi-box-arrow-in-right"></i></button>
                    <button class="btn btn-outline-light">Sign Up</button>
                @endguest
                @auth
                    <button class="btn btn-outline-light me-2">Log out <i class="bi bi-box-arrow-in-left"></i></button>
                @endauth
            </div>
        </div>
    </div>
</nav>