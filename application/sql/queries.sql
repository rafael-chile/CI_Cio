-- Get name and last name of children where user.id=X

SELECT alumnos.nombre, alumnos.apellido_pat FROM `alumnos_users` INNER JOIN `users` ON alumnos_users.user_id=users.id INNER JOIN `alumnos` ON alumnos_users.alumno_id=alumnos.id WHERE users.id=10