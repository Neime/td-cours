<?php


class Psr4ClassLoader {
    public function __construct(private string $prefix, private string $baseDir) {
    }

    public function loadClass(string $className): void {
        if (!str_starts_with($className, $this->prefix)) return;

        $relativeClass = substr($className, strlen($this->prefix));
        $filePath = $this->baseDir . str_replace('\\', DIRECTORY_SEPARATOR, $relativeClass) . '.php';
        // Include the file if it exists
        if (file_exists($filePath)) {
            require_once $filePath;
        }
    }

    public function register()
    {
        spl_autoload_register([$this, 'loadClass']);
    }
}