SELECT * FROM movies;
INSERT into movies (id, title, rating, release_date, length) VALUE (NULL, 'Joker', 9.5, '2019-10-03', 122), (NULL, 'Million Dollar Baby', 9.2, '2005-02-10', 137),  (NULL, 'Inception', 9.7, '2010-07-26', 150), (NULL, 'The Day After Tomorrow', 6.5, '2004-05-27', 122), (NULL, 'Shutter Island', 8.5, '2010-02-18', 122);  
SELECT * FROM movies;
INSERT into actors (id, first_name, last_name, rating) VALUE (NULL, 'Paul', 'Walker', 7.0), (NULL, 'Ester', 'Exposito', 8.0), (NULL, 'Eliza', 'Taylor', 9.0), (NULL, 'Lindsey', 'Morgan', 7.5), (NULL, 'Alycia', 'Debnam-Carey', 8.5);  
INSERT into actors (id, first_name, last_name) VALUE (NULL, 'Emma', 'Mackey'), (NULL, 'Bob', 'Morley'), (NULL, 'Marie', 'Avgeropoulos'), (NULL, 'Richard', 'Harmon'), (NULL, 'Paige', 'Turco');  
SELECT * FROM actors;
INSERT into actors (id, first_name) VALUE (NULL, 'Sergio'), (NULL, 'Axel'), (NULL, 'Lionel'), (NULL, 'Vadym'), (NULL, 'Federico');
SELECT * FROM actor_movie;
INSERT into actor_movie (actor_id, movie_id) VALUE (51, 24);
UPDATE actor_movie SET id = 44 WHERE actor_id = 51;
SET SQL_SAFE_UPDATES = 0;
UPDATE movies SET awards = NULL;  
SELECT * from movies;
UPDATE movies SET awards = 2 WHERE extract(YEAR FROM release_date) LIKE '2001'; 
UPDATE movies SET id = 25 WHERE title = 'Shutter Island';
SELECT * FROM genres;
INSERT into genres (name, ranking) VALUE ('Historia', 13), ('Belicas', 14), ('Mudas', 15), ('Blanco y negro', 16), ('Orientales', 17), ('Adultos', 18), ('Artes marciales', 19), ('Surrealismo', 20), ('Policíaco', 21), ('Melodrama', 22);  
UPDATE genres SET active = 0;
UPDATE genres SET active = 1 WHERE ranking >= 1 AND ranking < 6;
SELECT * FROM actor_movie;
DELETE FROM actor_movie WHERE movie_id = 7;
DELETE FROM movies WHERE rating < 1;

