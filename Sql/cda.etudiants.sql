--Table Etudiants 

CREATE TABLE user (
id  INT(11) NOT NULL AUTO_INCREMENT,
name  VARCHAR(250)  NOT NULL,
firstname  VARCHAR(250)  NOT NULL,
age DATE DEFAULT NULL,
tel VARCHAR(11) NOT NULL,
email VARCHAR(250) NOT NULL UNIQUE,
pays VARCHAR(250) NOT NULL,
comment TEXT NULL ,
metier VARCHAR(250) NOT NULL,
url VARCHAR(250) NOT NULL,
PRIMARY KEY(id)
);


INSERT  INTO user (name, firstname, age,tel,email,pays,comment,metier,url) VALUES 
('HERNANDEZ','RAUL','1985-07-01','0816095571','concepteur1@gmail.com','france','test comment','dev','https://test.needemand.com/'),
('BRIOIS','JEAN BERNARD','1962-03-26','0716875571','concepteur2@gmail.com','Anglaterre','test comment','dev','https://test.needemand.com/'),
('HERNANDEZ','HENRY','1978-05-26','0786075571','concepteur3@gmail.com','venezuela','test comment','dev','https://test.needemand.com/');
