<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">
    <title>Checkout example · Bootstrap v5.3</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/checkout/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-primary {
      --bs-btn-color: #000000;
      --bs-btn-bg: #13dfb2;
      --bs-btn-border-color: ##13dfb2;
      --bs-btn-hover-color: #000000;
      --bs-btn-hover-bg: #13c7a0;
      --bs-btn-hover-border-color: #0a58ca;
      --bs-btn-focus-shadow-rgb: 49,132,253;
      --bs-btn-active-color: #fff;
      --bs-btn-active-bg: #0a58ca;
      --bs-btn-active-border-color: #0a53be;
      --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
      --bs-btn-disabled-color: #fff;
      --bs-btn-disabled-bg: #0d6efd;
      --bs-btn-disabled-border-color: #0d6efd;
      }

      .w-100 {
    width: 20%!important;
    }   

      .btn-secondary {
    --bs-btn-color: #000000;
    --bs-btn-bg: #fff;
    --bs-btn-border-color: #6c757d;
    --bs-btn-hover-color: #000000;
    --bs-btn-hover-bg: #13c7a0;
    --bs-btn-hover-border-color: #565e64;
    --bs-btn-focus-shadow-rgb: 130,138,145;
    --bs-btn-active-color: #fff;
    --bs-btn-active-bg: #565e64;
    --bs-btn-active-border-color: #51585e;
    --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
    --bs-btn-disabled-color: #fff;
    --bs-btn-disabled-bg: #6c757d;
    --bs-btn-disabled-border-color: #6c757d;
    }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }


      .botoes{
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-around;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }

      .conteudo{
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-around;
      }

      .arquivos{
        display: flex;
        align-items: center;
        flex-direction: column;
        padding: 5%;
      }

      .titulo{
        align-items: center;
        justify-content: center;
      }

      .conteudo{
        display: flex;
        border: #000000 solid;
        padding: 5%;

      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="checkout.css" rel="stylesheet">
  </head>
  <body class="bg-body-tertiary">

<div class="container">
  <main>
    <div class="conteudo">
      <div>
        <h4 class="mb-3 titulo">Cadastro Cliente</h4>
        <form class="needs-validation" name="cadastroUAN" action="cadastraruan.php" method="POST" novalidate>
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Nome Fantasia<span class="text-body-secondary">*</span></label>
              <input type="text" class="form-control" name="nomeFantasiaUAN" id="firstName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Inserir Nome Fantasia.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Razão social<span class="text-body-secondary">*</span></label>
              <input type="text" class="form-control" name="razaoSocialUAN" id="lastName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Inserir Razão Social.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">CNPJ</label><span class="text-body-secondary">*</span></label>
              <input type="text" class="form-control" name="CNPJUAN" id="lastName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Inserir CNPJ.
              </div>
            </div>
            <div class="col-sm-6">
              <label for="lastName" class="form-label">Telefone<span class="text-body-secondary">*</span></label>
              <input type="text" class="form-control" name="telefoneUAN" id="lastName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Inserir telefone.
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Endereço<span class="text-body-secondary">*</span></label>
              <input type="text" class="form-control" name="enderecoUAN" id="address" placeholder="Rua, numero" required>
              <div class="invalid-feedback">
                Inserir endereço.
              </div>
            </div>

            <div class="col-12">
              <label for="address2" class="form-label">Bairro<span class="text-body-secondary">*</span></label>
              <input type="text" class="form-control" name="bairroUAN" id="address2" placeholder="">
              <div class="invalid-feedback">
                Inserir Bairro.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Cidade</label><span class="text-body-secondary">*</span></label>
              <input type="text" class="form-control" name="cidadeUAN" id="lastName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Inserir cidade.
              </div>
            </div>
            <div class="col-sm-6">
              <label for="lastName" class="form-label">Estado<span class="text-body-secondary">*</span></label>
              <input type="text" class="form-control" name="estadoUAN" id="lastName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Inserir estado.
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">E-mail<span class="text-body-secondary">*</span></label>
              <input type="text" class="form-control" name="emailUAN" id="address" placeholder="" required>
              <div class="invalid-feedback">
                Inserir e-mail.
              </div>
            </div>
        </form>
      </div>
    </div>
    <div class="arquivos">
      <form>
      <div>
        <h4 class="mb-3">Cardapio</h4>
        <input type="file">
        <div class="col-sm-6">
          <label for="lastName" class="form-label">Data</label></label>
          <input type="text" class="form-control" name="dataCardapioUAN" id="lastName" placeholder="" value="">
        </div>
      </div>
      <div>
        <h4 class="mb-3">Protocolo</h4>
        <input type="file">
        <div class="col-sm-6">
          <label for="lastName" class="form-label">Data</label></label>
          <input type="text" class="form-control" name="dataProtocoloUAN" id="lastName" placeholder="" value="">
        </div>
      </div>
      <a href=""><button type="button" class="w-100 btn btn-lg btn-outline-primary " name = "enviar" value = "Envia">Concluir</button></a>
      </form>
    </div>
    
  </div>
  
  </main>

</div>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    <script src="checkout.js"></script></body>
</html>
