import Main from './components/MainComponent'
import Quiz from './components/pages/QuizComponent'
import View from './components/pages/ViewComponent'
import MapQuiz from './components/pages/quiz/MapComponent'
import History from './components/pages/quiz/HistoryComponent'
import Politics from './components/pages/quiz/PoliticsComponent'
import About from './components/pages/AboutComponent'
import PageNotFound from './components/pages/errors/404'
// import Login from './components/pages/auth/LoginComponent'
// import Register from './components/pages/auth/RegisterComponent'
// import Home from './components/pages/user/HomeComponent'
// import VerifyEmail from './components/pages/auth/VerifyComponent'
// import Reset from './components/pages/auth/passwords/ResetComponent'

export const routes = [
    {
        path: '/',
        component: Main,
    },
    {
        path: '/quiz',
        component: View,
        children: [
            {
                path: '',
                component: Quiz
            },
            {
                path: 'map',
                component: MapQuiz
            },
            {
                path: 'history',
                component: History
            },
            {
                path: 'politics',
                component: Politics
            },
        ]

    },
    {
        name: 'about',
        path: '/about',
        component: About
    },
    { path: '*', component: PageNotFound }
    // {
    //     name: 'home',
    //     path: '/home',
    //     component: Home,
    //     meta: {requiresAuth: true }
    // },
    // {
    //     name: 'login',
    //     path: '/login',
    //     component: Login,
    //     meta: {requiresVisitor: true }
    // },
    // {
    //     name: 'register',
    //     path: '/register',
    //     component: Register,
    //     meta: { requiresVisitor: true }
    // },
    // {
    //     name: 'email-verify',
    //     path: '/email/verify',
    //     component: VerifyEmail,
    //     meta: {requiresVisitor: true }
    // },
    // {
    //     name: 'password',
    //     path: '/password',
    //     component: View,
    //     children: [
    //         { 
    //             name: 'password-reset',
    //             path: 'reset',
    //             component: Reset
    //         }
    //     ]
    // }
]