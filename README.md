# Site Garage-V-Parrot



## Mode d'emploi 


- Ouvrez votre 'invite des commandes'

- Clonez le dépot  git 
  => git clone https://github.com/slyrj/evalStudiFinale-RIJA.git

![alt text](https://github.com/slyrj/evalStudiFinale-RIJA/blob/main/rdmd_imagesreadme-img/clone.png)

- Ouvrez mysql de votre environnement local
  =>  C:\xampp\mysql\bin>  mysql.exe -u root -p

  ![alt text](https://github.com/slyrj/evalStudiFinale-RIJA/blob/main/rdmd_imagesreadme-img/mysql.png)


  => votre mot de passe
  Crééz la base de données

  => CREATE DATABASE garage DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
     USE garage;

### Méthode 1 : Création manuelle des tables (Site sans données)
- Copiez et collez ces lignes de commande:

CREATE TABLE users (
  id int(11) AUTO_INCREMENT PRIMARY KEY,
  email varchar(180) NOT NULL,
  roles tinyint(1) NOT NULL,
  password varchar(255) NOT NULL,
  name varchar(50) NOT NULL
) ENGINE = InnoDB;
CREATE TABLE cars (
  id int(11) AUTO_INCREMENT PRIMARY KEY,
  users_id int(11) NOT NULL,
  name varchar(50) NOT NULL,
  price decimal(10, 0) NOT NULL,
  image varchar(255) NOT NULL,
  year int(11) NOT NULL,
  mileage int(11) NOT NULL,
  created_at datetime NOT NULL DEFAULT current_timestamp(),
  FOREIGN KEY (users_id) REFERENCES users (id)
) ENGINE = InnoDB;
ALTER TABLE cars
ADD CONSTRAINT cars_users_id_fk FOREIGN KEY (users_id) REFERENCES users (id);
CREATE TABLE car_features (
  id int(11) AUTO_INCREMENT PRIMARY KEY,
  cars_id int(11) NOT NULL,
  name varchar(50) NOT NULL,
  value varchar(50) DEFAULT NULL,
  FOREIGN KEY (cars_id) REFERENCES cars (id)
) ENGINE = InnoDB;
ALTER TABLE car_features
ADD CONSTRAINT car_features_cars_id_fk FOREIGN KEY (cars_id) REFERENCES cars (id);
CREATE TABLE car_images (
  id int(11) AUTO_INCREMENT PRIMARY KEY,
  cars_id int(11) NOT NULL,
  image_url varchar(255) DEFAULT NULL,
  FOREIGN KEY (cars_id) REFERENCES cars (id)
) ENGINE = InnoDB;
ALTER TABLE car_images
ADD CONSTRAINT car_images_cars_id_fk FOREIGN KEY (cars_id) REFERENCES cars (id);
CREATE TABLE contact_forms (
  id int(11) AUTO_INCREMENT PRIMARY KEY,
  cars_id int(11) DEFAULT NULL,
  name varchar(50) NOT NULL,
  email varchar(255) NOT NULL,
  phone_number varchar(20) NOT NULL,
  object varchar(20) NOT NULL,
  content longtext NOT NULL,
  created_at datetime NOT NULL DEFAULT current_timestamp(),
  FOREIGN KEY (cars_id) REFERENCES cars (id)
) ENGINE = InnoDB;
ALTER TABLE contact_forms
ADD CONSTRAINT contact_forms_cars_id_fk FOREIGN KEY (cars_id) REFERENCES cars (id);
CREATE TABLE garages (
  id int(11) AUTO_INCREMENT PRIMARY KEY,
  users_id int(11) NOT NULL,
  name varchar(50) NOT NULL,
  is_opened tinyint(1) NOT NULL,
  FOREIGN KEY (users_id) REFERENCES users (id)
) ENGINE = InnoDB;
ALTER TABLE garages
ADD CONSTRAINT garages_users_id_fk FOREIGN KEY (users_id) REFERENCES users (id);
CREATE TABLE opening_hours (
  id int(11) AUTO_INCREMENT PRIMARY KEY,
  users_id int(11) NOT NULL,
  day varchar(20) NOT NULL,
  opening_time time NOT NULL,
  closing_time time NOT NULL,
  FOREIGN KEY (users_id) REFERENCES users (id)
) ENGINE = InnoDB;
ALTER TABLE opening_hours
ADD CONSTRAINT opening_hours_users_id_fk FOREIGN KEY (users_id) REFERENCES users (id);
CREATE TABLE services (
  id int(11) AUTO_INCREMENT PRIMARY KEY,
  name varchar(50) NOT NULL,
  image varchar(255) NOT NULL
) ENGINE = InnoDB;
CREATE TABLE operations (
  id int(11) AUTO_INCREMENT PRIMARY KEY,
  service_id int(11) NOT NULL,
  name varchar(50) NOT NULL,
  FOREIGN KEY (service_id) REFERENCES services (id)
) ENGINE = InnoDB;
ALTER TABLE operations
ADD CONSTRAINT operations_service_id_fk FOREIGN KEY (service_id) REFERENCES services (id);
CREATE TABLE reviews (
  id int(11) AUTO_INCREMENT PRIMARY KEY,
  users_id int(11) NOT NULL,
  name varchar(50) NOT NULL,
  content longtext NOT NULL,
  rating int(11) NOT NULL,
  created_at datetime NOT NULL DEFAULT current_timestamp(),
  is_published tinyint(1) NOT NULL,
  FOREIGN KEY (users_id) REFERENCES users (id)
) ENGINE = InnoDB;
ALTER TABLE reviews
ADD CONSTRAINT reviews_users_id_fk FOREIGN KEY (users_id) REFERENCES users (id);

   
- Insérez les données par défaut du site

INSERT INTO users (name, email, password, roles)
VALUES (
    'vincent',
    'vparrot@mail.fr',
    '$2y$10$mXFVmz2LeQG7z2re0rMb9.WyDCCginV4Oc7Qa/iG.uf33JRjAAl9q',
    1
  );
INSERT INTO garages (name, is_opened, users_id)
VALUES ('V-Parrot', 1, 1);
INSERT INTO opening_hours (day, opening_time, closing_time, users_id)
VALUES ('Lundi', '08:30:00', '18:30:00', 1),
  ('Mardi', '08:30:00', '18:30:00', 1),
  ('Mercredi', '09:00:00', '19:00:00', 1),
  ('Jeudi', '08:30:00', '18:30:00', 1),
  ('Vendredi', '08:30:00', '18:30:00', 1),
  ('Samedi', '09:30:00', '15:00:00', 1);

### Méthode 2: Création automatique des tables (Site avec des données)

- Après avoir créé la base de données 'garage', fermez mysql 

 => exit

- Uploadez dans votre base de données 'garage' le fichier "garage_backup.sql" qui se trouve dans le dossier sql du dépôt git  

 => mysql -u root -p garage < "le-chemin-versle-fichier"\garage_backup.sql


 - Ouvrez le site  dans votre éditeur de code 

   => sur vscode 

    ![alt text](https://github.com/slyrj/evalStudiFinale-RIJA/blob/main/rdmd_imagesreadme-img/vsc.png)
