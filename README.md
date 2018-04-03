Dans ce checkpoint, tu vas devoir créer un début de répertoire de contacts.

**Etapes :**

1 - Pour cela, nous te fournissons un MCD *model.png*, à toi de créer physiquement la base de données correspondante (aucune restriction sur les outils).
La seule contrainte est que la base doit se nommer *checkpoint1*.

2 - Une fois cette base de données créée, tu devras importer dedans le contenu du fichier SQL *data/contact.sql* joint. 
Il contient un minimum de données pour remplir ta base.

3 - Maintenant que ta base est créée et remplie, tu dois créer une page *public/index.php* qui va :

- Se connecter à la base de données via pdo (à modifier en mysqli...)
- Lire le contenu de la base de données
- Afficher toutes les données (contact + civilité) ordonnées par nom croissant dans un tableau HTML

le tableau HTML devra avoir les entêtes suivants : 

- Civilité
- NOM Prénom

4 - La colonne NOM Prénom sera le résultat de l'appel d'une fonction nommée `fullname` et qui devra être créée dans le fichier *src/functions.php*. 
Cette dernière prendra 2 paramètres en entrée (le prénom et le nom) et retournera les deux concaténés avec un espace
pour les séparer (pense au typage). Le nom devra être en majuscule et le prénom uniquement la 1ere lettre en majuscule (utilise des fonctions natives).

5 - Ensuite, il te faudra créer un formulaire élégant permettant de créer un nouveau contact. Le nom des champs de formulaire 
devra correspondre aux noms des champs de base de données.
(on ne s'occupe pas de la modification ni de la suppression) mais tous les champs sont **obligatoires** (tests serveur).

6 - Ta page devra être stylisée un minimum grâce à `Bootstrap` (utilise le CDN pour gagner du temps).

7 - Ton code devra respecter les bonnes pratiques et en l'occurence les PSR-1 et PSR-2 pour la partie PHP.

8 - Ton code devra être pushé sur le repository du projet. Sur une branche portant ton nom et prénom (Elisa_WILD). Pense aux commits **atomiques**.

Bon courage !

test push 
