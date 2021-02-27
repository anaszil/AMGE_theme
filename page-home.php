<?php get_header(); 
$template_uri = get_template_directory_uri();
?>

<section id="us" style="margin-bottom: 0;margin-top: 130px;">
	<div class="container-fluid" id="container_bg">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg" id="info_asso">
					<div id="title_asso">Qui sommes-nous ?</div>
					<div class="item_asso" id="first_item">
						<div class="icon_item" data-aos="fade-up"><i class="fa fa-question-circle" aria-hidden="true"></i></div>
						<div class="title_item" data-aos="fade-right">
							<?php the_field("qui_sommes_nous_first_label"); ?>
						</div>
						<div class="description_item">
							<?php the_field("qui_sommes_nous_first_label_description"); ?>
						</div>
					</div>
					<div class="item_asso" id="first_item">
						<div class="icon_item" data-aos="fade-up"><i class="fa fa-graduation-cap" aria-hidden="true"></i></div>
						<div class="title_item" data-aos="fade-right">
							<?php the_field("qui_sommes_nous_second_label"); ?>
						</div>
						<div class="description_item">
							<?php the_field("qui_sommes_nous_second_label_description"); ?>
						</div>
					</div>
					<div class="item_asso" id="first_item">
						<div class="icon_item" data-aos="fade-up"><i class="fa fa-calendar" aria-hidden="true"></i></div>
						<div class="title_item" data-aos="fade-right">
							<?php the_field("qui_sommes_nous_third_label"); ?>
						</div>
						<div class="description_item">
							<?php 
							the_field("qui_sommes_nous_third_label_description"); 
							?>

						</div>
					</div>
				</div>
				<div class="col-md-12 col-lg" id="background_asso" ></div>

			</div>
		</div>
	</div>
</section>
<section id="second" style="margin-top: 25px;">
	<div class="container">
		<div class="row" id="second_row">
			<div class="col-md-12 col-lg" data-aos="fade-right">
				<a class="a_square" href="https://www.facebook.com/LyonAMGE" target="_blank">
					<div class="square"></div>
					<div class="square_content"><i class="fa fa-facebook"></i></div>
				</a>
				<div class="text_square">Facebook</div>
				<div class="description"><?php the_field("facebook_text"); ?></div>
			</div>
			<div class="col-md-12 col-lg" data-aos="fade-right">
				<a class="a_square" href="https://www.instagram.com/amge.lyon/" target="_blank">
					<div class="square"></div>
					<div class="square_content"><i class="fa fa-instagram"></i></div>
				</a>
				<div class="text_square">Instagram</div>
				<div class="description"><?php the_field("instagram_text"); ?></div>
			</div>
			<div class="col-md-12 col-lg" data-aos="fade-left">
				<a class="a_square" href="https://www.linkedin.com/company/amge-lyon/" target="_blank">
					<div class="square"></div>
					<div class="square_content"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
				</a>
				<div class="text_square">Linkedin</div>
				<div class="description"><?php the_field("linkedin_text"); ?></div>
			</div>
			<div class="col-md-12 col-lg" data-aos="fade-left">
				<a class="a_square" href="#contact">
					<div class="square"></div>
					<div class="square_content"><i class="fa fa-comments" aria-hidden="true"></i></div>
				</a>
				<div class="text_square">Contactez-nous</div>
				<div class="description"><?php the_field("contactez-nous_text"); ?></div>
			</div>
		</div>
		<div class="row" id="third_row">
			<div class="col-md-12 col-lg" data-aos="fade-right">
				<!--
				<img src="<?php echo $template_uri; ?>/images/about_us.png" style="width: inherit;">
				-->
				<div class="fb-group" 
			         data-href="https://www.facebook.com/groups/403846190630459" 
			         data-width="420" 
			         data-show-social-context="true" 
			         data-show-metadata="false">
			    </div>
			</div>
			<div class="col-md-12 col-lg" data-aos="fade-left" style="padding-left: 53px;display: table-header-group;">
				<div id="title">Notre groupe</div>
				<div class="description" id="description_us">
					<?php the_field("notre_site"); ?>
				</div>
				<!--
				<button id="leftbtn" class="btn btn-lg"><?php the_field("notre_site_button"); ?></button>
				-->
			</div>
		</div>
	</div>
</section>

