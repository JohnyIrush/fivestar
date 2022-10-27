require('./bootstrap');

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import { InertiaProgress } from '@inertiajs/progress';

import mitt from 'mitt';

const emitter = mitt();

const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => require(`./Pages/${name}.vue`),
    setup({ el, app, props, plugin }) {
        return createApp({ render: () => h(app, props) })
            .use(plugin)
            .mixin({ methods: { route } })
            .mount(el);
    },
});

// Vue 3
/*
createApp({}).directive("focus", {
  inserted: (el, binding) => {
    if (binding.value === true) {
        el.focus();
    }
  },
});
*/
InertiaProgress.init({ color: '#4B5563' });
