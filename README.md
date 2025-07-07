
# 📦 Biblioteca PHP para Consulta de CEPs

![Versão](https://img.shields.io/badge/vers%C3%A3o-1.0.0-green.svg)

Uma biblioteca simples e direta para buscar endereços a partir do CEP usando PHP.

---

## 🚀 Como utilizar

1. **Inicie seu projeto com o Composer**  
```bash
composer init
```

2. **Instale a biblioteca**  
```bash
composer require vitorh/cep-api
```

3. **Crie o arquivo `index.php` com o seguinte conteúdo:**

```php
<?php

require_once "vendor/autoload.php";

use VitorH\CepApi\Search;

$busca = new Search;

print_r($busca->getAddressFromZipcode('01001000'));
```

4. **Execute o teste no terminal:**  
```bash
php index.php
```

✅ Exemplo de saída:
```php
Array
(
    [cep] => 01001-000
    [logradouro] => Praça da Sé
    [complemento] => lado ímpar
    [bairro] => Sé
    [localidade] => São Paulo
    [uf] => SP
    ...
)
```

---

## 🤝 Contribuições

Tem alguma dúvida ou sugestão de melhoria?  
Abra uma [issue](https://github.com/VitorAraujo63/api-cep-php/issues) ou envie um *Pull Request*, ficarei feliz em analisar sua contribuição!
