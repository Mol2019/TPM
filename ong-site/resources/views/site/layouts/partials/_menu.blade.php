
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="{{ route('acc') }}">Accueil</a></li>

          <li class="drop-down"><a href="#">&Agrave; propos</a>
            <ul>
              <li><a href="{{route('sections.details','Mot du président')}}p">Mot du Président</a></li>
              <!-- <li><a href="team.html">Team</a></li> -->

              <li class="drop-down"><a href="#">Présentation</a>
                <ul>
                  <li><a href="{{route('sections.details','Vision')}}">Notre vision</a></li>
                  <li><a href="{{route('sections.details','Valeurs')}}">Nos valeurs</a></li>
                  <li><a href="{{route('sections.details','Missions')}}">Nos missions</a></li>
                  <li><a href="{{route('sections.details','Histoire')}}">Notre histoire</a></li>
                </ul>
              </li>


              <li class="drop-down"><a href="#">Organisation</a>
                <ul>
                  <li><a href="#">Notre Structuration</a></li>
                  <li><a href="#">Nos Acteurs</a></li>
                  <li><a href="#">Notre Réseau</a></li>
                </ul>
              </li>

            </ul>
          </li>

          <li class="drop-down"><a href="#">Actions</a>
            <ul>
              <li><a href="about.html">Nos mesures d'insertion</a></li>
              <li><a href="team.html">Nos formations</a></li>
              <li><a href="team.html">Nos projets</a></li>
            </ul>
          </li>

          <li class="drop-down"><a href="#">Ressources</a>
            <ul>

              <li class="drop-down"><a href="#">Médias</a>
                <ul>
                  <li><a href="#">Notre photothèque</a></li>
                  <li><a href="#">Notre vidéothèque</a></li>
                </ul>
              </li>

              <li class="drop-down"><a href="#">Ouvrages</a>
                <ul>
                  <li><a href="#">Notre appli Mobile</a></li>
                  <li><a href="#">Nos statuts</a></li>
                  <li><a href="#">Notre règlement intérieur</a></li>
                  <li><a href="#">Nos manuels et guides</a></li>
                </ul>
              </li>

              <li class="drop-down"><a href="#">Publications</a>
                <ul>
                  <li><a href="#">Notre revue</a></li>
                  <li><a href="#">Nos rapports d'activité</a></li>
                  <li><a href="#">Le journal des donateurs</a></li>
                </ul>
              </li>

            </ul>
          </li>

          <li class="drop-down"><a href="#">Adhérer</a>
            <ul class="dropleft">

              <li class="drop-down"><a href="#">Participer</a>
                <ul>
                  <li><a href="#">Devenir membre</a></li>
                  <li><a href="#">Devenir bénévole</a></li>
                  <li><a href="#">Devenir volontaire</a></li>
                  <li><a href="#">Devenir bénéficiaire</a></li>
                </ul>
              </li>

              <li class="drop-down"><a href="#">Contribuer</a>
                <ul>
                  <li><a href="#">Faire un don</a></li>
                  <li><a href="#">Devenir partenaire</a></li>
                  <li><a href="#">Sponsoriser une activité</a></li>
                  <li><a href="#">Participer une activité</a></li>
                </ul>
              </li>

            </ul>
          </li>

          <li class="drop-down"><a href="#">Actualités</a>
            <ul>

              <li><a href="#">Nos news</a></li>
              <li><a href="#">Notre agenda</a></li>
              <li><a href="#">Nos communiqués</a></li>
              <li><a href="#">Nos évènements</a></li>
              <li><a href="#">Nos job-news</a></li>
              <li><a href="#">Nous dans la Presse</a></li>

            </ul>
          </li>

          <li><a href="{{ route('contact') }}">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->
