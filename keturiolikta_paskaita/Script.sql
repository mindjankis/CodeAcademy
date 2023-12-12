# CREATE TABLE todo_database
# (id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
# todo VARCHAR(255) NOT NULL,
# due_date DATETIME NOT NULL,
# created_at DATETIME DEFAULT CURRENT_TIMESTAMP() NOT NULL,
# updated_at DATETIME DEFAULT CURRENT_TIMESTAMP() NOT NULL ON UPDATE CURRENT_TIMESTAMP()
# );

#DROP TABLE todo_database;

# SELECT
#      *
# FROM todo_database;

# SELECT
#     *
# FROM todo_database
# WHERE id=1;

# SELECT
#     *
# FROM todo_database
# WHERE YEAR(due_date)=2023;

# INSERT INTO todo_database (todo, due_date)
#     VALUES
# ('PHP1', '2023-11-30 20:20:20');

# UPDATE todo_database
# SET todo='PHP2'
# WHERE id=5;

# UPDATE todo_database
# SET due_date='2023-11-30 21:21:21'
# WHERE id=4;

# DELETE FROM todo_database
# WHERE id=3;

# INNER JOIN:
# Vartotojas nori, kad įvestos šalies išspausdintų visą reikalingą informaciją apie šalį
# bei apie miestus, kurie priklauso tai šaliai.
# SELECT *
# FROM country co
# INNER JOIN city ci ON co.id = ci.country_id;

# Vartotojas nori, kad įvestos šalies išspausdintų pavadinimą ir miestų pavadinimus.
# SELECT co.name, ci.name
# FROM country co
# INNER JOIN city ci ON co.id = ci.country_id;

# Vartotojas nori, kad įvestos šalies išspausdintų pavadinimą ir miestų pavadinimus,
# bei kurių pavadinimuose būtų “on” raidės.
# SELECT co.name, ci.name
# FROM country co
# INNER JOIN city ci ON co.id = ci.country_id
# WHERE ci.name LIKE '%on%';

# Parašykite tokią užklausą, kuri atspausdintų visą payment informaciją, kuri būtų susijusi per
# customer ir per staff bei kurio customer varda būtų MARY ir darbuotojo vardas - Jon

# SELECT *
# FROM payment pa
# INNER JOIN staff st ON pa.staff_id = st.id
# INNER JOIN customer cu ON pa.customer_id = cu.id
# WHERE cu.first_name = 'MARY' AND st.first_name ='JON';

# LEFT JOIN:
# # Pagal atitinkamą parduotuvės (store) reikėtų, kad surastų atitinkamus darbuotojus,
# # kurie dirba toje parduotuvėje. (atspausdinti visą informaciją)
#
# SELECT *
# FROM store sto
#          LEFT JOIN staff sta ON sto.id = sta.store_id
# WHERE sto.id=1;
#
# # Pagal atitinkamą parduotuvės…..(skaityti aukčiau) atspausdinti tik
# # darbuotojo vardą ir pavardę.
# SELECT sta.first_name, sta.last_name
# FROM store sto
#          LEFT JOIN staff sta ON sto.id = sta.store_id
# WHERE sto.id=1;
#
# # Pagal atitinkamą kalbos informaciją pabandyti surasti tos kalbos filmus,
# # bei atspausdinti tik filmo pavadinimą ir aprašymą
# SELECT fi.title, fi.description, la.id, la.name
# FROM film fi
#          LEFT JOIN language la ON fi.language_id = la.id
# WHERE la.name='Italian';
#
# # Parašykite tokią užklausą kuri atspausdintų visą reikalingą informaciją apie payment’ą
# # kuomet customerio ir staff id yra vienodi. (sutampantys, pvz 1 r 1 ar 2 ir 2)
# SELECT *
# FROM payment pa
#          LEFT JOIN customer cu ON pa.customer_id = cu.id
#          LEFT JOIN staff st ON pa.staff_id = st.id
# WHERE cu.id=st.id;
#
# SELECT *
# FROM payment p
#          LEFT JOIN customer cu ON p.staff_id = cu.id
# WHERE p.customer_id = p.staff_id;
#
# SELECT *
# FROM payment p
# WHERE p.customer_id = p.staff_id;
#
# # RIGHT JOIN:
# # Pagal atitinkamą įvestą adresą turi parodyti visą adreso informaciją ir
# # parduotuvės informaciją.
#
# SELECT *
# FROM store st
#          RIGHT JOIN address ad ON st.address_id = ad.id
# WHERE ad.address='1411 Lillydale Drive';
# # Pagal tai, ką įvedė vartotojas turi atspausdinti visą miestų informaciją ir
# # šalies pavadinimą.
#
# SELECT ci.*, co.name
# FROM city ci
#          RIGHT JOIN country co ON ci.country_id = co.id
# WHERE co.name='Egypt';
#
# # Gaukite visą invetory informaciją pagal tai,
# # kad filmo pavadinimas yra - PATIENT SISTER
# SELECT *
# FROM inventory inv
#          RIGHT JOIN film fi ON inv.film_id=fi.id
# WHERE fi.title='PATIENT SISTER';
#
# # CROSS JOIN:
# # Atspausdinti visą payment informaciją, kuri būtų susijusi su
# # klientu (jo id ir darbuotojo id).
#
# SELECT *
# FROM payment pa
#          CROSS JOIN customer cu ON pa.customer_id = cu.id
#          CROSS JOIN staff st ON pa.staff_id = st.id;
#
# # GROUP BY:
# # Sugrupuokite visus aktorius pagal vardą (first_name).
#
# SELECT COUNT(*) as actor_count, first_name
# FROM actor
# GROUP BY first_name;
#
# # Sugrupuokite visus filmus, kurių kalba yra JAPANSE bei rental_duration
# # yra lygus 4, grupuoti pagal filmo trukmę (length).
#
# SELECT f.length, COUNT(*) AS film_count
# FROM film f
#          JOIN language l ON f.language_id = l.id
# WHERE l.name = 'Japanese' AND f.rental_duration = 4
# GROUP BY f.length;
#
# SELECT *
# FROM film
#          JOIN language l ON film.language_id = l.id
# WHERE l.name = 'JAPANESE' AND rental_duration = 4
# GROUP BY length;
#
# SELECT *
# FROM film fi
# JOIN language la ON fi.language_id = la.id
# WHERE la.name = 'JAPANESE' AND fi.rental_duration = 4
# GROUP BY fi.length;