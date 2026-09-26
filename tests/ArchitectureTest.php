<?php

declare(strict_types=1);

namespace Componenta\Auth\Session\Csrf\Tests;

use PHPUnit\Framework\TestCase;

final class ArchitectureTest extends TestCase
{
    public function testCsrfPackageDoesNotDependOnSessionPersistence(): void
    {
        $composer = json_decode(
            file_get_contents(dirname(__DIR__) . '/composer.json'),
            true,
            512,
            JSON_THROW_ON_ERROR,
        );

        self::assertIsArray($composer);
        $requires = $composer['require'] ?? [];

        self::assertArrayNotHasKey(
            'componenta/auth-session-database',
            $requires,
        );
        self::assertArrayNotHasKey('componenta/session', $requires);
    }
}
