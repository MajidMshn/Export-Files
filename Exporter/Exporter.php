<?php

namespace Exporter;

interface Exportable
{
    public function export();
}
abstract class Exporter implements Exportable
{
    protected $data;
    public function __construct($data)
    {
        $this->data = $data;
    }
}
