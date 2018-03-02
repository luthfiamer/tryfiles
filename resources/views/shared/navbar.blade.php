

{{--  this is the stylesheet or css theme which regulate the theme and colour  --}}
<link rel="stylesheet" href="{{ URL::asset('css/navtheme.css') }}" />

{{--  this is the new navbar edited from http://bootstrapdesigntools.com/tools  --}}
<div id="Navbar" class="navbar navbar-default " role="navigation">
  <div class="container-fluid">
      <div class="navbar-header"><a class="navbar-brand" href="/">Laravel X Bootstrap</a>
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
          </button>
      </div>
      <div class="collapse navbar-collapse navbar-menubuilder">
          <ul class="nav navbar-nav navbar-right">
              <li {{{ (Request::is('/') ? 'class=active' : '') }}}><a href="/">Home</a>
              </li>
              <li {{{ (Request::is('about') ? 'class=active' : '') }}}><a href="about">about</a>
              </li>
              <li {{{ (Request::is('contact') ? 'class=active' : '') }}}><a href="contact">Contact Us</a>
              </li>
          </ul>
      </div>
  </div>
</div>