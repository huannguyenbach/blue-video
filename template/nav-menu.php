<?php
/*Menu on Header*/
?>
<nav class="nav-pc">
            <a href="#" class="parent">
                <i class="fa fa-television"></i>&nbsp; KÊNH
            </a>
            <?php wp_nav_menu( array(
                'theme_location' => 'primary',
                'menu_class' => 'dropdown',
                'menu_id' => 'primary-menu'
            ) ); 
            ?>
</nav>
<div class="menu-action">
	<a href="http://noithatblue.com">noithatblue.com</a>	
</div><!-- menu-action -->