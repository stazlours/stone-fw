# StoneFw

## 1. Présentation

**StoneFw** est un framework PHP léger, pédagogique et scalable, conçu pour comprendre et maîtriser les fondations d’un framework moderne sans dépendre d’un écosystème lourd.

Objectifs principaux :

- Contrôle total de l’architecture
- Lisibilité et maintenabilité du code
- Séparation claire des responsabilités
- Extensibilité progressive

---

## 2. Philosophie

- **Convention over configuration** (mais configurable)
- **Simple avant d’être magique**
- **Aucun composant inutile**
- **Chaque ligne doit avoir une raison d’exister**

StoneFw n’essaie pas de concurrencer Laravel ou Symfony, mais de :

- Servir de base solide pour des petits et moyens projets
- Être un socle pédagogique
- Être personnalisable à 100 %

---

## 3. Pré-requis techniques

- PHP >= 8.2
- Composer (autoload uniquement)
- Serveur web (Apache / Nginx) ou PHP built-in server

---

## 4. Architecture générale

stonefw/
├── app/
│   ├── Controllers/
│   ├── Models/
│   ├── Services/
│   └── Views/
│
├── core/
│   ├── Application.php
│   ├── Router.php
│   ├── Request.php
│   ├── Response.php
│   ├── Container.php
│   └── Kernel.php
│
├── routes/
│   └── web.php
│
├── cli/
│   └── stone
│
├── public/
│   └── index.php
│
├── storage/
│   └── logs/
│
├── vendor/
├── composer.json
└── README.md

---

## 5. Phase 1 – Core / Bootstrap (terminée)

- **Fichiers créés** :
  - `public/index.php`
  - `core/Application.php`
  - `core/Router.php`
  - `core/Request.php`
  - `core/Response.php`
- **Fonctionnalité actuelle** :
  - Application capable de lancer une requête GET simple
  - Route `/` fonctionnelle
  - 404 automatique si route non trouvée

**Exemple de route :**

```php
$app->router->get('/', function() {
    return 'Bienvenue sur StoneFw !';
});
$app->run();
```

- **Prochain objectif** : Controllers + routes dynamiques + POST

---

## 6. Cycle de vie d’une requête

1. Requête HTTP → `public/index.php`
2. Bootstrap de l’application
3. Création de la Request
4. Passage par le Router
5. Appel du Controller
6. Retour Response
7. Envoi au navigateur

---

## 7. Roadmap générale

### Phase 1 – Core (terminée)

- [x] Bootstrap (`index.php`)
- [x] Application
- [x] Router GET minimal
- [x] Request / Response

### Phase 2 – Architecture

- [ ] Container IoC
- [ ] Controllers
- [ ] Views

### Phase 3 – CLI

- [ ] Script `stone`
- [ ] Générateurs

### Phase 4 – Qualité

- [ ] Documentation
- [ ] Tests basiques
- [ ] Exemples

---

## 8. Règles de qualité

- Une classe = une responsabilité
- Pas de logique métier dans les vues
- Pas de helpers globaux magiques
- Code commenté intelligemment

---

## 9. Positionnement

StoneFw est :

- 🔧 un framework **fait pour être compris**
- 🪨 une base **solide et stable**
- 📚 un outil **pédagogique et professionnel**

**StoneFw – Build on stone, not on sand.**
