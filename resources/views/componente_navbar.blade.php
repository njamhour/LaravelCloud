<nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded">
  <button class="navbar-toggler" type="button" data-toggle="collapse" 
          data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbar">
    <ul class="navbar-nav mr-auto">
      <li @if($current=="home") class="nav-item active" @else class="nav-item" @endif>
        <a class="nav-link" href="/">Home </a>
      </li>
      <li @if($current=="programas") class="nav-item active" @else class="nav-item" @endif>
        <a class="nav-link" href="http://jamhourcloud.ddns.net">NextCloud</a>
      </li>
      <li @if($current=="estudos") class="nav-item active" @else class="nav-item" @endif>
        <a class="nav-link" href="/estudos">Estudos</a>
      </li>
      <li @if($current=="temp") class="nav-item active" @else class="nav-item" @endif>
        <a class="nav-link" href="/sitestemp">Temp</a>
      </li>

        
    </ul>

  </div>
</nav>
