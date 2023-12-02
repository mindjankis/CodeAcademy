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