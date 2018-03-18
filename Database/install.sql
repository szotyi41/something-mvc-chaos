CREATE TABLE posts (
  id INTEGER PRIMARY KEY AUTOINCREMENT,
  title varchar(50) not null,
  created date not null,
  modified date,
  tags text
)