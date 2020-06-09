import Main from './components/MainComponent'
import Quiz from './components/pages/QuizComponent'
import View from './components/pages/ViewComponent'
import MapQuiz from './components/pages/quiz/MapComponent'
import History from './components/pages/quiz/HistoryComponent'
import Politics from './components/pages/quiz/PoliticsComponent'
import About from './components/pages/AboutComponent'
import PageNotFound from './components/pages/errors/404'

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
]