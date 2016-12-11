<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>L&A Associados</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<script type='text/javascript'>
//<![CDATA[

/* Expando Image Script 2008 John Davenport Scheuer
as first seen in http://www.dynamicdrive.com/forums/
username: jscheuer1 - This Notice Must Remain for Legal Use
*/

if (document.images){
(function(){
var cos, a = /Apple/.test(navigator.vendor), times = a? 20 : 40, speed = a? 40 : 20;
var expConIm = function(im){
im = im || window.event;
if (!expConIm.r.test (im.className))
im = im.target || im.srcElement || null;
if (!im || !expConIm.r.test (im.className))
return;
var e = expConIm,
widthHeight = function(dim){
return dim[0] * cos + dim[1] + 'px';
},
resize = function(){
cos = (1 - Math.cos((e.ims[i].jump / times) * Math.PI)) / 2;
im.style.width = widthHeight (e.ims[i].w);
im.style.height = widthHeight (e.ims[i].h);
if (e.ims[i].d && times > e.ims[i].jump){
++e.ims[i].jump;
e.ims[i].timer = setTimeout(resize, speed);
} else if (!e.ims[i].d && e.ims[i].jump > 0){
--e.ims[i].jump;
e.ims[i].timer = setTimeout(resize, speed);
}
}, d = document.images, i = d.length - 1;
for (i; i > -1; --i)
if(d[i] == im) break;
i = i + im.src;
if (!e.ims[i]){
im.title = '';
e.ims[i] = {im : new Image(), jump : 0};
e.ims[i].im.onload = function(){
e.ims[i].w = [e.ims[i].im.width - im.width, im.width];
e.ims[i].h = [e.ims[i].im.height - im.height, im.height];
e (im);
};
e.ims[i].im.src = im.src;
return;
}
if (e.ims[i].timer) clearTimeout(e.ims[i].timer);
e.ims[i].d = !e.ims[i].d;
resize ();
};

expConIm.ims = {};

expConIm.r = new RegExp('\\bexpando\\b');

if (document.addEventListener){
document.addEventListener('mouseover', expConIm, false);
document.addEventListener('mouseout', expConIm, false);
}
else if (document.attachEvent){
document.attachEvent('onmouseover', expConIm);
document.attachEvent('onmouseout', expConIm);
}
})();
}
//]]>
</script>
<style>
#footer {
width:1365px;
height:179px;
background-color:#F2F2F2;
margin:0px 0px 0px -9px;
}
.productos{
width:565px;
height:320px;
margin:20px -45px 20px 300px;
float:left;
color:#FF0000;
border:solid 2px #FF0000;
-moz-border-radius: 3px;
-webkit-border-radius: 7px;
border-radius: 7px;
}
</style>	
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="Index.php">L & A ASSOCIADOS</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="Index.php">Inicio</a>
                    </li>
                    <li>
                        <a href="Presentacion.php">Quienes Somos</a>
                    </li>
					<li>
                        <a href="Productos.php">Productos</a>
                    </li>
                    <li>
                        <a href="contact.html">Contacto</a>
                    </li>
					<li>
                        <a href="Direccion.htm">Como Llegar</a>
                    </li>
					<li>
                        <a href="Ingresar.php">Ingresar</a>
                    </li>
					<li>
                        <a href="Registro.php">Registrarse</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Otras Paginas<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                           <li>
                                <a href="Videos.php">Videos</a>
                            </li>
                            <li>
                                <a href="Noticias.php">Noticias</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	<!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill"><img src="img_2/logo.jpg" height="350" width="1365"></div>
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <div class="fill"><img src="img_2/2.jpg" height="350" width="1365"></div>
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <div class="fill"><img src="img_2/3.jpg"height="350" width="1365"></div>
                <div class="carousel-caption">
                </div>
            </div>
			<div class="item">
                <div class="fill"><img src="img_2/4.jpg"height="350" width="1365"></div>
                <div class="carousel-caption">
                </div>
            </div>
			<div class="item">
                <div class="fill"><img src="img_2/5.jpg"height="350" width="1365"></div>
                <div class="carousel-caption">
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>
	<!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-">
                <h1 class="page-header">&nbsp;&nbsp;&nbsp;Videos
                </h1>
                <ol class="breadcrumb">
                    <li><a href="Index.php">&nbsp;&nbsp;&nbsp;Inicio</a>
                    </li>
                    <li class="active">Videos</li>
                </ol>
            </div>
        </div>
