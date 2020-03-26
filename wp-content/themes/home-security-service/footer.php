<?php
/**
 * The template for displaying the footer
 *
 *
 * @package WordPress
 * @subpackage Lamark Media
 */
?>

<div class="outer-container footer">
    <div class="footer-inner inner-container">
        <div class="footer-logo-column">

            <div class="footer-copyright">
                Copyright &copy; <?php echo date('Y'); ?> Home Security System Deals. All Rights Reserved. <a href="/thank-you/"></a>
            </div>
        </div>

        <div class="footer-info-column">
            <a href="/do-not-sell-my-personal-information/" target="_blank">Do Not Sell My Information</a> | <a href="/privacy/" target="_blank">Privacy Policy</a> | <a href="/terms/" target="_blank">Terms &amp; Conditions</a>
        </div>
    </div>
</div>
</div>

<?php
include_once('inc/before-body-end.php');
wp_footer();
?>


</body>
</html>