<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link">
        <i class="fa big-icon fa-home"></i>
        <span class="mini-dn">Tableau de bord</span>
        <span class="indicator-right-menu mini-dn">
            <i class="fa indicator-mn fa-angle-left"></i>
        </span>
    </a>
</li>

<li class="nav-item">
    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
        <i class="fa big-icon fa-home"></i> 
        <span class="mini-dn">Sections</span> 
        <span class="indicator-right-menu mini-dn">
            <i class="fa indicator-mn fa-angle-left"></i>
        </span>
    </a>
    <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
       <a href="{{ route('menus.index') }}" class="dropdown-item"> Menus </a>
       <a href="{{ route('actualites.index') }}" class="dropdown-item"> Actualités</a>
       <a href="{{ route('sliders.index') }}" class="dropdown-item"> Les slides</a>

    </div>
</li>

