<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/">Simple Laravel</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link {{ request()->is('home') ? 'active' : '' }}" href="/home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('product') ? 'active' : '' }}" href="/product">Product</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('contact') ? 'active' : '' }}" href="/contact">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('articles') ? 'active' : '' }}" href="/articles">Articles</a>
            </li>
        </ul>
    </div>
</nav>
