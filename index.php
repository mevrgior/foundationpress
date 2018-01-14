<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>
<!-- begin map -->
<div id="loading">
	<img id="loading-image" src="img/loading.png" alt="Loading..." />
</div>

<div id="infobox-container">

	<div id="tabs2">
		<ul class="tab-links">
			<li id="hide-tab">
				<p class="arrow">&#65514;</p>
				<a> Hide</a>
			</li>
			<li id="terminal-tab" class="active"><a href="#searchAirl3">Terminal</a></li>
			<li id="verb-tab"><a href="#activeAirl">Verbindungen</a></li>
			<!-- <li id="airl-tab"><a href="#searchAirl">Suche Operator</a></li> -->
			<li id="airl-tab"><a href="#activeAirl">Suche</a></li>
			<li id="legende-tab"><a href="#searchAirp">Legende</a></li>
			<!-- <li id="airl-tab2"><a href="#searchAirl2">Legende</a></li> -->
		</ul>
	</div>	

	<div id="infobox">

		<div id="activeBox">
			
			<div id="activeAirl" class="hidden box-layout">
				<h2></h2>
				<hr>
				<div class="goo">
					<div id="hubInfo">
						<h3>Terminals</h3>
						<div id="hub-box"></div>
					</div>
					<!-- <div id="focusInfo">
						<h3>Focus Cities</h3>
						<div id="focus-box"></div>
					</div> -->
				</div>
				<hr>
				<h3 id="verbName"></h3>
				<p id="verbOper"></p>
				<p id="verbZug"></p>
				<p id="verbAb"></p>
				
				<div id="b_verbBild">
					<h3>Spediteur</h3>
					<div class="img-box">
						<!-- <a href="http://www.sgkv.de" target="_blank"><img id="verbbild1" src=""></a> -->
						<a href="http://www.sgkv.de" target="_blank"><img id="verbbild2" src=""></a>
						<a href="http://www.sgkv.de" target="_blank"><img id="verbbild3" src=""></a>
					</div>
				</div>
				<!-- <div class="foo">
					<h3>IATA Code</h3>
					<p id="iata"></p>
					<h3>Country</h3>
					<p id="loc2"></p>
				</div> -->
			</div>
		</div>
		
		<div id="searchBox">
			<!-- <div id="searchAirp" class="tab">
				<h3>Terminal Suche:</h3>
				<input id="airportinput" type="text" placeholder="Terminal Name eingeben" spellcheck="false" dir="auto" >
				<input type="button" value="Submit" id="airpSubmit">
			</div> -->
			<!-- <div id="searchAirl" class="tab">
				<h3>Operateur Suche:</h3>
				<input id="airlineinput" type="text" placeholder="Operateur Name eingeben" spellcheck="false" dir="auto" >
				<input type="button" value="Submit" id="airlSubmit">
			</div> -->
			<!-- <div id="searchAirl2" class="tab">
				<div id="legendBox">
					<h3>Legende:</h3>
					<div id="legend"></div>
				</div>
			</div> -->
			
			<div id="searchAirl3" class="tab active">

				<div id="activeAirp">
					<h2></h2>
					<div id="artBox">
						<h3 id="art" class="section-head"></h3>
					</div>
				<!-- <div id="b_loc">
					<h2 id="loc"></h2>
				</div> -->
					<hr>
					<h3 id="termH" class="section-head">Terminal Infos</h3>
					<div id="terminfo" class="foo myscrollbox2">
						<div id="b_xyz">
							<h3>Xyz</h3>
							<p id="xyz"></p>
						</div>
						<div id="b_betreiber">
							<h3>Betreiber</h3>
							<p id="betreiber"></p>
						</div>
						<div id="b_eigner">
							<h3>Eigner</h3>
							<p id="eigner"></p>
						</div>

						<div id="b_ansprechpartner">
							<h3>Ansprechpartner</h3>
							<p id="ansprechpartner"></p>
						</div>
						<p id="b_telefon">
							<span>Tel.:</span><span id="telefon"></span>
						</p>
						<p id="b_fax">
							<span>Fax.:</span><span id="fax"></span>
						</p>

						<p>
							<div id="b_email">
								<p id="ansprecherpartner_email"></p>
								<p id="terminal_email"></p>
							</div>
						</p>
						<div id="b_webseite">
							<h3>Webseite</h3>
							<p id="webseite"></p>
						</div>
						<div id="b_adresse">
							<h3>Adresse</h3>
							<p id="adresse_strasse"></p>
							<p>
								<span id="bundesland_kanton_department"></span>
								<span id="plz"></span>
							</p>
							<p id="land"></p>
						</div>
						<div id="b_oeffnungszeiten">
							<h3>Öffnungszeiten</h3>
							<p id="oeffnungszeiten"></p>
						</div>
						<h3>Ladeeinheiten</h3>
							<p id="container"></p>
							<p id="nk_sattelauflieger"></p>
						<h3>Dienstleistungen</h3>
							<p id="rola"></p>
							<p id="roro"></p>
							<p id="gefahrgut"></p>
						<h3>Equipment</h3>
							<p>
								<span>Reachstacker:</span>				
								<span id="reachstacker"></span>
							</p>
							
						

						<div id="b_ladegleise">
							<h3>Ladegleise</h3>
							<p id="ladegleise"></p>
						</div>
						<div id="b_umschlagkapazitaet">
							<h3>Umschlagkapazität</h3>
							<p id="umschlagkapazitaet"></p>
						</div>

						<div id="b_bild1">
							<h3>Spediteur</h3>
							<div class="img-box">
								<a href="http://www.sgkv.de" target="_blank"><img id="bild1" src=""></a>
								<a href="http://www.sgkv.de" target="_blank"><img id="bild2" src=""></a>
								<a href="http://www.sgkv.de" target="_blank"><img id="bild3" src=""></a>
							</div>
						</div>
					</div>
					<hr>
					<h3 id="verbH" class="section-head">Verbindungen</h3>
					<div id="verbBox" class = "myscrollbox">
						<!-- <div id="airlBox"></div> -->
						<div id="verbinfoBox"></div>
					</div>
					<hr>
					<h3 id="termsuchH" class="section-head">Terminal Suche</h3>
					<div id="searchTerm" class="">
						<input id="airportinput" type="text" placeholder="Terminal Name eingeben" spellcheck="false" dir="auto" >
						<input type="button" value="Submit" id="airpSubmit">
					</div>
					<hr>
					<h3 id="legH" class="section-head">Legende</h3>
					<div id="legendBox">
						<div id="legend"></div>
					</div>
					<!-- <div class="goo">
						<h3>Operateure</h3>
						<div id="airlBox"></div>
					</div> -->
				</div>
			</div>
		</div>
	</div>
	<!-- <div id="tabs">
		<ul class="tab-links">
			<li id="hide-tab">
				<p class="arrow">&#65514;</p>
				<a> Hide</a>
			</li>
			<li id="terminal-tab" class="active"><a href="#searchAirl3">Infos</a></li>
			<li id="airp-tab"><a href="#searchAirp">Terminal</a></li>
			<li id="airl-tab"><a href="#searchAirl">Operateur</a></li>
			<li id="airl-tab2"><a href="#searchAirl2">Legende</a></li>
		</ul>
	</div> -->
