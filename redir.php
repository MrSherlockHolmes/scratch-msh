You wish to visit the link: <?php echo htmlspecialchars($_GET["u"]); ?>

Are you sure?

<a href="/">No</a> <a href=<?php echo '"'.htmlspecialchars($_GET["u"]).'"'; ?>>Yes</a>