</div>
	<div class="container">
        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
			<h4 align="center">Juego de Reballing</h4>
<div align="center" class="productos"><iframe width="560" height="315" src="https://www.youtube.com/embed/Y4v4i28G7PY" frameborder="0" allowfullscreen></iframe></div>			
			</div>
		</div>
	</div>		
		<div class="container">
        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
			<h4 align="center">Reballing con Stencil</h4>
<div align="center" class="productos"><iframe width="560" height="315" src="https://www.youtube.com/embed/QHoYgRHuMKY" frameborder="0" allowfullscreen></iframe></div>			
			</div>
		</div>
	</div>		
<div class="container">
        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
			<h4 align="center">Utilizar stencil de Calor Directo</h4>
<div align="center" class="productos"><iframe width="560" height="315" src="https://www.youtube.com/embed/5ZazrDsBlxY" frameborder="0" allowfullscreen></iframe></div>			
			</div>
		</div>
	</div>		
	<div class="container">
        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
			<h4 align="center">Calcular el Perfil de ACHI</h4>
<div align="center" class="productos"><iframe width="560" height="315" src="https://www.youtube.com/embed/oFNRbuE2e0U" frameborder="0" allowfullscreen></iframe></div>			
			</div>
		</div>
	</div>		
        <div class="row">
            <div class="col-lg-12">
			<h4 align="center">Clik para Ver mas Videos</h4>
<div align="center"><a href="https://www.youtube.com/" target="_blank"><img src="productos/Videos-icon.png" width="150" height="150"></a></div>			
			</div>
		</div>
	</div>		

<div id="footer">
<div style="width:180px; height:160px; float:left; margin:0 15px 0 0;  padding:0 15px 0 0;">
<div style="font-size:14px; color:#000; margin:0 0 10px 0; font-weight:bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Men�</div>
<ul>
<li><a href="Index.php">Inicio</a></li>
<li><a href="Presentacion.php">Quienes Somos</a></li>
<li><a href="Productos.php">Productos</a></li>
<li><a href="contact.html">Contacto</a></li>
<li><a href="Direccion.htm">Como LLegar</a></li>
<li><a href="Ingresar.php">Ingresar</a></li>
<li><a href="Registro.php">Registrarme</a></li>
</ul>
<div class="clear"></div>
</div>
<div style="width:200px; height:160px; float:left; margin:0 15px 0 0;   padding:0 0px 0 0;">
<div style="font-size:14px; color:#000; margin:5px 0 10px 30px; font-weight:bold;">Formas de Pago</div>
<img src="productos/footer_pago_dm.png">
<br>
<div style="font-size:14px; color:#000; margin:5px 0 10px 30px; font-weight:bold;">Otras Formas de Pago</div>
<img src="productos/footer_pago_otros.png">
</div>
<div class="clear"></div>
<div style="width:550px; height:160px; float:left; margin:0 15px 0 0; border-right:1px;  padding:0 0px 0 0;">
<div style="font-size:14px; color:#000; margin:5px 0 10px 200px; font-weight:bold;">Datos de contacto</div>
<div style="font-size:14px; color:#000; margin:5px 0 10px 200px; ">(0370)4-425-650 </div>
<div style="font-size:14px; color:#000; margin:5px 0 10px 200px; "><a href="L&Asossioados@hotmail.com">L&Asossioados@hotmail.com</a></div>	
<div style="font-size:14px; color:#000; margin:5px 0 10px 200px; ">Fotheringhan 2165 | Formosa Argentina</div>
<div class="clear"></div>
</div>
<div style="width:250px; height:160px; float:right;">

<div style="float:right; width:210px; height:38px; background:url(imagenes/logo.png); margin:0 0 20px 0;"></div>

<div style="float:right;">
<div style="font-size:14px; color:#000; margin:0 5px 0 0; font-weight:bold; float:left; line-height:22px;">Seguinos en: </div>
<a href="http://www.facebook.com/pages/Laptop-Aid/317783148302881" target="_blank"><div style="width:22px; height:22px; float:left; background:url(productos/fc.png); margin:0 5px 0 0;"></div></a>
<a href="#"><div style="width:22px; height:22px; float:left; background:url(productos/tw.png); margin:0 5px 0 0;"></div></a>
<a href="#"><div style="width:22px; height:22px; float:left; background:url(productos/yt.png); margin:0 5px 0 0;"></div></a>
<div id="fb-root"></div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-like"></div>
</div>

</div>

<div class="clear"></div>
</div>
</div>	
<script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
</body>

</html>
