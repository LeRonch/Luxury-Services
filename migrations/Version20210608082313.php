<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210608082313 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE candidate CHANGE experience_id_id experience_id_id INT NOT NULL, CHANGE info_admin_candidat_id_id info_admin_candidat_id_id INT NOT NULL, CHANGE job_category_id_id job_category_id_id INT NOT NULL, CHANGE gender gender VARCHAR(255) NOT NULL, CHANGE first_name first_name VARCHAR(255) NOT NULL, CHANGE last_name last_name VARCHAR(255) NOT NULL, CHANGE adress adress VARCHAR(255) NOT NULL, CHANGE country country VARCHAR(255) NOT NULL, CHANGE nationality nationality VARCHAR(255) NOT NULL, CHANGE passport passport VARCHAR(255) NOT NULL, CHANGE cv cv VARCHAR(255) NOT NULL, CHANGE profil_picture profil_picture VARCHAR(255) NOT NULL, CHANGE current_location current_location VARCHAR(255) NOT NULL, CHANGE date_of_birth date_of_birth DATE NOT NULL, CHANGE place_or_birth place_or_birth VARCHAR(255) NOT NULL, CHANGE description description VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE user ADD candidate_id_id INT NOT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D64947A475AB FOREIGN KEY (candidate_id_id) REFERENCES candidate (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D64947A475AB ON user (candidate_id_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE candidate CHANGE experience_id_id experience_id_id INT DEFAULT NULL, CHANGE info_admin_candidat_id_id info_admin_candidat_id_id INT DEFAULT NULL, CHANGE job_category_id_id job_category_id_id INT DEFAULT NULL, CHANGE gender gender VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE first_name first_name VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE last_name last_name VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE adress adress VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE country country VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE nationality nationality VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE passport passport VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE cv cv VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE profil_picture profil_picture VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE current_location current_location VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE date_of_birth date_of_birth DATE DEFAULT NULL, CHANGE place_or_birth place_or_birth VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE description description VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D64947A475AB');
        $this->addSql('DROP INDEX UNIQ_8D93D64947A475AB ON user');
        $this->addSql('ALTER TABLE user DROP candidate_id_id');
    }
}
