<template>
      <nav>
            <ul class="flex space-x-6">
                  <li><NavLink href="/" :active="$page.components === 'Home'" >Home</NavLink></li>
                  <li><NavLink href="users" :active="$page.components === 'Users'">Users</NavLink></li>
                  <li><NavLink href="orders" :active="$page.components === 'Orders'">Order</NavLink></li>
                  <li><NavLink href="settings" :active="$page.components === 'Settings'">Settings</NavLink></li>

                  <li><Link class="text-blue-500 hover:underline" href="logout"  method="post" as="button">Logout</Link></li>
            </ul>
      </nav>
</template>


<script>
import NavLink from './NavLink.vue';
import { Link } from '@inertiajs/inertia-vue3';
export default {
      components: {
            NavLink,
            Link
      }
}
</script>