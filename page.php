<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1400px">
    <title>Refugee Connect</title>
    <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,400italic,700,700italic,300,300italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/style.css">
</head>
<body>

    <div class="header">
        <div class="container">
            <div class="logo left"><img src="<?php echo bloginfo('template_directory'); ?>/images/logo-colour.png" width="350"></div>
            <div class="nav right" style="text-align: right;">
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#about">ABOUT</a></li>
                    <li><a href="#donate">DONATE</a></li>
                    <li><a href="#workshops">WORKSHOPS</a></li>
                    <li><a href="#contact">CONTACT</a></li>
                </ul>
            </div>
            <div style="clear: both;"></div>
        </div>
    </div>

    <div class="banner" style="background: url(<?php the_field('background_image'); ?>) no-repeat;">
        <div class="container">
            <div class="callout center">
                <img src="<?php the_field('hero_shot'); ?>" style="width: 260px;margin-bottom: 20px;">
                <?php the_field('callout_text'); ?>
            </div>
        </div>
    </div>

    <div id="about" class="section" style="background: #f1f2f2;">
        <div class="container">
            <h1 class="center doubleMargin"><?php the_field('heading'); ?></h1>
            
            <?php if ( have_rows( 'about_box' ) ): ?>
				<?php while ( have_rows( 'about_box' ) ) : the_row(); ?>
					<div class="whiteBox half <?php the_sub_field('alignment'); ?>" style="text-align: center;">
		                <img src="<?php the_sub_field('image') ?>" width="256">
		                <?php the_sub_field('text'); ?>
		            </div>
				<?php endwhile; ?>
				<?php else: ?>
			<?php endif; ?>
            <div style="clear: both;"></div>
        </div>
    </div>

    <div class="container section">

        <div id="what-we-do">
            <div class="third left">
                <img src="<?php the_field('what_we_do_image'); ?>" width="100%">
            </div>
            <div class="two-thirds right">
                <?php the_field('what_we_do_text'); ?>
            </div>
            <div style="clear: both;"></div>
        </div>

        <div id="why" class="section">
            <div class="two-thirds left">
                <?php the_field('why_do_we_help_refugees_text'); ?>
            </div>
            <div class="third right">
                <img src="<?php the_field('why_do_we_help_refugees_image'); ?>" style="width: 100%;">
            </div>
            <div style="clear: both;"></div>
        </div>

        <div id="position" class="section">
            <div class="third left">
                <img src="<?php the_field('our_position_image'); ?>" style="width: 100%;">
            </div>

            <div class="two-thirds right">
                <?php the_field('our_position_text'); ?>
            </div>
            <div style="clear: both;"></div>
        </div>

    </div>

    <div class="section" id="donate" style="background: #f8961d;">

        <div class="container">
            <h1 class="center doubleMargin" style="color: #fff;"><?php the_field('donate_heading'); ?></h1>

            <div class="grid">
                <?php if ( have_rows( 'donate_box' ) ): ?>
				<?php while ( have_rows( 'donate_box' ) ) : the_row(); ?>
					<div class="whiteBox third center">
                    	<h2 class="underline"><strong><?php the_sub_field('heading'); ?></strong></h2>
                    	<?php the_sub_field('text'); ?>
					</div>
				<?php endwhile; ?>
				<?php else: ?>
			<?php endif; ?>
            </div>

            <div style="clear: both;"></div>
        </div>

    </div>

    <div class="section" id="workshops" style="background: #f1f2f2;">
        <div class="container">
            <h1><span style="color: #f8961d;">WORKSHOPS</span></h1>
            <div class="two-thirds left">
                <?php the_field('workshops_text'); ?>
            </div>
            <div class="third right">
                <img src="<?php the_field('workshops_image'); ?>" style="width: 100%;">
            </div>
            <div style="clear: both;"></div>
        </div>
    </div>

    <div class="container section" id="contact">
        <h1>CONTACT</h1>
        <div class="half left">
            <?php the_field('contact_text'); ?>
        </div>
        <div class="half right">
            <h2 class="underline leftline"><span style="color: #f8961d;">We’re</span> a member of</h2>
            <div style="clear: both;"></div>
            <div class="half left imageGrid"><img src="<?php echo bloginfo('template_directory'); ?>/images/refugee-council.jpg" height="100%"></div>
            <div class="half right imageGrid"><img src="<?php echo bloginfo('template_directory'); ?>/images/asylum-seeker.jpg" height="100%"></div>
            <div style="clear: both;"></div>
            <div class="half left imageGrid"><img src="<?php echo bloginfo('template_directory'); ?>/images/volunteering.jpg" height="100%"></div>
            <div class="half right imageGrid"><img src="<?php echo bloginfo('template_directory'); ?>/images/seek-volunteer.jpg" height="100%"></div>
            <div style="clear: both;"></div>
        </div>
        <div style="clear: both;"></div>
    </div>

    <div id="footer" class="section" style="background: #393736;">
        <div class="container">
            <div class="third left">
                <img src="<?php echo bloginfo('template_directory'); ?>/images/footer-logo.png" width="260">
            </div>
            <div class="two-thirds right" style="text-align: right;">
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#about">ABOUT</a></li>
                    <li><a href="#donate">DONATE</a></li>
                    <li><a href="#workshops">WORKSHOPS</a></li>
                    <li><a href="#contact">CONTACT</a></li>
                </ul>
                <small>Copyright Refugee Connect Ltd 2016</small>
            </div>
            <div style="clear: both;"></div>
        </div>
    </div>

</body>
</html>