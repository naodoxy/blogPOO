# Blog PHP – blogpoo

Projet de blog réalisé en PHP avec PDO et MySQL.

---

# Prérequis

- WAMP (ou XAMPP)
- PHP 8+
- MySQL
- Git
- Navigateur web

---

# Installation du projet

# Cloner le dépôt GitHub 

Ouvrir un terminal et se placer dans le dossier `www` de WAMP :

cd /c/wamp64/www
git clone https://github.com/naodoxy/blogpoo.git

# Configuration du VirtualHost (WAMP)

Dans WAMP :

Clic gauche sur l’icône WAMP
>Your VirtualHosts
>Add a VirtualHost

Renseigner :

Nom : blogpoo
Dossier : C:/wamp64/www/blogpoo

>Valider puis redémarrer WAMP

# Création de la base de données

Dans WAMP cliquer sur Gestion base de données > phpmyadmin et se connecter à la BDD
Cliquer sur importez et sélectionner le fichier blogpoo.sql dans le dossier cloné 
