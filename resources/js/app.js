import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/inertia-vue3'
import NProgress from 'nprogress'
import { router } from '@inertiajs/vue3'
import Layout from './Shared/Layout.vue';

createInertiaApp({
      resolve: name => {
            let page = require(`./Pages/${name}`).default
            page.layout ??= Layout
            return page
      },
      setup({ el, App, props, plugin }) {
            createApp({ render: () => h(App, props) })
                  .use(plugin)
                  .mount(el)
      },
      progress: {
            color: '#29d',
            showSpinner: true,
      },
})

router.on('start', () => NProgress.start())
router.on('finish', () => NProgress.done())