<section id="event" style="background-color:#f4f5f9;padding-top: 65px;margin-bottom: 0;">
	<div class="container" style="text-align: center;">
		<div id="last_evn_title">DERNIERS EVENEMENTS</div>		
		<div id="text_env" class="description">
			<?php the_field("rester_en_contact_text"); ?>
		</div>
		<div id="img_container">
			<img src="<?php echo $template_uri; ?>/images/design_2.png">
		</div>
	</div>
	<div class="container-fluid">
		<?php
			$query = new WP_Query( array(
			    'no_found_rows'  => true,
			    'tag'            => 'Evenement'
			) );
			$num = $query->post_count;
			$j = 0;
			$p = 0;
			if ( $query->have_posts() ){
			    while ( $query->have_posts() ) : $query->the_post();
			    	if($j % 2 == 0){
			    		if($p==0){
			    			$p=1;
			    		}else{
			    			$p=0;
			    		}
						echo '<div class="row row_images">';
					}
					$j++;
			    	$title = get_the_title();
			    	$url = catch_that_image();
			    	$content = strip_tags(get_the_content(),'<p><b><i><u><a><ul><ol><li>');

			    	if(empty($url)){
			    		$url = $template_uri.'/images/image_default.png';
			    	}
			    	if($p==1){
				        echo'
								<div class="col-sm-6 col-lg post_col">
									<img class="image_row_col" src="'.$url.'">				
								</div>
								<div class="col-sm-6 col-lg post_col">
									<div class="image_details_col">
										<div class="triangle_left"></div>
										<div class="info_image_row">
											Evenement
										</div>
										<div class="title_image_row">
											'.$title.'
										</div>
										<div class="desc_image_row">
											'.$content.'
										</div>
									</div>			
								</div>
				        ';
			    	}else{
			    		echo'
					    		<div class="col-sm-6 col-lg post_col to_change_order" number="'.$j.'">
									<div class="image_details_col">
										<div class="triangle_right"></div>
										<div class="info_image_row">
											Evenement
										</div>
										<div class="title_image_row">
											'.$title.'
										</div>
										<div class="desc_image_row">
											'.$content.'
										</div>
									</div>			
								</div>
								<div class="col-sm-6 col-lg post_col to_change_order_with" id="tcow-'.$j.'">
									<img class="image_row_col" src="'.$url.'">				
								</div>
				        ';
			    	}
			        if($j % 2 == 0 or $j == $num){
			       		echo '</div>';
			        }
			    endwhile; wp_reset_postdata();
			}
		?>
	</div>
</section>

<section style="margin:0;">
	<div class="container-fluid" id="container_bg_3">
		<div id="black_cover">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg" data-aos="fade-up">
						<div class="circle" ></div>
						<div class="circle_content" ><i class="fa fa-user"></i></div>
						<div class="number_circle" >40 000</div>
						<div class="text_circle" >Etudiants marocains poursuivent leurs études supérieures en France</div>
					</div>
					<div class="col-md-12 col-lg" data-aos="fade-up">
						<div class="circle"></div>
						<div class="circle_content"><i class="fa fa-building"></i></div>
						<div class="number_circle">2ème</div>
						<div class="text_circle">Lyon deuxième meilleure ville étudiante après Toulouse</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section style="margin:0;padding: 65px 0;">
	<div id="coming">
		<div class="container comingSoon">Coming soon</div>
	</div>
	<div class="container" style="text-align: center;">
		<div id="last_evn_title">BILLETRIE</div>		
		<div id="text_env" class="description"></div>
		<div id="img_container">
			<img src="<?php echo $template_uri; ?>/images/design_2.png">
		</div>
		<div class="row">
			<div class="ol-md-12 col-lg">
				<div class="plan_buy">
					<div class="plan_title"></div>
					<div class="price_item" data-aos="fade-up"><span class="price">20€</span><span class="price_det"></span></div>
					<div class="desc_price">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
					</div>
					<button class="btn_billetrie btn btn-lg">A</button>
				</div>
			</div>
			<div class="ol-md-12 col-lg">
				<div class="plan_buy">
					<div class="plan_title"  style="background: #e74c3c;"></div>
					<div class="price_item" data-aos="fade-up"><span class="price">20€</span><span class="price_det"></span></div>
					<div class="desc_price">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
					</div>
					<button class="btn_billetrie btn btn-lg" style="background: #e74c3c;">A</button>
				</div>
			</div>
			<div class="ol-md-12 col-lg">
				<div class="plan_buy">
					<div class="plan_title"></div>
					<div class="price_item" data-aos="fade-up"><span class="price">20€</span><span class="price_det"></span></div>
					<div class="desc_price">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
					</div>
					<button class="btn_billetrie btn btn-lg">A</button>
				</div>
			</div>
		</div>
	</div>
</section>


