-- YOU NEED A josh DATABASE

CREATE TABLE category
(
  id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  description VARCHAR(60) NOT NULL
) ENGINE = InnoDB;

CREATE TABLE user
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    fname VARCHAR(100) NOT NULL,
    lname VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(100) NOT NULL,
    user_role CHAR(1) NOT NULL,
    occupation VARCHAR(100),
    linkedin_url VARCHAR(100),
    phone_number VARCHAR(10),
    workplace VARCHAR(100)
) ENGINE = InnoDB;
CREATE UNIQUE INDEX user_email_uindex ON user (email);

CREATE TABLE jobs
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    description VARCHAR(255) NOT NULL,
    video_url VARCHAR(400),
    poster_id INT NOT NULL,
    category_id INT NOT NULL,
    CONSTRAINT jobs_category_id_fk FOREIGN KEY (category_id) REFERENCES category (id) ON UPDATE CASCADE,
    CONSTRAINT jobs_user_id_fk FOREIGN KEY (poster_id) REFERENCES user (id) ON UPDATE CASCADE
) ENGINE = InnoDB;
