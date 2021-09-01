<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class RegexTest extends TestCase
{
    public function testEx1(): void
    {
        $regex = Regex::ex1();
        $this->assertMatchesRegularExpression($regex, '1');
        $this->assertMatchesRegularExpression($regex, '37');
        $this->assertMatchesRegularExpression($regex, '123456');
        $this->assertDoesNotMatchRegularExpression($regex, '');
        $this->assertDoesNotMatchRegularExpression($regex, 'a');
        $this->assertDoesNotMatchRegularExpression($regex, 'b5');
        $this->assertDoesNotMatchRegularExpression($regex, '3.5');
    }
}
