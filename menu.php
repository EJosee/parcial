<?php

	echo '<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Beckenbauer</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.php">Inicio</a>
                    </li>
                    <li>
                        <a href="calzado.php">Calzado</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cuidado del Calzado <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="tcnnarrow.php">Tacón Narrow</a>
                            </li>
                            <li>
                                <a href="tcnclassic.php">Tacón Classic</a>
                            </li>
                            <li>
                                <a href="tcnwide.php">Tacón Wide</a>
                            </li>
                        </ul>
                    </li>
					<li>
						<a class="btn" data-toggle="modal" data-target="#contac">Contactanos</a>
					</li>
                </ul>  
       
                

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	';
?>