<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210611114615 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE candidate DROP FOREIGN KEY FK_C8B28E4450E81DB');
        $this->addSql('ALTER TABLE candidate ADD CONSTRAINT FK_C8B28E4450E81DB FOREIGN KEY (job_category_id_id) REFERENCES job_category (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE job_offer DROP FOREIGN KEY FK_288A3A4EDC2902E0');
        $this->addSql('ALTER TABLE job_offer CHANGE client_id_id client_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE job_offer ADD CONSTRAINT FK_288A3A4EDC2902E0 FOREIGN KEY (client_id_id) REFERENCES client (id) ON DELETE SET NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE candidate DROP FOREIGN KEY FK_C8B28E4450E81DB');
        $this->addSql('ALTER TABLE candidate ADD CONSTRAINT FK_C8B28E4450E81DB FOREIGN KEY (job_category_id_id) REFERENCES job_category (id)');
        $this->addSql('ALTER TABLE job_offer DROP FOREIGN KEY FK_288A3A4EDC2902E0');
        $this->addSql('ALTER TABLE job_offer CHANGE client_id_id client_id_id INT NOT NULL');
        $this->addSql('ALTER TABLE job_offer ADD CONSTRAINT FK_288A3A4EDC2902E0 FOREIGN KEY (client_id_id) REFERENCES client (id)');
    }
}