<section style="margin-bottom: 0;padding-top: 65px;">
	<div class="container" style="text-align: center;">
		<div id="last_evn_title">Guide des procédures administratives en France</div>		
		<div id="text_env" class="description">
			<?php the_field("guide_des_procedures_administratives_en_france_description"); ?>
		</div>
		<div id="img_container">
			<img src="<?php echo $template_uri; ?>/images/design_2.png">
		</div>
		<ul id="ul_select">
			<!--
				<li class="active_li">ALL</li>
			-->
			<?php
				$tags = get_tags(array(
				  'hide_empty' => false
				));
				$i = 0;
				foreach ($tags as $tag) {
					if($tag->name=='Evenement'){
						continue;
					}
					$i++;
					if($i == 1){
						echo '<li class="tag_li active_li">' . $tag->name . '</li>';
					}else{
						echo '<span>/</span>';
						echo '<li class="tag_li">' . $tag->name . '</li>';
					}
				}
			?>
		</ul>
	</div>
	<div class="container-fluid">
			<?php
			$i = 0;
			foreach ($tags as $tag) {
				$j = 0;
				if($tag->name=='Evenement'){
					continue;
				}
				$i++;
				
				if($i == 1){
					$show_tag_container = 'contents';
				}else{
					$show_tag_container = 'none';
				}

				$query = new WP_Query( array(
				    'no_found_rows'  => true,
				    'tag'            => $tag->name
				) );
				$num = $query->post_count;

				if ( $query->have_posts() ){
					echo '<div class="tag-container" style="display:'.$show_tag_container.';" id="tag_'.$tag->name.'">';
				    while ( $query->have_posts() ) : $query->the_post();
				    	if($j % 4 == 0){
							echo '<div class="row row_images">';
						}
						$j++;
				    	$title = get_the_title();
				    	$url = catch_that_image();
				    	$js = "location.href = '".get_permalink()."#post_content';";
				        echo'
					        	<div class="col-sm-6 col-lg post_col" onclick="'.$js.'">
									<img class="image_row" src="'.$url.'">
									<div class="image_hover_animate">
										<div class="title_evn_row">
											'.$title.'
										</div>
										<div class="info_evn_row">
											'.$tag->name.'
										</div>
									</div>				
								</div>
				        ';
				        if($j % 4 == 0 or $j == $num){
				       		echo '</div>';
				        }
				    endwhile; wp_reset_postdata();

					echo '</div>';  
				}
			}
			?>
	</div>
</section>


