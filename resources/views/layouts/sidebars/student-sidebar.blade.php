<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item {{ active_class(['/']) }}">
      <a class="nav-link" href="{{ url('/') }}">
        <i class="mdi mdi-grid-large menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item nav-category">Menu</li>
    <li class="nav-item {{ active_class(['bank-soal']) }}">
      <a class="nav-link" data-bs-toggle="collapse" href="#question-pack-menu" aria-expanded="false" aria-controls="question-pack-menu">
        <i class="menu-icon mdi mdi-file-cabinet"></i>
        <span class="menu-title">Jadwal Ujian</span>
        <i class="menu-arrow"></i> 
      </a>
      <div class="collapse {{ show_class(['bank-soal']) }}" id="question-pack-menu">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item {{ active_class(['/bank-soal/create']) }}"> <a class="nav-link" href="pages/ui-features/buttons.html">Create</a></li>
          <li class="nav-item {{ active_class(['/bank-soal/list']) }}"> <a class="nav-link" href="pages/ui-features/dropdowns.html">List</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item {{ active_class(['kategori']) }}">
      <a class="nav-link" data-bs-toggle="collapse" href="#kategori" aria-expanded="false" aria-controls="kategori">
        <i class="menu-icon mdi mdi-file-document-box-multiple-outline"></i>
        <span class="menu-title">Hasil Ujian</span>
        <i class="menu-arrow"></i> 
      </a>
      <div class="collapse {{ show_class(['kategori']) }}" id="kategori">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item {{ active_class(['/kategori/create']) }}"> <a class="nav-link" href="pages/ui-features/buttons.html">Create</a></li>
          <li class="nav-item {{ active_class(['/kategori/list']) }}"> <a class="nav-link" href="pages/ui-features/dropdowns.html">List</a></li>
        </ul>
      </div>
    </li>
  </ul>
</nav>