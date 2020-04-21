<section class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">

        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>

            <!-- lOGO TEXT HERE -->
            <a href="{{ url('dashboard') }}" class="navbar-brand">MTP</a>
        </div>

        <!-- MENU LINKS -->
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ url('mtphome') }}" class="smoothScroll"><i class="fa fa-h-square" aria-hidden="true"></i>ome</a></li>
                <li><a href="{{ url('clientrequests') }}" class="smoothScroll">Requested services</a></li>
                <li><a href="{{ url('tests') }}" class="smoothScroll">Tests</a></li>
                <li><a href="{{ url('hospitals') }}" class="smoothScroll">Hospitals</a></li>
                <li><a href="{{ url('home') }}" class="smoothScroll">Logout</a></li>
            </ul>
        </div>

    </div>
</section>
