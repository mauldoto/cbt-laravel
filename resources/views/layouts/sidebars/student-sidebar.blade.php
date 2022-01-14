<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item {{ active_class(['/']) }}">
      <a class="nav-link" href="{{ url('/') }}">
        <i class="mdi mdi-grid-large menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item nav-category">Menu</li>
    <li class="nav-item {{ active_class(['jadwal']) }}">
      <a class="nav-link" href="{{ url('jadwal') }}">
        <i class="menu-icon mdi mdi-calendar-clock"></i>
        <span class="menu-title">Jadwal Ujian</span>
      </a>
    </li>
    <li class="nav-item {{ active_class(['hasil']) }}">
      <a class="nav-link" href="{{ url('hasil') }}">
        <i class="menu-icon mdi mdi-calendar-check"></i>
        <span class="menu-title">Hasil Ujian</span>
      </a>
    </li>
  </ul>
</nav>