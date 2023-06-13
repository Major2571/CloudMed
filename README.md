
<div align="center">
<img src='https://user-images.githubusercontent.com/99849455/234647193-ee8fba0c-7049-47bc-84a4-61e9f70dd3d8.png' width='200px'>
</div>

### Design e Drive com as Imagens/Documentos:     
[<img src='https://img.shields.io/badge/figma-0D1117.svg?style=for-the-badge&logo=figma&logoColor=white' align="center">](https://www.figma.com/file/BDAuXVC40VFH11sySz9PUy/WebApp-TCC?node-id=480%3A2&t=bA80zUyv2VS2Tb31-1) [<img src='https://img.shields.io/badge/Google%20Drive-0D1117?style=for-the-badge&logo=googledrive&logoColor=ffffff' align="center">](https://drive.google.com/drive/folders/17wzfiOiRnJDzztO0I-U_HDelMwIw9FkZ?usp=sharing) 

### Techs
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

|                |  Version                       |
|----------------|-------------------------------|
|PHP |    8.1.x         |
|[Composer](https://getcomposer.org/download/) |     2.5.x    |
|[Laravel](https://laravel.com/docs/10.x/configuration)|     10.4.x     |
|[Node](https://nodejs.org/en) |     18.x     |
|WampServer| |


</br>

## Rodando localmente

Clone o projeto

```bash
  git clone https://github.com/Major2571/WebApp-TCC.git
```

Entre no diretório do projeto

```bash
  cd WebApp-TCC/CloudMed\ Laravel\ 10/
```

Instale as dependências

```bash
  composer install
```
```bash
  npm install
```

#### Antes de seguir para o próximo passo:
- Copie e cole o arquivo  `.env.exemple `
- Renomeie a cópia para  `.env `

Gere uma chave
```bash
    php artisan key:generate
```

Rode as Migrations
```bash
    php artisan migrate
```

- Ao rodar as Migrations, irá ser solicitado a criação de um banco de dados chamado ` dbCloudMed `, confirme sua criação

Rode os Seeders
```bash
    php artisan db:seed
```

Crie um atalho na pasta public para acessarmos as imagens
```bash
    php artisan storage:link
```

E por fim, inicie o servidor
```bash
    php artisan serve
```
```bash
    npm run dev
```

