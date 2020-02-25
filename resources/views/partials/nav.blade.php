<nav>
  <!-- {{dump(request()->path())}} -->
  <ul>
    <li class="{{setActive('home1')}}"><a href="/home1">Home</a></li>
    <li class="{{setActive('about')}}"><a href="/about">About</a></li>
    <li class="{{setActive('portfolio')}}"><a href="/portfolio">Portafolio</a></li>
    <li class="{{setActive('contact')}}"><a href="/contact">Contact</a></li>
  </ul>
</nav>
