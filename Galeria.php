<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name=”description” content=”Betekintést nyerhet óvodánk mindennapjaiba és a gyerekekkel együtt megélt ünnepeinkbe.”>
    <link rel=”author” href=”https://plus.google.com/u/0/107049021056428912119/posts“/>
    <link rel=”publisher” href=”https://plus.google.com/u/0/b/116960354102312416205/116960354102312416205/about“/>
    <title>Fotók és videók a mindennapokról és az ünnepekről | babolygo.com</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <!-- Add jQuery library -->
	<script type="text/javascript" src="lib/jquery-1.10.1.min.js"></script>

	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="lib/jquery.mousewheel-3.0.6.pack.js"></script>

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="source/jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="source/jquery.fancybox.css?v=2.1.5" media="screen" />

	<!-- Add Button helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
	<script type="text/javascript" src="source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

	<!-- Add Thumbnail helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
	<script type="text/javascript" src="source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

	<!-- Add Media helper (this is optional) -->
	<script type="text/javascript" src="source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

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

			/*
			 *  Open manually
			 */

			$("#fancybox-manual-a").click(function() {
				$.fancybox.open('1_b.jpg');
			});

			$("#fancybox-manual-b").click(function() {
				$.fancybox.open({
					href : 'iframe.html',
					type : 'iframe',
					padding : 5
				});
			});

			$("#fancybox-manual-c").click(function() {
				$.fancybox.open([
					{
						href : '1_b.jpg',
						title : 'My title'
					}, {
						href : '2_b.jpg',
						title : '2nd title'
					}, {
						href : '3_b.jpg'
					}
				], {
					helpers : {
						thumbs : {
							width: 75,
							height: 50
						}
					}
				});
			});


		});
	</script>
    <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-10255275-5']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
  </head>
  <body id="galeria">
<?php include "php/header.php"; ?>
    <div class="container">
<ul class="nav nav-tabs responsive" id="myTab">
	<li class="active"><a href="#fotok">Fotók</a></li>
	<li><a href="#videok">Videók</a></li>
</ul>

<div class="tab-content responsive">
  <div class="tab-pane fade in active" id="fotok">
    <!--tab content elerhetoseg starts-->
    <div class="row content">
    <div class="row whiteBg">
    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 "> 
<a class="fancybox" data-fancybox-group="epulet" href="images/gallery/babolygo/babolygo-epulet-01.jpg"><img class="img-responsive center-block" src="images/gallery/babolygo/epulet_thumbnail.png" width="153" height="153" alt="Babolygó Magánóvoda és Családi Napközi"/></a>
<h4><strong>Babolygó</strong></h4>
    </div>
    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 "> 
<a class="fancybox" data-fancybox-group="tavaszunnep" href="images/gallery/tavaszunnep/babolygo-tavaszunnep-01.jpg"><img class="img-responsive center-block" src="images/gallery/tavaszunnep/tavaszunnepe_thumbnail.png" width="153" height="153" alt="Babolygó Magánóvoda és Családi Napközi"/></a>
<h4><strong>Tavaszünnep</strong></h4>
    </div>
        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 "> 
<a class="fancybox" data-fancybox-group="oszbucsuztato" href="images/gallery/oszbucsuztato/babolygo-oszbucsuztato-01.jpg"><img class="img-responsive center-block" src="images/gallery/oszbucsuztato/oszbucsuztato_thumbnail.png" width="153" height="153" alt="Babolygó Magánóvoda és Családi Napközi"/></a>
<h4><strong>Őszbúcsúztató</strong></h4>
    </div>
        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 "> 
<a class="fancybox" data-fancybox-group="mikulas" href="images/gallery/mikulas/babolygo-mikulas-01.jpg"><img class="img-responsive center-block" src="images/gallery/mikulas/mikulas_thumbnail.png" width="153" height="153" alt="Babolygó Magánóvoda és Családi Napközi"/></a>
<h4><strong>Mikulás</strong></h4>
    </div>
       <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 "> 
<a class="fancybox" data-fancybox-group="tanc" href="images/gallery/tanc/babolygo-tanc-01.jpg"><img class="img-responsive center-block" src="images/gallery/tanc/kreativ_thumbnail.png" width="153" height="153" alt="Babolygó Magánóvoda és Családi Napközi"/></a>
<h4><strong>Kreatív mozgásórák</strong></h4>
    </div>
           <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 "> 
