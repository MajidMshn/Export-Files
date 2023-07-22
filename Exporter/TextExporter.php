<?php

namespace Exporter;

class TextExporter extends Exporter
{
    protected $format = ".txt";
    public function export()
    {
        $fileName = 'Text-' . rand(100, 1000) . $this->format;
        $file_path = __DIR__ . '/files/' . $fileName;

        $data = $this->data['title'] . "\n " . $this->data['content'];
        file_put_contents($file_path, $data);
        echo "{$fileName} created";
    }
}
