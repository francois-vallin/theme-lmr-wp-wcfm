# Le Marché Rural — Thème WordPress

Dernière mise à jour : 2026-03-10  
Version du thème : 2.4.0

## Présentation du projet

**Le Marché Rural** est une marketplace agricole locale construite avec **WordPress**, **WooCommerce** et **WCFM**.  
L'objectif est de proposer une expérience de marché en ligne qui reste **humaine, chaleureuse, locale et lisible**, en mettant en avant de vrais producteurs identifiés.

Le thème sert de base visuelle et fonctionnelle pour :
- valoriser les produits fermiers et le circuit court ;
- rassurer les visiteurs (clarté, lisibilité, confiance) ;
- faciliter le parcours client : Accueil → Catégories → Produits → Fiche produit → Panier → Commande ;
- garder une identité rurale authentique (sans effet startup froide ou marketplace industrielle).

## Stack technique cible

- **CMS** : WordPress
- **E-commerce** : WooCommerce
- **Marketplace vendeurs** : WCFM (WooCommerce Frontend Manager)
- **Thème** : thème personnalisé `Le Marché Rural`

## Philosophie visuelle et fonctionnelle

Le thème suit les principes suivants :
- ambiance **rurale, simple, fiable et authentique** ;
- priorité à la lecture des contenus et au réconfort visuel ;
- parcours d'achat clair, sans surcharge ;
- mise en avant des vendeurs/producteurs ;
- cohérence multi-pages (accueil, boutique, fiches produit, pages vendeurs, blog, pages statiques).

Palette de référence :
- vert fermier ;
- crème/papier ;
- orange terre ;
- jaune miel.

## État actuel du projet

La base du thème est en place avec :
- des templates principaux WordPress/WooCommerce ;
- un socle de styles ;
- un chargement des assets centralisé ;
- une documentation de maintenance (README, CHANGELOG, ROADMAP).

Le projet est désormais prêt à avancer par lots logiques, avec versioning aligné et feuille de route priorisée.

## Installation du thème

1. Copier le dossier du thème dans `wp-content/themes/`.
2. Vérifier que les extensions **WooCommerce** et **WCFM** sont installées/activées.
3. Activer le thème **Le Marché Rural** dans l'administration WordPress.
4. Vérifier les permaliens et les pages clés (boutique, panier, commande, compte).
5. Vérifier le rendu front (desktop + mobile) avant mise en production.

## Structure actuelle (vue simplifiée)

- `style.css` : métadonnées du thème + base CSS.
- `functions.php` : setup thème + enqueues + hooks globaux.
- `header.php` / `footer.php` : structure globale.
- `templates/` : templates personnalisés (ex. page d'accueil).
- `woocommerce/` : surcharge templates WooCommerce.
- `index.php` : fallback principal WordPress.
- `CHANGELOG.md` : historique des versions.
- `ROADMAP.md` : plan d'évolution détaillé et priorisé.

## Rôle du thème dans la maintenance long terme

Le thème doit rester :
- compatible WordPress/WooCommerce/WCFM ;
- maintenable (versions harmonisées, documentation à jour) ;
- cohérent avec l'identité locale du Marché Rural ;
- extensible sans réarchitecture lourde.

## Prochaines grandes étapes

1. Stabiliser la structure Git/thème et le socle CSS global.
2. Stabiliser l'accueil (blocs/patterns + catégories phares).
3. Stabiliser archive boutique puis fiche produit.
4. Intégrer et harmoniser WCFM sur les pages vendeurs/dashboard.
5. Finir les corrections responsive/mobile et les raffinements.

Le détail complet est dans `ROADMAP.md`.
