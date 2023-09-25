<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
        <a class="nav-link @if(Route::currentRouteName()!='admin.index'){{ 'collapsed'}}@endif" href="{{ route('admin.index')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-heading">Sections</li>
      <li class="nav-item">
        <a class="nav-link @if(Route::currentRouteName()!='doctors.index'){{ 'collapsed'}}@endif" href="{{ route('doctors.index')}}">
          <i class="bi bi-person-plus"></i>
          <span>Doctors</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link @if(Route::currentRouteName()!='patients.index'){{ 'collapsed'}}@endif" href="{{ route('patients.index')}}">
          <i class="bi bi-people"></i>
          <span>Patients</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link @if(Route::currentRouteName()!='appointments.index'){{ 'collapsed'}}@endif" href="{{ route('appointments.index')}}">
          <i class="bi bi-calendar-check"></i>
          <span>Appointments</span>
        </a>
      </li>
    </ul>
</aside>