<?php

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use VitorH\CepApi\Search;

class SearchTest extends TestCase {

    #[DataProvider('dadosTeste')]
    public function testGetAddressFromZipcodeDefaultUsage(string $input, array $esperado) {
        $resultado = new Search;
        $resultado = $resultado->getAddressFromZipcode($input);
        
        $this->assertEquals($esperado, $resultado);
    }

    public static function dadosTeste(): array {
        return [
            "Endereço Praça de Sé" => [
                "01001000",
                [
                    "cep" => "01001-000",
                    "logradouro" => "Praça da Sé",
                    "complemento" => "lado ímpar",
                    "unidade" => "",
                    "bairro" => "Sé",
                    "localidade" => "São Paulo",
                    "uf" => "SP",
                    "estado" => "São Paulo",
                    "regiao" => "Sudeste",
                    "ibge" => "3550308",
                    "gia" => "1004",
                    "ddd" => "11",
                    "siafi" => "7107"
                ]
            ],
            "Endereço Qualquer" => [
                "03624010",
                [
                    "cep" => "03624-010",
                    "logradouro" => "Rua Luís Asson",
                    "complemento" => "",
                    "unidade" => "",
                    "bairro" => "Vila Buenos Aires",
                    "localidade" => "São Paulo",
                    "uf" => "SP",
                    "estado" => "São Paulo",
                    "regiao" => "Sudeste",
                    "ibge" => "3550308",
                    "gia" => "1004",
                    "ddd" => "11",
                    "siafi" => "7107"
                ]
            ]
        ];
    }
}