</div>
	


<div id="show-tab">
	<p class="arrow">&#65516;</p>
	<a> Show</a>
</div>

<div id="titlebar" class="hidden">
	<p></p>
</div>

<div id="tooltip"></div>

<div id="map"></div>
<!-- end Map -->
<div class="sec-1 bg-blue">
	<div class="sep-top-down"></div>
	<div class="glob-container">
		<div > <!-- class="text-container" -->
			<h2>
				<?php 
					$first_post_home = get_post(17); 
					echo apply_filters( 'the_content', $first_post_home->post_title );
				?>
			</h2>
			<p>
				<?php 
					$first_post_home = get_post(17); 
					echo apply_filters( 'the_content', $first_post_home->post_content );
				?>
			</p>
		</div>
	</div>
	
</div>
<div class="sec-2 bg-white">
	<div class="sep-up"></div>
	<div class="glob-container">
		<div > <!-- class="text-container" -->
			<h2>
				<?php 
					$first_post_home = get_post(17); 
					echo apply_filters( 'the_content', $first_post_home->post_title );
				?>
			</h2>
			<p>
				<?php 
					$first_post_home = get_post(17); 
					echo apply_filters( 'the_content', $first_post_home->post_content );
				?>
			</p>
		</div>
	</div>
	<div class="sep-down"></div>
</div>
<div class="sec-img">
	
</div>
<div id="page-full-width" role="main">
	<article class="main-content">
	<?php if ( have_posts() ) : ?>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
		<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; // End have_posts() check. ?>

		<?php /* Display navigation to next/previous pages when applicable */ ?>
		<?php
		if ( function_exists( 'foundationpress_pagination' ) ) :
			foundationpress_pagination();
		elseif ( is_paged() ) :
		?>
			<nav id="post-nav">
				<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
				<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
			</nav>
		<?php endif; ?>

	</article>
	<?php /* get_sidebar();*/ ?>

</div>
<!-- <div class="bg-clear">
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 36"><style type="text/css"> .st0{fill:#004151;} </style><polygon class="st0" points="0 36.5 1000 36.5 500 0 "/></svg>
</div> -->
<?php get_footer();
