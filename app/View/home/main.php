   <!-- Image and text -->
   <nav class="navbar navbar-light bg-light">
       <a class="navbar-brand" href="#">
           <h3>Email Send</h3>
       </a>
   </nav>

   <div class="container">
       <form method="POST" enctype="multipart/form-data" action="enviado/">
           <div class="form-group">
               <label class="position">
                   <h2>Vitti Contact Center</h2>
               </label><br><br>
               <label for="exampleFormControlFile1"><strong>Arquivo de Texto</strong></label>
               <input type="file" name="arquivo" class="form-control-file" id="exampleFormControlFile1" required><br>
               <button type="submit" class="btn btn-success btn-block">Enviar</button>

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