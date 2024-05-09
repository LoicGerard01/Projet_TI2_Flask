import psycopg2

class CategorieDB:
    def __init__(self, dsn):
        self.dsn = dsn

    def get_all_categories(self):
        try:
            conn = psycopg2.connect(dsn=self.dsn)
            cur = conn.cursor()
            cur.execute("SELECT id_categorie, libelle FROM ti_categories")
            categories = cur.fetchall()
            cur.close()
            conn.close()
            return [{'id_categorie': row[0], 'libelle': row[1]} for row in categories]
        except psycopg2.Error as e:
            print("Erreur lors de la récupération des catégories:", e)
            return []