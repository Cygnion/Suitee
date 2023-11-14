DROP TABLE IF EXISTS SU_CATEGORY;

DROP TABLE IF EXISTS SU_CRITIC;

DROP TABLE IF EXISTS SU_PRODUCT;

DROP TABLE IF EXISTS SU_CLIENT;

DROP TABLE IF EXISTS SU_TAG;

DROP TABLE IF EXISTS SU_CARD;

DROP TABLE IF EXISTS SU_CONTENT;

DROP TABLE IF EXISTS SU_DESCRIBE;

# -----------------------------------------------------------------------------
#       TABLE : SU_CATEGORY
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS SU_CATEGORY
 (
   CAT_ID INTEGER NOT NULL AUTO_INCREMENT ,
   PRO_ID INTEGER NOT NULL  ,
   CAT_NAME CHAR(64) NOT NULL  
   , PRIMARY KEY (CAT_ID) 
 );

# -----------------------------------------------------------------------------
#       TABLE : SU_CRITIC
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS SU_CRITIC
 (
   CRI_ID INTEGER NOT NULL AUTO_INCREMENT ,
   PRO_ID INTEGER NOT NULL  ,
   CRI_NOTE SMALLINT NOT NULL  ,
   CRI_SU_CONTENT TEXT NULL  
   , PRIMARY KEY (CRI_ID) 
 );

# -----------------------------------------------------------------------------
#       TABLE : SU_PRODUCT
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS SU_PRODUCT
 (
   PRO_ID INTEGER NOT NULL AUTO_INCREMENT ,
   CLI_ID INTEGER NOT NULL  ,
   PRO_NAME CHAR(248) NOT NULL  ,
   PRO_CREATED DATETIME NOT NULL  ,
   PRO_DESCRIPTION TEXT NOT NULL  ,
   PRO__PRICE REAL(5,2) NOT NULL  
   , PRIMARY KEY (PRO_ID) 
 );

# -----------------------------------------------------------------------------
#       TABLE : SU_CLIENT
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS SU_CLIENT
 (
   CLI_ID INTEGER NOT NULL AUTO_INCREMENT ,
   CLI_USERNAME CHAR(64) NOT NULL  ,
   CLI_NAME CHAR(64) NOT NULL  ,
   CLI_FIRSTNAME CHAR(64) NOT NULL  ,
   CLI_JOINED DATETIME NOT NULL  ,
   CLI_ADDRESS VARCHAR(512) NULL  ,
   CLI_STATUT SMALLINT NOT NULL  
   , PRIMARY KEY (CLI_ID) 
 );

# -----------------------------------------------------------------------------
#       TABLE : SU_TAG
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS SU_TAG
 (
   TA_ID INTEGER NOT NULL AUTO_INCREMENT ,
   TA_SU_CONTENT CHAR(32) NOT NULL  
   , PRIMARY KEY (TA_ID) 
 );

# -----------------------------------------------------------------------------
#       TABLE : SU_CARD
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS SU_CARD
 (
   CAR_ID INTEGER NOT NULL AUTO_INCREMENT ,
   CLI_ID INTEGER NOT NULL  ,
   CAR_CREATED DATETIME NOT NULL  
   , PRIMARY KEY (CAR_ID) 
 );

# -----------------------------------------------------------------------------
#       TABLE : SU_CONTENT
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS SU_CONTENT
 (
   PRO_ID INTEGER NOT NULL AUTO_INCREMENT ,
   CAR_ID INTEGER NOT NULL  
   , PRIMARY KEY (PRO_ID,CAR_ID) 
 );

# -----------------------------------------------------------------------------
#       TABLE : SU_DESCRIBE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS SU_DESCRIBE
 (
   PRO_ID INTEGER NOT NULL AUTO_INCREMENT ,
   TA_ID INTEGER NOT NULL  
   , PRIMARY KEY (PRO_ID,TA_ID) 
 );


# -----------------------------------------------------------------------------
#       CREATION DES REFERENCES DE TABLE
# -----------------------------------------------------------------------------


ALTER TABLE SU_CATEGORY 
  ADD FOREIGN KEY FK_SU_CATEGORY_SU_PRODUCT (PRO_ID)
      REFERENCES SU_PRODUCT (PRO_ID) ;


ALTER TABLE SU_CRITIC 
  ADD FOREIGN KEY FK_SU_CRITIC_SU_PRODUCT (PRO_ID)
      REFERENCES SU_PRODUCT (PRO_ID) ;


ALTER TABLE SU_PRODUCT 
  ADD FOREIGN KEY FK_SU_PRODUCT_SU_CLIENT (CLI_ID)
      REFERENCES SU_CLIENT (CLI_ID) ;


ALTER TABLE SU_CARD 
  ADD FOREIGN KEY FK_SU_CARD_SU_CLIENT (CLI_ID)
      REFERENCES SU_CLIENT (CLI_ID) ;


ALTER TABLE SU_CONTENT 
  ADD FOREIGN KEY FK_SU_CONTENT_SU_PRODUCT (PRO_ID)
      REFERENCES SU_PRODUCT (PRO_ID) ;


ALTER TABLE SU_CONTENT 
  ADD FOREIGN KEY FK_SU_CONTENT_SU_CARD (CAR_ID)
      REFERENCES SU_CARD (CAR_ID) ;


ALTER TABLE SU_DESCRIBE 
  ADD FOREIGN KEY FK_SU_DESCRIBE_SU_PRODUCT (PRO_ID)
      REFERENCES SU_PRODUCT (PRO_ID) ;


ALTER TABLE SU_DESCRIBE 
  ADD FOREIGN KEY FK_SU_DESCRIBE_SU_TAG (TA_ID)
      REFERENCES SU_TAG (TA_ID) ;
