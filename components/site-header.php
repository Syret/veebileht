<header id="site-header">
<nav class="menu-main">
    <ul class="menu">
        <?php
            foreach ($menu_main as $attribute => $value){
              echo '<li><a href="' . $value . '">' . $attribute . "</a></li>";
            };
        ?>
    </ul>
  </nav>		
</header>