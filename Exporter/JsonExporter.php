<?php

namespace Exporter;

class JsonExporter extends Exporter
{
    protected $format = ".json";
    public function export()
    {
        $file_name  = "Json-" . rand(100, 1000) . $this->format;
        $file_path = __DIR__ . '/files/' . $file_name;
        $data = json_encode(['title' => $this->data['title'], 'content' => $this->data['content']]);
        file_put_contents($file_path, $data);
        echo $file_name . 'created successfully';
    }
}
