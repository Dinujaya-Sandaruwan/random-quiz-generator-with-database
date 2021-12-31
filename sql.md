CREATE DATABASE quiz_db;

CREATE TABLE et_quiz (
    ID int NOT NULL AUTO_INCREMENT,
    u_name varchar(75),
    quiz varchar(1500),
    f_ans varchar(300),
    s_ans varchar(300),
    t_ans varchar(300),
    fo_ans varchar(300),
    correct_ans varchar(300),
    s_notes varchar(1500),
    PRIMARY KEY (ID)
);

CREATE TABLE sft_quiz (
    ID int NOT NULL AUTO_INCREMENT,
    u_name varchar(75),
    quiz varchar(1500),
    f_ans varchar(300),
    s_ans varchar(300),
    t_ans varchar(300),
    fo_ans varchar(300),
    correct_ans varchar(300),
    s_notes varchar(1500),
    PRIMARY KEY (ID)
);

CREATE TABLE it_quiz (
    ID int NOT NULL AUTO_INCREMENT,
    u_name varchar(75),
    quiz varchar(1500),
    f_ans varchar(300),
    s_ans varchar(300),
    t_ans varchar(300),
    fo_ans varchar(300),
    correct_ans varchar(300),
    s_notes varchar(1500),
    PRIMARY KEY (ID)
);

CREATE TABLE media_quiz (
    ID int NOT NULL AUTO_INCREMENT,
    u_name varchar(75),
    quiz varchar(1500),
    f_ans varchar(300),
    s_ans varchar(300),
    t_ans varchar(300),
    fo_ans varchar(300),
    correct_ans varchar(300),
    s_notes varchar(1500),
    PRIMARY KEY (ID)
);

CREATE TABLE agri_quiz (
    ID int NOT NULL AUTO_INCREMENT,
    u_name varchar(75),
    quiz varchar(1500),
    f_ans varchar(300),
    s_ans varchar(300),
    t_ans varchar(300),
    fo_ans varchar(300),
    correct_ans varchar(300),
    s_notes varchar(1500),
    PRIMARY KEY (ID)
);

CREATE TABLE bst_quiz (
    ID int NOT NULL AUTO_INCREMENT,
    u_name varchar(75),
    quiz varchar(1500),
    f_ans varchar(300),
    s_ans varchar(300),
    t_ans varchar(300),
    fo_ans varchar(300),
    correct_ans varchar(300),
    s_notes varchar(1500),
    PRIMARY KEY (ID)
);