<a class="fancybox" data-fancybox-group="epul" href="images/gallery/epul/babolygo-epul-01.jpg"><img class="img-responsive center-block" src="images/gallery/epul/epul_thumbnail.png" width="153" height="153" alt="Babolygó Magánóvoda és Családi Napközi"/></a>
<h4><strong>Szépül a Babolygó</strong></h4>
    </div>


     </div>
       </div> 
<!--tab elerhetoseg ends--> 
  </div> 
  <div class="tab-pane fade" id="videok">
      <!--tab content megkozelites starts-->
    <div class="row content">
    <div class="row whiteBg">
    <div class="titleCenter hidden-xs"><h1>Videók</h1></div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 marginUp">
    <img class="img-responsive center-block" src="images/nophoto_thumbnail.png" width="153" height="152" alt=""/>
       <p> </p>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 marginUp">
        <img class="img-responsive center-block" src="images/nophoto_thumbnail.png" width="153" height="152" alt=""/>
<!--      <h1><strong>Verselés, mesélés, drámajáték</strong></h1>
        <p>A csendes pihenőt minden nap mesélés előzi meg. A csoportok polcain gondosan válogatott mesés és verses kötetek, képes lapozgatók kapnak helyet.</p>
          <p>A feldolgozott versek, mesék hangulata, tematikája kapcsolódik az adott időszak tartalmaihoz, a csoportban felmerülő aktuális élethelyzetekhez. Klasszikus és kortárs szerzők művei egyaránt szerepelnek. Egy-egy mese elmélyültebb átélését bábozással, dramatizálással, szerepjátékkal segítjük.</p>-->
    </div>
 </div>
     <div class="row whiteBg">
    <p class="text-center">Hamarosan felkerül a tartalom</p>
    </div>

       </div> 
<!--tab megkozelites ends--> 
  </div>
</div>
    </div> 
    <!-- /container -->
