

    <!-- Main Content -->
    <div class="main-content" >
        
          <!-- INICIO NAVEGAÇÃO MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA--->
           <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Inicio</a></li>
                        <li class="breadcrumb-item"><a href="<?=URL_CAMINHO_PAINEL . FILTROS?>/sheep-usuarios/index"> Listar </a></li>
                        <li class="breadcrumb-item active" aria-current="page">Criar</li>
                      </ol>
           </nav>
          <!-- FIM NAVEGAÇÃO MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA--->
          
        <section class="section" >
      
            <!--INICIO MENSAGEM DE RETORNO clientesPR.COM.BR MAYKON SILVEIRA--->
            <?php include_once 'token.php'; ?>
            <!--FIM LINKSMENSAGEM DE RETORNO clientesPR.COM.BR MAYKON SILVEIRA--->

            <form action="<?=URL_CAMINHO_PAINEL . FILTROS ?>sheep-usuarios/filtros/criar" method="post" enctype="multipart/form-data">
  

           <div class="section-body" >
            <div class="row" >
              <div class="col-12">
                <div class="card">
                    
                      <div class="card-footer text-right">
                      
                       <a href="" class="btn btn-primary"><i class="fa fa-exclamation-circle"></i> Lista </a>
                     
                    
                      </div>
                    
                  <div class="card-header">
                    <h4>Criar</h4>
                  </div>
                  <div class="card-body">
                      
                  
                      
                     <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Foto</label>
                      <div class="col-sm-12 col-md-7">
                        <div id="image-preview" class="image-preview">
                          <label for="image-upload" id="image-label">Buscar Imagem</label>
                          <input type="file" name="foto" id="image-upload" />
                        </div>
                      </div>
                    </div>
                      
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nome(Obrigatório)</label>
                      <div class="col-md-3">
                          <input type="text" class="form-control" name="nome" placeholder="Primeiro nome" required="">
                      </div>
                      <div class="col-md-4">
                          <input type="text" class="form-control" name="sobrenome" placeholder="Sobrenome" required="">
                      </div>
                    </div>
                      
                      
                      <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">CPF(Obrigatório)</label>
                      <div class="col-md-7">
                          <input type="text" id="cpfmj" class="form-control" name="cpf" placeholder="CPF">
                      </div>
                      
                    </div>
                      
                      
                      <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">E-mail(Obrigatório)</label>
                      <div class="col-md-7">
                          <input type="email" class="form-control" name="email" placeholder="E-mail" required="">
                      </div>
                      
                    </div>
                      
                      <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Telefone(Opcional)</label>
                      <div class="col-md-7">
                          <input type="text" id="fone" class="form-control" name="fone" placeholder="Telefone" required="">
                      </div>
                      
                    </div>

                    
                      
                      <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Whatsapp(Opcional)</label>
                      <div class="col-md-7">
                          <input type="text" id="cel" class="form-control" name="whatsapp" placeholder="whatsapp" required="">
                      </div>
                      
                    </div>
                      
                      <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nascimento(Opcional)</label>
                      <div class="col-md-7">
                          <input type="date" class="form-control" name="nascimento" required="">
                      </div>
                      
                    </div>

                    <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Endereço(Obrigatório)</label>
                  <div class="col-md-4">
                    <input type="text" class="form-control" name="endereco" placeholder="Seu Endereço" >
                  </div>

                  <div class="col-md-3">
                    <input type="number" class="form-control" name="numero" placeholder="Número" >
                  </div>

                </div>


                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">CEP(Obrigatório)</label>
                  <div class="col-md-7">
                    <input type="text" class="form-control" id="cepmj" name="cep" placeholder="CEP Válido" >
                  </div>


                </div>




                
                <div class="form-group row mb-4">
                     <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Estado</label>
                     <div class="col-sm-12 col-md-7">
                       <select class="form-control select2 load_estados" name="estado">

                      
                         <option value="" >Paraná</option>
                         

                       </select>
                     </div>
                   </div>

                   <div class="form-group row mb-4">
                     <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Cidade</label>
                     <div class="col-sm-12 col-md-7">
                       <select class="form-control select2" name="cidade" id="load_cidades">
                       
                         <option value="" >Curitiba</option>
                        

                       </select>
                     </div>
                   </div>

                   
                      
                 <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Função(Obrigatório)</label>
                      <div class="col-sm-12 col-md-7">
                          <select class="form-control select2"  name="nivel" >
                           
                            <option value="M">Administrador</option>
                            <option value="C">Cliente</option>
                          
                       
                      </select>
                      </div>
                    </div>
                    
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Senha(Obrigatório)</label>
                      <div class="col-md-7">
                          <input type="password" class="form-control" name="senha" placeholder="Senha" required="">
                          <small>Dica de senha: <b> </b><?= formata::GerarSimbolos(11) ?></small>
                      </div>
                      
                    </div>
                                          
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status(Opcional)</label>
                      <div class="col-sm-12 col-md-7">
                          <select class="form-control selectric" name="status">
                          <option value="S">Publicado</option>
                          <option value="R">Rascunho</option>
                          <option value="P">Pendente</option>
                          <option value="C">Cancelado</option>
                        </select>
                      </div>
                    </div>
                   
                      
                      <input type="hidden" name="usuario" value="<">
                      <input type="hidden" name="sheep_firewall" value="">
                      <input type="hidden" name="tipo" value="">
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                          <button type="submit" class="btn btn-lg btn-primary" name="sendSheep">Salvar</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
              </form>
        </section>
        
          
         
      </div>
    
    
   
  


   
                 



