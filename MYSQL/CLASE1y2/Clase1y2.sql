/*SELECT * from actors WHERE rating>9;*/ 
SELECT * from movies;
SELECT * from actors;
SELECT title from movies;
SELECT first_name, last_name from actors;
SELECT * from movies WHERE release_date>'2000-12-31'; 
SELECT * from movies WHERE release_date>='2000-01-01' and release_date<='2010-12-31'; 
SELECT * from movies WHERE title LIKE 'Toy Story';
SELECT * from actors WHERE first_name LIKE 'Mark';
SELECT * from actors WHERE first_name != 'Mark';
SELECT * from actors WHERE first_name LIKE 'Mark' OR first_name LIKE 'Sam';
SELECT * from movies WHERE (release_date<'2000-01-01' or release_date>'2009-12-31') and id > 10; 
SELECT * from actors order by first_name asc;
SELECT * from actors order by first_name asc, last_name asc;
SELECT * from movies order by release_date asc;
SELECT * from movies WHERE release_date>='2000-01-01' order by title asc;
SELECT * from movies LIMIT 5;
SELECT * from movies WHERE release_date>='2000-01-01' LIMIT 3;
SELECT * from movies WHERE release_date>='2000-01-01' order by title asc LIMIT 3;
SELECT * from actors LIMIT 1;
SELECT * from movies order by id desc LIMIT 1;
SELECT * from movies WHERE title LIKE "Harry%";
# % --> Cualquier caracter, cualquier cantidad. '_' -->Cualquier caracter, uno solo.
SELECT * from movies WHERE release_date BETWEEN '1999-10-01' and '2004-12-31' order by release_date asc;
SELECT * from movies WHERE length between 45 and 150 order by length asc; 
SELECT * from actors where first_name between "HE%" and "TO%" order by first_name;  
SELECT * from movies WHERE title like "T%" order by title;
SELECT * from movies WHERE title like "T%C" order by title;
SELECT * from movies WHERE release_date between '2000-01-01' and '2000-12-31' order by title;
SELECT * from movies WHERE title like '%-%' order by title;
SELECT * from movies WHERE release_date like '%-10-%' or release_date like '1999-%' order by release_date, title desc;
SELECT * from actors WHERE first_name like 'J____Y' order by first_name;
SELECT * from actors WHERE first_name like '%AM' order by last_name desc, first_name desc;
SELECT * from movies WHERE title like '% y %' and title like '%la%';
SELECT * from actors WHERE (last_name like '%DE%' or last_name like '%ll%') and first_name like '%A%' order by first_name;
SELECT * from movies WHERE (title like '%Toy Story%' or title like '%Harry Potter%') and length = 120 order by title asc, length desc; 
SELECT * from movies WHERE rating in (8.3, 9.1, 9.0) order by rating;
SELECT * from movies WHERE awards in (2, 5, 7) order by awards desc;
SELECT * from movies WHERE length not like 0 order by length asc;
SELECT * from movies WHERE release_date not like '%-07-%' order by release_date;
SELECT * from actors WHERE last_name not like '%k%' order by first_name;
SELECT * from movies WHERE length not like 120 and length not like 150 order by title asc;
SELECT concat(title, '(', year(release_date),')') from movies;
SELECT title as 'Titulo de la pelicula' from movies order by title;
SELECT id as id_genero from movies;
SELECT name as nombre_genero from genres order by nombre_genero asc;
SET sql_mode=PIPES_AS_CONCAT;
SELECT "Actor:"||first_name||" "||last_name as actor from actors order by actor;
SELECT t1.title as Película,t2.name as Género from movies as t1, genres as t2 where t1.genre_id=t2.id order by title asc;
SELECT title as Película, first_name as "Nombre del actor" from movies, actors, actor_movie where movies.id=movie_id and actors.id=actor_id order by Película, first_name;
SELECT t1.first_name as Nombre, t1.last_name as Apellido, t2.title as "Películas a las que perteneció" from actors as t1, movies as t2, actor_movie as t3 where t1.id=t3.actor_id and t2.id=t3.movie_id;
SELECT title as Película, name as Género from movies left join genres on genres.id=genre_id order by Película;
SELECT title as Película, first_name as "Nombre del actor" from movies left join actor_movie on movies.id=movie_id inner join actors on actor_id=actors.id order by title, first_name;
SELECT first_name as Nombre, last_name as Apellido, title as "Películas a las que perteneció" from actors left join actor_movie on actors.id=actor_id inner join movies on movie_id=movies.id;
SELECT name as Género, title as Película from genres left join movies on genre_id=genres.id order by name desc;
SELECT title as Película, name as Género, first_name as Nombre, last_name as Apellido from movies left join genres on genre_id=genres.id left join actor_movie on movies.id=movie_id inner join actors on actor_id=actors.id;
SELECT title as Película, name as Género from movies inner join genres on genre_id=genres.id order by Género, Película;
SELECT first_name as "Nombre del actor", title as "Películas en las que participó" from actors left join actor_movie on actors.id=actor_id inner join movies on movie_id=movies.id order by first_name;






