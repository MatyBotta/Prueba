<!DOCTYPE html>
<html lang="es" xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Secretaría</title>

    <link href="bootstrap2.css" rel="stylesheet" />
    <link href="font-awesome.css" rel="stylesheet" />
    <link href="custom.css" rel="stylesheet" >
    <link href="tablas.css" rel="stylesheet" />
    <link rel="stylesheet" href=" footer.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="directivos.css">
    

    
    
</head>
<body>
       
           
          
    <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="logo" href="inicio.html" ><img src="../IMG/Escuela.png" style="width: 40px; margin-top: 2px;"/></a>
                    
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="inicio.html">Volver</a></li>
                        <li><a href="inicio.html">Cerrar Sesión</a></li>
                    </ul>
                </div>

            </div>
        </div>
        
        
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li class="text-center user-image-back">
                        <img src="../IMG/find_user.png" class="img-responsive" />
                     
                    </li>


                   
                   

                    <!--<li  style="background: #fff;">
                        <a href="#"><i class="fa fa-table "></i>Ver listas de cada modalidad</a>
                    </li>-->

                    
                    
                    <li  style="background: #fff;">
                    
                    
                    <h3>Filtar por:</h3>                                   
                   


                    <div class="preguntas">

                        <div class="wrapper">    
            
                            <div class="wrap-6">
                                <input class="input" type="radio" id="tab-6" name="tabs">
                                <label class="label" for="tab-6"><div>Listas de espera</div><div class="cross"></div> </label>
                                <div class="questions">
                                    <div class="question-wrap">
                                        <input class="input" type="radio" id="question-7" name="question" >
                                        <label class="label" for="question-7"><div>Modalidades</div></label>
                                    
                                        <div class="content">
                                        <form action="xespera.php" method = "post" require>
                                            <div class="question-wrap">
                                                <input class="input" type="radio" id=1 name="question" value = 1>
                                                <label class="label" for=1><div style="margin-left: 90%;">Economia</div></label>
                                            </div>

                                            <div class="question-wrap">
                                                <input class="input" type="radio" id=3 name="question" value = 3>
                                                <label class="label" for=3><div style="margin-left: 90%;">Electronica</div></label> 
                                            </div>

                                            <div class="question-wrap">
                                                <input class="input" type="radio" id=4 name="question" value = 4>
                                                <label class="label" for=4><div style="margin-left: 90%;">Informatica</div></label> 
                                            </div>
                 
                                            <div class="question-wrap">
                                                <input class="input" type="radio" id=2 name="question" value = 2>
                                                <label class="label" for=2><div style="margin-left: 90%;">Naturales</div></label> 
                                            </div>

                                            <div class="question-wrap">
                                                <input class="input" type="radio" id=5 name="question" value = 5>
                                                <label class="label" for=5><div style="margin-left: 90%;">Multimedios</div></label> 
                                            </div>
                                                <button type="submit">jjjjjjjj</button>
                                            </form>
                                        </div>
                                
                                    </div>
                                
                                    <div class="question-wrap">
                                    <form action="xsoloespera.php" method = "post">
                                    <input class="input" type="submit" id="modalidad" name="question">
                                                <label class="label" for="modalidad"><div style="margin-left: 90%;">Todos</div></label>
                                                </form>
                                            </div>

                                </div>
                                
                            </div>
                            

                                
                        <!--LISTAS CONFIRMADAS-->     
                            

                            <div class="wrap-8">
                                <input class="input" type="radio" id="tab-8" name="tabs">
                                <label class="label" for="tab-8"><div>Listas confirmadas</div><div class="cross"></div> </label>
                                <div class="questions">
                                    <div class="question-wrap">
                                        <input class="input" type="radio" id="question-1" name="question">
                                        <label class="label" for="question-1"><div>Modalidad</div>  </label>
                                        <div class="content">
                                        <form action="xadentro.php" method = "post" require>
                                        <div class="question-wrap">
                                                <input class="input" type="radio" id=1 name="question" value = 1>
                                                <label class="label" for=1><div style="margin-left: 90%;">Economia</div></label>
                                            </div>

                                            <div class="question-wrap">
                                                <input class="input" type="radio" id=3 name="question" value = 3>
                                                <label class="label" for=3><div style="margin-left: 90%;">Electronica</div></label> 
                                            </div>

                                            <div class="question-wrap">
                                                <input class="input" type="radio" id=4 name="question" value = 4>
                                                <label class="label" for=4><div style="margin-left: 90%;">Informatica</div></label> 
                                            </div>
                 
                                            <div class="question-wrap">
                                                <input class="input" type="radio" id=2 name="question" value = 2>
                                                <label class="label" for=2><div style="margin-left: 90%;">Naturales</div></label> 
                                            </div>

                                            <div class="question-wrap">
                                                <input class="input" type="radio" id=5 name="question" value = 5>
                                                <label class="label" for=5><div style="margin-left: 90%;">Multimedios</div></label> 
                                            </div>
                                                <button type="submit">aaaaaaaaaa</button>
                                            </form>
                                    </div>
                                </div>
                                <div class="question-wrap">
                                        <form action="xsoloadentro.php" method = "post">
                                    <input class="input" type="submit" id="modalidad" name="question">
                                                <label class="label" for="modalidad"><div style="margin-left: 90%;">Todos</div></label>
                                    </div>
                                    </form>
                                </div>
                            </div>

                            <!--AMBAS LISTAS-->

                        <div class="wrap-9">
                            <input class="input" type="radio" id="tab-9" name="tabs">
                            <label class="label" for="tab-9"><div>Ambas listas</div><div class="cross"></div> </label>
                            <div class="questions">
                                <div class="question-wrap">
                                    <input class="input" type="radio" id="question-3" name="question">
                                    <label class="label" for="question-3"><div>Modalidad</div>  </label>
                                    <div class="content">
                                    <div class="question-wrap">
                                        <form action="xmodalidad.php" method="post">
                                        <input class="input" type="submit" id=1 name="question" value = 1>
                                                <label class="label" for=1><div style="margin-left: 90%;">Economia</div></label>
                                            </div>

                                            <div class="question-wrap">
                                                <input class="input" type="submit" id=3 name="question" value = 3>
                                                <label class="label" for=3><div style="margin-left: 90%;">Electronica</div></label> 
                                            </div>

                                            <div class="question-wrap">
                                                <input class="input" type="submit" id=4 name="question" value = 4>
                                                <label class="label" for=4><div style="margin-left: 90%;">Informatica</div></label> 
                                            </div>
                 
                                            <div class="question-wrap">
                                                <input class="input" type="submit" id=2 name="question" value = 2>
                                                <label class="label" for=2><div style="margin-left: 90%;">Naturales</div></label> 
                                            </div>

                                            <div class="question-wrap">
                                                <input class="input" type="submit" id=5 name="question" value = 5>
                                                <label class="label" for=5><div style="margin-left: 90%;">Multimedios</div></label> 
                                            </div>
                                </div>
                            </div>
                            <div class="question-wrap">
                            <form action="xpromedio.php" method = "post">
                                    <input class="input" type="submit" id="modalidad" name="question">
                                                <label class="label" for="modalidad"><div style="margin-left: 90%;">Todos</div></label>
                                    </div>
                                    </form>
                                    
                        </div>


                        <!--CURSOS-->

                        <div class="wrap-7">
                            <input class="input" type="radio" id="tab-7" name="tabs">
                            <label class="label" for="tab-7"><div>Cursos</div><div class="cross"></div> </label>
                            <div class="questions">
                            <div class="question-wrap">
                                                <input class="input" type="submit" id="a" name="question" >
                                                <label class="label" for="question-9"><a href="inicio.html" style="margin-left: 45%;"><div>A</div></a>  </label>
                                            </div>

                                            <div class="question-wrap">
                                                <input class="input" type="radio" id="b" name="question" >
                                                <label class="label" for="question-10"><a href="inicio.html" style="margin-left: 45%;"><div>B</div></a></label>
                                            </div>

                                            <div class="question-wrap">
                                                <input class="input" type="checkbox" id="d" name="question" >
                                                <label class="label" for="question-11"><a href="inicio.html" style="margin-left: 45%;"><div>D</div></a></label>
                                            </div>
                 
                                            <div class="question-wrap">
                                                <input class="input" type="checkbox" id="e" name="question" >
                                                <label class="label" for="question-12"><a href="inicio.html" style="margin-left: 45%;"><div>E</div></a></label>
                                            </div>

                                            <div class="question-wrap">
                                                <input class="input" type="checkbox" id="g" name="question" >
                                                <label class="label" for="question-13"><a href="inicio.html" style="margin-left: 45%;"><div>G</div></a></label>
                                            </div>
                                </div>
                                </div>
                            
                            </div>
                        </div>

                    </li>
                </ul>
            </div>
        </nav>

        <div id="page-wrapper" >
            <div id="page-inner" style="min-height:600px;">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Listas por modalidad</h2>   
                    </div>
                </div>              
               
                  <hr>         
    </div>
            </div>  
        </div>
        </tbody>
    <script src="../js/jquery-1.10.2.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.metisMenu.js"></script>
    <script src="../js/custom.js"></script>
</div>




</body>
<footer class="pie-pagina" style="left: 0; right: 0; top:absolute; bottom:0;">
    <div class="grupo-2">
        <small>&copy; 2022 <b>7mo Informática</b> - Grupo 3</small>
    </div>
</footer>

</html>