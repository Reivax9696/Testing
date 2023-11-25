<?php

use PHPUnit\Framework\TestCase;

require_once 'c:\Users\Usuario\Desktop\PHOBasics5\Notas.php';

class NotasTest extends TestCase
{
    public function testPrimeraDivisio()
    {
        $nota = notas(80);
        $this->assertEquals("Primera Divisio<br>", $nota);
    }

    public function testSegonaDivisio()
    {
        $nota = notas(58);
        $this->assertEquals("Segona Divisio<br>", $nota);
    }

    public function testTerceraDivisio()
    {
        $nota = notas(35);
        $this->assertEquals("Tercera Divisio<br>", $nota);
    }

    public function testSuspes()
    {
        $nota = notas(10);
        $this->assertEquals("Suspes<br>", $nota);
    }
    

    public function testNotasTope()
{
        $nota1 = notas(60);
        $this->assertEquals("Primera Divisio<br>", $nota1);

        $nota2 = notas(59);
        $this->assertEquals("Segona Divisio<br>", $nota2);

        $nota3 = notas(45);
        $this->assertEquals("Segona Divisio<br>", $nota3);

        $nota4 = notas(33);
        $this->assertEquals("Tercera Divisio<br>", $nota4);

        
}

    /*public function testDivisio()
{
        $nota = notas(80);
        $this->assertEquals("Primera Divisio<br>", $nota);
        $nota2 = notas(58);
        $this->assertEquals("Segona Divisio<br>", $nota2);
        $nota3 = notas(35);
        $this->assertEquals("Tercera Divisio<br>", $nota3);
        $nota4 = notas(10);
        $this->assertEquals("Suspes<br>", $nota4);
}*/


    public function testNegatiu()
{
        $notas = notas(-10);
        $this->assertEquals("Suspes<br>", $notas);   
}




}
?>
