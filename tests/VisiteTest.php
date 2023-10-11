<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Tests;

use App\Entity\Visite;
use PHPUnit\Framework\TestCase;

/**
 * Description of VisiteTest
 *
 * @author zmuku
 */
class VisiteTest extends TestCase {
    
    public function testgetDateCreationString() {
        $visite = new Visite();
        $visite->setDatecreation(new \DateTime("2023-10-08"));
        $this->assertEquals("08/10/23", $visite->getDatecreationString());
    }
}
