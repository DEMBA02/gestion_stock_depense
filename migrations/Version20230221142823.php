<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230221142823 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE abonnement (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) NOT NULL, montant DOUBLE PRECISION NOT NULL, debut DATETIME NOT NULL, mode_paiement VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `admin` (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, date_naiss DATETIME NOT NULL, nom_complet VARCHAR(255) DEFAULT NULL, nationnalite VARCHAR(255) DEFAULT NULL, genre VARCHAR(255) DEFAULT NULL, numero VARCHAR(255) DEFAULT NULL, situation VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_880E0D76E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE alimentaire (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) DEFAULT NULL, pu DOUBLE PRECISION NOT NULL, qte INT NOT NULL, date DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE beaute (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) DEFAULT NULL, pu DOUBLE PRECISION NOT NULL, qte INT NOT NULL, date DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE boisson (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) DEFAULT NULL, qte INT NOT NULL, pu DOUBLE PRECISION NOT NULL, montant DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contenu (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) DEFAULT NULL, contenu VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE courses (id INT AUTO_INCREMENT NOT NULL, particulier_id INT DEFAULT NULL, libelle VARCHAR(255) DEFAULT NULL, pu DOUBLE PRECISION NOT NULL, qte INT NOT NULL, date DATETIME NOT NULL, INDEX IDX_A9A55A4CA89E0E67 (particulier_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE couture_mode (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) DEFAULT NULL, pu DOUBLE PRECISION NOT NULL, qte INT NOT NULL, date DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE dessert (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) DEFAULT NULL, qte INT NOT NULL, pu DOUBLE PRECISION NOT NULL, montant DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE eau (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) NOT NULL, montant DOUBLE PRECISION NOT NULL, debut DATETIME NOT NULL, mode_paiement VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE electricite (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) NOT NULL, montant DOUBLE PRECISION NOT NULL, debut DATETIME NOT NULL, mode_paiement VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE epice (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) DEFAULT NULL, qte INT NOT NULL, pu DOUBLE PRECISION NOT NULL, montant DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE etablissement (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) DEFAULT NULL, localisation VARCHAR(255) DEFAULT NULL, logo LONGBLOB DEFAULT NULL, type VARCHAR(255) DEFAULT NULL, numero VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE etablissement_produit (etablissement_id INT NOT NULL, produit_id INT NOT NULL, INDEX IDX_2DB4F3E4FF631228 (etablissement_id), INDEX IDX_2DB4F3E4F347EFB (produit_id), PRIMARY KEY(etablissement_id, produit_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE gestionnaire (id INT AUTO_INCREMENT NOT NULL, etablissement_id INT DEFAULT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, date_naiss DATETIME NOT NULL, nom_complet VARCHAR(255) DEFAULT NULL, nationnalite VARCHAR(255) DEFAULT NULL, genre VARCHAR(255) DEFAULT NULL, numero VARCHAR(255) DEFAULT NULL, situation VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_F4461B20E7927C74 (email), INDEX IDX_F4461B20FF631228 (etablissement_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE historique (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) DEFAULT NULL, contenu VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE loyer (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) NOT NULL, montant DOUBLE PRECISION NOT NULL, debut DATETIME NOT NULL, mode_paiement VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE musique (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) NOT NULL, montant DOUBLE PRECISION NOT NULL, debut DATETIME NOT NULL, mode_paiement VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE notification (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) DEFAULT NULL, debut DATETIME DEFAULT NULL, fin DATETIME DEFAULT NULL, contenu VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE particulier (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, date_naiss DATETIME NOT NULL, nom_complet VARCHAR(255) DEFAULT NULL, nationnalite VARCHAR(255) DEFAULT NULL, genre VARCHAR(255) DEFAULT NULL, numero VARCHAR(255) DEFAULT NULL, situation VARCHAR(255) DEFAULT NULL, salaire DOUBLE PRECISION NOT NULL, UNIQUE INDEX UNIQ_6CC4D4F3E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE particulier_abonnement (particulier_id INT NOT NULL, abonnement_id INT NOT NULL, INDEX IDX_72ED512DA89E0E67 (particulier_id), INDEX IDX_72ED512DF1D74413 (abonnement_id), PRIMARY KEY(particulier_id, abonnement_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pdf (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) DEFAULT NULL, contenu VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pharmacie (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) DEFAULT NULL, localisation VARCHAR(255) DEFAULT NULL, logo LONGBLOB DEFAULT NULL, type VARCHAR(255) DEFAULT NULL, numero VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE produit (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) DEFAULT NULL, qte INT NOT NULL, pu DOUBLE PRECISION NOT NULL, montant DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE repas (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) DEFAULT NULL, qte INT NOT NULL, pu DOUBLE PRECISION NOT NULL, montant DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE restaurant (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) DEFAULT NULL, localisation VARCHAR(255) DEFAULT NULL, logo LONGBLOB DEFAULT NULL, type VARCHAR(255) DEFAULT NULL, numero VARCHAR(255) DEFAULT NULL, specialite VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE soin (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) DEFAULT NULL, pu DOUBLE PRECISION NOT NULL, qte INT NOT NULL, date DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tv (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) NOT NULL, montant DOUBLE PRECISION NOT NULL, debut DATETIME NOT NULL, mode_paiement VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateur (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, date_naiss DATETIME NOT NULL, nom_complet VARCHAR(255) DEFAULT NULL, nationnalite VARCHAR(255) DEFAULT NULL, genre VARCHAR(255) DEFAULT NULL, numero VARCHAR(255) DEFAULT NULL, situation VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_1D1C63B3E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE wifi (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) NOT NULL, montant DOUBLE PRECISION NOT NULL, debut DATETIME NOT NULL, mode_paiement VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE courses ADD CONSTRAINT FK_A9A55A4CA89E0E67 FOREIGN KEY (particulier_id) REFERENCES particulier (id)');
        $this->addSql('ALTER TABLE etablissement_produit ADD CONSTRAINT FK_2DB4F3E4FF631228 FOREIGN KEY (etablissement_id) REFERENCES etablissement (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE etablissement_produit ADD CONSTRAINT FK_2DB4F3E4F347EFB FOREIGN KEY (produit_id) REFERENCES produit (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE gestionnaire ADD CONSTRAINT FK_F4461B20FF631228 FOREIGN KEY (etablissement_id) REFERENCES etablissement (id)');
        $this->addSql('ALTER TABLE particulier_abonnement ADD CONSTRAINT FK_72ED512DA89E0E67 FOREIGN KEY (particulier_id) REFERENCES particulier (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE particulier_abonnement ADD CONSTRAINT FK_72ED512DF1D74413 FOREIGN KEY (abonnement_id) REFERENCES abonnement (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE courses DROP FOREIGN KEY FK_A9A55A4CA89E0E67');
        $this->addSql('ALTER TABLE etablissement_produit DROP FOREIGN KEY FK_2DB4F3E4FF631228');
        $this->addSql('ALTER TABLE etablissement_produit DROP FOREIGN KEY FK_2DB4F3E4F347EFB');
        $this->addSql('ALTER TABLE gestionnaire DROP FOREIGN KEY FK_F4461B20FF631228');
        $this->addSql('ALTER TABLE particulier_abonnement DROP FOREIGN KEY FK_72ED512DA89E0E67');
        $this->addSql('ALTER TABLE particulier_abonnement DROP FOREIGN KEY FK_72ED512DF1D74413');
        $this->addSql('DROP TABLE abonnement');
        $this->addSql('DROP TABLE `admin`');
        $this->addSql('DROP TABLE alimentaire');
        $this->addSql('DROP TABLE beaute');
        $this->addSql('DROP TABLE boisson');
        $this->addSql('DROP TABLE contenu');
        $this->addSql('DROP TABLE courses');
        $this->addSql('DROP TABLE couture_mode');
        $this->addSql('DROP TABLE dessert');
        $this->addSql('DROP TABLE eau');
        $this->addSql('DROP TABLE electricite');
        $this->addSql('DROP TABLE epice');
        $this->addSql('DROP TABLE etablissement');
        $this->addSql('DROP TABLE etablissement_produit');
        $this->addSql('DROP TABLE gestionnaire');
        $this->addSql('DROP TABLE historique');
        $this->addSql('DROP TABLE loyer');
        $this->addSql('DROP TABLE musique');
        $this->addSql('DROP TABLE notification');
        $this->addSql('DROP TABLE particulier');
        $this->addSql('DROP TABLE particulier_abonnement');
        $this->addSql('DROP TABLE pdf');
        $this->addSql('DROP TABLE pharmacie');
        $this->addSql('DROP TABLE produit');
        $this->addSql('DROP TABLE repas');
        $this->addSql('DROP TABLE restaurant');
        $this->addSql('DROP TABLE soin');
        $this->addSql('DROP TABLE tv');
        $this->addSql('DROP TABLE utilisateur');
        $this->addSql('DROP TABLE wifi');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
