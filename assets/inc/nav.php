<!--
Savannah Mattia
Portfolio
Navigation
-->
<div class="menu-wrap">
    <nav class="menu">
        <ul>
        <!-- First label in navigation -->
            <li><a href="index.php" <?php if($page=='Leaving'){echo 'class="current"';} ?>>About Me</a></li>
            <li>
            	<!-- Second label in navigation -->
                <a href="#" <?php if($page=='Day 1 in Amsterdam' || $page=='Sick in Amsterdam' || $page=='Day 2 in Amsterdam'){echo 'class="current"';} 
            		?>>Projects</a>
            </li>
            <!-- Third label in navigation -->
			<li><a href="bru.php" <?php if($page=='Brussels'){echo 'class="current"';} ?>>Resume</a></li>
             <li>
             <!-- Fourth label in navigation -->
                <a href="#" <?php if($page=='Day 1 in Paris' || $page=='Day 2 in Paris' || $page=='Day 3 in Paris' || $page=='Disneyland Paris')
                	{echo 'class="current"';} ?>>Contact Me</a>
            </li>
        </ul>
    </nav>
</div>
<br/>