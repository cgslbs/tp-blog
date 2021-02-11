import React from 'react';
import ReactDOM from 'react-dom';
import './styles/app.css';
import 'bootstrap/dist/css/bootstrap.min.css';
import { Switch, Route, HashRouter, useParams } from 'react-router-dom';

import Accueil from './page/accueil';
import Detail from './page/detail';

function App(){
    return(
        <Switch>
            <Route exact path="/" component={Accueil} />
            <Route  path="/article/:id" children={<Child />} />
        </Switch>
    )
}

function Child(){
    let { id } = useParams()
    return(
        <Detail id={id} />
    )
}

ReactDOM.render(
    <HashRouter>
        <App/>
    </HashRouter>,
document.getElementById("root")
);