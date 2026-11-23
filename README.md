# Sistema de Controle de Coletas

Projeto da disciplina Desenvolvimento Web e Banco de Dados (UPF, ADS), feito individualmente.

## Contexto
Em uma empresa que presta serviço de coleta para os Correios, o cliente pedia a coleta pelo WhatsApp e alguém repassava o pedido ao responsável, também pelo WhatsApp. É um processo manual e sujeito a falhas. Projetei o banco de dados e desenvolvi um sistema web para registrar esse fluxo.

## Modelo de dados
- cliente: codigo, nome, endereco, telefone
- funcionario: codigo, nome, tipo
- coleta: codigo, status, data_solicitacao, codigo_cliente, codigo_funcionario

Um cliente solicita várias coletas, e cada coleta é atendida por um funcionário. O MER e os modelos lógico e físico estão em `docs/`.

## Funcionalidades
Cadastro, listagem, edição e exclusão (CRUD) das três entidades, com listas de seleção de cliente e funcionário no cadastro da coleta.

## Tecnologias
PHP (mysqli), MySQL/MariaDB, HTML, XAMPP.

## Como rodar
1. Inicie o Apache e o MySQL no XAMPP.
2. Copie a pasta para `C:\xampp\htdocs\coletas`.
3. Importe o `banco.sql` no phpMyAdmin.
4. Abra `http://localhost/coletas/cliente.html`.

## O que ainda não faz
Direcionamento automático da coleta ao funcionário, login de usuários e validações mais completas. Também pretendo trocar as consultas por prepared statements.

Autor: Eliandro Silva, https://www.linkedin.com/in/eliandro-silva-dev/