<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;
use \App\Entity\Actividades;
use \App\Entity\Categorias;
use \App\Entity\Usuarias;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 20; $i++)
        {
            $actFaker = Faker\Factory::create();
            
            $categoria = new Categorias();
            $categoria->setNombre("Categoria_$i");
            $categoria->setTipo("Tipo_$i");
            $manager->persist($categoria);
            
            $usuaria = new Usuarias();
            $usuaria->setNombre("Usuaria_$i");
            $usuaria->setApellido("Apellido_$i");
            $usuaria->setEmail("EMAIL_$i");
            $usuaria->setTelefono("$i");
            $manager->persist($usuaria);
            
            $actividad = new Actividades();
            $actividad->setNombre("Actividad_$i");
            $actividad->setGrupo("Grupo_$i");
            $actividad->setFoto("http://****");
            $actividad->setPrecio($i);
            $actividad->setUbicacion("Ubicacion_$i");
            $actividad->setDescripcion("Descripcion_$i");
            $actividad->setFecha(new \DateTime("2021-02-02"));
            $actividad->setIdcat($categoria);
            $actividad->setIdus($usuaria);
            $manager->persist($actividad);
        }
        // $product = new Product();
        // $manager->persist($product);
        $manager->flush();
    }
}
