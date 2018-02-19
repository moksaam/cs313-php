CREATE SCHEMA phpDB;

CREATE TABLE phpDB.user_login (
  id serial NOT NULL UNIQUE PRIMARY KEY,
  user_name varchar (50) NOT NULL,
  user_email varchar (80) NOT NULL,
  user_password varchar (255) NOT NULL,
  user_creation_date date default (now()),
  constraint uq_user_login unique (user_name, user_email)
);
CREATE TABLE phpDB.movies (
  id serial NOT NULL UNIQUE PRIMARY KEY,
  title text NOT NULL,
  director varchar (50) NOT NULL,
  genre varchar (50) NOT NULL,
  year_published INT NOT NULL,
  constraint uq_movies unique (title),
  movie_creation_date date default (now())
);
CREATE TABLE phpDB.books (
  id serial NOT NULL UNIQUE PRIMARY KEY,
  title text NOT NULL,
  author varchar (50) NOT NULL,
  genre varchar (50) NOT NULL,
  year_published INT NOT NULL,
  constraint uq_books unique (title),
  book_creation_date date default (now())
);
CREATE TABLE phpDB.music (
  id serial NOT NULL UNIQUE PRIMARY KEY,
  title text NOT NULL,
  artist varchar (50) NOT NULL,
  genre varchar (50) NOT NULL,
  year_published INT NOT NULL,
  constraint uq_music unique (title),
  music_creation_date date default (now())
);
CREATE TABLE phpDB.tables_list (
  id serial NOT NULL UNIQUE PRIMARY KEY,
  table_name varchar (50) NOT NULL,
  table_list_creation_date date default (now()),
  user_login_id INT constraint fk_user_login references phpDB.user_login (id) NOT NULL,
  constraint uq_tables_list unique (table_name)
);
CREATE TABLE phpDB.mediaInTable (
  id serial NOT NULL UNIQUE PRIMARY KEY, 
  movies_id INT constraint fk_movies references phpDB.movies (id) NOT NULL,
  books_id INT constraint fk_books references phpDB.books (id) NOT NULL,
  music_id INT constraint fk_music references phpDB.music (id) NOT NULL,
  tables_list_id INT constraint fk_tables_list references phpDB.tables_list (id) NOT NULL
);