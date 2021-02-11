import axios from 'axios';

process.env.NODE_TLS_REJECT_UNAUTHORIZED = '0';

const baseUrl = "https://127.0.0.1:8000/api/articles"
const config = {
    headers: {
        'Accept': "application/json"
    }
}

export const getAllArticles = async () => {
    const url = baseUrl;
    return axios.get(url, config);
}

export const getArticleById = async (id) => {
    const url = baseUrl + '/' + id;
    return axios.get(url, config);
}