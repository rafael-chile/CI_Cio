<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Colegio CIO de M&eacute;xico ::: <?=$title;?> :::</title>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<style type="text/css">
		#footer {
			font:14px/1.6 Georgia, Palatino, Palatino Linotype, Times, Times New Roman, serif;
			color:#333;
			background:#eee;
			font-family:Verdana, Arial, Helvetica, sans-serif;
		}
	</style> 

	<?php 

		switch ($title) {
			case 'Inicio':
					?>
					
					<link rel="stylesheet" href="assets/specific/themes/dark/dark.css" type="text/css" media="screen" />
					<link rel="stylesheet" href="assets/specific/nivo-slider.css" type="text/css" media="screen" />
					<link rel="stylesheet" href="assets/specific/style.css" type="text/css" media="screen" />
					<!--LightBox empieza -->    
					    <!-- Add jQuery library -->
					    <script type="text/javascript" src="assets/specific/source_fancy/jquery-1.8.2.min.js"></script>
					    <!-- Add fancyBox main JS and CSS files -->
					    <script type="text/javascript" src="assets/specific/source_fancy/jquery.fancybox.js?v=2.1.1"></script>
					    <link rel="stylesheet" type="text/css" href="assets/specific/source_fancy/jquery.fancybox.css?v=2.1.1" media="screen" />
					    <!-- Add Media helper (this is optional) -->
					    <script type="text/javascript" src="assets/specific/source_fancy/helpers/jquery.fancybox-media.js?v=1.0.4"></script>

					        <script type="text/javascript">
					            $(document).ready(function() {
					                /*
					                 *  Simple image gallery. Uses default settings
					                 */
					    
					                $('.fancybox').fancybox();
					    
					                /*
					                 *  Different effects
					                 */
					    
					                // Change title type, overlay closing speed
					                $(".fancybox-effects-a").fancybox({
					                    helpers: {
					                        title : {
					                            type : 'outside'
					                        },
					                        overlay : {
					                            speedOut : 0
					                        }
					                    }
					                });
					    
					                // Disable opening and closing animations, change title type
					                $(".fancybox-effects-b").fancybox({
					                    openEffect  : 'none',
					                    closeEffect	: 'none',
					    
					                    helpers : {
					                        title : {
					                            type : 'over'
					                        }
					                    }
					                });
					    
					                // Set custom style, close if clicked, change title type and overlay color
					                $(".fancybox-effects-c").fancybox({
					                    wrapCSS    : 'fancybox-custom',
					                    closeClick : true,
					    
					                    openEffect : 'none',
					    
					                    helpers : {
					                        title : {
					                            type : 'inside'
					                        },
					                        overlay : {
					                            css : {
					                                'background' : 'rgba(238,238,238,0.85)'
					                            }
					                        }
					                    }
					                });
					    
					                // Remove padding, set opening and closing animations, close if clicked and disable overlay
					                $(".fancybox-effects-d").fancybox({
					                    padding: 0,
					    
					                    openEffect : 'elastic',
					                    openSpeed  : 150,
					    
					                    closeEffect : 'elastic',
					                    closeSpeed  : 150,
					    
					                    closeClick : true,
					    
					                    helpers : {
					                        overlay : null
					                    }
					                });
					    
					                /*
					                 *  Button helper. Disable animations, hide close button, change title type and content
					                 */
					    
					                $('.fancybox-buttons').fancybox({
					                    openEffect  : 'none',
					                    closeEffect : 'none',
					    
					                    prevEffect : 'none',
					                    nextEffect : 'none',
					    
					                    closeBtn  : false,
					    
					                    helpers : {
					                        title : {
					                            type : 'inside'
					                        },
					                        buttons	: {}
					                    },
					    
					                    afterLoad : function() {
					                        this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
					                    }
					                });
					    
					    
					                /*
					                 *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
					                 */
					    
					                $('.fancybox-thumbs').fancybox({
					                    prevEffect : 'none',
					                    nextEffect : 'none',
					    
					                    closeBtn  : false,
					                    arrows    : false,
					                    nextClick : true,
					    
					                    helpers : {
					                        thumbs : {
					                            width  : 50,
					                            height : 50
					                        }
					                    }
					                });
					    
					                /*
					                 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
					                */
					                $('.fancybox-media')
					                    .attr('rel', 'media-gallery')
					                    .fancybox({
					                        openEffect : 'none',
					                        closeEffect : 'none',
					                        prevEffect : 'none',
					                        nextEffect : 'none',
					    
					                        arrows : false,
					                        helpers : {
					                            media : {},
					                            buttons : {}
					                        }
					                    });
					            });
					        </script>       
					    
					        <style type="text/css">
					            .fancybox-custom .fancybox-skin {
					                box-shadow: 0 0 50px #222;
					            }


					        </style>    
					    <!--LightBox termina -->   
					    <script type="text/javascript" src="assets/specific/jquery.nivo.slider.js"></script>
					    <script type="text/javascript">
					    $(window).load(function() {
					        $('#slider').nivoSlider();
					    });
					    </script>

					<?php
				break;
			case 'Conocenos':
					?>
					
						<link href="assets/specific/div_jquery/style.css" rel="stylesheet" type="text/css">
						<script src="assets/specific/div_jquery/jquery_002.js" type="text/javascript"></script>
						<script src="assets/specific/div_jquery/custom.js" type="text/javascript"></script>
						<script src="assets/specific/div_jquery/jquery.js" type="text/javascript"></script>

						<script type="text/javascript">
							$(document).ready(function() {
								$("#changeText1").click(function() { $("#textBox").html("<br/><br/><img src=\"<?php echo base_url().'assets/';?>images/miss_sylvia.jpg\"  class=\"mimagen\" /><p>Miss Sylvia</p><br/><p>Fundadora original del colegio Irlandes O'Farrill en 1978,  hoy Colegio CIO de México S.C. </p><br/><p>Quien a traves de los años ha visto pasar generaciones de niños que se han convertido en lideres, profesionistas exitosos destacados a nivel nacional e internacional con solidez y valores morales. </p><br/><p>Preocupada siempre por atender las necesidades de los padres de familia y sus hijos que ya son segunda generación, pone a sus ordenes las nuevas y modernas instalaciones de primaria mixta, laica, bilingüe con su experimentado equipo de trabajo. </p><br/><p>Después de 30 Años  nos renovamos como el Colegio CIO de México. </p><br/><p>Más comprometidos con sus ALUMNOS PADRES DE FAMILIA Y COMUNIDAD.</p>"); });
								$("#changeText2").click(function() { $("#textBox").html("<br/><br/><p>Proporcionar bases firmes y sólidas a nuestros alumnos a través de valores universales y las mejores practicas de educación, que los transformen en personas integras y de libre pensamiento que les permita trascender a la excelencia en cualquier ámbito de desarrollo con LIDERAZGO, RESPONSABILIDAD Y COMPROMISO que satisfagan las necesidades nacionales e internacionales. <p/> <br/><img src=\"<?php echo base_url().'assets/';?>images/P1010827.jpg\"/ style=\"margin-left: 56px\">"); });
								$("#changeText3").click(function() { $("#textBox").html("<br/><br/><p>Impulsar el cambio educativo y convertirnos en los líderes de la educación personalizada de manera integral de alto nivel que proporcione satisfacción y plenitud en el horizonte infinito de conocimiento renovando y fortaleciendo las capacidades de nuestros alumnos.</p><br/><br/><br/><img src=\"<?php echo base_url().'assets/';?>images/road.jpg\" style=\"margin-left: 140px\"/><br/>"); });
								$("#changeText4").click(function() { $("#textBox").html("<br/><br/><img src=\"<?php echo base_url().'assets/';?>images/Filosofia.jpg\"  class=\"mimagen\" /><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Trabajar en equipo maestros, alumnos y padres de familia satisfaciendo y superando siempre sus expectativas y requerimientos de orientación y guía en una asociación estratégica que garantice el crecimiento sostenido de todos a través de un servicio educativo de excelencia. </p>"); });
								$("#changeText5").click(function() { $("#textBox").html("<br/><br/><p>Fundamentos CIO</p><br/><p>Impulsores del cambio educativo prepara y proporciona a sus hijos las mejores prácticas de educación que garantice su seguridad, realización y felicidad. </p><br/><p>A través de valores y acciones como: </p><br/><ul><li>&bull; Auto Dirección</li><li>&bull; Integridad</li><li>&bull; Responsabilidad</li><li>&bull; Igualdad de género</li><li>&bull; Cuerpo y mente sana</li><li>&bull; Liderazgo</li><li>&bull; Toma de decisiones</li><li>&bull; Ética</li><li>&bull; Compromiso</li><li>&bull; Visión</li></ul><br><p>Y para usted padre de familia las mejores cuotas de colegiaturas de la zona</p>"); });
								$("#changeText6").click(function() { $("#textBox").html("<br/><br/><p>Al Educar a sus hijos buscamos hacer surgir en ellos la inquietud y compromiso para su desarrollo integral.</p><br/><p>Adquirir, asimilar, y desarrollar valores, responsabilidad y respeto ayudándolos a identificar sus fortalezas y debilidades.</p><br/><p>Explotando su capacidad de niñ@s al máximo que les permita ser en un futuro adolescentes y adultos maduros y responsables.</p><br/><br/><img src=\"<?php echo base_url().'assets/';?>images/chess.jpg\"/ style=\"margin-left: 56px\">"); });
							});

						</script>
						<style type="text/css">
							
							
							.mimagen { vertical-align: top; float: left; margin-right:18px; } 
							* {font-family:Verdana, Arial, Helvetica, sans-serif;}

							
						</style> 
					    

					<?php
				break;
			case 'Kinder':
					?>
					
						<link href="assets/specific/div_jquery/style.css" rel="stylesheet" type="text/css">
						<script src="assets/specific/div_jquery/jquery_002.js" type="text/javascript"></script>
						<script src="assets/specific/div_jquery/custom.js" type="text/javascript"></script>
						<script src="assets/specific/div_jquery/jquery.js" type="text/javascript"></script>
						<script type="text/javascript">
							$(document).ready(function() {
								$("#changeText1").click(function() { $("#textBox").html("<br/><br/><p>Es un gusto darles la bienvenida a nuestra sección de Preescolar, donde los niños inician la experiencia de buscar nuevos aprendizajes, socializar y asumir nuevos retos todo esto bajo un ambiente que les brinde seguridad emocional. </p><br/><p>Somos un Preescolar bilingüe, por lo que el programa está elaborado en ambos idiomas, iniciándolos en el aprendizaje de un nuevo idioma, donde construiremos las bases para más adelante tener una total inmersión, dándoles así invaluables herramientas para el futuro. </p><br/><p>Dentro del Colegio buscamos desarrollar habilidades que les permitan disfrutar y convivir al mismo tiempo que adquieren nuevos conocimientos, adquiriéndolos de forma lúdica fomentando la autonomía. </p><br/><p>Buscamos desarrollar niños respetuosos y comprometidos con ellos mismos. En Colegio CIO de México las familias son una parte fundamental en esta labor por lo que la participación y comunicación con ellas es constante para que juntos podamos brindar a los alumnos un entorno de felicidad y aprendizaje. </p><br/><p>A través del proyecto educativo, logramos el desarrollo de seres humanos completos, creativos, autónomos, y proposititos. </p><br/>"); });
								$("#changeText2").click(function() { $("#textBox").html("<br/><br/>Información General  Kinder.<br/><br/>&bull;Horario de 9:00 a 1:15 pm<br/>&bull;Supervisión personalizada<br/>&bull;Grupos reducidos (máximo 20 alumnos por grupo)<br/>&bull;Maestras Bilingües<br/>&bull;Valores y Buenas costumbres<br/>&bull;Opción de horario extendido<br/>&bull;Natación 1 vez por semana<br/>&bull;Computación<br/>&bull;Educación Física<br/>&bull;Educación artística<br/> "); });
								$("#changeText3").click(function() { $("#textBox").html("<br/><br/><p>Prof. Rosa María Acosta  Directora de Preescolar, con más de 20 años de trabajar con nosotros, siempre buscando aportar  y enriqueciendo a sus alumnos.</p><br/><p>Cuenta con tres licenciaturas y una maestría lo cual le da una basta experiencia en educación preescolar, cuenta además con cursos de actualización y capacitación tales como Prioridades en Educación Preescolar y Alteraciones en el aprendizaje.</p><br/><p>Totalmente integrada a la Filosofía CIO, siempre exaltando los valores del colegio. </p><br/>"); });
								$("#changeText4").click(function() { $("#textBox").html("<br/><br/><p>En Colegio CIO de México tenemos diversas actividades a lo largo del año, donde se realizan varios festivales de acuerdo a la fecha; así mismo contamos con Clase abierta para que los padres vean los avances en sus hijos.</p><br/><p>Clase de Lectura compartida</p><br/><p>Natación</p><br/><br/><img src=\"<?php echo base_url().'assets/';?>images/kinder_act.jpg\" style=\"margin-left: 140px\"/><br/>"); });
								$("#changeText5").click(function() { $("#textBox").html("<br/><br/><img src=\"<?php echo base_url().'assets/';?>images/uniformes.jpg\">"); });
							});
						</script>

						<style type="text/css">
							
							
							.mimagen { vertical-align: top; float: left; margin-right:18px; } 
							* {font-family:Verdana, Arial, Helvetica, sans-serif;}

							
						</style> 

					<?php
				break;
			case 'Primaria':
					?>
					
						<link href="assets/specific/div_jquery/style.css" rel="stylesheet" type="text/css">
						<script src="assets/specific/div_jquery/jquery_002.js" type="text/javascript"><!--mce:0--></script>
						<script src="assets/specific/div_jquery/custom.js" type="text/javascript"></script>
						<script src="assets/specific/div_jquery/jquery.js" type="text/javascript"><!--mce:0--></script>
						<script type="text/javascript">
							$(document).ready(function() {
								$("#changeText1").click(function() { $("#textBox").html("<br/><br/><p>Bienvenidos a  todos los niños que buscan disfrutar y aprender. </p><br/ ><p>El Colegio CIO de México, tu colegio, ha desarrollado un modelo educativo que mantiene un equilibrio en las tradiciones educativas y el vanguardismo tecnológico. Nuestro modelo les ofrece una supervisión personal apoyada en los valores y buenas costumbres, un sistema de inglés interactivo por niveles que te ubica en el nivel más adecuado para ti donde realmente aprendes inglés a tu ritmo ,con un alto aprovechamiento  en las áreas de español nuestros profesores están altamente capacitados para transferir sus conocimientos de manera muy variada y divertida propiciando la participación de todos y fomentando las competencias y trabajos en equipo. </p><br/ ><p>Al término de clases contamos con más de cuarenta talleres de valor agregado con una duración de 45 minutos que te permitirán incrementar tus conocimientos y habilidades en otros terrenos no académicos. </p><br/ ><p>Y para aquellos que buscan actividades extra-colegio contamos con clases de jazz, hip-hop y robótica,  mejor imposible no crees? </p><br/ ><p>Así que bienvenido al Colegio CIO de México y disfruta. </p><br/ >"); });
								$("#changeText2").click(function() { $("#textBox").html("<br/><br/>Información General  Primaria.<br/><br/>&bull; Horario de 8:00 am a 2:45 pm<br/>&bull; Supervisión Personalizada<br/>&bull; Constructivismo Matemático<br/>&bull; Inglés continuo interactivo por niveles<br/>&bull; Equilibrio exacto entre tradiciones y vanguardismo tecnológico<br/>&bull; Laboratorio  de Francés<br/>&bull; Formación de alumnos de alto rendimiento y seguridad en sí mismos<br/>&bull; Grupos reducidos  (máximo 24 alumnos por grupo) <br/>&bull; Maestras Bilingües<br/>&bull; Valores y buenas costumbres<br/>&bull; Opción de horario extendido <br/>&bull; Exámenes de certificación de nivel de inglés (opcionales)<br/> "); });
								$("#changeText3").click(function() { $("#textBox").html("<br/><br/><p>Prof. Augusto Rúelas González, Director técnico de primaria con más de 40 años de experiencia al servicio de la docencia, a colaborado en escuelas primarias siempre aportando y enriqueciendo a sus alumnos.</p><br/><br/><p>Esta con nosotros hace 4 años, aportando su experiencia y valores fortaleciendo nuestra misión, visión y estrategia en el desarrollo del colegio en beneficio de nuestros alumnos capacitándose de forma continúa.</p><br/>"); });
								$("#changeText4").click(function() { $("#textBox").html("<br/><br/><p>En Colegio CIO de México tenemos diversas actividades a lo largo del año, donde se realizan varios festivales de acuerdo a la fecha; así mismo contamos con Clase abierta para que los padres vean los avances en sus hijos.</p><br/><p>Clase de Lectura compartida</p><br/><p>Paseos programados</p><br/><p>Inglés interactivo por niveles, sistema que practicamos en aulas, patios y actividades como apoyos audiovisuales y películas lo cual fortalece el aprendizaje del idioma.</p><br/><img src=\"<?php echo base_url().'assets/';?>images/primaria_act.jpg\" style=\"margin-left: 140px\"/><br/>"); });
								$("#changeText5").click(function() { $("#textBox").html("<br/><br/><img src=\"<?php echo base_url().'assets/';?>images/uniformes.jpg\">"); });
							});
						</script>   

						<style type="text/css">
							
							
							.mimagen { vertical-align: top; float: left; margin-right:18px; } 
							* {font-family:Verdana, Arial, Helvetica, sans-serif;}

							
						</style>
					
					<?php
				break;
			case 'Cionet':
					?>
					
						<link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css">
						<link type="text/css" rel="stylesheet" href="assets/css/bootstrap-responsive.min.css">

					<?php
				break;
			case 'Contacto':
					?>

						<link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css">
						<link type="text/css" rel="stylesheet" href="assets/css/bootstrap-responsive.min.css">
						<link type="text/css" rel="stylesheet" href="assets/specific/sty.css">
					
					<?php
				break;
			default:
				echo 'Header de Ninguno';
				break;
		}

	?>
<link type="text/css" rel="stylesheet" href="assets/css/pages.css">

</head>
<body>
<center>

<div id="contenedor">
