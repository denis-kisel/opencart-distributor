<?php
namespace App\System;

use App\System\RuleHandler\FilesToDistribute;
use App\System\RuleHandler\Integrator;
use App\System\RuleHandler\Structure;
use App\System\RuleHandler\Copy;
use App\System\RuleHandler\Format;

use App\Helper\FileSystem;
use App\Helper\CLI;


Class Distributor
{
    public static function run()
    {
        $configApp = Config::app();

        //Distribute modules to other project versions
        foreach ($configApp['integration_versions'] as $integrationVersion) {
            foreach (FilesToDistribute::getModuleFiles() as $adminCatalogDir => $adminCatalogDirs) {
                foreach ($adminCatalogDirs as $mvcDir => $files) {
                    foreach ($files as $file) {
                        $newFile = self::copyFile($integrationVersion, $adminCatalogDir, $mvcDir, $file);
                        self::integrate($integrationVersion, $adminCatalogDir, $mvcDir, $newFile);
                    }
                }
            }
        }
    }

    private static function copyFile($integrationVersion, $adminCatalogDir, $mvcDir, $file)
    {
        $distributionVersion = Copy::getDistributeVersion($integrationVersion, $mvcDir);

        $structureDirFileToCopy = Structure::getPath($distributionVersion, $adminCatalogDir, $mvcDir);

        $fileToCopy = $distributionVersion . '/' . $structureDirFileToCopy . $file;
        $fileToCopy .= Format::makeFormatIfNotExists($distributionVersion, $mvcDir, $file);

        $structureDirNewFile = Structure::getPath($integrationVersion, $adminCatalogDir, $mvcDir);
        $newFile = $integrationVersion . '/' . $structureDirNewFile . $file;
        $newFile .= Format::makeFormatIfNotExists($integrationVersion, $mvcDir, $file);

        FileSystem::createDirByFile($newFile);
        FileSystem::copyFile($fileToCopy, $newFile);

        CLI::output("({$integrationVersion}) {$fileToCopy} => {$newFile} copied!");

        return $newFile;
    }

    private static function integrate($integrationVersion, $adminCatalogDir, $mvcDir, $newFile)
    {
        /**
         * @var Integrator $className
         */
        $className = 'App\System\RuleHandler\Integrator' . ucfirst($mvcDir);
        if (class_exists($className)) {
            $className::integrateToVersion($integrationVersion, $adminCatalogDir, $newFile);
            CLI::output("({$integrationVersion}) " . pathinfo($newFile, PATHINFO_FILENAME) . " integrated!");
        }
    }
}