# Medicaments_Project
projet de gestion des médicaments développé par le framework symfony

## Description
Ce projet a été développé avec le framework Symfony, offrant une plateforme de gestion de médicaments et d'ordonnances. L'application utilise une base de données MySQL via XAMPP pour stocker les informations relatives aux médicaments et aux ordonnances. Elle propose des fonctionnalités telles que l'ajout de médicaments, la création d'ordonnances, et la gestion des stocks.

## Fonctionnalités Principales

Gestion des Médicaments : Permet l'ajout, la modification et la suppression de médicaments avec des détails tels que le nom, la posologie et la quantité en stock.

Création d'Ordonnances : Offre la possibilité de créer des ordonnances en associant des médicaments avec des instructions spécifiques pour chaque prescription.

Suivi des Stocks : Permet de suivre les niveaux de stock des médicaments pour éviter les ruptures et assurer une disponibilité constante.

Base de Données MySQL : Utilise XAMPP pour fournir un serveur MySQL pour le stockage persistant des données.

## Technologies Utilisées
Symfony : Framework PHP pour le développement web.
MySQL : Système de gestion de base de données relationnelles.
XAMPP : Ensemble logiciel facilitant le déploiement de serveurs web locaux

## Installez les dépendances Symfony.
composer install

## Créez la base de données et exécutez les migrations.

php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate

## Utilisation

Lancez le serveur Symfony.
symfony serve

## Fonctionnalités Futures
Gestion des Patients : Ajout de fonctionnalités pour la gestion des patients associés aux ordonnances.
Rapports et Statistiques : Intégration de rapports et de statistiques sur l'utilisation des médicaments et les fréquences de prescriptions.