<?php include "php/footer.php"; ?>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/responsive-tabs.js"></script>
    <script src="js/myscript.js"></script>
    <script type="text/javascript">
      $( '#myTab a' ).click( function ( e ) {
        e.preventDefault();
        $( this ).tab( 'show' );
      } );

      ( function( $ ) {
          // Test for making sure event are maintained
          fakewaffle.responsiveTabs( [ 'xs' ] );
      } )( jQuery );

    </script>

  </body>
  <!--epulet gallery-->
  <a class="fancybox" data-fancybox-group="epulet" href="images/gallery/babolygo/babolygo-epulet-02.jpg"></a>
  <a class="fancybox" data-fancybox-group="epulet" href="images/gallery/babolygo/babolygo-epulet-03.jpg"></a>
  <a class="fancybox" data-fancybox-group="epulet" href="images/gallery/babolygo/babolygo-epulet-04.jpg"></a>
  <a class="fancybox" data-fancybox-group="epulet" href="images/gallery/babolygo/babolygo-epulet-05.jpg"></a>
  <a class="fancybox" data-fancybox-group="epulet" href="images/gallery/babolygo/babolygo-epulet-06.jpg"></a>
  <a class="fancybox" data-fancybox-group="epulet" href="images/gallery/babolygo/babolygo-epulet-07.jpg"></a>
  <a class="fancybox" data-fancybox-group="epulet" href="images/gallery/babolygo/babolygo-epulet-08.jpg"></a>
  <a class="fancybox" data-fancybox-group="epulet" href="images/gallery/babolygo/babolygo-epulet-09.jpg"></a>
  <a class="fancybox" data-fancybox-group="epulet" href="images/gallery/babolygo/babolygo-epulet-10.jpg"></a>
  <a class="fancybox" data-fancybox-group="epulet" href="images/gallery/babolygo/babolygo-epulet-11.jpg"></a>
  <a class="fancybox" data-fancybox-group="epulet" href="images/gallery/babolygo/babolygo-epulet-12.jpg"></a>
  <a class="fancybox" data-fancybox-group="epulet" href="images/gallery/babolygo/babolygo-epulet-13.jpg"></a>
  <a class="fancybox" data-fancybox-group="epulet" href="images/gallery/babolygo/babolygo-epulet-14.jpg"></a>
  <a class="fancybox" data-fancybox-group="epulet" href="images/gallery/babolygo/babolygo-epulet-15.jpg"></a>
  <a class="fancybox" data-fancybox-group="epulet" href="images/gallery/babolygo/babolygo-epulet-16.jpg"></a>
  
  <!--tavaszunnep gallery-->
  <a class="fancybox" data-fancybox-group="tavaszunnep" href="images/gallery/tavaszunnep/babolygo-tavaszunnep-02.jpg"></a>
  <a class="fancybox" data-fancybox-group="tavaszunnep" href="images/gallery/tavaszunnep/babolygo-tavaszunnep-03.jpg"></a>
  <a class="fancybox" data-fancybox-group="tavaszunnep" href="images/gallery/tavaszunnep/babolygo-tavaszunnep-04.jpg"></a>
  <a class="fancybox" data-fancybox-group="tavaszunnep" href="images/gallery/tavaszunnep/babolygo-tavaszunnep-05.jpg"></a>
  <a class="fancybox" data-fancybox-group="tavaszunnep" href="images/gallery/tavaszunnep/babolygo-tavaszunnep-06.jpg"></a>
  <a class="fancybox" data-fancybox-group="tavaszunnep" href="images/gallery/tavaszunnep/babolygo-tavaszunnep-07.jpg"></a>
  <a class="fancybox" data-fancybox-group="tavaszunnep" href="images/gallery/tavaszunnep/babolygo-tavaszunnep-08.jpg"></a>
  <a class="fancybox" data-fancybox-group="tavaszunnep" href="images/gallery/tavaszunnep/babolygo-tavaszunnep-09.jpg"></a>
  <a class="fancybox" data-fancybox-group="tavaszunnep" href="images/gallery/tavaszunnep/babolygo-tavaszunnep-10.jpg"></a>
  <a class="fancybox" data-fancybox-group="tavaszunnep" href="images/gallery/tavaszunnep/babolygo-tavaszunnep-11.jpg"></a>
  <a class="fancybox" data-fancybox-group="tavaszunnep" href="images/gallery/tavaszunnep/babolygo-tavaszunnep-12.jpg"></a>
  <a class="fancybox" data-fancybox-group="tavaszunnep" href="images/gallery/tavaszunnep/babolygo-tavaszunnep-13.jpg"></a>
  <a class="fancybox" data-fancybox-group="tavaszunnep" href="images/gallery/tavaszunnep/babolygo-tavaszunnep-14.jpg"></a>
  <a class="fancybox" data-fancybox-group="tavaszunnep" href="images/gallery/tavaszunnep/babolygo-tavaszunnep-15.jpg"></a>
  <a class="fancybox" data-fancybox-group="tavaszunnep" href="images/gallery/tavaszunnep/babolygo-tavaszunnep-16.jpg"></a>
  <a class="fancybox" data-fancybox-group="tavaszunnep" href="images/gallery/tavaszunnep/babolygo-tavaszunnep-17.jpg"></a>
  <a class="fancybox" data-fancybox-group="tavaszunnep" href="images/gallery/tavaszunnep/babolygo-tavaszunnep-18.jpg"></a>
  <a class="fancybox" data-fancybox-group="tavaszunnep" href="images/gallery/tavaszunnep/babolygo-tavaszunnep-19.jpg"></a>
  <a class="fancybox" data-fancybox-group="tavaszunnep" href="images/gallery/tavaszunnep/babolygo-tavaszunnep-20.jpg"></a>
  <a class="fancybox" data-fancybox-group="tavaszunnep" href="images/gallery/tavaszunnep/babolygo-tavaszunnep-21.jpg"></a>
  <a class="fancybox" data-fancybox-group="tavaszunnep" href="images/gallery/tavaszunnep/babolygo-tavaszunnep-22.jpg"></a>
  <a class="fancybox" data-fancybox-group="tavaszunnep" href="images/gallery/tavaszunnep/babolygo-tavaszunnep-23.jpg"></a>
  <a class="fancybox" data-fancybox-group="tavaszunnep" href="images/gallery/tavaszunnep/babolygo-tavaszunnep-24.jpg"></a>
  <a class="fancybox" data-fancybox-group="tavaszunnep" href="images/gallery/tavaszunnep/babolygo-tavaszunnep-25.jpg"></a>
  <a class="fancybox" data-fancybox-group="tavaszunnep" href="images/gallery/tavaszunnep/babolygo-tavaszunnep-26.jpg"></a>  