<section id="team" style="margin-bottom: 0;">
	<div class="container-fluid" id="team">
		<div id="team_title">Notre équipe</div>
		<div id="team_desc" class="description">
			<?php the_field("our_team_text");?>
		</div>
		<div id="img_container">
			<img src="<?php echo $template_uri; ?>/images/design_2.png">
		</div>
		<div id="svg_container">
			<div class="row">
				<a class="person col-sm-6 col-lg post_col" target="_blank" href="https://www.linkedin.com/in/salah-eddine-miadi-371829134/"  data-aos="fade-up">
					<div class="person_img">
						<img src="<?php echo $template_uri; ?>/images/team/Salah.jpg">
					</div>
					<div class="hidden_person">
						<div class="person_line"></div>
						<div class="person_name">
							MIADI Salah-Eddine
						</div>
						<div class="person_position">
							Président
						</div>
					</div>
				</a>
				<a class="person col-sm-6 col-lg post_col" target="_blank" href="https://www.linkedin.com/in/basma-ibriz/"  data-aos="fade-up">
					<div class="person_img">
						<img src="<?php echo $template_uri; ?>/images/team/Basma.jpg">
					</div>
					<div class="hidden_person">
						<div class="person_line"></div>
						<div class="person_name">
							IBRIZ Basma
						</div>
						<div class="person_position">
							Vice-Présidente
						</div>
					</div>
				</a>
				<a class="person col-sm-6 col-lg post_col" target="_blank" href="https://www.linkedin.com/in/anas-zilali/"  data-aos="fade-up">
					<div class="person_img">
						<img src="<?php echo $template_uri; ?>/images/team/Anas.png">
					</div>
					<div class="hidden_person">
						<div class="person_line"></div>
						<div class="person_name">
							ZILALI Anas
						</div>
						<div class="person_position">
							Secrétaire général
						</div>
					</div>
				</a>
				<a class="person col-sm-6 col-lg post_col" target="_blank" href="https://www.linkedin.com/in/ibrahim-ez-zahraouy-261249170/"  data-aos="fade-up">
					<div class="person_img">
						<img src="<?php echo $template_uri; ?>/images/team/Ibrahim.jpg">
					</div>
					<div class="hidden_person">
						<div class="person_line"></div>
						<div class="person_name">
							EZ-ZAHRAOUY Ibrahim
						</div>
						<div class="person_position">
							Trésorier
						</div>
					</div>
				</a>
				<a class="person col-sm-6 col-lg post_col" target="_blank" href="https://www.linkedin.com/in/hanafi-benouari/"  data-aos="fade-up">
					<div class="person_img">
						<img src="<?php echo $template_uri; ?>/images/team/Hanafi.jpg">
					</div>
					<div class="hidden_person">
						<div class="person_line"></div>
						<div class="person_name">
							BENOUARI HANAFI
						</div>
						<div class="person_position">
							Vice-trésorier
						</div>
					</div>
				</a>
				<a class="person col-sm-6 col-lg post_col" target="_blank" href="https://www.linkedin.com/in/oumayma-yacoubi-244670172/"  data-aos="fade-up">
					<div class="person_img">
						<img src="<?php echo $template_uri; ?>/images/team/oumayma.jpg">
					</div>
					<div class="hidden_person">
						<div class="person_line"></div>
						<div class="person_name">
							YACOUBI Oumayma
						</div>
						<div class="person_position">
							Respo communication
						</div>
					</div>
				</a>
				<a class="person col-sm-6 col-lg post_col" target="_blank" href="https://www.linkedin.com/in/asmaa-rachidi/"  data-aos="fade-up">
					<div class="person_img">
						<img src="<?php echo $template_uri; ?>/images/team/Asmaa.jpg">
					</div>
					<div class="hidden_person">
						<div class="person_line"></div>
						<div class="person_name">
							RACHIDI Asmaa
						</div>
						<div class="person_position">
							Respo networking et accompagnement
						</div>
					</div>
				</a>
			</div>
			<div class="row">
				<a class="person col-sm-6 col-lg post_col" target="_blank" href="https://www.linkedin.com/in/manar-abouelala-9549451a2/"  data-aos="fade-up">
					<div class="person_img">
						<img src="<?php echo $template_uri; ?>/images/team/Manar.jpg">
					</div>
					<div class="hidden_person">
						<div class="person_line"></div>
						<div class="person_name">
							ABOUELALA Manar
						</div>
						<div class="person_position">
							Membre pôle communication
						</div>
					</div>
				</a>
				<a class="person col-sm-6 col-lg post_col" target="_blank" href="https://www.linkedin.com/in/abderrahmane-rachadi-1216001b3/"  data-aos="fade-up">
					<div class="person_img">
						<img src="<?php echo $template_uri; ?>/images/team/Abderrahmane.png">
					</div>
					<div class="hidden_person">
						<div class="person_line"></div>
						<div class="person_name">
							RACHADI Abderahmane
						</div>
						<div class="person_position">
							Membre pôle communication
						</div>
					</div>
				</a>
				<a class="person col-sm-6 col-lg post_col" target="_blank" href="https://www.linkedin.com/in/zakaria-el-fathi-043b60187/"  data-aos="fade-up">
					<div class="person_img">
						<img src="<?php echo $template_uri; ?>/images/team/Zakariae.jpg">
					</div>
					<div class="hidden_person">
						<div class="person_line"></div>
						<div class="person_name">
							EL FATHI Zakaria
						</div>
						<div class="person_position">
							Membre pôle events
						</div>
					</div>
				</a>
				<a class="person col-sm-6 col-lg post_col" target="_blank" href="https://www.linkedin.com/in/iliass-moutaoukil-b784311b5/"  data-aos="fade-up">
					<div class="person_img">
						<img src="<?php echo $template_uri; ?>/images/team/Ilias.jpg">
					</div>
					<div class="hidden_person">
						<div class="person_line"></div>
						<div class="person_name">
							MOUTAOUKIL Iliass
						</div>
						<div class="person_position">
							Membre pôle events
						</div>
					</div>
				</a>
				<a class="person col-sm-6 col-lg post_col" target="_blank" href="https://www.linkedin.com/in/mardy-mohammed-reda-1055b7196/"  data-aos="fade-up">
					<div class="person_img">
						<img src="<?php echo $template_uri; ?>/images/team/Mardy.jpg">
					</div>
					<div class="hidden_person">
						<div class="person_line"></div>
						<div class="person_name">
							MARDY Mohamed Reda
						</div>
						<div class="person_position">
							Membre pôle networking et accompagnement
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>	
</section>

