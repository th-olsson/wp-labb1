<footer id="footer">
    <div class="container">
        <div class="row top">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <?php dynamic_sidebar('footer-1') ?>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
                <?php dynamic_sidebar('footer-2') ?>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
                <?php dynamic_sidebar('footer-3') ?>
            </div>
        </div>
        <div class="row bottom">
            <div class="col-xs-12">
                <p>Copyright &copy; Grupp X, <?php echo date('Y') ?></p>
            </div>
        </div>
    </div>
</footer>

</div>

<?php wp_footer() ?>
</body>

</html>