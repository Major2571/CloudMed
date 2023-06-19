
# CloudMed

Cloud Med é uma plataforma de gestão e gerenciamento de informações médicas, projetada para facilitar o armazenamento e o acesso seguro aos seus dados de saúde. Com o Cloud Med, você pode centralizar seu histórico médico, realizar o upload de exames, registrar vacinas, acompanhar medicamentos e muito mais, tudo em um só lugar.

&nbsp;

<div align="center">
<img src='https://user-images.githubusercontent.com/99849455/234647193-ee8fba0c-7049-47bc-84a4-61e9f70dd3d8.png' width='200px'>
</div>

&nbsp;
&nbsp;
&nbsp;

## Design:     
[<img src='https://img.shields.io/badge/figma-0D1117.svg?style=for-the-badge&logo=figma&logoColor=white' align="center">](https://www.figma.com/file/BDAuXVC40VFH11sySz9PUy/WebApp-TCC?node-id=480%3A2&t=bA80zUyv2VS2Tb31-1) 

## Tecnologias Utilizadas
<div>
    <img src="https://img.shields.io/badge/html5-%23E34F26.svg?style=for-the-badge&logo=html5&logoColor=e34f26&color=0d1117"/>
    <img src="https://img.shields.io/badge/css3-%231572B6.svg?style=for-the-badge&logo=css3&logoColor=1572b6&color=0d1117"/>
    <img src="https://img.shields.io/badge/javascript-%23323330.svg?style=for-the-badge&logo=javascript&logoColor=f7df1e&color=0d1117"/>
    <img src="https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=777bb4&color=0d1117"/>
    <img src="https://img.shields.io/badge/laravel-0D1117.svg?style=for-the-badge&logo=laravel&logoColor=23FF2D20&labelColor=0D1117"/>
    <img src="https://img.shields.io/badge/mysql-0D1117.svg?style=for-the-badge&logo=mysql&logoColor=white&labelColor=0D1117"/>
    <br>
    <img src="https://img.shields.io/badge/jquery-0D1117.svg?style=for-the-badge&logo=jquery&logoColor=0096c7"/>
    <img src="https://img.shields.io/badge/tailwindcss-%2338B2AC.svg?style=for-the-badge&logo=tailwind-css&logoColor=38bcf6&color=0D1117"/>   
    <img src='https://img.shields.io/badge/OwlCarousel-0D1117?style=for-the-badge&logo=&logoColor=white&labelColor=0D1117&color=0D1117'/>
    <img src='https://img.shields.io/badge/ScrollReveal-0D1117?style=for-the-badge&logo=&logoColor=white&labelColor=0D1117&color=0D1117'/>
    <img src='https://img.shields.io/badge/SweetAlert2-0D1117?style=for-the-badge&logo=&logoColor=white&labelColor=0D1117&color=0D1117'/>
</div>


## Requisitos e Versões:

Antes de executar o projeto, verifique se você possui os seguintes requisitos instalados:

|                                                       |    Versão    |
|-------------------------------------------------------|--------------|
|PHP                                                    |    8.1.x     |
|[Composer](https://getcomposer.org/download/)          |     2.5.x    |
|[Laravel](https://laravel.com/docs/10.x/configuration) |     10.4.x   |
|[Node](https://nodejs.org/en)                          |     18.x     |
|WampServer                                             |              |

Certifique-se de ter essas versões ou versões superiores instaladas em seu sistema.

## Executando Localmente

#### 1. Clone o projeto:
&nbsp;&nbsp; Clone o repositório do projeto em sua máquina local usando o comando abaixo.

```bash
    git clone https://github.com/Major2571/WebApp-TCC.git
```
   
&nbsp;&nbsp; Isso criará uma cópia local do código-fonte do projeto.

 #### 2. Acesse o diretório do projeto
&nbsp;&nbsp; Certifique-se de estar no diretório correto antes de prosseguir com os próximos passos.

```bash
    cd WebApp-TCC/CloudMed\ Laravel\ 10/
```

 #### 3. Instale as dependências:
&nbsp;&nbsp; Utilize o Composer para instalar as dependências do Laravel e do projeto em geral.

```bash
    composer install
```

 #### 4. Instale as dependências front-end:
&nbsp;&nbsp; Utilize o Node.js e o NPM (gerenciador de pacotes do Node.js) para instalar as dependências front-end do projeto.

```bash
    npm install
```

 #### 5. Configure o arquivo ``.env``:
&nbsp;&nbsp; Crie um arquivo .env na raiz do projeto, com base no arquivo ``.env.example`` fornecido, e, renomeie-o para ``.env``.

```bash
    cp .env.example .env
```

 #### 6. Gere uma chave
&nbsp;&nbsp; Execute o seguinte comando para gerar uma chave única para o projeto.

```bash
    php artisan key:generate
```

&nbsp;&nbsp; Essa chave é usada pelo Laravel para fins de segurança e criptografia. A chave gerada será adicionada automaticamente ao arquivo .env.

 #### 7. Execute as Migrations:
&nbsp;&nbsp; As Migrations são responsáveis por criar as tabelas do banco de dados. Execute o comando abaixo para executar as Migrations e criar as tabelas necessárias.
    
```bash
    php artisan migrate
```

&nbsp;&nbsp; *Ao rodar as Migrations, irá ser solicitado a criação de um banco de dados chamado ` dbCloudMed `, confirme sua criação.*

 #### 8. Execute os Seeders:
&nbsp;&nbsp; Ao executar esse comando, o Laravel executará os seeders configurados para popular o banco de dados com dados iniciais.

```bash
    php artisan db:seed
```

 #### 9. Crie um atalho para as imagens/arquivos:
 &nbsp;&nbsp; Execute o seguinte comando para criar um atalho na pasta public que permitirá o acesso às imagens/arquivos que foram feitos upload.

```bash
    php artisan storage:link
```

 #### 10. Inicie o servido
&nbsp;&nbsp; Por fim, inicie o servidor web embutido do Laravel e compile os ativos front-end.
    
```bash
    php artisan serve
```
```bash
    npm run dev
```

Pronto! Agora você pode acessar o CloudMed localmente em `http://localhost:8000`.


# Uso do CloudMed

O uso do CloudMed é voltado para indivíduos que desejam centralizar e gerenciar suas informações médicas de forma conveniente e segura. Alguns dos recursos e funcionalidades que os usuários podem encontrar na plataforma incluem:

 - **Upload de exames:** Os usuários podem fazer o upload de resultados de exames médicos, como exames de sangue, raio-x, ressonâncias magnéticas, etc. Isso permite que eles acessem esses resultados de forma rápida e fácil sempre que necessário.

 - **Registro de vacinas:** Os usuários podem registrar as vacinas que tomaram, incluindo a data e os detalhes relevantes. Isso pode ser útil para acompanhar o calendário de vacinação pessoal e garantir que todas as vacinas estejam atualizadas.

 - **Acompanhamento de medicamentos:** Os usuários podem inserir informações sobre os medicamentos que estão tomando, incluindo dosagens, tratamento e instruções de uso. Isso ajuda a lembrar quais medicamentos foram prescritos e a manter um registro preciso de sua rotina de medicação.
    
 - **Carteirinhas de convênio e CNS:** Os usuários podem digitalizar ou fazer o upload das suas carteirinhas de convênio médico e do Cartão Nacional de Saúde (CNS) para tê-las sempre à mão. Isso evita a necessidade de carregar físicamente as carteirinhas e facilita o acesso às informações de identificação e cobertura do plano de saúde.

 - **Informações clínicas:** O CloudMed permite que os usuários registrem informações clínicas relevantes, como histórico de doenças, alergias, cirurgias realizadas, tratamentos em andamento e outras observações médicas importantes. Essas informações são armazenadas de forma segura na plataforma e podem ser acessadas a qualquer momento pelo usuário ou por profissionais de saúde autorizados.

No geral, o uso do CloudMed simplifica o gerenciamento de informações médicas, oferecendo conveniência, organização e segurança aos usuários. A centralização de exames, vacinas, medicamentos, carteirinhas de convênio, CNS e informações clínicas em uma única plataforma torna mais fácil e eficiente o acesso e o compartilhamento desses dados, contribuindo para uma melhor gestão da saúde pessoal.

# Trabalho de Conclusão de Curso (TCC)

O CloudMed foi desenvolvido como um projeto de Trabalho de Conclusão de Curso (TCC), o que significa que ele serviu como uma forma de aplicar os conhecimentos adquiridos durante um curso acadêmico e demonstrar as habilidades técnicas dos desenvolvedores. O objetivo principal do TCC foi criar uma plataforma de gestão de informações médicas para facilitar o armazenamento e o acesso seguro aos dados de saúde dos usuários.

O TCC envolveu o planejamento, projeto e desenvolvimento da plataforma, bem como a pesquisa e análise relacionadas ao campo de gestão de informações médicas e tecnologias relacionadas. O projeto foi desenvolvido ao longo de um período de tempo determinado, seguindo uma metodologia específica, e foi orientado por um professor ou orientador.

É importante mencionar que o CloudMed continua a ser desenvolvido e aprimorado mesmo após a conclusão do TCC. Como qualquer projeto de software, ele está sujeito a atualizações, correções de bugs e implementação de novos recursos para melhor atender às necessidades dos usuários. O desenvolvimento contínuo do projeto pode ser realizado pelos próprios desenvolvedores ou por outros membros da equipe, dependendo das circunstâncias.

Em resumo, o TCC foi uma oportunidade para os desenvolvedores aplicarem seus conhecimentos e habilidades na criação de uma plataforma de gestão de informações médicas, demonstrando seu aprendizado e capacidades técnicas. O CloudMed continua a evoluir e oferecer uma solução prática e segura para o armazenamento e acesso aos dados de saúde dos usuários.
