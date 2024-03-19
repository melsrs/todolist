CREATE TABLE TD_User(
   TD_id INT,
   TD_email VARCHAR(50),
   TD_prenom VARCHAR(50),
   TD_nom VARCHAR(50),
   TD_mdp VARCHAR(200),
   PRIMARY KEY(TD_id)
);
ALTER TABLE TD_User ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

CREATE TABLE TD_Priority(
   TD_id INT,
   TD_nomPriority VARCHAR(50),
   PRIMARY KEY(TD_id)
);
ALTER TABLE TD_Priority ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

CREATE TABLE TD_Task(
   TD_id INT,
   TD_titre VARCHAR(50),
   TD_description VARCHAR(200),
   TD_date DATE,
   TD_id_1 INT NOT NULL,
   TD_id_2 INT NOT NULL,
   PRIMARY KEY(TD_id),
   FOREIGN KEY(TD_id_1) REFERENCES TD_Priority(TD_id),
   FOREIGN KEY(TD_id_2) REFERENCES TD_User(TD_id)
);
ALTER TABLE TD_Task ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

CREATE TABLE TD_category(
   TD_id INT,
   TD_nomCategory VARCHAR(50),
   PRIMARY KEY(TD_id)
);
ALTER TABLE TD_category ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

