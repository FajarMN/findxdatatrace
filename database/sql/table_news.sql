CREATE TABLE news (
	id int NOT NULL,
    title varchar(255) NOT NULL,
    category varchar(255) NOT NULL,
    img TEXT,
    link TEXT,
    created_at DATETIME,
    PRIMARY KEY(id)
);