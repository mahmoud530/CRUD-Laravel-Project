  <!-- Sidebar scroll-->
  <div class="scroll-sidebar">
      <!-- Sidebar navigation-->
      <nav class="sidebar-nav">
          <ul id="sidebarnav" class="pt-4">
              <li class="sidebar-item">
                  <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#" aria-expanded="false"><i
                          class="mdi mdi-view-dashboard"></i><span class="hide-menu">Home</span></a>
              </li>
              <!-- students -->
              <li class="sidebar-item">
                  <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                      aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">students </span></a>
                  <ul aria-expanded="false" class="collapse first-level">
                      <li class="sidebar-item">
                          <a href="{{route('admin.student.index')}}" class="sidebar-link"><i
                                  class="mdi mdi-note-outline"></i><span class="hide-menu">
                                  All
                                  students </span></a>
                      </li>
                      <li class="sidebar-item">
                          <a href="{{route('admin.student.create')}}" class="sidebar-link"><i
                                  class="mdi mdi-note-plus"></i><span class="hide-menu"> Add
                                  students </span></a>
                      </li>
                  </ul>
              </li>
              <!-- departments -->
              <li class="sidebar-item">
                  <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                      aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">department
                      </span></a>
                  <ul aria-expanded="false" class="collapse first-level">
                      <li class="sidebar-item">
                          <a href="{{route('admin.department.index')}}" class="sidebar-link"><i
                                  class="mdi mdi-note-outline"></i><span class="hide-menu">
                                  All
                                  department </span></a>
                      </li>
                      <li class="sidebar-item">
                          <a href="{{route('admin.department.create')}}" class="sidebar-link"><i
                                  class="mdi mdi-note-plus"></i><span class="hide-menu"> Add
                                  department </span></a>
                      </li>
                  </ul>
              </li>
          </ul>
      </nav>
      <!-- End Sidebar navigation -->
  </div>