<!--szobucsuztato gallery-->
<a class="fancybox" data-fancybox-group="oszbucsuztato" href="images/gallery/oszbucsuztato/babolygo-oszbucsuztato-02.jpg"></a>
<a class="fancybox" data-fancybox-group="oszbucsuztato" href="images/gallery/oszbucsuztato/babolygo-oszbucsuztato-03.jpg"></a>
<a class="fancybox" data-fancybox-group="oszbucsuztato" href="images/gallery/oszbucsuztato/babolygo-oszbucsuztato-04.jpg"></a>
<a class="fancybox" data-fancybox-group="oszbucsuztato" href="images/gallery/oszbucsuztato/babolygo-oszbucsuztato-05.jpg"></a>
<a class="fancybox" data-fancybox-group="oszbucsuztato" href="images/gallery/oszbucsuztato/babolygo-oszbucsuztato-06.jpg"></a>
<a class="fancybox" data-fancybox-group="oszbucsuztato" href="images/gallery/oszbucsuztato/babolygo-oszbucsuztato-07.jpg"></a>
<a class="fancybox" data-fancybox-group="oszbucsuztato" href="images/gallery/oszbucsuztato/babolygo-oszbucsuztato-08.jpg"></a>
<a class="fancybox" data-fancybox-group="oszbucsuztato" href="images/gallery/oszbucsuztato/babolygo-oszbucsuztato-09.jpg"></a>
<a class="fancybox" data-fancybox-group="oszbucsuztato" href="images/gallery/oszbucsuztato/babolygo-oszbucsuztato-10.jpg"></a>
<a class="fancybox" data-fancybox-group="oszbucsuztato" href="images/gallery/oszbucsuztato/babolygo-oszbucsuztato-11.jpg"></a>
<a class="fancybox" data-fancybox-group="oszbucsuztato" href="images/gallery/oszbucsuztato/babolygo-oszbucsuztato-12.jpg"></a>
<a class="fancybox" data-fancybox-group="oszbucsuztato" href="images/gallery/oszbucsuztato/babolygo-oszbucsuztato-13.jpg"></a>
<a class="fancybox" data-fancybox-group="oszbucsuztato" href="images/gallery/oszbucsuztato/babolygo-oszbucsuztato-14.jpg"></a>
<a class="fancybox" data-fancybox-group="oszbucsuztato" href="images/gallery/oszbucsuztato/babolygo-oszbucsuztato-15.jpg"></a>
<a class="fancybox" data-fancybox-group="oszbucsuztato" href="images/gallery/oszbucsuztato/babolygo-oszbucsuztato-16.jpg"></a>
<a class="fancybox" data-fancybox-group="oszbucsuztato" href="images/gallery/oszbucsuztato/babolygo-oszbucsuztato-17.jpg"></a>
<a class="fancybox" data-fancybox-group="oszbucsuztato" href="images/gallery/oszbucsuztato/babolygo-oszbucsuztato-18.jpg"></a>
<a class="fancybox" data-fancybox-group="oszbucsuztato" href="images/gallery/oszbucsuztato/babolygo-oszbucsuztato-19.jpg"></a>
<a class="fancybox" data-fancybox-group="oszbucsuztato" href="images/gallery/oszbucsuztato/babolygo-oszbucsuztato-20.jpg"></a>
<a class="fancybox" data-fancybox-group="oszbucsuztato" href="images/gallery/oszbucsuztato/babolygo-oszbucsuztato-21.jpg"></a>
<a class="fancybox" data-fancybox-group="oszbucsuztato" href="images/gallery/oszbucsuztato/babolygo-oszbucsuztato-22.jpg"></a>
<a class="fancybox" data-fancybox-group="oszbucsuztato" href="images/gallery/oszbucsuztato/babolygo-oszbucsuztato-23.jpg"></a>
<a class="fancybox" data-fancybox-group="oszbucsuztato" href="images/gallery/oszbucsuztato/babolygo-oszbucsuztato-24.jpg"></a>
<a class="fancybox" data-fancybox-group="oszbucsuztato" href="images/gallery/oszbucsuztato/babolygo-oszbucsuztato-25.jpg"></a>
<a class="fancybox" data-fancybox-group="oszbucsuztato" href="images/gallery/oszbucsuztato/babolygo-oszbucsuztato-26.jpg"></a>
<a class="fancybox" data-fancybox-group="oszbucsuztato" href="images/gallery/oszbucsuztato/babolygo-oszbucsuztato-27.jpg"></a>
<a class="fancybox" data-fancybox-group="oszbucsuztato" href="images/gallery/oszbucsuztato/babolygo-oszbucsuztato-28.jpg"></a>
<a class="fancybox" data-fancybox-group="oszbucsuztato" href="images/gallery/oszbucsuztato/babolygo-oszbucsuztato-29.jpg"></a>
<a class="fancybox" data-fancybox-group="oszbucsuztato" href="images/gallery/oszbucsuztato/babolygo-oszbucsuztato-30.jpg"></a>
<a class="fancybox" data-fancybox-group="oszbucsuztato" href="images/gallery/oszbucsuztato/babolygo-oszbucsuztato-31.jpg"></a>
<a class="fancybox" data-fancybox-group="oszbucsuztato" href="images/gallery/oszbucsuztato/babolygo-oszbucsuztato-32.jpg"></a>
<a class="fancybox" data-fancybox-group="oszbucsuztato" href="images/gallery/oszbucsuztato/babolygo-oszbucsuztato-33.jpg"></a>
<a class="fancybox" data-fancybox-group="oszbucsuztato" href="images/gallery/oszbucsuztato/babolygo-oszbucsuztato-34.jpg"></a>
<a class="fancybox" data-fancybox-group="oszbucsuztato" href="images/gallery/oszbucsuztato/babolygo-oszbucsuztato-35.jpg"></a>
<a class="fancybox" data-fancybox-group="oszbucsuztato" href="images/gallery/oszbucsuztato/babolygo-oszbucsuztato-36.jpg"></a>
<a class="fancybox" data-fancybox-group="oszbucsuztato" href="images/gallery/oszbucsuztato/babolygo-oszbucsuztato-37.jpg"></a>
<a class="fancybox" data-fancybox-group="oszbucsuztato" href="images/gallery/oszbucsuztato/babolygo-oszbucsuztato-38.jpg"></a>
<a class="fancybox" data-fancybox-group="oszbucsuztato" href="images/gallery/oszbucsuztato/babolygo-oszbucsuztato-39.jpg"></a>
<a class="fancybox" data-fancybox-group="oszbucsuztato" href="images/gallery/oszbucsuztato/babolygo-oszbucsuztato-40.jpg"></a>

