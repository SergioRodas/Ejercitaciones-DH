SELECT * FROM movies;
SELECT name AS Género, count(title) AS "Cantidad de películas" FROM genres LEFT JOIN movies ON genres.id=genre_id GROUP BY Género;
SELECT name AS Género, min(rating) AS "Rating mas bajo" FROM genres INNER JOIN movies ON genres.id=genre_id GROUP BY Género;
SELECT name AS Género, max(rating) AS "Rating mas alto" FROM genres INNER JOIN movies ON genres.id=genre_id GROUP BY Género;
SELECT name AS Género, AVG(rating) AS "Promedio de ratings" FROM genres INNER JOIN movies ON genres.id=genre_id GROUP BY Género;
SELECT series.title AS Serie, count(number) AS "Cantidad de temporadas" FROM series INNER JOIN seasons ON series.id=serie_id GROUP BY Serie;
SELECT seasons.title AS Temporada, series.title AS Serie, count(episodes.number) episodes FROM seasons INNER JOIN series ON serie_id=series.id INNER JOIN episodes ON seasons.id=season_id GROUP BY Temporada, Serie;
SELECT * FROM actor_episode;
SELECT episodes.id AS id_episodios, seasons.number AS Temporada, series.title AS Serie, genres.name AS Género, count(actor_id) AS "Cantidad de actores" FROM episodes LEFT JOIN seasons ON seasons.id=season_id LEFT JOIN series ON serie_id=series.id LEFT JOIN genres ON genres.id=genre_id LEFT JOIN actor_episode ON episode_id=episodes.id LEFT JOIN actors ON actors.id=actor_id GROUP BY id_episodios, Temporada, Serie, Género;
SELECT genres.name AS Género, count(rating) AS "Cantidad de películas con rating mayor a 5" FROM genres LEFT JOIN movies ON genre_id=genres.id WHERE rating>5 GROUP BY Género; 
SELECT genres.name AS Género, AVG(rating) AS "Promedio de rating" FROM genres LEFT JOIN movies ON genre_id=genres.id WHERE rating>5 GROUP BY Género; 
SELECT series.title AS Serie, count(episodes.id) AS "Cantidad de episodios" FROM series LEFT JOIN seasons ON serie_id=series.id LEFT JOIN episodes ON season_id=seasons.id GROUP BY Serie; 
SELECT series.title AS Serie, count(episodes.id) AS "Cantidad de episodios emitidos en 2016" FROM series LEFT JOIN seasons ON serie_id=series.id LEFT JOIN episodes ON season_id=seasons.id WHERE extract(YEAR FROM episodes.release_date) LIKE '2016' GROUP BY Serie, "Cantidad de episodios emitidos en 2016"; 
SELECT series.title AS Serie, count(episodes.id) AS "Cantidad de episodios emitidos en el año actual" FROM series LEFT JOIN seasons ON serie_id=series.id LEFT JOIN episodes ON season_id=seasons.id WHERE EXTRACT(YEAR FROM episodes.release_date) LIKE YEAR(NOW()) GROUP BY Serie, "Cantidad de episodios emitidos en el año actual"; 

#SEGUNDA PARTE: SUB-QUERIES

SELECT id FROM movies WHERE title LIKE "%T%";
SELECT a.id, a.first_name, a.last_name, (SELECT COUNT(*) FROM actor_movie AS am WHERE am.actor_id = a.id) AS tot_peliculas, (SELECT COUNT(*) FROM actor_episode AS ae WHERE ae.actor_id = a.id) AS tot_episodios FROM actors AS a;
SELECT first_name AS nombre, last_name AS apellido FROM actors WHERE favorite_movie_id IN (SELECT id from movies WHERE title LIKE "%T%"); 
SELECT first_name AS nombre, last_name AS apellido, title AS peliculas FROM actors LEFT JOIN actor_movie ON actors.id=actor_id JOIN movies ON movie_id=movies.id WHERE favorite_movie_id IN (SELECT id FROM movies WHERE title LIKE "%T%"); 
SELECT name AS Género FROM genres WHERE genres.id IN (SELECT DISTINCT genre_id FROM series WHERE YEAR(release_date) >= 2013);
SELECT title AS Películas FROM movies AS m WHERE NOT EXISTS (SELECT favorite_movie_id FROM actors WHERE favorite_movie_id = m.id);  
SELECT name AS genero FROM genres WHERE EXISTS(SELECT genre_id FROM movies WHERE genres.id = genre_id) AND EXISTS(SELECT genre_id FROM series WHERE genres.id = genre_id);
SELECT name AS genero FROM genres WHERE NOT EXISTS(SELECT genre_id FROM series WHERE genres.id = genre_id);
