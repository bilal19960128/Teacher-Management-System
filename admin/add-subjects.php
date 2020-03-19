SELECT *
FROM new_connection 
where new_connection.toal_load BETWEEN 0 						  AND 15 
AND new_connection.create_date_time 
BETWEEN '2018-02-21 18:10:53' 
AND '2020-02-21 18:10:53'
AND new_connection.status
BETWEEN '8' 
AND '12'
AND new_connection.sub_div 
LIKE '11244%'