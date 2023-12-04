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