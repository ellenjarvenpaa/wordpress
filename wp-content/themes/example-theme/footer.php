<footer>
    <p>&copy; 2024 ellenj</p>
    <div class="footer-nav">
	<?php wp_nav_menu( [ 'container' => 'nav', 'theme_location' => 'main-menu' ] ); ?>
    </div>
</footer>
</div>

<dialog id="single-post">
    <button id="close">Close</button>
    <article class="single" id="modal-content"></article>
</dialog>

<?php wp_footer(); ?>
</body>

</html>