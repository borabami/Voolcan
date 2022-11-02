import { createApp } from "vue/dist/vue.esm-bundler"
import '@mdi/font/css/materialdesignicons.css'
import 'vuetify/styles'
import { createVuetify } from 'vuetify'
import router from './router/index.js'

import("./bootstrap.js")

import * as components from 'vuetify/components'
import * as directives from 'vuetify/directives'

const vuetify = createVuetify({
    components,
    directives,
  })

  const app = createApp({
    /* root component options */
  })

app.use(vuetify).use(router).mount('#app')






