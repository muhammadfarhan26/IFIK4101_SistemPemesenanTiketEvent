CREATE TABLE Pembayaran (
    id_pembayaran            VARCHAR2(6) NOT NULL,
    status_pembayaran        VARCHAR2(6) NOT NULL,
    harga_tiket              REAL NOT NULL
);

ALTER TABLE Pembayaran ADD CONSTRAINT Pembayaran_pk PRIMARY KEY ( id_pembayaran );

CREATE TABLE user (
    id_user                 VARCHAR2(6) NOT NULL,
    kelamin                 VARCHAR2(10) NOT NULL,
    nama_user               VARCHAR2(25),
    TTL                     VARCHAR2(30) NOT NULL,
    email                   VARCHAR2(30) NOT NULL
);

ALTER TABLE user ADD CONSTRAINT user_pk PRIMARY KEY ( id_user );

CREATE TABLE tiket (
    barcode                VARCHAR2(10) NOT NULL,
    tipe_tiket             VARCHAR2(6) NOT NULL,
    nama_pembeli           VARCHAR2(25) NOT NULL
);

ALTER TABLE user ADD CONSTRAINT user_pk PRIMARY KEY ( barcode );

CREATE TABLE admin (
    id_admin              VARCHAR2(6) NOT NULL,
    password              VARCHAR2(25)
);

ALTER TABLE admin ADD CONSTRAINT admin_pk PRIMARY KEY ( id_admin );

CREATE TABLE bank (
    id_admin_bank         VARCHAR2(6) NOT NULL,
    password              VARCHAR2(25)
);

ALTER TABLE bank ADD CONSTRAINT bank_pk PRIMARY KEY ( id_admin_bank );

INSERT INTO Pembayaran
VALUES("PB1111", "Sukses", 135000);
INSERT INTO user
VALUES("US1111", "Pria", "Farhan", "Jakarta,26 April 1999", "farhan.muhammad@rocketmail.com");
INSERT INTO tiket
VALUES("16DG36374H89", "VVIP", "Farhan");
INSERT INTO admin
VALUES("AD1111", "bebas123");
INSERT INTO bank
VALUES("BN1111", "sabeb123");