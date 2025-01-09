  
   <!-- Main Content -->
   <div class="main-content">

     <!-- INICIO NAVEGAÇÃO MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA--->
     <nav aria-label="breadcrumb">
       <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href="">Inicio</a></li>

         <li class="breadcrumb-item active" aria-current="page">Dados</li>
       </ol>
     </nav>
     <!-- FIM NAVEGAÇÃO MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA--->

     <section class="section">

       <!-- INICIO MENSAGENS DE SUCESSO E ERRO MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA--->
       

         <!-- INICIO ALERTA SUCESSO MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA--->
         <div class="alert alert-success alert-has-icon">
           <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
           <div class="alert-body">
             <div class="alert-title">Sucesso!</div>
             Tudo certo.
           </div>
         </div>
         <!-- FIM ALERTA SUCESSO MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA--->
       

         <!-- INICIO ALERTA ERRO MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA--->
         <div class="alert alert-danger alert-has-icon">
           <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
           <div class="alert-body">
             <div class="alert-title">Erro!</div>
             Ocorreu um erro, verifique sua conexão com internet ou, atualize a sua página.
           </div>
         </div>
         <!-- FIM ALERTA ERRO MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA--->
       
       <!-- FIM MENSAGENS DE SUCESSO E ERRO MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA--->



       <!-- INICIO TOKEN MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA--->




         <!-- INICIO ALERTA ERRO MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA--->
         <div class="alert alert-danger alert-has-icon">
           <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
           <div class="alert-body">
             <div class="alert-title">Erro!</div>
             Seu token de sessão expirou!
           </div>
         </div>
         <!-- FIM ALERTA ERRO MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA--->

       

         <!-- INICIO ALERTA ERRO MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA--->
         <div class="alert alert-danger alert-has-icon">
           <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
           <div class="alert-body">
             <div class="alert-title">Erro!</div>
             Seu token de sessão é inválido!
           </div>
         </div>
         <!-- FIM ALERTA ERRO MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA--->

       
         <!-- INICIO ALERTA ERRO MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA--->
         <div class="alert alert-danger alert-has-icon">
           <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
           <div class="alert-body">
             <div class="alert-title">Erro!</div>
             O que está tentando fazer? Dê um clique por vez
           </div>
         </div>
         <!-- FIM ALERTA ERRO MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA--->



      
       <!-- FIM TOKEN MAYKONSILVEIRA.COM.BR MAYKON SILVEIRA--->





       <form action="" method="post" enctype="multipart/form-data">


         <div class="section-body">
           <div class="row">
             <div class="col-12">
               <div class="card">

                 <div class="card-footer text-right">

                   <a href="" class="btn btn-primary"><i class="fa fa-exclamation-circle"></i> Lista </a>


                 </div>

                 <div class="card-header">
                   <h4>Configurações</h4>
                 </div>
                 <div class="card-body">



                   <div class="form-group row mb-4">
                     <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Logomarca(300px-90px)</label>
                     <div class="col-sm-12 col-md-7">
                       <div id="image-preview" class="image-preview">
                         <label for="image-upload" id="image-label">Buscar Imagem</label>

                         <input type="file" name="logo" id="image-upload" />
                       </div>
                     </div>
                   </div>


                   <div class="form-group row mb-4">
                     <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Favicon(50px-50px)</label>
                     <div class="col-sm-12 col-md-7">
                       <div id="image-preview" class="image-preview">
                         <label for="image-upload2" id="image-label">Favicon</label>

                         
                          <img src="assets/img/sem-imagem.png" style="width:100%; height:auto;">
                         
                       </div>
                       <input type="file" name="icone" id="image-upload2" />
                     </div>
                   </div>

                   <div class="form-group row mb-4">
                     <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nome da Empresa(Obrigatório)</label>
                     <div class="col-md-7">
                       <input type="text" class="form-control" name="nome" placeholder="Digite o nome da sua empresa" value="">
                     </div>

                   </div>

                   <div class="form-group row mb-4">
                     <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Descrição da Empresa</label>
                     <div class="col-md-7">
                       <textarea class="summernote" name="descricao"></textarea>

                     </div>

                   </div>

                   <div class="form-group row mb-4">
                     <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">CNPJ(Opcional)</label>
                     <div class="col-md-7">
                       <input type="text" id="cnpj" class="form-control" name="cnpj" placeholder="Adicione o CNPJ" value="">
                     </div>

                   </div>



                   <div class="form-group row mb-4">
                     <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">E-mail(Obrigatório)</label>
                     <div class="col-md-7">
                       <input type="email" class="form-control" name="email" placeholder="E-mail" value="">
                     </div>

                   </div>

                   <div class="form-group row mb-4">
                     <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Senha E-mail(Obrigatório)</label>
                     <div class="col-md-7">
                       <input type="password" class="form-control" name="senha_email" placeholder="Senha do e-mail" value="">
                     </div>

                   </div>

                   <div class="form-group row mb-4">
                     <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Telefone(Opcional)</label>
                     <div class="col-md-7">
                       <input type="text" id="fone" class="form-control" name="fone" placeholder="Telefone" value="">
                     </div>

                   </div>



                   <div class="form-group row mb-4">
                     <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Whatsapp(Opcional)</label>
                     <div class="col-md-7">
                       <input type="text" id="cel" class="form-control" name="whatsapp" placeholder="whatsapp" value="">
                     </div>

                   </div>


                   <div class="form-group row mb-4">

                     <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Endereço</label>
                     <div class="col-md-4">
                       <input type="text" class="form-control" name="endereco" value="">
                     </div>


                     <div class="col-md-3">
                       <input type="number" class="form-control" name="numero" value="">
                     </div>

                   </div>

                   <div class="form-group row mb-4">
                     <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">CEP</label>
                     <div class="col-md-7">
                       <input type="text" id="cepmj" class="form-control" name="cep" placeholder="Digite um CEP Válido!" value="">
                     </div>

                   </div>

                   <div class="form-group row mb-4">
                     <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Estado</label>
                     <div class="col-sm-12 col-md-7">
                       <select class="form-control select2 load_estados" name="estado">

                      
                         <option value="">Paraná</option>
                        

                       </select>
                     </div>
                   </div>

                   <div class="form-group row mb-4">
                     <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Cidade</label>
                     <div class="col-sm-12 col-md-7">
                       <select class="form-control select2" name="cidade" id="load_cidades">
                       
                         <option value="" ></option>
                         

                       </select>
                     </div>
                   </div>

                   <input type="hidden" name="usuario" value="">
                   <input type="hidden" name="sheep_firewall" value="">
                   <input type="hidden" name="tipo" value="">
                   <input type="hidden" name="id" value="">

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