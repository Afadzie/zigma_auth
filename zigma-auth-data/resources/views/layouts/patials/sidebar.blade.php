 <!-- partial:partials/_sidebar.html -->
 <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ url('dashboard')}}">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">All Users</span>
              </a>
            </li>
            <!-- <li class="nav-item nav-category">UI Elements</li> -->
            <li class="nav-item">
              <a class="nav-link"  href="{{ url('administrators')}}">
                <i class="menu-icon mdi mdi-floor-plan"></i>
                <span class="menu-title">All Admins</span>
              </a>
            </li>
            {{-- <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                <i class="menu-icon mdi mdi-card-text-outline"></i>
                <span class="menu-title">All Admins</span>
              </a>
            </li> --}}
          </ul>
        </nav>