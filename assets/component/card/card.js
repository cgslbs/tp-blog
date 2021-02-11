import React from 'react';
import { Link } from "react-router-dom";
import './card.css'

function Card({article}) {
    return (

        <div className="card style-card">
            <img className="card-img-top" src={article.image} alt={article.titre} />
            <div className="card-body">
                <h5 className="card-title">{article.titre}</h5>
                <p className="card-text">By {article.authorId} | {article.publishedDate}</p>
                <Link to={"/article/" + article.id}>Lire l'article</Link>
            </div>
        </div>
    )
}

export default Card;