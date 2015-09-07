<!DOCTYPE html>
<html lang="en">

<head>

    <?php include('head.php'); ?>
	<title>Beckenbauer/Tacon Wide</title>
</head>

<body>
	

    <!-- Carousel -->
    <?php include('carrousel.php'); ?>
		
    <!-- Navegacion/menu -->
    <?php include('menu.php'); ?>

    <!-- Content/contenedor -->
    <div class="container">

        <!-- Calzado Section -->
        <div class="row">
     
			<div class="col-lg-12">
                <h2 class="page-header">
                    Protector Modelo Wide
                </h2>
            </div>
            
        </div>
        <!-- Section end -->

      <!--slide list Section -->
        <div class="container">
		<div class="row text-center">
			<div class="well">
            <!-- Carousel-->            
            <div id="othCarousel" class="carousel slide">
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="row text-center">
							<div class="col-md-3 col-sm-6 hero-feature">
								<div class="thumbnail">
									<img class="img-circle  img-center" src="imgs/p-narrow/01.jpg" width="100px" height="100px">
									<div class="caption">
										<h3>Descripcion</h3>
										<p>Precio: $0.35</p>
										<p>
											<a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#vis1">Comprar!</a>
										</p>
									</div>
								</div>
							</div>

							<div class="col-md-3 col-sm-6 hero-feature">
								<div class="thumbnail">
									<img class=" img-center" src="imgs/p-narrow/02.jpg" width="100px" height="100px">
									<div class="caption">
										<h3>Descripción</h3>
										<p>Precio: $0.45</p>
										<p>
											<a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#vis2">Comprar!</a>
										</p>
									</div>
								</div>
							</div>

							<div class="col-md-3 col-sm-6 hero-feature">
								<div class="thumbnail">
									<img class="img-circle  img-center" src="imgs/p-narrow/03.jpg" width="100px" height="100px">
									<div class="caption">
										<h3>Descripcion</h3>
										<p>Precio: $0.35</p>
										<p>
											<a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#vis3">Comprar!</a>
										</p>
									</div>
								</div>
							</div>

							<div class="col-md-3 col-sm-6 hero-feature">
								<div class="thumbnail">
									<img class=" img-center" src="imgs/p-narrow/04.jpg" width="100px" height="100px">
									<div class="caption">
										<h3>Descripción</h3>
										<p>Precio: $0.45</p>
										<p>
											<a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#vis4">Comprar!</a>
										</p>
									</div>
								</div>
							</div>
						</div>
						</div>
					<!-- Item 2 -->
					<div class="item">
                        <div class="row text-center">
							<div class="col-md-3 col-sm-6 hero-feature">
								<div class="thumbnail">
									<img class="img-circle  img-center" src="imgs/p-narrow/05.jpg" width="100px" height="100px">
									<div class="caption">
										<h3>Descripcion</h3>
										<p>Precio: $0.35</p>
										<p>
											<a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#vis9">Comprar!</a>
										</p>
									</div>
								</div>
							</div>

							<div class="col-md-3 col-sm-6 hero-feature">
								<div class="thumbnail">
									<img class=" img-center" src="imgs/p-narrow/06.jpg" width="100px" height="100px">
									<div class="caption">
										<h3>Descripción</h3>
										<p>Precio: $0.45</p>
										<p>
											<a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#vis10">Comprar!</a>
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
                </ol>                
            </div><!-- End Carousel --> 
        </div><!-- End Well -->
    </div>
</div>
		
		<!-- Modals/modales -->
		<div class="modal fade" id="contac">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Contactanos</h4>
					</div>
					<div class="row">
							<div class="col-md-5">
								<img class="img-responsive" src="imgs/contac.jpg" alt="">
							</div>
							<div class="col-md-5">
								<strong><p>Puedes contactarnos al tlefono</p></strong>
									<li class="glyphicon glyphicon-earphone" aria-hidden="true"> 2222-2222</li>
									<br/>
								<strong><p>O escribenos un correo al</p></strong>
									<li class="glyphicon glyphicon-envelope" aria-hidden="true"> example@example.com</li>
							</div>
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
								<img class="img-responsive" src="imgs/calz/01.jpg" alt="">
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
								<img class="img-responsive" src="imgs/calz/02.jpg" alt="">
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
								<img class="img-responsive" src="imgs/calz/03.jpg" alt="">
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
								<img class="img-responsive" src="imgs/calz/04.jpg" alt="">
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
								<img class="img-responsive" src="imgs/calz/05.jpg" alt="">
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
								<img class="img-responsive" src="imgs/calz/06.jpg" alt="">
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
								<img class="img-responsive" src="imgs/calz/07.jpg" alt="">
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
								<img class="img-responsive" src="imgs/calz/08.jpg" alt="">
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
		
		<!-- Modal Item 2 -->
		<div class="modal fade" id="vis9">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Titulo</h4>
					</div>
					<div class="row">
							<div class="col-md-5">
								<img class="img-responsive" src="imgs/calz/09.jpg" alt="">
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
		
		<div class="modal fade" id="vis10">
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
		
		<div class="modal fade" id="vis11">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Titulo</h4>
					</div>
					<div class="row">
							<div class="col-md-5">
								<img class="img-responsive" src="imgs/calz/11.jpg" alt="">
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
		
		<div class="modal fade" id="vis12">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Titulo</h4>
					</div>
					<div class="row">
							<div class="col-md-5">
								<img class="img-responsive" src="imgs/calz/12.jpg" alt="">
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
		
		<div class="modal fade" id="vis13">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Titulo</h4>
					</div>
					<div class="row">
							<div class="col-md-5">
								<img class="img-responsive" src="imgs/calz/13.jpg" alt="">
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
		
		<div class="modal fade" id="vis14">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Titulo</h4>
					</div>
					<div class="row">
							<div class="col-md-5">
								<img class="img-responsive" src="imgs/calz/14.jpg" alt="">
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
		
		<div class="modal fade" id="vis15">
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
		<!--Modals end -->
		
		<div class="modal fade" id="vis16">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Titulo</h4>
					</div>
					<div class="row">
							<div class="col-md-5">
								<img class="img-responsive" src="imgs/calz/16.jpg" alt="">
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
		$("#othCarousel").carousel({
			interval: 6000 //speed to changes
		})
		</script>
		<script>
		$(".carousel").carousel({
			interval: 4000 //speed to changes
		})
		</script>

</body>

</html>
