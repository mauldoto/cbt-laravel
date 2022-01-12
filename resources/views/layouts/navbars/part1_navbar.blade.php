<li class="nav-item dropdown d-none d-lg-block">
  <a class="nav-link dropdown-bordered dropdown-toggle dropdown-toggle-split" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false"> Select Category </a>
  <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
    <a class="dropdown-item py-3" >
      <p class="mb-0 font-weight-medium float-left">Select category</p>
    </a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item preview-item">
      <div class="preview-item-content flex-grow py-2">
        <p class="preview-subject ellipsis font-weight-medium text-dark">Bootstrap Bundle </p>
        <p class="fw-light small-text mb-0">This is a Bundle featuring 16 unique dashboards</p>
      </div>
    </a>
    <a class="dropdown-item preview-item">
      <div class="preview-item-content flex-grow py-2">
        <p class="preview-subject ellipsis font-weight-medium text-dark">Angular Bundle</p>
        <p class="fw-light small-text mb-0">Everything you’ll ever need for your Angular projects</p>
      </div>
    </a>
    <a class="dropdown-item preview-item">
      <div class="preview-item-content flex-grow py-2">
        <p class="preview-subject ellipsis font-weight-medium text-dark">VUE Bundle</p>
        <p class="fw-light small-text mb-0">Bundle of 6 Premium Vue Admin Dashboard</p>
      </div>
    </a>
    <a class="dropdown-item preview-item">
      <div class="preview-item-content flex-grow py-2">
        <p class="preview-subject ellipsis font-weight-medium text-dark">React Bundle</p>
        <p class="fw-light small-text mb-0">Bundle of 8 Premium React Admin Dashboard</p>
      </div>
    </a>
  </div>
</li>
<li class="nav-item d-none d-lg-block">
  <div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
    <span class="input-group-addon input-group-prepend border-right">
      <span class="icon-calendar input-group-text calendar-icon"></span>
    </span>
    <input type="text" class="form-control">
  </div>
</li>
<li class="nav-item">
  <form class="search-form" action="#">
    <i class="icon-search"></i>
    <input type="search" class="form-control" placeholder="Search Here" title="Search here">
  </form>
</li>
<li class="nav-item dropdown">
  <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
    <i class="icon-mail icon-lg"></i>
  </a>
  <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="notificationDropdown">
    <a class="dropdown-item py-3 border-bottom">
      <p class="mb-0 font-weight-medium float-left">You have 4 new notifications </p>
      <span class="badge badge-pill badge-primary float-right">View all</span>
    </a>
    <a class="dropdown-item preview-item py-3">
      <div class="preview-thumbnail">
        <i class="mdi mdi-alert m-auto text-primary"></i>
      </div>
      <div class="preview-item-content">
        <h6 class="preview-subject fw-normal text-dark mb-1">Application Error</h6>
        <p class="fw-light small-text mb-0"> Just now </p>
      </div>
    </a>
    <a class="dropdown-item preview-item py-3">
      <div class="preview-thumbnail">
        <i class="mdi mdi-settings m-auto text-primary"></i>
      </div>
      <div class="preview-item-content">
        <h6 class="preview-subject fw-normal text-dark mb-1">Settings</h6>
        <p class="fw-light small-text mb-0"> Private message </p>
      </div>
    </a>
    <a class="dropdown-item preview-item py-3">
      <div class="preview-thumbnail">
        <i class="mdi mdi-airballoon m-auto text-primary"></i>
      </div>
      <div class="preview-item-content">
        <h6 class="preview-subject fw-normal text-dark mb-1">New user registration</h6>
        <p class="fw-light small-text mb-0"> 2 days ago </p>
      </div>
    </a>
  </div>
</li>
<li class="nav-item dropdown"> 
  <a class="nav-link count-indicator" id="countDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
    <i class="icon-bell"></i>
    <span class="count"></span>
  </a>
  <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="countDropdown">
    <a class="dropdown-item py-3">
      <p class="mb-0 font-weight-medium float-left">You have 7 unread mails </p>
      <span class="badge badge-pill badge-primary float-right">View all</span>
    </a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item preview-item">
      <div class="preview-thumbnail">
        <img src="{{asset('assets/images/faces/face10.jpg')}}" alt="image" class="img-sm profile-pic">
      </div>
      <div class="preview-item-content flex-grow py-2">
        <p class="preview-subject ellipsis font-weight-medium text-dark">Marian Garner </p>
        <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
      </div>
    </a>
    <a class="dropdown-item preview-item">
      <div class="preview-thumbnail">
        <img src="{{asset('assets/images/faces/face12.jpg')}}" alt="image" class="img-sm profile-pic">
      </div>
      <div class="preview-item-content flex-grow py-2">
        <p class="preview-subject ellipsis font-weight-medium text-dark">David Grey </p>
        <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
      </div>
    </a>
    <a class="dropdown-item preview-item">
      <div class="preview-thumbnail">
        <img src="{{asset('assets/images/faces/face1.jpg')}}" alt="image" class="img-sm profile-pic">
      </div>
      <div class="preview-item-content flex-grow py-2">
        <p class="preview-subject ellipsis font-weight-medium text-dark">Travis Jenkins </p>
        <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
      </div>
    </a>
  </div>
</li>