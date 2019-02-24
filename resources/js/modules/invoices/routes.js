import {lazy} from 'react'

export default [
    {
        meta: {
            name: 'invoices',
            label: 'Invoices'
        },
        path: '/invoices',
        exact: true,
        component: lazy(() => import('./pages/listing'))
    }
]
