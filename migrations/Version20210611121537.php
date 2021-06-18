<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210611121537 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE candidature DROP FOREIGN KEY FK_E33BD3B810C22675');
        $this->addSql('ALTER TABLE candidature ADD CONSTRAINT FK_E33BD3B810C22675 FOREIGN KEY (id_candidat_id) REFERENCES candidate (id) ON DELETE SET NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE candidature DROP FOREIGN KEY FK_E33BD3B810C22675');
        $this->addSql('ALTER TABLE candidature ADD CONSTRAINT FK_E33BD3B810C22675 FOREIGN KEY (id_candidat_id) REFERENCES candidate (id)');
    }
}
