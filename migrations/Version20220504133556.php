<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220504133556 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE CLIENT (TEL INT DEFAULT NULL, EMAIL CHAR(32) DEFAULT NULL, RUE CHAR(32) DEFAULT NULL, CP INT DEFAULT NULL, VILLE CHAR(32) DEFAULT NULL, NUMEROCARTEBANCAIRE VARCHAR(16) DEFAULT NULL, DATEEXPIRATION CHAR(5) DEFAULT NULL, CRYTPOGRAMME VARCHAR(3) DEFAULT NULL, ID INT NOT NULL, PRIMARY KEY(ID)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE FORMULE (ID INT AUTO_INCREMENT NOT NULL, LIBELLE CHAR(32) DEFAULT NULL, ID_TARIFICATION INT DEFAULT NULL, discr VARCHAR(255) NOT NULL, INDEX I_FK_FORMULE_TARIFICATION (ID_TARIFICATION), PRIMARY KEY(ID)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE FORMULEAVECCHAUFFEUR (LIEU CHAR(32) DEFAULT NULL, TARIF NUMERIC(10, 2) DEFAULT NULL, ID_LOCATIONAVEC INT DEFAULT NULL, ID INT NOT NULL, INDEX IDX_92CC0F7E1781CD3 (ID_LOCATIONAVEC), PRIMARY KEY(ID)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE FORMULESANSCHAUFFEUR (DUREE TIME DEFAULT NULL, NBKMSINCLUS NUMERIC(10, 2) DEFAULT NULL, ID_LOCATIONSANS INT DEFAULT NULL, ID INT NOT NULL, INDEX IDX_A178D1B9FC42FF9D (ID_LOCATIONSANS), PRIMARY KEY(ID)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE LOCATION (NUMLOCATION INT AUTO_INCREMENT NOT NULL, DATELOCATION DATE DEFAULT NULL, MONTANTREGLE NUMERIC(10, 2) DEFAULT NULL, DATEHREDEPARTPREVU DATETIME DEFAULT NULL, DATEHRERETOURPREVU DATETIME DEFAULT NULL, DATEHREDEPARTREEL DATETIME DEFAULT NULL, DATEHRERETOURREEL DATETIME DEFAULT NULL, ID INT DEFAULT NULL, IMMATRICULATION CHAR(9) DEFAULT NULL, discr VARCHAR(255) NOT NULL, INDEX I_FK_LOCATION_VEHICULE (IMMATRICULATION), INDEX I_FK_LOCATION_CLIENT (ID), PRIMARY KEY(NUMLOCATION)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE LOCATIONAVECCHAUFFEUR (NUMLOCATION INT NOT NULL, PRIMARY KEY(NUMLOCATION)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE LOCATIONSANSCHAUFFEUR (NBKMDEPART NUMERIC(10, 2) DEFAULT NULL, NBKMRETOUR NUMERIC(10, 2) DEFAULT NULL, NUMLOCATION INT NOT NULL, PRIMARY KEY(NUMLOCATION)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE MODELE (ID INT AUTO_INCREMENT NOT NULL, LIBELLE CHAR(32) DEFAULT NULL, IDTARIFICATION INT DEFAULT NULL, INDEX I_FK_MODELE_TARIFICATION (IDTARIFICATION), PRIMARY KEY(ID)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE SALARIE (POSTE CHAR(32) DEFAULT NULL, ID INT NOT NULL, PRIMARY KEY(ID)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE TARIFICATION (ID INT AUTO_INCREMENT NOT NULL, TARIF NUMERIC(10, 2) DEFAULT NULL, PRIMARY KEY(ID)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE USER (ID INT AUTO_INCREMENT NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', NOM CHAR(32) DEFAULT NULL, PRENOM CHAR(32) DEFAULT NULL, LOGIN CHAR(32) DEFAULT NULL, MOTDEPASSE CHAR(255) DEFAULT NULL, discr VARCHAR(255) NOT NULL, PRIMARY KEY(ID)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE VEHICULE (IMMATRICULATION CHAR(9) NOT NULL, IDMODELE INT DEFAULT NULL, INDEX index1 (IDMODELE), PRIMARY KEY(IMMATRICULATION)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE CLIENT ADD CONSTRAINT FK_37BCC3D311D3633A FOREIGN KEY (ID) REFERENCES USER (ID) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE FORMULE ADD CONSTRAINT FK_5F196282F5415232 FOREIGN KEY (ID_TARIFICATION) REFERENCES TARIFICATION (ID)');
        $this->addSql('ALTER TABLE FORMULEAVECCHAUFFEUR ADD CONSTRAINT FK_92CC0F7E1781CD3 FOREIGN KEY (ID_LOCATIONAVEC) REFERENCES LOCATIONAVECCHAUFFEUR (NUMLOCATION)');
        $this->addSql('ALTER TABLE FORMULEAVECCHAUFFEUR ADD CONSTRAINT FK_92CC0F711D3633A FOREIGN KEY (ID) REFERENCES FORMULE (ID) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE FORMULESANSCHAUFFEUR ADD CONSTRAINT FK_A178D1B9FC42FF9D FOREIGN KEY (ID_LOCATIONSANS) REFERENCES LOCATIONSANSCHAUFFEUR (NUMLOCATION)');
        $this->addSql('ALTER TABLE FORMULESANSCHAUFFEUR ADD CONSTRAINT FK_A178D1B911D3633A FOREIGN KEY (ID) REFERENCES FORMULE (ID) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE LOCATION ADD CONSTRAINT FK_98AD158711D3633A FOREIGN KEY (ID) REFERENCES CLIENT (ID)');
        $this->addSql('ALTER TABLE LOCATION ADD CONSTRAINT FK_98AD1587DD9E068D FOREIGN KEY (IMMATRICULATION) REFERENCES VEHICULE (IMMATRICULATION)');
        $this->addSql('ALTER TABLE LOCATIONAVECCHAUFFEUR ADD CONSTRAINT FK_31E0034662D6E0B7 FOREIGN KEY (NUMLOCATION) REFERENCES LOCATION (NUMLOCATION) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE LOCATIONSANSCHAUFFEUR ADD CONSTRAINT FK_99B4120862D6E0B7 FOREIGN KEY (NUMLOCATION) REFERENCES LOCATION (NUMLOCATION) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE MODELE ADD CONSTRAINT FK_E0FA42DEAB942D22 FOREIGN KEY (IDTARIFICATION) REFERENCES TARIFICATION (ID)');
        $this->addSql('ALTER TABLE SALARIE ADD CONSTRAINT FK_BDCBC40011D3633A FOREIGN KEY (ID) REFERENCES USER (ID) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE VEHICULE ADD CONSTRAINT FK_EF1C6351B28CB4B8 FOREIGN KEY (IDMODELE) REFERENCES MODELE (ID)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE LOCATION DROP FOREIGN KEY FK_98AD158711D3633A');
        $this->addSql('ALTER TABLE FORMULEAVECCHAUFFEUR DROP FOREIGN KEY FK_92CC0F711D3633A');
        $this->addSql('ALTER TABLE FORMULESANSCHAUFFEUR DROP FOREIGN KEY FK_A178D1B911D3633A');
        $this->addSql('ALTER TABLE LOCATIONAVECCHAUFFEUR DROP FOREIGN KEY FK_31E0034662D6E0B7');
        $this->addSql('ALTER TABLE LOCATIONSANSCHAUFFEUR DROP FOREIGN KEY FK_99B4120862D6E0B7');
        $this->addSql('ALTER TABLE FORMULEAVECCHAUFFEUR DROP FOREIGN KEY FK_92CC0F7E1781CD3');
        $this->addSql('ALTER TABLE FORMULESANSCHAUFFEUR DROP FOREIGN KEY FK_A178D1B9FC42FF9D');
        $this->addSql('ALTER TABLE VEHICULE DROP FOREIGN KEY FK_EF1C6351B28CB4B8');
        $this->addSql('ALTER TABLE FORMULE DROP FOREIGN KEY FK_5F196282F5415232');
        $this->addSql('ALTER TABLE MODELE DROP FOREIGN KEY FK_E0FA42DEAB942D22');
        $this->addSql('ALTER TABLE CLIENT DROP FOREIGN KEY FK_37BCC3D311D3633A');
        $this->addSql('ALTER TABLE SALARIE DROP FOREIGN KEY FK_BDCBC40011D3633A');
        $this->addSql('ALTER TABLE LOCATION DROP FOREIGN KEY FK_98AD1587DD9E068D');
        $this->addSql('DROP TABLE CLIENT');
        $this->addSql('DROP TABLE FORMULE');
        $this->addSql('DROP TABLE FORMULEAVECCHAUFFEUR');
        $this->addSql('DROP TABLE FORMULESANSCHAUFFEUR');
        $this->addSql('DROP TABLE LOCATION');
        $this->addSql('DROP TABLE LOCATIONAVECCHAUFFEUR');
        $this->addSql('DROP TABLE LOCATIONSANSCHAUFFEUR');
        $this->addSql('DROP TABLE MODELE');
        $this->addSql('DROP TABLE SALARIE');
        $this->addSql('DROP TABLE TARIFICATION');
        $this->addSql('DROP TABLE USER');
        $this->addSql('DROP TABLE VEHICULE');
    }
}
