<nav>
  <!-- {{dump(request()->path())}} -->
  <ul>
    <li class="{{setActive('home1')}}"><a href={{route('home1')}}>Home</a></li>
    <li class="{{setActive('about')}}"><a href={{route('about')}}>About</a></li>
    <li class="{{setActive('projects.*')}}"><a href={{route('projects.index')}}>Portafolio</a></li>
    <li class="{{setActive('contact')}}"><a href={{route('contact')}}>Contact</a></li>
  </ul>
</nav>
