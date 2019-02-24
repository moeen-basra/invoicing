import React from 'react'
import Header from '../components/header'

export default function ({children}) {
    return <React.Fragment>
        <Header/>
        {children}
    </React.Fragment>
}
