<template>
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
      <section class="bg-gray-200 p-6" id="header">
            <header class="flex justify-between bg-gray-200">
                  <div class="flex">
                        <h1 class="font-bold text-lg">Tailwindy</h1>
                        <small class="ml-4">Welcome back, {{ username }}.</small>
                  </div>
                  <Nav />
            </header>
      </section>
      <section class="p-8">
            <div class="max-w-4xl mx-auto">
                  <slot />
            </div>
      </section>
</template>

<script>
import Nav from './Nav.vue';
export default {
      components: {
            Nav
      },
      computed: {
            username() {
                  return this.$page.props.auth.user.username;
            }
      }
}
</script>