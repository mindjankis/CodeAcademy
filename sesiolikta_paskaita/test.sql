-- Turime lentelę, kuri sukuriama naudojantis šia užklausa:
-- CREATE TABLE car(id int primary key AUTO_INCREMENT, year_made int, model varchar(255), price int);
--
-- Parašykite šias užklausas:
-- 1. Paimti iš lentelės visus įrašus, kur "year_made" yra daugiau nei 2000,
-- įskaitant ir 2000.
-- Į rezultatą įtraukite visus stulpelius. Atsakymą pateikite
-- sekančioje eilutėje.
--
-- 2. Paimti iš lentelės visus įrašus, bet į rezultatą įtraukite tik "model"
-- stulpelį.
--
-- 3. Ištrinkite iš lentelės įrašus, kur "model" yra "Ford Focus".
--
-- 4. Atnaujinkite reikšmes įrašų, kur "id" yra 5. Nauja "year_made"
-- reikšmė - 2021. Kitų stulpelių reikšmės lieka nepakitusios.
--
-- 5. Sukurkite naują lentelę 'car_owner', kuri turėtų 3 stulpelius:
-- - id - int primary key ir auto increment
-- - fullname - varchar(255) not null
-- - car_id - int ir not null. Šis stulpelis turi būti susietas su
-- lentelės 'car' stulpeliu 'id' per foreign key sąsają.
--   Kai ištrinamas įrašas lentelėje 'car', automatiškai turi iššitrinti ir
--   susiję įrašai iš 'car_owner'.
--   susiję įrašai iš 'car_owner'.

--INSERT INTO car (year_made, model, price)VALUES    (2010, 'Toyota Camry', 15000),     (2015, 'Honda Accord', 18000),     (2020, 'Ford Mustang', 30000),     (2018, 'Chevrolet Malibu', 20000),     (2019, 'Nissan Altima', 22000),     (2017, 'BMW 3 Series', 35000),     (2016, 'Mercedes-Benz C-Class', 32000),     (2021, 'Audi A4', 40000),     (2014, 'Hyundai Sonata', 17000),     (2012, 'Kia Optima', 16000),     (2013, 'Lexus IS', 28000),     (2011, 'Subaru Legacy', 19000),     (2022, 'Mazda6', 25000),     (2018, 'Volkswagen Passat', 23000),     (2019, 'Tesla Model 3', 45000),     (2015, 'Volvo S60', 27000),     (2016, 'Acura TLX', 26000),     (2017, 'Infiniti Q50', 29000),     (2013, 'Jaguar XF', 38000),     (2023, 'Porsche 911', 100000);

# CREATE TABLE car(
                      #         id int primary key AUTO_INCREMENT,
                      #         year_made int,
                      #         model varchar(255),
                      #         price int
                          #                  );

# DROP TABLE car;
#
# INSERT INTO car (year_made, model, price)
# VALUES (2010, 'Toyota Camry', 15000),
#       (2015, 'Honda Accord', 18000),
#       (2020, 'Ford Mustang', 30000),
#       (2018, 'Chevrolet Malibu', 20000),
#       (2019, 'Nissan Altima', 22000),
#       (2017, 'BMW 3 Series', 35000),
#       (2016, 'Mercedes-Benz C-Class', 32000),
#       (2021, 'Audi A4', 40000),
#       (2014, 'Hyundai Sonata', 17000),
#       (2012, 'Kia Optima', 16000),
#       (2013, 'Lexus IS', 28000),
#       (2011, 'Subaru Legacy', 19000),
#       (2022, 'Mazda6', 25000),
#       (2018, 'Volkswagen Passat', 23000),
#       (2019, 'Tesla Model 3', 45000),
#       (2015, 'Volvo S60', 27000),
#       (2016, 'Acura TLX', 26000),
#       (2017, 'Infiniti Q50', 29000),
#       (2013, 'Jaguar XF', 38000),
#       (2023, 'Porsche 911', 100000);
#
# SELECT *
             # FROM car
                        # WHERE year_made >= 2000;
#
# SELECT model
             # FROM car
                        # WHERE year_made >= 2000;
#
# DELETE FROM car
                  # WHERE model = 'Ford Focus';
#
# UPDATE car
    # SET  year_made= 2021
      # WHERE id=5;
#
# CREATE TABLE car_owner(
                            #         id INT AUTO_INCREMENT,
                            #         car_id INT NOT NULL,
                            #         fullname VARCHAR(255) NOT NULL,
                            #         PRIMARY KEY (car_id),
                            #         FOREIGN KEY (id) REFERENCES car(id)
                                # );
#
# DROP TABLE car_owner;

# INSERT INTO car_owner (car_id, fullname)
# VALUES (1, 'Test1'),
#        (2, 'Test2'),
#        (3, 'Test3'),
#        (4, 'Test4'),
#        (5, 'Test5'),
#        (6, 'Test6'),
#        (7, 'Test7'),
#        (8, 'Test8');

# SELECT *
               # FROM car ca
        # LEFT JOIN car_owner co ON ca.id = co.car_id;
# START TRANSACTION;
#
DELETE FROM car
WHERE id = 7;
#
DELETE FROM car_owner
WHERE car_id =7;
#
# COMMIT;

CREATE TABLE car_owner (
                           id INT PRIMARY KEY AUTO_INCREMENT,
                           fullname VARCHAR(255) NOT NULL,
                           car_id INT NOT NULL,
                           FOREIGN KEY (car_id) REFERENCES car(id)
                               ON DELETE CASCADE );