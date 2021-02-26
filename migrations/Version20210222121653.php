<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210222121653 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE actividades ADD id INT AUTO_INCREMENT NOT NULL, CHANGE idactividades idactividades INT NOT NULL, CHANGE nombre nombre VARCHAR(255) NOT NULL, CHANGE grupo grupo VARCHAR(255) NOT NULL, CHANGE ubicacion ubicacion VARCHAR(255) NOT NULL, CHANGE categoria categoria VARCHAR(255) NOT NULL, CHANGE descripcion descripcion VARCHAR(500) NOT NULL, CHANGE precio precio INT NOT NULL, DROP PRIMARY KEY, ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE categorias ADD id INT AUTO_INCREMENT NOT NULL, CHANGE idcategorias idcategorias INT NOT NULL, CHANGE nombre nombre VARCHAR(255) NOT NULL, CHANGE tipo tipo VARCHAR(255) NOT NULL, DROP PRIMARY KEY, ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE usuarias ADD id INT AUTO_INCREMENT NOT NULL, DROP idusuarias, CHANGE nombre nombre VARCHAR(255) NOT NULL, CHANGE apellido apellido VARCHAR(255) NOT NULL, CHANGE telefono telefono VARCHAR(255) NOT NULL, CHANGE email email VARCHAR(255) NOT NULL, DROP PRIMARY KEY, ADD PRIMARY KEY (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE actividades MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE actividades DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE actividades DROP id, CHANGE idactividades idactividades INT AUTO_INCREMENT NOT NULL, CHANGE nombre nombre VARCHAR(45) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, CHANGE grupo grupo VARCHAR(45) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, CHANGE ubicacion ubicacion VARCHAR(45) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, CHANGE categoria categoria VARCHAR(45) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, CHANGE descripcion descripcion VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, CHANGE precio precio DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE actividades ADD PRIMARY KEY (idactividades)');
        $this->addSql('ALTER TABLE categorias MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE categorias DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE categorias DROP id, CHANGE idcategorias idcategorias INT AUTO_INCREMENT NOT NULL, CHANGE nombre nombre VARCHAR(45) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, CHANGE tipo tipo VARCHAR(45) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`');
        $this->addSql('ALTER TABLE categorias ADD PRIMARY KEY (idcategorias)');
        $this->addSql('ALTER TABLE usuarias MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE usuarias DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE usuarias ADD idusuarias INT NOT NULL, DROP id, CHANGE nombre nombre VARCHAR(45) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, CHANGE apellido apellido VARCHAR(45) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, CHANGE telefono telefono VARCHAR(45) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, CHANGE email email VARCHAR(45) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`');
        $this->addSql('ALTER TABLE usuarias ADD PRIMARY KEY (idusuarias)');
    }
}
