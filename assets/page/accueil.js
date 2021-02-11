import React, { useEffect, useState } from 'react';
import './accueil.css';
import { getAllArticles } from '../api/ArticleApi';
import Card from '../component/card/card'

const Accueil = () => {

    const [articles, setArticles] = useState([]);;

    useEffect(() => {
        getAllArticles().then(res => {
            setArticles(res.data)
        })
    }, [])

    return (
        <>
            <div className="container">
            {articles.map((article) => (
                    <Card key={article.id} article={article} />
                ))}
            </div>

            {/* <div className="flex justify-center items-center h-screen">
                

            </div> */}
        </>
    )
}

export default Accueil;