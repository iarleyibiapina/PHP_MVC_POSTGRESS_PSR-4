CREATE TABLE "user" (
    id SERIAL PRIMARY KEY,
    name VARCHAR(255) NOT NULL
);

select * from "user";

insert into "user" (name) values ('igor');

select * from "user" where id = 1;