CREATE TABLE users (
   id BIGSERIAL PRIMARY KEY,
   firstname VARCHAR(30) NOT NULL,
   lastname VARCHAR(30) NOT NULL,
   mobile_number VARCHAR(30) NOT NULL,
   id_number VARCHAR(15) NOT NULL UNIQUE,
   address TEXT NOT NULL,
   birthday DATE NULL,
   email VARCHAR(200) NOT NULL UNIQUE, 
   password TEXT NOT NULL,
   status BOOLEAN NOT NULL DEFAULT TRUE, 
   created_at TIMESTAMPTZ NOT NULL DEFAULT now(),
   updated_at TIMESTAMPTZ NOT NULL DEFAULT now(),  
   deleted_at TIMESTAMPTZ NULL
);

INSERT INTO users (
    firstname,
    lastname,
    mobile_number,
    id_number,
    address,
    birthday,
    email,
    password
) 
VALUES (
    'Daniel',
    'Paz',
    '215250322',
    '123456789',
    '123 Main St',
    '1990-01-01',
    'email@gmail.com',
    '1234'
);
