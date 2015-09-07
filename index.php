<!DOCTYPE html>
<html lang="en">

<head>

    <?php include('head.php'); ?>
	<title>Beckenbauer</title>
</head>

<body>
	

    <!-- Carousel -->
    <?php include('carrousel.php'); ?>
		
    <!-- Navegacion/menu -->
    <?php include('menu.php'); ?>

    <!-- Content -->
    <div class="container">

        <!-- theme Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Bienvenido al sitio de Beckenbauer
                </h1>
            </div>
			<div class="col-lg-12">
                <h2 class="page-header">
                    Lo más vendido
                </h2>
            </div>
            
        </div>
        <!-- Section end -->

        <!--slide list Section -->
        <div class="container">
		<div class="row">
			<div class="well">
            <!-- Carousel-->            
            <div id="othCarousel" class="carousel slide">
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img class="img-circle img-responsive img-center" src="imgs/calz/28.jpg" alt="">
                    <div class="caption">
                        <h3>Descripcion</h3>
                        <p>....</p>
                        <p>
                            <a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#vis1">Comprar!</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="imgs/calz/15.jpg" alt="">
                    <div class="caption">
                        <h3>Descripción</h3>
                        <p>...</p>
                        <p>
                            <a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#vis2">Comprar!</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img class="img-circle img-responsive img-center" src="imgs/calz/29.jpg" alt="">
                    <div class="caption">
                        <h3>Descripcion</h3>
                        <p>....</p>
                        <p>
                            <a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#vis3">Comprar!</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="imgs/p-narrow/01.jpg" alt="">
                    <div class="caption">
                        <h3>Descripción</h3>
                        <p>...</p>
                        <p>
                            <a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#vis4">Comprar!</a>
                        </p>
                    </div>
                </div>
            </div>
            </div>
            </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="imgs/calz/10.jpg" alt="">
                    <div class="caption">
                        <h3>Descripción</h3>
                        <p>...</p>
                        <p>
                            <a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#vis5">Comprar!</a>
                        </p>
                    </div>
                </div>
            </div>
			
			<div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img class="img-circle img-responsive img-center" src="imgs/calz/23.jpg" alt="">
                    <div class="caption">
                        <h3>Descripcion</h3>
                        <p>....</p>
                        <p>
                            <a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#vis6">Comprar!</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="imgs/p-narrow/05.jpg" alt="">
                    <div class="caption">
                        <h3>Descripción</h3>
                        <p>...</p>
                        <p>
                            <a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#vis7">Comprar!</a>
                        </p>
                    </div>
                </div>
            </div>
			
			<div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img class="img-circle img-responsive img-center" src="imgs/p-narrow/03.jpg" alt="">
                    <div class="caption">
                        <h3>Descripcion</h3>
                        <p>....</p>
                        <p>
                            <a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#vis8">Comprar!</a>
                        </p>
                    </div>
                </div>
            </div>
            </div>
            </div>
                <a class="left carousel-control" href="#othCarousel" data-slide="prev"><span class="icon-prev"></span></a>
                <a class="right carousel-control" href="#othCarousel" data-slide="next"><span class="icon-next"></span></i></a>
                
                <ol class="carousel-indicators">
                    <li data-target="#othCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#othCarousel" data-slide-to="1"></li>
                    <li data-target="#othCarousel" data-slide-to="2"></li>
                </ol>                
            </div><!-- End Carousel --> 
        </div><!-- End Well -->
    </div>
