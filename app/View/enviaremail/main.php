   <!-- Image and text -->
   <nav class="navbar navbar-light bg-light">
       <a class="navbar-brand" href="#">
           <h3>Email Send</h3>
       </a>
   </nav>

   <div class="container">
       <form method="POST" enctype="multipart/form-data" action="home2">
           <div class="form-group">
               <label class="position">
                   <h2>Vitti Contact Center</h2>
               </label><br><br>
               <div class="alert alert-success" role="alert">
                   <h4 class="alert-heading">Muito bem!</h4>
                   <p>O arquivo foi enviado com sucesso, clique no botão abaixo para realizar o disparo.</p>
                   <!-- Button trigger modal -->
                   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                       Ver Lista
                   </button>

                   <!-- Modal -->
                   <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                       <div class="modal-dialog" role="document">
                           <div class="modal-content">
                               <div class="modal-header">
                                   <h5 class="modal-title" id="exampleModalLongTitle">Lista de Emails</h5>
                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                       <span aria-hidden="true">&times;</span>
                                   </button>
                               </div>
                               <div class="modal-body">
                                   <?php

                                    use Src\Classes\ClassTestes;

                                    $teste = new ClassTestes;

                                    $teste->lerArquivo();

                                    ?>
                               </div>
                               <div class="modal-footer">
                                   <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
                               </div>
                           </div>
                       </div>
                   </div>
               </div><br>
               <button type="submit" class="btn btn-success btn-block">Enviar disparo</button>

           </div>
       </form>
   </div>
   <br>
   <hr>
   <br>
   <div class="po">
       <strong>© 2020 Copyright - Todos os Diretos Reservados</strong> <br>
       Vitor H. Fernandes | José Marcos R. Ferreira
   </div>

   <script>
       function alerta() {
           window.alert('E-mails enviados com sucesso!');
       }
   </script>



   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>