<section style="background-color:#f4f5f9;padding: 65px 0;margin-bottom: 0;">
	<div class="container" style="text-align: center;">
		<div id="last_evn_title">NOS PARTENAIRES</div>		
		<div id="text_env" class="description"></div>
		<div id="img_container">
			<img src="<?php echo $template_uri; ?>/images/design_2.png">
		</div>
		<div id="text_partenaires">Partenaires de l'AMGE caravane</div>
		<div class="row" id="logo_row">
			<div class="ol-md-12 col-lg" id="ocp_logo">
				<a target="_blank" style="display:block;" href="https://www.ocpgroup.ma/" class="logo_container" data-aos="fade-top">
					<img style="max-height: 83px;" src="<?php echo $template_uri; ?>/images/ocp.png">
				</a>
			</div>
			<div class="ol-md-12 col-lg" id="atw_logo">
				<a target="_blank" style="display:block;" href="https://www.attijariwafabank.com/fr" class="logo_container" data-aos="fade-top">
					<img style="max-height: 83px;" src="<?php echo $template_uri; ?>/images/atw.jpg">
				</a>
			</div>
		</div>
		<div class="row" style="margin-bottom: 30px;" id="text_row">
			<div class="ol-md-12 col-lg" id="ocp_text">
				<p class="desc_partenaire">
				<?php the_field("ocp_text"); ?>
					
				</p>
			</div>
			<div class="ol-md-12 col-lg" id="atw_text">
				<p class="desc_partenaire">
				<?php the_field("atw_text"); ?>
					
				</p>
			</div>
		</div>
		<div class="row">
			<div class="ol-md-12 col-lg">
				<a target="_blank" style="display:block;" href="https://www.men.gov.ma/Fr/Pages/Accueil.aspx" class="logo_container" data-aos="fade-top">
					<img src="<?php echo $template_uri; ?>/images/men-gov.png">
				</a>
			</div>
			<div class="ol-md-12 col-lg">
				<a target="_blank" style="display:block;" href="https://maroc-diplomatique.net/" class="logo_container" data-aos="fade-top">
					<img src="<?php echo $template_uri; ?>/images/ma_dip.png">
				</a>
			</div>
			<div class="ol-md-12 col-lg">
				<a target="_blank" style="display:block;" href="https://new.hitradio.ma/" class="logo_container" data-aos="fade-top">
					<img src="<?php echo $template_uri; ?>/images/hitradio.png">
				</a>
			</div>
		</div>
		<div id="text_partenaires">Partenaires de l'AMGE Lyon</div>
		<div class="row">
			<div class="ol-md-12 col-lg">
				<a target="_blank" style="display:block;" href="https://www.facebook.com/ACEIMI" class="logo_container" data-aos="fade-top">
					<img src="<?php echo $template_uri; ?>/images/aceimi.jpg">
				</a>
			</div>
		</div>
	</div>
</section>

<section id="rejoindre" style="background-color:#f4f5f9;padding: 65px 0;margin-bottom: 0;">
	<div class="container" style="text-align: center;">
		<div id="last_evn_title">Nous rejoindre</div>		
		<div id="text_env" class="description">
			<?php the_field("nous_rejoindre_description"); ?>
		</div>
		<div id="img_container">
			<img src="<?php echo $template_uri; ?>/images/design_2.png">
		</div>
		<div class="row">
			<div id="col_case_study" class="slider_info col-md-6 col-lg" data-aos="fade-right">
				<div class="slides">
					<div class="square"></div>
					<div class="square_content"><i class="fa fa-bullhorn"></i></div>
					<div class="text_square" id="text_square">
						<?php the_field("nous_rejoindre_first_label"); ?>
					</div>

					<div class="description" id="description_us" >
						<?php the_field("nous_rejoindre_first_label_description"); ?>
					</div>
					<!--
						<button id="leftbtn" class="btn_slide btn btn-lg">
							<?php the_field("nous_rejoindre_first_label_button"); ?>
						</button>
					-->
				</div>
				<div class="slides">
					<div class="square"></div>
					<div class="square_content"><i class="fa fa-bullhorn"></i></div>
					<div class="text_square" id="text_square">
						<?php the_field("nous_rejoindre_second_label"); ?>
					</div>

					<div class="description" id="description_us" >
						<?php the_field("nous_rejoindre_second_label_description"); ?>
					</div>
					<!--
						<button id="leftbtn" class="btn_slide btn btn-lg">
							<?php the_field("nous_rejoindre_second_label_button"); ?>
						</button>
					-->
				</div>
				<div style="text-align:center;margin-top: 27px;">
				  <span class="dot" onclick="currentSlide(1)" style="display: none"></span> 
				  <span class="dot" onclick="currentSlide(2)" style="display: none"></span> 
				</div>
			</div>
			<div class="col-md-6 col-lg" data-aos="fade-left" id="case_study_image">
				<img src="<?php echo $template_uri; ?>/images/bg_2.png" style="width: inherit;">
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>