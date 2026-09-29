# Cadastro de Produtos

Atividade desenvolvida em PHP com integração ao banco de dados MySQL, com o objetivo de praticar o recebimento, validação e armazenamento de informações por meio de um formulário.

## Sobre o projeto

O sistema permite cadastrar produtos informando o nome e o preço. Após o envio do formulário, os dados são processados pelo PHP e, estando preenchidos corretamente, são inseridos na tabela `produtos` do banco de dados `exercicio`.

Também foi implementado um sistema de mensagens para informar ao usuário se o cadastro foi realizado com sucesso ou se ocorreu algum erro durante o processo. 

## Funcionalidades

- Formulário para cadastro de produtos.
- Campo para informar o nome do produto.
- Campo numérico para informar o preço.
- Verificação do preenchimento dos campos.
- Conexão com banco de dados MySQL.
- Inserção dos dados na tabela `produtos`.
- Utilização de `prepare()` e `bind_param()` para realizar a inserção. 
- Mensagem de confirmação após o cadastro.
- Mensagem de erro caso os campos não sejam preenchidos corretamente.

## Tecnologias utilizadas

- PHP
- HTML
- MySQL
- MySQLi

## Banco de dados

O sistema utiliza o banco de dados `exercicio` e realiza a inserção das informações na tabela `produtos`. A conexão é feita localmente por meio do MySQL. 

## Como executar

1. Configure um servidor local com suporte a PHP e MySQL, como XAMPP ou ambiente equivalente.
2. Crie o banco de dados `exercicio`.
3. Crie a tabela `produtos` conforme o script SQL fornecido na atividade.
4. Coloque o arquivo PHP na pasta do servidor local.
5. Inicie o Apache e o MySQL.
6. Acesse o arquivo pelo navegador.
7. Preencha o nome e o preço do produto e clique em **Cadastrar**.

## Objetivo da atividade

A atividade teve como objetivo praticar conceitos básicos de desenvolvimento web com PHP, incluindo formulários, tratamento de dados enviados pelo usuário, conexão com banco de dados e inserção de registros no MySQL.
