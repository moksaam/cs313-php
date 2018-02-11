CREATE SCHEMA phpDB;
CREATE TABLE phpDB.login (
  id serial NOT NULL UNIQUE PRIMARY KEY,
  username varchar (50) NOT NULL,
  creation_date date default (now())
);
CREATE TABLE phpDB.movies (
  id serial NOT NULL UNIQUE PRIMARY KEY,
  title text,
  director varchar (50),
  genre varchar (50),
  year_published INT,
  creation_date date default (now())
);
CREATE TABLE phpDB.books (
  id serial NOT NULL UNIQUE PRIMARY KEY,
  title text,
  author varchar (50) NOT NULL,
  genre varchar (50) NOT NULL,
  year_published INT,
  creation_date date default (now())
);
CREATE TABLE phpDB.music (
  id serial NOT NULL UNIQUE PRIMARY KEY,
  title text,
  artist varchar (50) NOT NULL,
  genre varchar (50) NOT NULL,
  year_published INT,
  creation_date date default (now())
);
CREATE TABLE phpDB.tables_list (
  id serial NOT NULL UNIQUE PRIMARY KEY,
  table_name varchar (50) NOT NULL,
  creation_date date default (now())
);