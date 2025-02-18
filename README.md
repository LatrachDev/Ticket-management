# 🚀 Système de Gestion de Tickets et Support Client

## 📌 Contexte du Projet
Les entreprises modernes nécessitent un système de support client efficace pour gérer les demandes et incidents. Ce projet vise à développer une application web permettant aux utilisateurs de signaler des problèmes et aux administrateurs de les traiter efficacement.

L'application sera développée en **Laravel** avec **PostgreSQL**, en respectant l'architecture **MVC**, les bonnes pratiques de développement et l’optimisation des requêtes SQL.

---

## 🎯 Objectifs

✅ Permettre aux utilisateurs de créer et suivre leurs tickets.

✅ Offrir aux administrateurs la possibilité de gérer les tickets efficacement.

✅ Assurer une gestion fluide des catégories et des statuts des tickets.

✅ Optimiser l'expérience utilisateur avec une interface intuitive.

---

## 🏗️ Fonctionnalités

### **🔹 En tant qu'administrateur**
✔ **Gérer les catégories de tickets** : Ajouter, modifier et supprimer des catégories pour classer les demandes (Ex : Problème technique, Facturation, Accès utilisateur).

✔ **Attribuer des tickets aux agents** : Assigner un ticket à un agent de support pour une meilleure prise en charge.

✔ **Changer le statut d’un ticket** : Modifier le statut d’un ticket (🟡 En attente, 🟢 En cours, 🔴 Résolu).

✔ **Consulter les tickets** : Voir la liste des tickets pour suivre leur progression.

### **🔹 En tant qu’utilisateur**

✔ **Créer un ticket** : Décrire un problème et l’envoyer au support avec une catégorie précise.

✔ **Suivre l’état de mes tickets** : Voir l'historique et le statut de mes tickets.

✔ **Fermer un ticket résolu** : Clôturer un ticket lorsque le problème est réglé.

---

## ⚖️ Règles Métier

📌 Un ticket doit être assigné à un agent avant d’être traité.

📌 Un ticket ne peut pas être modifié après sa fermeture.

📌 Un utilisateur ne peut voir que ses propres tickets.

---

## ⭐ Bonus (Optionnel)

🔔 Ajout d’un **système de notifications** (email ou en temps réel avec Pusher).

💬 Intégration d’une **messagerie** entre l’utilisateur et l’agent dans le ticket.

📊 Implémentation d’un **tableau de bord** affichant les statistiques des tickets (ouverts, en cours, résolus).

---

## 📝 Modalités Pédagogiques

- **Travail Individuel**
- **Durée du projet :** 5 jours
- **Date de lancement :** 17/02/2025 à 9h00
- **Date limite de soumission :** 22/02/2025 avant 17h30

---

## 📊 Modalités d’évaluation

🎤 **Présentation finale (30 min)**

🖥 **Démo de l’application (10 min)**

📂 **Explication de l’architecture et du code (10 min)**

🛠 **Questions techniques sur Laravel & PostgreSQL (10 min)**

---

## 📎 Livrables

📌 **Dépôt GitHub** avec un README détaillé 📄

📌 **Planification du projet sur Jira** (Backlog, User Stories, Sprint Planning) 📅

📌 **Diagrammes UML.

📌 **Déploiement sur un serveur** si possible 🚀

---

## ✅ Critères de Performance

### **📌 Code & Architecture**

✔ Respect de l’architecture **MVC** et des conventions **Laravel**

✔ Code propre, structuré et bien commenté 🖋

✔ Bonne utilisation des **migrations, seeders et factories**

### **📌 Base de Données & Requêtes SQL**

✔ Optimisation des requêtes SQL avec **PostgreSQL** ⚡

✔ Utilisation des relations **One-to-Many** avec **Eloquent ORM**

✔ Validation et intégrité des données 🔍

### **📌 Sécurité & Gestion des Erreurs**

✔ Validation des entrées utilisateur 🛡️

✔ Protection contre les attaques **CSRF & SQL Injection** 🚨

✔ Middleware pour restreindre l'accès aux routes sensibles 🔑

### **📌 Interface Utilisateur & Expérience**

✔ UI intuitive avec **Blade / Vue.js (optionnel)** 🎨

✔ Feedback utilisateur clair et messages d’alerte informatifs 🔔

✔ Navigation fluide et responsive 📱

---

## 🚀 Technologies Utilisées

- **Backend :** Laravel 10 ⚙️
  
- **Base de données :** PostgreSQL 🗄️
  
- **Frontend :** Blade / Tailwind CSS 🎨
  
- **Versioning :** GitHub 🛠️
  
- **Déploiement :** Docker (optionnel) 🐳
  
- **Gestion de projet :** Jira 📅

---

## 📢 À propos du Projet

Ce projet est conçu pour développer des compétences en **Laravel, PostgreSQL et architecture MVC** tout en abordant des problématiques réelles du support client. 🚀

Bon courage à tous ! 💪


<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
