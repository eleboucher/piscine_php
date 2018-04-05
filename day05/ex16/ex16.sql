SELECT COUNT(film.id_film) AS `movies`
FROM `film`, `member_history`
WHERE film.id_film = member_history.id_film
AND (DATE(member_history.date) BETWEEN '2006-10-30' AND '2007-07-27'
OR DATE_FORMAT(member_history.date, '%m-%d') = '12-24');