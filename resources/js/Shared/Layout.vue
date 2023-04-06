<template>
      <div class="container-scroller">
            <section id="nav">
                  <Nav />
                  <div class="container-fluid page-body-wrapper">
                        <Sidebar />
                        <!-- partial -->
                        <div class="main-panel">
                              <div class="content-wrapper">
                                    <slot />
                              </div>
                              <Footer />
                              <!-- partial -->
                        </div>
                        <!-- main-panel ends -->
                  </div>
            </section>
      </div>
</template>

<script>
import Nav from './Nav.vue';
import Sidebar from './Sidebar.vue';
import Footer from './Footer.vue';
export default {
      components: {
            Nav, Sidebar
      },
      computed: {
            username() {
                  return this.$page.props.auth.user.username;
            }
      }
}
</script>