import { createWebHistory, createRouter} from "vue-router";
import Login from '../components/frontend/Auth/Login.vue';
import Home from '../components/backend/Home.vue';


const routes=[
    { 
        path: '', redirect: '/login' 
    },
    { 
        path: '/', redirect: '/login' 
    },
    { 
        path: '/login', name: 'login', component: Login
    },
    { 
        path: '/home', name: 'home', component: Home
    },
];

const router = createRouter(
    {
        history: createWebHistory(),
        routes,
    }
);

export default router;