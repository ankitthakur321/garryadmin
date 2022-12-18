<header class="stick style1 w-100 d-flex flex-wrap justify-content-between align-items-center">
    <div class="logo">
        <a href="index.php" title="Home">
            <img class="img-fluid img-logo" src="{{ asset('assets/images/logo-gaurav.png') }}" alt="Logo"
                srcset="{{ asset('assets/images/logo-gaurav.png') }}">
        </a>
    </div><!-- Logo -->
    <div class="menu-btns d-inline-flex" style="margin-top:0px;">
        <a class="search-btn rounded-circle" href="javascript:void(0);" title=""><i class="fas fa-search"></i></a>
        <a class="menu-btn rounded-circle" href="javascript:void(0);" title=""><i
                class="fas fa-align-justify"></i></a>
    </div><!-- Menu Btns -->
    <div class="menu-wrap">
        <span class="menu-cls-btn rounded-circle"><i class="icon_close"></i></span>
        <ul class="mb-0 list-unstyled w-100">
            <li><a href="/" title="">Home</a></li>
            <li><a href="/resume" title="">Resume</a></li>
            <li><a href="/dive-in" title="">Dive-in</a></li>
            <li><a href="/listen-read" title="">Listen & Read</a></li>
            <li><a href="/speaking" title="">Speaking</a></li>
            <li><a href="/about" title="">About</a></li>
            <li><a href="/contact" title="">Contact</a></li>
        </ul>
    </div><!-- Menu Wrap -->
</header><!-- Header -->
<div class="search-wrap w-100 d-flex flex-wrap align-items-center justify-content-center">
    <span class="search-cls-btn rounded-circle"><i class="icon_close"></i></span>
    <form class="w-100">
        <input type="text" placeholder="Search here....">
        <button type="submit"><i class="fas fa-search"></i></button>
    </form>
</div><!-- Search Wrap -->
<div class="sticky-header w-100 position-fixed">
    <div class="logo">
        <a href="index.php" title="Home">
            <img class="img-fluid img-logo2" src="{{ asset('assets/images/logo-gaurav.png') }}" alt="Logo"
                srcset="{{ asset('assets/images/logo-gaurav.png') }}">
        </a>
    </div>
    <nav class="menu-wrap2">
        <ul class="mb-0 list-unstyled w-100">
            <li><a href="/" title="">Home</a></li>
            <li><a href="/resume" title="">Resume</a></li>
            <li><a href="/dive-in" title="">Dive-in</a></li>
            <li><a href="/listen-read" title="">Listen & Read</a></li>
            <li><a href="/speaking" title="">Speaking</a></li>
            <li><a href="/about" title="">About</a></li>
            <li><a href="/contact" title="">Contact</a></li>
        </ul>
    </nav>
</div><!-- Sticky Header -->
