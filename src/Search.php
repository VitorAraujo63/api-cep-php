<?php

namespace VitorH\CepApi;

use VitorH\CepApi\ws\ViaCep;

class Search
{
    public function getAddressFromZipcode(string $zipCode): array
    {
        $zipCode = preg_replace("/[^0-9]/im", '', $zipCode);

        return $this->getFromServer($zipCode);
    }

    private function getFromServer($zipCode): array
    {
        $get = new ViaCep();

        return $get->get($zipCode);
    }

    private function processData($data)
    {
        foreach ($data as $k => $v) {
            $data[$k] = trim($v);
        }

        return $data;
    }
}