</div>
        <!-- Section end -->
		
		<!-- Modals -->
		<div class="modal fade" id="contac">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Contactanos</h4>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-md-5">
								<img class="img-responsive" src="imgs/contac.jpg" alt="">
							</div>
							<div class="col-md-5">
								<strong><p>Puedes contactarnos al telefono</p></strong>
									<li class="glyphicon glyphicon-earphone" aria-hidden="true"> 2222-2222</li>
									<br/>
								<strong><p>O escribenos un correo al</p></strong>
									<li class="glyphicon glyphicon-envelope" aria-hidden="true"> example@example.com</li>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
		
		
		<div class="modal fade" id="vis1">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Titulo</h4>
					</div>
					<div class="row">
							<div class="col-md-5">
								<img class="img-responsive" src="imgs/calz/28.jpg" alt="">
							</div>
							<div class="col-md-5">
								<strong><p>Detalles</p></strong>
									<li class="glyphicon " aria-hidden="true"> </li>
									<br/>
							</div>
						</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Realizar Compra!</button>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
		
		<div class="modal fade" id="vis2">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Titulo</h4>
					</div>
					<div class="row">
							<div class="col-md-5">
								<img class="img-responsive" src="imgs/calz/15.jpg" alt="">
							</div>
							<div class="col-md-5">
								<strong><p>Detalles</p></strong>
									<li class="glyphicon " aria-hidden="true"> </li>
									<br/>
							</div>
						</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Realizar Compra!</button>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
		
		<div class="modal fade" id="vis3">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Titulo</h4>
					</div>
					<div class="row">
							<div class="col-md-5">
								<img class="img-responsive" src="imgs/calz/29.jpg" alt="">
							</div>
							<div class="col-md-5">
								<strong><p>Detalles</p></strong>
									<li class="glyphicon " aria-hidden="true"> </li>
									<br/>
							</div>
						</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Realizar Compra!</button>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
		
		<div class="modal fade" id="vis4">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Titulo</h4>
					</div>
					<div class="row">
							<div class="col-md-5">
								<img class="img-responsive" src="imgs/p-narrow/01.jpg" alt="">
							</div>
							<div class="col-md-5">
								<strong><p>Detalles</p></strong>
									<li class="glyphicon " aria-hidden="true"> </li>
									<br/>
							</div>
						</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Realizar Compra!</button>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
		
		<div class="modal fade" id="vis5">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Titulo</h4>
					</div>
					<div class="row">
							<div class="col-md-5">
								<img class="img-responsive" src="imgs/calz/10.jpg" alt="">
							</div>
							<div class="col-md-5">
								<strong><p>Detalles</p></strong>
									<li class="glyphicon " aria-hidden="true"> </li>
									<br/>
							</div>
						</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Realizar Compra!</button>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
		
		<div class="modal fade" id="vis6">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Titulo</h4>
					</div>
					<div class="row">
							<div class="col-md-5">
								<img class="img-responsive" src="imgs/calz/23.jpg" alt="">
							</div>
							<div class="col-md-5">
								<strong><p>Detalles</p></strong>
									<li class="glyphicon " aria-hidden="true"> </li>
									<br/>
							</div>
						</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Realizar Compra!</button>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
		<!--Modals end -->
		
		<div class="modal fade" id="vis7">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Titulo</h4>
					</div>
					<div class="row">
							<div class="col-md-5">
								<img class="img-responsive" src="imgs/p-narrow/05.jpg" alt="">
							</div>
							<div class="col-md-5">
								<strong><p>Detalles</p></strong>
									<li class="glyphicon " aria-hidden="true"> </li>
									<br/>
							</div>
						</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Realizar Compra!</button>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
		<!--Modals end -->
		
		<div class="modal fade" id="vis8">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Titulo</h4>
					</div>
					<div class="row">
							<div class="col-md-5">
								<img class="img-responsive" src="imgs/p-narrow/03.jpg" alt="">
							</div>
							<div class="col-md-5">
								<strong><p>Detalles</p></strong>
									<li class="glyphicon " aria-hidden="true"> </li>
									<br/>
							</div>
						</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Realizar Compra!</button>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
		<!--Modals end -->
		
        <!-- Other Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Tienda OnLine</h2>
            </div>
            <div class="col-md-5">
			<img class="img-responsive" src="imgs/logo.png" alt="">
                
            </div>
            <div class="col-md-5">
                <strong><p>Beckenbauer, sitio oficial. Dedicada a la venta de:</p></strong>
                <ul>
                    <li>Zapatos para mujer</li>
                    <li>De tacon y plataforma</li>
                    <li>Protectores para tacon</li>
                </ul>
            </div>
        </div>
        <!-- Section end -->

        <hr>
        <!-- Call to Action Section -->
        <div class="well">
            <div class="row">
                <div class="col-md-8">
                    <p>Descripcion breve.</p>
                </div>
            </div>
        </div>
		<!-- Section end-->
        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; 2015</p>
                </div>
            </div>
        </footer>
		<!-- End -->
    </div>
    <!-- End Container -->

		<!-- Activate the Carousel -->
		<script>
		$(".carousel").carousel({
			interval: 5000 //speed to changes
		})
		</script>
		<script>
		$("othcarousel").carousel({
			interval: 7000 //speed to changes
		})
		</script>

</body>

</html>
