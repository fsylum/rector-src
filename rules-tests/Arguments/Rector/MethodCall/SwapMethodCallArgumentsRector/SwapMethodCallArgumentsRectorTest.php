<?php

declare(strict_types=1);

namespace Rector\Tests\Arguments\Rector\MethodCall\SwapMethodCallArgumentsRector;

use Iterator;
use PHPUnit\Framework\Attributes\DataProvider;
use Rector\Testing\PHPUnit\AbstractRectorTestCase;

final class SwapMethodCallArgumentsRectorTest extends AbstractRectorTestCase
{
    #[DataProvider('provideData')]
    public function test(string $filePath): void
    {
        $this->doTestFile($filePath);
    }

    public static function provideData(): Iterator
    {
        foreach (self::yieldFilesFromDirectory(__DIR__ . '/Fixture') as $filePath) {
            yield basename((string) $filePath[0]) => $filePath;
        }
    }

    public function provideConfigFilePath(): string
    {
        return __DIR__ . '/config/configured_rule.php';
    }
}