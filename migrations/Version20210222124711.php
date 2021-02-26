<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210222124711 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE actividades ADD idus_id INT DEFAULT NULL, ADD idcat_id INT DEFAULT NULL, ADD idactividades INT NOT NULL');
        $this->addSql('ALTER TABLE actividades ADD CONSTRAINT FK_73D548DEC19FE7EB FOREIGN KEY (idus_id) REFERENCES usuarias (id)');
        $this->addSql('ALTER TABLE actividades ADD CONSTRAINT FK_73D548DE821004EF FOREIGN KEY (idcat_id) REFERENCES categorias (id)');
        $this->addSql('CREATE INDEX IDX_73D548DEC19FE7EB ON actividades (idus_id)');
        $this->addSql('CREATE INDEX IDX_73D548DE821004EF ON actividades (idcat_id)');
        $this->addSql('ALTER TABLE categorias ADD idcategorias INT NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE actividades DROP FOREIGN KEY FK_73D548DEC19FE7EB');
        $this->addSql('ALTER TABLE actividades DROP FOREIGN KEY FK_73D548DE821004EF');
        $this->addSql('DROP INDEX IDX_73D548DEC19FE7EB ON actividades');
        $this->addSql('DROP INDEX IDX_73D548DE821004EF ON actividades');
        $this->addSql('ALTER TABLE actividades DROP idus_id, DROP idcat_id, DROP idactividades');
        $this->addSql('ALTER TABLE categorias DROP idcategorias');
    }
}
