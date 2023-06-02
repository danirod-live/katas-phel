<?php

declare(strict_types=1);

use Phel\Config\PhelConfig;
use Phel\Config\PhelExportConfig;

return (new PhelConfig())
    ->setSrcDirs(['src'])
    ->setTestDirs(['tests'])
    ->setOutDir('out')
    ->setFormatDirs(['src', 'tests'])
    ->setIgnoreWhenBuilding(['src/local.phel'])
    ->setKeepGeneratedTempFiles(false);
