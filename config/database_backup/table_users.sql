CREATE TABLE users(
	id BIGSERIAL PRIMARY KEY,
	firstname varchar(30) NOT NULL,
	lastname VARCHAR(30) NOT NULL,
	mobile_numbre VARCHAR(20) NOT NULL,
	ide_number VARCHAR(15) NULL UNIQUE,
	adress TEXT NULL,
	birthday DATE NULL,
	email VARCHAR(200) NOT NULL UNIQUE,
	password TEXT NOT NULL,
	status BOOLEAN NOT NULL DEFAULT TRUE,
	created_at TIMESTAMPTZ NOT NULL DEFAULT now(),
	updated_at TIMESTAMPTZ NOT NULL DEFAULT now(),
	deleted_at TIMESTAMPTZ NULL
);

INSERT INTO users(
	firstname,
	lastname,
	mobile_numbre,
	email,
	password
 )
VALUES(
	'Luna',
	'Ortiz',
	'37632184',
	'luna@gmail.com',
	'13232'
);