<!-- mikulas gallery-->
<a class="fancybox" data-fancybox-group="mikulas" href="images/gallery/mikulas/babolygo-mikulas-02.jpg"></a>
<a class="fancybox" data-fancybox-group="mikulas" href="images/gallery/mikulas/babolygo-mikulas-03.jpg"></a>
<a class="fancybox" data-fancybox-group="mikulas" href="images/gallery/mikulas/babolygo-mikulas-04.jpg"></a>
<a class="fancybox" data-fancybox-group="mikulas" href="images/gallery/mikulas/babolygo-mikulas-05.jpg"></a>
<a class="fancybox" data-fancybox-group="mikulas" href="images/gallery/mikulas/babolygo-mikulas-06.jpg"></a>
<a class="fancybox" data-fancybox-group="mikulas" href="images/gallery/mikulas/babolygo-mikulas-07.jpg"></a>
<a class="fancybox" data-fancybox-group="mikulas" href="images/gallery/mikulas/babolygo-mikulas-08.jpg"></a>
<a class="fancybox" data-fancybox-group="mikulas" href="images/gallery/mikulas/babolygo-mikulas-09.jpg"></a>
<a class="fancybox" data-fancybox-group="mikulas" href="images/gallery/mikulas/babolygo-mikulas-10.jpg"></a>
<!--tanc gallery-->
<a class="fancybox" data-fancybox-group="tanc" href="images/gallery/tanc/babolygo-tanc-02.jpg"></a>
<a class="fancybox" data-fancybox-group="tanc" href="images/gallery/tanc/babolygo-tanc-03.jpg"></a>
<a class="fancybox" data-fancybox-group="tanc" href="images/gallery/tanc/babolygo-tanc-04.jpg"></a>
<a class="fancybox" data-fancybox-group="tanc" href="images/gallery/tanc/babolygo-tanc-05.jpg"></a>
<a class="fancybox" data-fancybox-group="tanc" href="images/gallery/tanc/babolygo-tanc-06.jpg"></a>
<a class="fancybox" data-fancybox-group="tanc" href="images/gallery/tanc/babolygo-tanc-07.jpg"></a>
<a class="fancybox" data-fancybox-group="tanc" href="images/gallery/tanc/babolygo-tanc-08.jpg"></a>
<a class="fancybox" data-fancybox-group="tanc" href="images/gallery/tanc/babolygo-tanc-09.jpg"></a>
<a class="fancybox" data-fancybox-group="tanc" href="images/gallery/tanc/babolygo-tanc-10.jpg"></a>
<a class="fancybox" data-fancybox-group="tanc" href="images/gallery/tanc/babolygo-tanc-11.jpg"></a>
<a class="fancybox" data-fancybox-group="tanc" href="images/gallery/tanc/babolygo-tanc-12.jpg"></a>
<a class="fancybox" data-fancybox-group="tanc" href="images/gallery/tanc/babolygo-tanc-13.jpg"></a>
<a class="fancybox" data-fancybox-group="tanc" href="images/gallery/tanc/babolygo-tanc-14.jpg"></a>
<a class="fancybox" data-fancybox-group="tanc" href="images/gallery/tanc/babolygo-tanc-15.jpg"></a>
<a class="fancybox" data-fancybox-group="tanc" href="images/gallery/tanc/babolygo-tanc-16.jpg"></a>
<a class="fancybox" data-fancybox-group="tanc" href="images/gallery/tanc/babolygo-tanc-17.jpg"></a>
<a class="fancybox" data-fancybox-group="tanc" href="images/gallery/tanc/babolygo-tanc-18.jpg"></a>
<a class="fancybox" data-fancybox-group="tanc" href="images/gallery/tanc/babolygo-tanc-19.jpg"></a>
<a class="fancybox" data-fancybox-group="tanc" href="images/gallery/tanc/babolygo-tanc-20.jpg"></a>
<a class="fancybox" data-fancybox-group="tanc" href="images/gallery/tanc/babolygo-tanc-21.jpg"></a>
<a class="fancybox" data-fancybox-group="tanc" href="images/gallery/tanc/babolygo-tanc-22.jpg"></a>

