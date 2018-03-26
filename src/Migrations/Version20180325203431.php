<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180325203431 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE post ADD imagem_id INT DEFAULT NULL, ADD galeria_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE post ADD CONSTRAINT FK_5A8A6C8D64892549 FOREIGN KEY (imagem_id) REFERENCES media__media (id)');
        $this->addSql('ALTER TABLE post ADD CONSTRAINT FK_5A8A6C8DD31019C FOREIGN KEY (galeria_id) REFERENCES media__gallery (id)');
        $this->addSql('CREATE INDEX IDX_5A8A6C8D64892549 ON post (imagem_id)');
        $this->addSql('CREATE INDEX IDX_5A8A6C8DD31019C ON post (galeria_id)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE post DROP FOREIGN KEY FK_5A8A6C8D64892549');
        $this->addSql('ALTER TABLE post DROP FOREIGN KEY FK_5A8A6C8DD31019C');
        $this->addSql('DROP INDEX IDX_5A8A6C8D64892549 ON post');
        $this->addSql('DROP INDEX IDX_5A8A6C8DD31019C ON post');
        $this->addSql('ALTER TABLE post DROP imagem_id, DROP galeria_id');
    }
}
