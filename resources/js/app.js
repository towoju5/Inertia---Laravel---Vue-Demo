import { createApp, h } from 'vue'
import { createInertiaApp, Head, Link } from '@inertiajs/inertia-vue3'
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
                  .component('Head', Head)
                  .component('Link', Link)
                  .mount(el)
      },
      progress: {
            color: '#29d',
            showSpinner: true,
      },

      components : {
            Head
      },

      title : title => `My App : ${title}`,
})

router.on('start', () => NProgress.start())
router.on('finish', () => NProgress.done())