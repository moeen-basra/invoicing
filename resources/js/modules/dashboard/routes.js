import {lazy} from 'react'

export default [
    {
        meta: {
            name: 'home',
            label: 'Laravel React Invoices',
        },
        path: '/',
        exact: true,
        component: lazy(() => import('./pages/main'))
    }
]
