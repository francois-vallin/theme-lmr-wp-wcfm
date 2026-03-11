<!--
Thème : Le Marché Rural
Version actuelle : 2.4.0
Version de création du fichier : 0.1.0
Auteur : François Vallin

Création : 2025-04-08 00:00
Dernière modification : 2026-03-11 17:45
-->

# Le Marché Rural

Thème WordPress du projet **Le Marché Rural**, pensé pour une marketplace agricole locale basée sur **WordPress**, **WooCommerce** et **WCFM**.

## Positionnement

Le thème doit évoquer :

- un vrai marché rural
- des producteurs identifiés
- un univers simple, chaleureux et lisible
- une vente locale et humaine

Le site ne doit pas ressembler à une marketplace industrielle.

## Choix techniques validés

- **d’abord CSS + structure**
- **habillage marketplace** progressif
- **accueil en blocs Gutenberg + pattern**
- compatibilité WooCommerce
- compatibilité WCFM

## Structure

```text
assets/
  css/
  js/
  icons/
  placeholders/

patterns/

functions.php
header.php
footer.php
index.php
page.php
single.php
archive.php
style.css
```

## État actuel

Version stable de travail : **2.4.0**

Base actuelle :
- structure générale du thème stabilisée
- menu principal habillé
- sidebar front neutralisée
- largeur boutique corrigée
- footer de base remis au propre
- assets structurés
- pattern Gutenberg disponible pour l’accueil

## Convention de maintenance

Tout fichier créé ou modifié doit contenir un en-tête avec :
- thème
- version actuelle
- version de création du fichier
- auteur
- création
- dernière modification

Format date/heure :
`AAAA-MM-JJ HH:MM`

## Priorités suivantes

1. stabiliser définitivement le layout global
2. affiner header et footer
3. habiller l’archive boutique
4. intégrer progressivement WCFM côté front
5. finaliser l’accueil Gutenberg + pattern
