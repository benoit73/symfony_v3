<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240109194602 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE absence (id INT AUTO_INCREMENT NOT NULL, id_eleve INT NOT NULL, jour INT NOT NULL, heure INT NOT NULL, id_matiere INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE admin (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE classes (id INT AUTO_INCREMENT NOT NULL, nom_classe VARCHAR(255) NOT NULL, niveau VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cours (id INT AUTO_INCREMENT NOT NULL, duree INT NOT NULL, debut INT NOT NULL, jour INT NOT NULL, edt_id INT NOT NULL, enseignant_id INT NOT NULL, matiere_id INT NOT NULL, eleves VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE eleves (id INT AUTO_INCREMENT NOT NULL, nom_eleve VARCHAR(255) NOT NULL, prenom_eleve VARCHAR(255) NOT NULL, mail_eleve VARCHAR(255) NOT NULL, class_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE enseignant_classe (id INT AUTO_INCREMENT NOT NULL, enseignant_id INT NOT NULL, classe_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE enseignants (id INT AUTO_INCREMENT NOT NULL, nom_enseignant VARCHAR(255) NOT NULL, prenom_enseignant VARCHAR(255) NOT NULL, matiere_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE matieres (id INT AUTO_INCREMENT NOT NULL, nom_matiere VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_eleve (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, is_verified TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_E63FEAFE7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE absence');
        $this->addSql('DROP TABLE admin');
        $this->addSql('DROP TABLE classes');
        $this->addSql('DROP TABLE cours');
        $this->addSql('DROP TABLE eleves');
        $this->addSql('DROP TABLE enseignant_classe');
        $this->addSql('DROP TABLE enseignants');
        $this->addSql('DROP TABLE matieres');
        $this->addSql('DROP TABLE user_eleve');
    }
}
