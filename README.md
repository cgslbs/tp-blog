# TP Blog Symfony/React

## BDD
---
Vérifier dans le fichier .env la variable DATABASE_URL pour qu'elle corresponde à votre base de données.

# Initialisation du projet

config la bdd dans le .env
```bash
composer install

npm install

php bin/console doctrine:database:create
```

Configurer la BDD dans le .env
```bash
symfony server:start
# url de test => localhost:8000/api
# Si le https ne fonctionne pas, lancer la commande suivante
symfony server:ca:install
#et
npm run dev-server
#Pour le front
```

config api platform
packages => api_platform.yml
routes => api_platform.yml

## Création simplifiée
---
### Créer une entité
```
symfony console make:entity
```
### Créer une migration
```
symfony console make:migration
```
### Lancer la migration
```
symfony console doctrine:migrations:migrate
```
### Commande pour créer une fixture
```
symfony console make:fixtures
```
### Lancer les fixtures
```
symfony console doctrine:fixtures:load
```

# Conclusion TP
## Les problèmes rencontrés
```
- démarrage très tardif sur le projet : vers 15h à cause d'une erreur liée au Manifest.json

- Conséquences : objectifs revus à la baisse ; je me suis surtout concentrée sur Afficher la liste des articles en page d'accueil et le Détail (objectif réussi)

- Ma pratique de Symfony remonte à loin, je me suis donc aidée d'ancien projet

- Création des Entity dans le désordre : je n'ai pas pu lier l'idAuthor à un Author ; j'ai essayé de le faire avec la normalisation, mais ça n'a pas marché (j'ai appliqué ce que j'ai compris de la doc)

```
## Le mot de la fin
````
C'est très léger - je sais. Mais j'ai donné mon max. Bon courage pour les corrections ! 
````


# Doc Api-platform
## configuration
[config (pagination, etc.)](https://api-platform.com/docs/core/configuration/)
## mapping entities
[mapping entities](https://api-platform.com/docs/core/getting-started/#mapping-the-entities)
## Opération (CRUD)
[Opération](https://api-platform.com/docs/core/operations/)

[config (url, arg, etc.)](https://api-platform.com/docs/core/operations/#configuring-operations)

[SubResource](https://api-platform.com/docs/core/subresources/)

[CustomController](https://api-platform.com/docs/core/controllers/)

## Format & Sérialisation
[Json-ld, hydra & co](https://api-platform.com/docs/core/serialization/#available-serializers)
## pagination
[pagination](https://api-platform.com/docs/core/pagination/)
## filtre

[Filtre](https://api-platform.com/docs/core/filters/)

[SearchFilter](https://api-platform.com/docs/core/filters/#search-filter)

[OrdreFilter](https://api-platform.com/docs/core/filters/#order-filter-sorting)

[Child-properties](https://api-platform.com/docs/core/filters/#filtering-on-nested-properties)

# webpack-encore

[encore-doc](https://symfony.com/doc/4.4/frontend.html#getting-started)

# React

[Persist state (localStorage)](https://dev.to/akhilaariyachandra/persistent-state-in-react-f50
)