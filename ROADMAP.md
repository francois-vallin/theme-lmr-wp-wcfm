# ROADMAP — Le Marché Rural

Dernière mise à jour : 2026-03-10  
Version de référence : 2.4.0

## Priorisation recommandée

Ordre de travail recommandé pour garder une base propre :

1. Stabiliser la structure Git/thème.
2. Stabiliser le CSS global.
3. Stabiliser l'accueil blocs + carrousel.
4. Stabiliser l'archive boutique.
5. Stabiliser la fiche produit.
6. Intégrer proprement WCFM.
7. Finaliser la qualité mobile partout.
8. Ajouter ensuite les raffinements.

---

## Backlog structuré (100 points)

### 1) Base technique du thème

1. Finaliser la structure des dossiers `assets/`, `woocommerce/`, `templates/`.
2. Ajouter un `README.md`.
3. Ajouter un `CHANGELOG.md`.
4. Ajouter un `.gitignore`.
5. Harmoniser les versions dans `style.css` et `functions.php`.

### 2) Front général

6. Stabiliser le header.
7. Stabiliser le footer.
8. Revoir complètement le menu mobile.
9. Ajouter un état actif visuel sur les liens du menu.
10. Vérifier les largeurs et débordements sur toutes les pages.
11. Uniformiser les espacements globaux.
12. Uniformiser les boutons.
13. Uniformiser les titres et sous-titres.
14. Ajouter une vraie palette centralisée CSS.
15. Ajouter les styles manquants pour Gutenberg en front.

### 3) Page d'accueil

16. Choisir définitivement entre template codé et page en blocs.
17. Si blocs : finaliser le pattern « Accueil Marché Rural ».
18. Ajouter le CSS front spécifique aux blocs d'accueil.
19. Rendre le hero plus propre sur mobile.
20. Réduire ou remplacer l'illustration trop volumineuse du hero.
21. Ajouter un vrai bloc « vidéos réseaux sociaux ».
22. Transformer les catégories phares en carrousel propre.
23. Ajuster les promos et nouveautés sur mobile.
24. Ajouter des CTA mieux pensés.
25. Ajouter éventuellement une section « producteurs mis en avant ».
26. Ajouter une section « comment ça marche ».
27. Ajouter une section newsletter si utile.

### 4) WooCommerce — boutique

28. Finaliser `woocommerce/archive-product.php`.
29. Ajouter un style propre pour la page boutique.
30. Uniformiser les cartes produit.
31. Corriger définitivement les largeurs de colonnes desktop/tablette/mobile.
32. Gérer les badges promo de façon plus jolie.
33. Gérer les états stock/rupture.
34. Ajouter l'affichage vendeur dans les cartes produit.
35. Ajouter les placeholders produits/catégories si absence d'image.
36. Prévoir des filtres plus tard, sans les coder maintenant.

### 5) Fiches produit

37. Finaliser `woocommerce/single-product.php`.
38. Finaliser `woocommerce/content-single-product.php`.
39. Ajouter le CSS propre de la fiche produit.
40. Corriger proprement la galerie produit.
41. Activer plus tard : zoom WooCommerce, lightbox, slider galerie.
42. Ajouter l'affichage vendeur WCFM sur la fiche produit.
43. Ajouter un bloc « produits du même vendeur ».
44. Ajouter des blocs de confiance.
45. Ajouter une meilleure hiérarchie visuelle prix/bouton panier.
46. Vérifier le rendu mobile complet de la fiche produit.
47. Revoir les miniatures galerie si plusieurs images.
48. Prévoir une vraie gestion des images trop petites.
49. Ajouter des microdonnées SEO produit plus tard si besoin.

### 6) WCFM / marketplace

50. Vérifier le rendu des pages boutique vendeur WCFM.
51. Vérifier le rendu du dashboard vendeur WCFM.
52. Corriger les styles qui débordent ou cassent en mobile.
53. Ajouter un habillage cohérent pour les pages vendeurs.
54. Prévoir une vraie carte vendeur plus tard.
55. Prévoir une page liste des vendeurs.
56. Prévoir un affichage « vendeurs du moment » sur accueil.
57. Vérifier toutes les interactions entre thème et WCFM.

### 7) Blog / contenu

58. Créer une vraie page blog.
59. Créer les styles archive blog.
60. Créer les styles article seul.
61. Uniformiser les extraits.
62. Mieux intégrer les derniers articles dans l'accueil.
63. Prévoir une section conseils/actualités.

### 8) Gutenberg / blocs

64. Finaliser la compatibilité Gutenberg front.
65. Créer des patterns réutilisables :
   - Accueil
   - Bandeau confiance
   - Bloc vidéos
   - CTA boutique
66. Vérifier que les blocs Woo s'intègrent bien visuellement.
67. Éviter les largeurs ridicules en front sur les pages en blocs.

### 9) Design / assets

68. Ajouter proprement les icônes SVG du projet.
69. Ajouter les placeholders SVG.
70. Prévoir plus tard les variantes photoréalistes si souhaitées.
71. Ajouter un `screenshot.png` propre pour le thème.
72. Uniformiser tout le style iconographique.

### 10) Responsive / mobile

73. Tester l'accueil sur smartphone.
74. Tester la boutique sur smartphone.
75. Tester la fiche produit sur smartphone.
76. Tester le menu sur smartphone.
77. Tester le blog sur smartphone.
78. Tester les pages vendeurs WCFM sur smartphone.
79. Corriger tous les dépassements horizontaux restants.
80. Vérifier tailles de boutons et zones cliquables.

### 11) Performance

81. Éviter le CSS redondant entre `style.css` et `main.css`.
82. Réduire les styles inutiles.
83. Prévoir un lazy-loading propre partout.
84. Prévoir l'optimisation future des images.
85. Prévoir une base propre pour cache/minification plus tard.

### 12) GitHub / organisation

86. Continuer à pousser les fichiers proprement sur GitHub.
87. Travailler par lots logiques.
88. Avoir une branche stable si besoin.
89. Éviter les zips comme source de vérité.
90. Documenter chaque étape importante.

### 13) Plus tard, quand la base sera propre

91. Ajouter le carrousel final des catégories.
92. Ajouter les vidéos intégrées.
93. Ajouter les réglages Customizer si besoin.
94. Ajouter une vraie personnalisation des sections de l'accueil.
95. Prévoir une identité plus forte par catégorie.
96. Prévoir une page « À propos ».
97. Prévoir une page « Comment vendre sur le marché ».
98. Prévoir une page « Livraison/retrait ».
99. Prévoir une page « FAQ ».
100. Prévoir un système d'avis mieux habillé.
