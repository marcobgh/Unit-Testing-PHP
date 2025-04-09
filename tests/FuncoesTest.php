<?php
namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Funcoes;

class FuncoesTest extends TestCase {

    public function testIsEvenWithEvenNumber()
    {
        $this->assertTrue(Funcoes::isEven(10));
    }

    public function testIsEvenWithOddNumber()
    {
        $this->assertFalse(Funcoes::isEven(7));
    }

    public function testFactorialWithValidInput()
    {
        $this->assertEquals(120, Funcoes::factorial(5));
    }

    public function testFactorialWithNegativeInput()
    {
        $this->expectException(\InvalidArgumentException::class);
        Funcoes::factorial(-2);
    }

    public function testIsPalindromeWithPalindromeString()
    {
        $this->assertTrue(Funcoes::isPalindrome("Socorram me subi no onibus em marrocos"));
    }

    public function testIsPalindromeWithNonPalindrome()
    {
        $this->assertFalse(Funcoes::isPalindrome("Marco Borghetti"));
    }

    public function testFahrenheitToCelsiusWithValidInput()
    {
        $this->assertEquals(0, Funcoes::fahrenheitToCelsius(32));
    }

    // Fahrenheit converter normalmente não lança exceções,
    // então não tem um teste de "inválido" aqui

    public function testCalculateDiscountWithValidInput()
    {
        $this->assertEquals(90, Funcoes::calculateDiscount(100, 10));
    }

    public function testCalculateDiscountWithNegativePrice()
    {
        $this->expectException(\InvalidArgumentException::class);
        Funcoes::calculateDiscount(-100, 10);
    }

    public function testCalculateDiscountWithNegativePercent()
    {
        $this->expectException(\InvalidArgumentException::class);
        Funcoes::calculateDiscount(100, -10);
    }
}