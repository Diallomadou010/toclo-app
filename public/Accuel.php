
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Inscription et Connexion</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Toclolocation</h1>
            <nav>
                <ul>
                    <li><a href="#client">Client</a></li>
                    <li><a href="#toclo">Toclo</a></li>
                    <li><a href="#connexion">Connexion</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="client" class="auth-section">
        <div class="container">
            <h2>Inscription en tant que Client</h2>
            <form action="#" method="POST">
                <label for="nom_client">Nom :</label>
                <input type="text" id="nom_client" name="nom_client" required>

                <label for="email_client">Email :</label>
                <input type="email" id="email_locataire" name="email_client" required>

                <label for="telephone_client">Téléphone :</label>
                <input type="tel" id="telephone_client" name="telephone_client" required>

                <label for="localite_client">Localité :</label>
                <input type="text" id="localite_locataire" name="localite_client" required>

                <label for="motdepasse_locataire">Mot de passe :</label>
                <input type="password" id="motdepasse_locataire" name="motdepasse_client" required>

                <button type="submit">S'inscrire en tant que Locataire</button>
            </form>
        </div>
    </section>

    <section id="toclo" class="auth-section">
        <div class="container">
            <h2>Inscription en tant que Toclo</h2>
            <form action="#" method="POST">
                <label for="nom_toclo">Nom :</label>
                <input type="text" id="nom_toclo" name="nom_toclo" required>

                <label for="email_toclo">Email :</label>
                <input type="email" id="email_toclo" name="email_toclo" required>

                <label for="telephone_toclo">Téléphone :</label>
                <input type="tel" id="telephone_toclo" name="telephone_toclo" required>

                <label for="localite_toclo">Localité :</label>
                <input type="text" id="localite_toclo" name="localite_toclo" required>

                <label for="motdepasse_toclo">Mot de passe :</label>
                <input type="password" id="motdepasse_toclo" name="motdepasse_toclo" required>

                <button type="submit">S'inscrire en tant que toclo</button>
            </form>
        </div>
    </section>

    <section id="connexion" class="auth-section">
        <div class="container">
            <h2>Connexion</h2>
            <form action="#" method="POST">
                <label for="email_connexion">Email :</label>
                <input type="email" id="email_connexion" name="email_connexion" required>

                <label for="motdepasse_connexion">Mot de passe :</label>
                <input type="password" id="motdepasse_connexion" name="motdepasse_connexion" required>

                <button type="submit">Se connecter</button>
            </form>
        </div>
    </section>

    
</body>
</html>
