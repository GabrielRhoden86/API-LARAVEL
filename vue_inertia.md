________________________________________instalação server side_________________________
1 - composer require inertiajs/inertia-laravel

2 - implemente a resources/view/app:
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    @vite('resources/js/app.js')
    @inertiaHead
  </head>
  <body>
    @inertia
  </body>
</html>

 3 - php artisan inertia:middleware

 4 -  em app\Http\Kernel.php insira na Middleware 'web' => 
     \App\Http\Middleware\HandleInertiaRequests::class

_________________________________________instalação client side______________________________
1 -  npm install @inertiajs/vue3 

1.1  - npm install laravel-vite-plugin@latest (verifique as versões das dependência no package.json para vitar conflito):

  "devDependencies": {
        "axios": "^1.6.4",
        "laravel-vite-plugin": "^1.0.0",
        "vite": "^5.4.11"
    },
    "dependencies": {
        "@inertiajs/vue3": "^1.2.0",
        "@vitejs/plugin-vue": "^5.1.5",
        "vue": "^3.5.12"
    }

2 -  implemente em resources\js\app.js

import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'

createInertiaApp({
  resolve: name => {
    const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
    return pages[`./Pages/${name}.vue`]
  },
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .mount(el)
  },
})

3 - npm install vue

4 - implementando a chamada com vite.config.js

5 - limpe o cache:
npm cache clean --force

6 -  npm run dev
