<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class RegexTest extends TestCase
{
    public function testEx1(): void
    {
        $regex = Regex::ex1();
        $this->assertMatchesRegularExpression($regex, 'toto');
        $this->assertMatchesRegularExpression($regex, 'stotos');
        $this->assertMatchesRegularExpression($regex, 'totototo');
        $this->assertDoesNotMatchRegularExpression($regex, 'troto');
    }

    public function testEx2(): void
    {
        $regex = Regex::ex2();
        $this->assertDoesNotMatchRegularExpression($regex, '');
        $this->assertMatchesRegularExpression($regex, 'a');
        $this->assertMatchesRegularExpression($regex, 'abc');
        $this->assertDoesNotMatchRegularExpression($regex, ' a');
    }

    public function testEx3(): void
    {
        $regex = Regex::ex3();
        $this->assertDoesNotMatchRegularExpression($regex, '');
        $this->assertMatchesRegularExpression($regex, 'a');
        $this->assertMatchesRegularExpression($regex, 'socket');
        $this->assertMatchesRegularExpression($regex, 'nymph');
        $this->assertMatchesRegularExpression($regex, 'ri');
        $this->assertMatchesRegularExpression($regex, 'oh');
        $this->assertMatchesRegularExpression($regex, 'numb');
        $this->assertDoesNotMatchRegularExpression($regex, 'bz');
    }

    public function testEx4(): void
    {
        $regex = Regex::ex4();
        $this->assertDoesNotMatchRegularExpression($regex, '');
        $this->assertMatchesRegularExpression($regex, 'a4');
        $this->assertMatchesRegularExpression($regex, 'b13d5');
        $this->assertMatchesRegularExpression($regex, 'c6');
        $this->assertDoesNotMatchRegularExpression($regex, 'bz');
        $this->assertDoesNotMatchRegularExpression($regex, 'a40');
        $this->assertDoesNotMatchRegularExpression($regex, '5c7');
    }

    public function testEx5(): void
    {
        $regex = Regex::ex5();
        $this->assertMatchesRegularExpression($regex, '1');
        $this->assertMatchesRegularExpression($regex, '37');
        $this->assertMatchesRegularExpression($regex, '123456');
        $this->assertDoesNotMatchRegularExpression($regex, '');
        $this->assertDoesNotMatchRegularExpression($regex, 'a');
        $this->assertDoesNotMatchRegularExpression($regex, 'b5');
        $this->assertDoesNotMatchRegularExpression($regex, '3.5');
    }

    public function testEx6(): void
    {
        $regex = Regex::ex6();
        $this->assertMatchesRegularExpression($regex, 'abcd');
        $this->assertDoesNotMatchRegularExpression($regex, 'babcd');
        $this->assertDoesNotMatchRegularExpression($regex, 'abd');
        $this->assertDoesNotMatchRegularExpression($regex, 'a12d');
        $this->assertDoesNotMatchRegularExpression($regex, 'abçd');
    }

    public function testEx7(): void
    {
        $regex = Regex::ex7();
        $this->assertMatchesRegularExpression($regex, '0');
        $this->assertMatchesRegularExpression($regex, '2');
        $this->assertMatchesRegularExpression($regex, '14');
        $this->assertMatchesRegularExpression($regex, '36');
        $this->assertMatchesRegularExpression($regex, '12358298');
        $this->assertMatchesRegularExpression($regex, '400');
        $this->assertDoesNotMatchRegularExpression($regex, '3');
        $this->assertDoesNotMatchRegularExpression($regex, '42.24');
        $this->assertDoesNotMatchRegularExpression($regex, '42,0');
        $this->assertDoesNotMatchRegularExpression($regex, '-2');
    }

    public function testEx8(): void
    {
        $regex = Regex::ex8();
        $this->assertDoesNotMatchRegularExpression($regex, '');
        $this->assertMatchesRegularExpression($regex, '0');
        $this->assertMatchesRegularExpression($regex, '25');
        $this->assertMatchesRegularExpression($regex, '-3');
        $this->assertMatchesRegularExpression($regex, '-3.5');
        $this->assertMatchesRegularExpression($regex, '1662.352');
        $this->assertDoesNotMatchRegularExpression($regex, '.0');
        $this->assertDoesNotMatchRegularExpression($regex, '-.03');
        $this->assertDoesNotMatchRegularExpression($regex, '5.');
        $this->assertDoesNotMatchRegularExpression($regex, ' 34');
        $this->assertDoesNotMatchRegularExpression($regex, '17 ');
    }

    public function testEx9(): void
    {
        $regex = Regex::ex9();
        $this->assertDoesNotMatchRegularExpression($regex, '');
        $this->assertMatchesRegularExpression($regex, 'A nice story');
        $this->assertMatchesRegularExpression($regex, 'a better story');
        $this->assertMatchesRegularExpression($regex, 'an improved STORY !!1');
        $this->assertDoesNotMatchRegularExpression($regex, 'Hello world!');
        $this->assertDoesNotMatchRegularExpression($regex, 'banana');
    }
}
