<?php

	echo '<nav class="navbar mycolor-navbar navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.php"><font size="5" color="#F5FBEF">Beckenbauer</font></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a style="color: #F5FBEF;" href="index.php">Inicio</a>
                    </li>
                    <li class="breadcrum">
                        <a style="color: #F5FBEF;" href="calzado.php">Calzado</a>
                    </li>
                    <li class="dropdown">
                        <a style="color: #F5FBEF;" href="#" class="dropdown-toggle" data-toggle="dropdown">Cuidado del Calzado <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="narrow.php">Tacón Narrow</a>
                            </li>
                            <li>
                                <a href="classic.php">Tacón Classic</a>
                            </li>
                            <li>
                                <a href="wide.php">Tacón Wide</a>
                            </li>
                        </ul>
                    </li>
					<li>
						<a style="color: #F5FBEF;" class="btn" data-toggle="modal" data-target="#contac">Contactanos</a>
					</li>
                </ul>  
       
                

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	';
?>