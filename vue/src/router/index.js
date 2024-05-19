import { createRouter, createWebHistory } from 'vue-router'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'front',
      component: () => import('../front_panel/views/Front.vue'),
      children:[
        {
          path: 'header',
      name: 'header',
      component: () => import('../front_panel/components/Header.vue'),
        }
      ]
    },
    {
      path: '/admin',
      name: 'admin',
      component: () => import('../admin_panel/views/Admin.vue')
    }
  ]
})

export default router
