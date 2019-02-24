import React, {Suspense} from 'react'
import {BrowserRouter as Router, Switch, Route} from 'react-router-dom'
import Layout from '../layout'
import routes from './routes'

export default () => (<Router>
    <Layout>
        <Switch>
            {routes.map(({component: Component, ...rest}) => {
                return <Route key={rest.meta.name} {...rest} render={props => {
                    return <Suspense fallback={<div>Loading</div>}>
                        <Component {...props}/>
                    </Suspense>
                }}/>
            })}
        </Switch>
    </Layout>
</Router>)
