from flask import Flask, render_template
import psycopg2

app = Flask(__name__)

# Configuration de la chaîne de connexion DSN
dsn = "dbname=demo user=anonyme password=anonyme host=localhost port=5432"

@app.route('/')
def accueil():
    try:
        # Établir une connexion à la base de données
        conn = psycopg2.connect(dsn=dsn)
        print("Connexion à la base de données réussie")

        # Exécuter une requête SQL pour récupérer toutes les catégories
        cur = conn.cursor()
        cur.execute("SELECT id_categorie, libelle FROM ti_categorie")
        categories = cur.fetchall()

        # Fermer le curseur et la connexion
        cur.close()
        conn.close()

        # Rendre le template 'accueil.php' avec les catégories récupérées
        return render_template('accueil.php', categories=categories)

    except psycopg2.Error as e:
        print("Erreur lors de la connexion à la base de données:", e)
        return "Erreur lors de la connexion à la base de données"

if __name__ == '__main__':
    app.run(debug=True)
