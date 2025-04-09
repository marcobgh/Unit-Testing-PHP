# 🖥️ Funções Utilitárias com Testes PHPUnit 🐘

Este repositório contém uma coleção de funções utilitárias escritas em **PHP**, acompanhadas por testes unitários utilizando o **PHPUnit**. O objetivo é demonstrar a escrita de testes, boas práticas e validação de entradas.

## 📂 Estrutura do Projeto
```
project/  
├── src/  
│   └── Funcoes.php # Arquivo com as funções utilitárias  
├── tests/  
│   └── FuncoesTest.php # Testes unitários usando PHPUnit  
├── vendor/ # Dependências do Composer (PHPUnit)  
├── composer.json # Configuração do projeto  
&nbsp; &nbsp; &nbsp;└── README.md # Documentação do repositório
```

## 🚀 Instalação
> É necessário ter o [PHP](https://www.php.net/downloads.php) e o [Composer](https://getcomposer.org/) instalados.
```
## bash
### Clone o repositório
git clone https://github.com/seu-usuario/nome-do-repositorio.git
cd nome-do-repositorio

### Instale as dependências
composer install
```
---

## 🧪 Executando os Testes
```
./vendor/bin/phpunit tests
```
## ✅ Resultado Esperado:
```
PHPUnit 12.1.2 by Sebastian Bergmann and contributors.

..........                                                        10 / 10 (100%)

Time: 00:00.022, Memory: 8.00 MB

OK (10 tests, 10 assertions)
```

## 📋 Cobertura de Testes
As funções abaixo foram testadas com entradas válidas e inválidas (quando aplicável), garantindo robustez e comportamento esperado.

| Função                | Cenário de Teste                        | Resultado Esperado | Status |
|-----------------------|-----------------------------------------|--------------------|--------|
| `isEven`              | Número par (4)                          | `true`             | ✅     |
| `isEven`              | Número ímpar (5)                        | `false`            | ✅     |
| `factorial`           | Entrada válida (5)                      | `120`              | ✅     |
| `factorial`           | Entrada inválida (-1)                   | Exceção            | ✅     |
| `isPalindrome`        | Palavra palíndroma ("arara")           | `true`             | ✅     |
| `isPalindrome`        | Palavra não palíndroma ("php")         | `false`            | ✅     |
| `fahrenheitToCelsius` | Conversão de 32°F                       | `0`                | ✅     |
| `fahrenheitToCelsius` | Conversão de 98.6°F                     | `37`               | ✅     |
| `calculateDiscount`   | Preço 200 com 10% de desconto           | `180`              | ✅     |
| `calculateDiscount`   | Percentual negativo                     | Exceção            | ✅     |

### 👨‍💻 Autores
Marco Antonio Borghetti e Luiz Gustavo Przygoda
