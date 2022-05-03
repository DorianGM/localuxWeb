<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220503065928 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE CLIENT ADD roles JSON NOT NULL');
        $this->addSql('ALTER TABLE FORMULE CHANGE ID ID INT AUTO_INCREMENT NOT NULL, CHANGE ID_CONCERNER ID_CONCERNER INT DEFAULT NULL');
        $this->addSql('ALTER TABLE LOCATION CHANGE NUMLOCATION NUMLOCATION INT AUTO_INCREMENT NOT NULL, CHANGE IMMATRICULATION IMMATRICULATION CHAR(9) DEFAULT NULL, CHANGE ID ID INT DEFAULT NULL');
        $this->addSql('ALTER TABLE MODELE CHANGE ID ID INT AUTO_INCREMENT NOT NULL, CHANGE ID_PAYER ID_PAYER INT DEFAULT NULL, CHANGE IMMATRICULATION IMMATRICULATION CHAR(9) DEFAULT NULL');
        $this->addSql('ALTER TABLE TARIFICATION CHANGE ID ID INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE USER CHANGE ID ID INT AUTO_INCREMENT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE CLIENT DROP roles');
        $this->addSql('ALTER TABLE FORMULE CHANGE ID ID INT NOT NULL, CHANGE ID_CONCERNER ID_CONCERNER INT NOT NULL');
        $this->addSql('ALTER TABLE LOCATION CHANGE NUMLOCATION NUMLOCATION INT NOT NULL, CHANGE IMMATRICULATION IMMATRICULATION CHAR(9) NOT NULL, CHANGE ID ID INT NOT NULL');
        $this->addSql('ALTER TABLE MODELE CHANGE ID ID INT NOT NULL, CHANGE IMMATRICULATION IMMATRICULATION CHAR(9) NOT NULL, CHANGE ID_PAYER ID_PAYER INT NOT NULL');
        $this->addSql('ALTER TABLE TARIFICATION CHANGE ID ID INT NOT NULL');
        $this->addSql('ALTER TABLE USER CHANGE ID ID INT NOT NULL');
    }
}
