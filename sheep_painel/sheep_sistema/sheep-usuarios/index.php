<div class="main-content">


  <!-- INICIO NAVEGAÇÃO MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA--->
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="sheep.php">Inicio</a></li>
      <li class="breadcrumb-item"><a href="<?= URL_CAMINHO_PAINEL . FILTROS . "sheep-usuarios/criar&token=".$_SESSION['timeWT']?>">Novo</a></li>
      <li class="breadcrumb-item active" aria-current="page">Listar</li>
    </ol>
  </nav>
  <!-- FIM NAVEGAÇÃO MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA--->

  <section class="section">
    <div class="section-body">


      <!--INICIO LINKS TOPO clientesPR.COM.BR MAYKON SILVEIRA--->
      <?php include_once 'topo.php'; ?>
      <!--FIM LINKS TOPO clientesPR.COM.BR MAYKON SILVEIRA--->

      <!--INICIO MENSAGEM DE RETORNO clientesPR.COM.BR MAYKON SILVEIRA--->
      <?php include_once 'token.php'; ?>
      <!--FIM LINKSMENSAGEM DE RETORNO clientesPR.COM.BR MAYKON SILVEIRA--->
      <br>

   


      <!-- INICIO TABELA  MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Ativos</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                  <thead>
                    <tr>
                      <th>Nº</th>
                      <th>Foto</th>
                      <th>Criado</th>
                      <th>Nome</th>
                      <th>CPF</th>
                      <th>Função</th>
                      <th>Status</th>
                      <th>Editar</th>
                      <th>Excluir</th>

                    </tr>
                  </thead>
                  <tbody>


                  

                        <tr>
                          <td>77</td>
                          <td>
                            <a href="#" data-toggle="modal" data-target="#ver">

                              

                                <img alt="" src="assets/img/sem-imagem.png" width="35">

                              
                            </a>

                          </td>
                          <td>77/77/7777</td>
                          <td>Maykon Silveira</td>
                          <td>77777777777</td>

                          <td> Cliente  </td>
                          <td>
                            <button class="btn btn-icon btn-success"><i class="fas fa-check-square"></i></button>
                            
                          </td>

                          <td><a href="" class="btn btn-icon btn-primary"><i class="far fa-edit"></i></a></td>
                          <td>
                            <form action="" method="post">

                              <input type="hidden" name="lixeira" value="">
                              <button type="submit" class="btn btn-icon btn-danger"><i class="fas fa-trash-alt"></i></button>
                            </form>
                          </td>
                        </tr>


                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>
  </section>
 
      <!-- INICIO MODAL SUPORTE MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA--->
      <!-- basic modal -->
      <div class="modal fade" id="ver" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Maykon </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

              <p>
                  <img alt="" src="assets/img/sem-imagem.png" style="width:150px; height:auto; object-fit:cover;">

              </p>
              <p>Criado(a): 77/77/7777</p>
              <p>Nome: Maykon Silveira</p>
              <p>CPF: 77777</p>
              <p>CNPJ: 77777</p>
              <p>RAZÃO SOCIAL: Maykon Silveira</p>
              <p>Telefone: (41)7777-77777</p>
              <p>Whats: (41)7777-77777</p>
              <p>E-mail:  cursos@maykonsilveira.com.br</p>
              <p>Função:  Cliente </p>

            </div>
            <div class="modal-footer bg-whitesmoke br">

              <button type="button" class="btn btn-danger" data-dismiss="modal">x</button>
            </div>
          </div>
        </div>
      </div>

      <!-- FIM MODAL SUPORTE MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA--->
  




</div>