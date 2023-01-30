<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230113155405 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE figure_project (figure_id INT NOT NULL, project_id INT NOT NULL, INDEX IDX_25EC696C5C011B5 (figure_id), INDEX IDX_25EC696C166D1F9C (project_id), PRIMARY KEY(figure_id, project_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE project (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE figure_project ADD CONSTRAINT FK_25EC696C5C011B5 FOREIGN KEY (figure_id) REFERENCES figure (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE figure_project ADD CONSTRAINT FK_25EC696C166D1F9C FOREIGN KEY (project_id) REFERENCES project (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
            // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE figure_project DROP FOREIGN KEY FK_25EC696C5C011B5');
        $this->addSql('ALTER TABLE figure_project DROP FOREIGN KEY FK_25EC696C166D1F9C');
        $this->addSql('DROP TABLE figure_project');
        $this->addSql('DROP TABLE project');
    }
}
