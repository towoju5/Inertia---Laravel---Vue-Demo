<template>
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <li class="nav-item nav-category">Main</li>
        <li class="nav-item">
          <NavLink class="nav-link" href="/">
            <span class="icon-bg"><i class="mdi mdi-desktop-mac menu-icon"></i></span>
            <span class="menu-title">Dashboard</span>
          </NavLink>
        </li>
        <li class="nav-item">
          <NavLink class="nav-link" href="/investment">
            <span class="icon-bg"><i class="mdi mdi-store-24-hour menu-icon"></i></span>
            <span class="menu-title">Investment</span>
          </NavLink>
        </li>
        <li class="nav-item">
          <NavLink class="nav-link" href="/profile">
            <span class="icon-bg"><i class="mdi mdi-account menu-icon"></i></span>
            <span class="menu-title">Profile</span>
          </NavLink>
        </li>
        <li class="nav-item">
          <NavLink class="nav-link" href="/deposit">
            <span class="icon-bg"><i class="mdi mdi-download menu-icon"></i></span>
            <span class="menu-title">Deposit</span>
          </NavLink>
        </li>
        <li class="nav-item">
          <NavLink class="nav-link" href="/withdrawal">
            <span class="icon-bg"><i class="mdi mdi-upload menu-icon"></i></span>
            <span class="menu-title">Withdraw</span>
          </NavLink>
        </li>

        <li class="nav-item">
          <NavLink class="nav-link" href="/logout" method="post">
            <span class="icon-bg"><i class="mdi mdi-logout menu-icon"></i></span>
            <span class="menu-title">Logout</span>
          </NavLink>
        </li>

      </ul>
    </nav>
</template>


<script>
import NavLink from './NavLink.vue';
export default {
  components: {
    NavLink,
  }
}
</script>