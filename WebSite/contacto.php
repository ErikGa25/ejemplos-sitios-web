<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
	    <meta name="description" content="">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Web Site</title>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link rel="stylesheet" href="css/styles.css">
    </head>

    <body>
        <?php include('menu.php'); ?>

        <div class="container principal-container">
            <div class="row">
                <div class="col s12">
                    <form action="" name="form_acerca" method="POST" enctype="">
                        <h4>Contacto:</h4>
                        <br>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">account_circle</i>
                                <input id="nombre" type="text" class="validate">
                                <label for="nombre">Nombre:</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">email</i>
                                <input id="email" type="email" class="validate">
                                <label for="email">Correo:</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">create</i>
                                <input id="asunto" type="text" class="validate">
                                <label for="asunto">Asunto:</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">comment</i>
                                <textarea id="textarea1" class="materialize-textarea" data-length="120"></textarea>
                                <label for="textarea1">Comentarios</label>
                            </div>
                        </div>
                        <br>
                        <div id="send-button">
                            <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
                                <i class="material-icons right">send</i>
                            </button>
                        </div>

                        <p id="notificacion"><small>* Seras notificado en un máximo de 5 días.</small></p>
                        <br>
                    </form>
                </div>
            </div>
        </div>

        <?php include('footer.php'); ?>

        <!-- Compiled and minified JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script>
            $(document).ready(function() {
                $('textarea#textarea1').characterCounter();
            });
        </script>
    </body>
</html>