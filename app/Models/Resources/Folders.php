<?php

namespace App\Models\Resources;

use Symfony\Component\Filesystem\Exception\IOExceptionInterface;
use Symfony\Component\Filesystem\Filesystem;

class Folders {
    public static function install(): bool
    {
        $filesystem = new Filesystem();

        try {
            $filesystem->mkdir(config('game.resources_path'));
        } catch (IOExceptionInterface $exception) {
            echo "An error occurred while creating your directory at " . $exception->getPath();
        }

        return true;
    }

    public static function getFolders()
    {

    }

    public static function createFolder($folderName)
    {

    }
}
