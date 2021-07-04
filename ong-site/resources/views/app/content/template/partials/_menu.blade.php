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
       <a href="{{ route('chiffres-cles.index') }}" class="dropdown-item"> Les chiffres clés</a>   
    </div>
</li>

<li class="nav-item">
    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
        <i class="fa big-icon fa-users"></i> 
        <span class="mini-dn">Organisation</span> 
        <span class="indicator-right-menu mini-dn">
            <i class="fa indicator-mn fa-angle-left"></i>
        </span>
    </a>
    <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
       <a href="{{ route('partenaires.index') }}" class="dropdown-item"> Partenaires </a>
       <a href="{{ route('acteurs.index') }}" class="dropdown-item"> Acteurs</a>
       <a href="{{ route('equipes.index') }}" class="dropdown-item"> Equipes</a>
       <a href="{{ route('contrats.index') }}" class="dropdown-item"> Contrats</a>
       <a href="{{ route('donateurs.index') }}" class="dropdown-item"> Donateurs</a>
       <a href="{{ route('membres.index') }}" class="dropdown-item"> Membres</a>
    </div>
</li>

<li class="nav-item">
    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
        <i class="fa big-icon fa-calendar"></i> 
        <span class="mini-dn">Actions</span> 
        <span class="indicator-right-menu mini-dn">
            <i class="fa indicator-mn fa-angle-left"></i>
        </span>
    </a>
    <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
       <a href="{{ route('programmes.index') }}" class="dropdown-item"> Programmes </a>
       <a href="{{ route('communiques.index') }}" class="dropdown-item"> communiqués </a>
       <a href="{{ route('jobnews.index') }}" class="dropdown-item"> Job news </a>
       <a href="{{ route('evenements.index') }}" class="dropdown-item"> Evènemment </a>
    </div>
</li>

<li class="nav-item">
    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
        <i class="fa big-icon fa-film"></i> 
        <span class="mini-dn">Divers</span> 
        <span class="indicator-right-menu mini-dn">
            <i class="fa indicator-mn fa-angle-left"></i>
        </span>
    </a>
    <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
       <a href="{{ route('galeries.index') }}" class="dropdown-item"> Galéries </a>
       <a href="{{ route('publicites.index') }}" class="dropdown-item"> Publicités </a>
       <a href="{{ route('publications.index') }}" class="dropdown-item"> Publications </a>
    </div>
</li>