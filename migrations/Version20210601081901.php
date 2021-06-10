<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210601081901 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE candidate (id INT AUTO_INCREMENT NOT NULL, experience_id_id INT NOT NULL, info_admin_candidat_id_id INT NOT NULL, job_category_id_id INT NOT NULL, user_id_id INT NOT NULL, gender TINYINT(1) NOT NULL, first_name VARCHAR(255) NOT NULL, last_name VARCHAR(255) NOT NULL, adress VARCHAR(255) NOT NULL, country VARCHAR(255) NOT NULL, nationality VARCHAR(255) NOT NULL, passport VARCHAR(255) NOT NULL, cv VARCHAR(255) NOT NULL, profil_picture VARCHAR(255) NOT NULL, current_location VARCHAR(255) NOT NULL, date_of_birth DATE NOT NULL, place_or_birth VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, INDEX IDX_C8B28E441C16E241 (experience_id_id), UNIQUE INDEX UNIQ_C8B28E4435BCF31B (info_admin_candidat_id_id), UNIQUE INDEX UNIQ_C8B28E4450E81DB (job_category_id_id), UNIQUE INDEX UNIQ_C8B28E449D86650F (user_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE candidature (id INT AUTO_INCREMENT NOT NULL, id_offer_id INT NOT NULL, id_candidat_id INT DEFAULT NULL, UNIQUE INDEX UNIQ_E33BD3B831D987B (id_offer_id), UNIQUE INDEX UNIQ_E33BD3B810C22675 (id_candidat_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE client (id INT AUTO_INCREMENT NOT NULL, info_admin_client_id_id INT NOT NULL, society_name VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_C74404557E0F96E5 (info_admin_client_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE experience (id INT AUTO_INCREMENT NOT NULL, experience VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE info_admin_candidat (id INT AUTO_INCREMENT NOT NULL, notes VARCHAR(255) DEFAULT NULL, date_created DATETIME NOT NULL, date_deleted DATETIME DEFAULT NULL, files VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE info_admin_client (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, poste VARCHAR(255) NOT NULL, numero VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, notes VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE job_category (id INT AUTO_INCREMENT NOT NULL, job_category VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE job_offer (id INT AUTO_INCREMENT NOT NULL, client_id_id INT NOT NULL, job_type_id_id INT NOT NULL, job_category_id_id INT NOT NULL, reference VARCHAR(255) NOT NULL, active TINYINT(1) NOT NULL, notes VARCHAR(255) DEFAULT NULL, location VARCHAR(255) DEFAULT NULL, closing_date DATE DEFAULT NULL, salary VARCHAR(255) DEFAULT NULL, date_de_creation DATETIME NOT NULL, INDEX IDX_288A3A4EDC2902E0 (client_id_id), UNIQUE INDEX UNIQ_288A3A4E1B3F89BD (job_type_id_id), UNIQUE INDEX UNIQ_288A3A4E50E81DB (job_category_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE job_type (id INT AUTO_INCREMENT NOT NULL, job_type VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE candidate ADD CONSTRAINT FK_C8B28E441C16E241 FOREIGN KEY (experience_id_id) REFERENCES experience (id)');
        $this->addSql('ALTER TABLE candidate ADD CONSTRAINT FK_C8B28E4435BCF31B FOREIGN KEY (info_admin_candidat_id_id) REFERENCES info_admin_candidat (id)');
        $this->addSql('ALTER TABLE candidate ADD CONSTRAINT FK_C8B28E4450E81DB FOREIGN KEY (job_category_id_id) REFERENCES job_category (id)');
        $this->addSql('ALTER TABLE candidate ADD CONSTRAINT FK_C8B28E449D86650F FOREIGN KEY (user_id_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE candidature ADD CONSTRAINT FK_E33BD3B831D987B FOREIGN KEY (id_offer_id) REFERENCES job_offer (id)');
        $this->addSql('ALTER TABLE candidature ADD CONSTRAINT FK_E33BD3B810C22675 FOREIGN KEY (id_candidat_id) REFERENCES candidate (id)');
        $this->addSql('ALTER TABLE client ADD CONSTRAINT FK_C74404557E0F96E5 FOREIGN KEY (info_admin_client_id_id) REFERENCES info_admin_client (id)');
        $this->addSql('ALTER TABLE job_offer ADD CONSTRAINT FK_288A3A4EDC2902E0 FOREIGN KEY (client_id_id) REFERENCES client (id)');
        $this->addSql('ALTER TABLE job_offer ADD CONSTRAINT FK_288A3A4E1B3F89BD FOREIGN KEY (job_type_id_id) REFERENCES job_type (id)');
        $this->addSql('ALTER TABLE job_offer ADD CONSTRAINT FK_288A3A4E50E81DB FOREIGN KEY (job_category_id_id) REFERENCES job_category (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE candidature DROP FOREIGN KEY FK_E33BD3B810C22675');
        $this->addSql('ALTER TABLE job_offer DROP FOREIGN KEY FK_288A3A4EDC2902E0');
        $this->addSql('ALTER TABLE candidate DROP FOREIGN KEY FK_C8B28E441C16E241');
        $this->addSql('ALTER TABLE candidate DROP FOREIGN KEY FK_C8B28E4435BCF31B');
        $this->addSql('ALTER TABLE client DROP FOREIGN KEY FK_C74404557E0F96E5');
        $this->addSql('ALTER TABLE candidate DROP FOREIGN KEY FK_C8B28E4450E81DB');
        $this->addSql('ALTER TABLE job_offer DROP FOREIGN KEY FK_288A3A4E50E81DB');
        $this->addSql('ALTER TABLE candidature DROP FOREIGN KEY FK_E33BD3B831D987B');
        $this->addSql('ALTER TABLE job_offer DROP FOREIGN KEY FK_288A3A4E1B3F89BD');
        $this->addSql('ALTER TABLE candidate DROP FOREIGN KEY FK_C8B28E449D86650F');
        $this->addSql('DROP TABLE candidate');
        $this->addSql('DROP TABLE candidature');
        $this->addSql('DROP TABLE client');
        $this->addSql('DROP TABLE experience');
        $this->addSql('DROP TABLE info_admin_candidat');
        $this->addSql('DROP TABLE info_admin_client');
        $this->addSql('DROP TABLE job_category');
        $this->addSql('DROP TABLE job_offer');
        $this->addSql('DROP TABLE job_type');
        $this->addSql('DROP TABLE user');
    }
}
