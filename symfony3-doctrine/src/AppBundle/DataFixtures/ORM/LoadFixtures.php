<?php
/**
 * Created by PhpStorm.
 * User: rodrigoangelo
 * Date: 11/08/16
 * Time: 16:19
 */

namespace AppBundle\DataFixtures\ORM;


use AppBundle\Entity\Task;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Nelmio\Alice\Fixtures;

class LoadFixtures implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
//        $task = new Task();
//        $task->setName("ABC Task");
//        $task->setFinished(false);
//
//        $manager->persist($task);
//        $manager->flush();

        $obj = Fixtures::load(__DIR__."/fixtures.yml",$manager);
    }

}