<!--epul gallery-->
<a class="fancybox" data-fancybox-group="epul" href="images/gallery/epul/babolygo-epul-02.jpg">
<a class="fancybox" data-fancybox-group="epul" href="images/gallery/epul/babolygo-epul-03.jpg">
<a class="fancybox" data-fancybox-group="epul" href="images/gallery/epul/babolygo-epul-04.jpg">
<a class="fancybox" data-fancybox-group="epul" href="images/gallery/epul/babolygo-epul-05.jpg">
<a class="fancybox" data-fancybox-group="epul" href="images/gallery/epul/babolygo-epul-06.jpg">
<a class="fancybox" data-fancybox-group="epul" href="images/gallery/epul/babolygo-epul-07.jpg">
<a class="fancybox" data-fancybox-group="epul" href="images/gallery/epul/babolygo-epul-08.jpg">
<a class="fancybox" data-fancybox-group="epul" href="images/gallery/epul/babolygo-epul-09.jpg">
<a class="fancybox" data-fancybox-group="epul" href="images/gallery/epul/babolygo-epul-10.jpg">
<a class="fancybox" data-fancybox-group="epul" href="images/gallery/epul/babolygo-epul-11.jpg">
<a class="fancybox" data-fancybox-group="epul" href="images/gallery/epul/babolygo-epul-12.jpg">
<a class="fancybox" data-fancybox-group="epul" href="images/gallery/epul/babolygo-epul-13.jpg">
<a class="fancybox" data-fancybox-group="epul" href="images/gallery/epul/babolygo-epul-14.jpg">
<a class="fancybox" data-fancybox-group="epul" href="images/gallery/epul/babolygo-epul-15.jpg">
<a class="fancybox" data-fancybox-group="epul" href="images/gallery/epul/babolygo-epul-16.jpg">
<a class="fancybox" data-fancybox-group="epul" href="images/gallery/epul/babolygo-epul-17.jpg">
<a class="fancybox" data-fancybox-group="epul" href="images/gallery/epul/babolygo-epul-18.jpg">
<a class="fancybox" data-fancybox-group="epul" href="images/gallery/epul/babolygo-epul-19.jpg">
<a class="fancybox" data-fancybox-group="epul" href="images/gallery/epul/babolygo-epul-20.jpg">
<a class="fancybox" data-fancybox-group="epul" href="images/gallery/epul/babolygo-epul-21.jpg">
<a class="fancybox" data-fancybox-group="epul" href="images/gallery/epul/babolygo-epul-22.jpg">
<a class="fancybox" data-fancybox-group="epul" href="images/gallery/epul/babolygo-epul-23.jpg">
<a class="fancybox" data-fancybox-group="epul" href="images/gallery/epul/babolygo-epul-24.jpg">
<a class="fancybox" data-fancybox-group="epul" href="images/gallery/epul/babolygo-epul-25.jpg">
<a class="fancybox" data-fancybox-group="epul" href="images/gallery/epul/babolygo-epul-26.jpg">
<a class="fancybox" data-fancybox-group="epul" href="images/gallery/epul/babolygo-epul-27.jpg">













</html>
