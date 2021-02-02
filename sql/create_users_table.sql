CREATE TABLE users (
  idUsers int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
  uidUsers TINYTEXT NOT NULL,
  emailUsers TINYTEXT NOT NULL,
  pwdUsers LONGTEXT NOT NULL
);

INSERT INTO users (uidUsers, emailUsers, pwdUsers)
VALUES (testUser, test@mail.ru, $2y$10$5CqVFQ1EZ3pcVVhqyo8suOjNlcZs8YF.jXJlkBcxtpOXTs.mckNw2);
