<?php 

/* Template name: Hem */

get_header(); ?>

		
		<div id="wrapper">
			<div id="container">
				<div id="bg-container">
					<div id="top-bg"></div>
			
					<div class="main">
						<div class="ribbon"></div>
						<div class="content">
					
							<div id="front-info">
								<h1><span class="theme-color">Shamil</span> Musaev</h1>
								<div class="clear"></div>
								<h2 class="jobtitle">Front-end Utvecklare</h2>
							</div>
							<div class="clear"></div>
							<div class="textblock">
								<p>
									Jag är <span class="theme-color">front-end utvecklare</span> som studerar i Sverige, Stockholm. Jag skapar <span class="theme-color">ren</span> och <span class="theme-color">enkla</span> design.
								</p>
							</div> 
						
					
							<!--============================================================================-->
							<!--=============================Arbetslivserfarenhet==============================-->
							<!--============================================================================-->	
							<div class="item">	
								<h2 class="h-border theme-color"><?php the_field('titel'); ?></h2>
								
								<div class="grid_4">
									
									<h4 class="title"><?php the_field('arbetsgivare'); ?></h4>
									<h3 class="title"><?php the_field('plats'); ?></h3>
									<h4 class="description2"><?php the_field('datum'); ?></h4>
									<h4 class="description1"><?php the_field('kort_beskrivning'); ?></h4>
								
								</div>


									
								<div class="grid_4">
									
									<h4 class="title"><?php the_field('arbetsgivare2'); ?></h4>
									<h3 class="title"><?php the_field('plats2'); ?></h3>
									<h4 class="description2"><?php the_field('datum2'); ?></h4>
									<h4 class="description1"><?php the_field('kort_beskrivning2'); ?></h4>
								
								</div>


								<div class="grid_4 last">
								
									<h4 class="title"><?php the_field('arbetsgivare3'); ?></h4>
									<h3 class="title"><?php the_field('plats3'); ?></h3>
									<h4 class="description2"><?php the_field('datum3'); ?></h4>
									<h4 class="description1"><?php the_field('kort_beskrivning2'); ?></h4>
								</div>


								
							
								
								<div class="clear"></div>
							</div> <!-- // .item -->
							
							<!--============================================================================-->
							<!--================================ Utblidning =================================-->
							<!--============================================================================-->
							<div class="item">	
								<h2 class="h-border theme-color"><?php the_field('utbildning_titel'); ?></h2>
								
								<div class="grid_4">
									<h3 class="title"><?php the_field('examen_kurs'); ?></h3>
									<h3 class="description1"><?php the_field('skolan_institutionen'); ?></h3>
									<h4 class="description2"><?php the_field('utbildning_datum'); ?></h4>
									
								</div>
								<div class="grid_8 last">
									<h4>
									<?php the_field('utbildnings-kort_beskrivning'); ?>	
                                   </h4>
								</div>
								
							</div>

							
							<!--============================================================================-->
							<!--=================================Kompetens=========================-->
							<!--============================================================================-->
							
							
							
							<div class="item">	
								<h2 class="h-border theme-color"><?php the_field('kompetens_titel'); ?></h2>
								
								<div class="grid_4">
									<h3 class="title"><?php the_field('kompetens'); ?></h3>
									
									
								</div>
								<div class="grid_8 last">
									<h4 >
									<?php the_field('kort_beskrivning_av_kompetensen'); ?>	
									</h4 >
								</div>

								

								
								
							</div> 
							<div class="grid_4">
									<h3 class="title"><?php the_field('kompetens2'); ?></h3>
									
									
								</div>
								<div class="grid_8 last">
									<h4>
									<?php the_field('kort_beskrivning_av_kompetensen2'); ?>	
                                   </h4>
								</div>



								<!--============================================================================-->
							<!--======================== Personligt Brev =========================-->
							<!--============================================================================-->
								

								<div class="item">	
								<h2 class="h-border theme-color"><?php the_field('personligt_brev_titel'); ?></h2>
								
								
									<?php the_field('personligt_brev'); ?>
									
				
							</div> 
					
							<!--============================================================================-->
							<!--======================== Personal and Contacy Info =========================-->
							<!--============================================================================-->
							<div class="item">	
								
								<h2 class="h-border theme-color"><?php the_field('kontakt_uppgifter_titel'); ?></h2>
								
								<div class="grid_4">
									<ul class="list">
										<li class="email"><?php the_field('email'); ?></li>									
										<li class="phone"><?php the_field('telefon'); ?></li>
										<li class="address"><?php the_field('adress'); ?></li>
									</ul>
								</div>
								<div class="grid_8 last">
								<?php the_content() ?>
								</div>
								<div class="clear"></div>
							</div> <!-- // .item -->
							
							<?php get_footer(); ?>