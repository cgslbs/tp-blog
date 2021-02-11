import React, { useEffect, useState } from 'react';
import { getArticleById } from '../api/ArticleApi';
import './detail.css';

const Detail = ({ id }) => {
    const [article, setArticle] = useState({
        id: null,
        titre: null,
        authorId: null,
        categorieId: null,
        image: null,
        publishedDate: null,
        content: null
    });

    useEffect(() => {
        getArticleById(id).then(res => {
            setArticle({
                id: res.data.id,
                titre: res.data.titre,
                authorId: res.data.authorId,
                categorieId: res.data.categorieId,
                image: res.data.image,
                publishedDate: res.data.publishedDate,
                content: res.data.content
            })
        })
    }, [article])


    return (

        <div className="container">
        <div className="card mb-6">
            <img className="card-img-top" src={article.image} alt={article.titre} />
            <div className="card-body">
                <h5 className="card-title">{article.titre}</h5>
                <p className="card-text">{article.content}</p>
                <p className="card-text"><small className="text-muted">{article.publishedDate} | By {article.authorId}</small></p>
            </div>
        </div>

        </div>
    )
}

export default Detail;