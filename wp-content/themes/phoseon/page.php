<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div class="grid-container default">
	<div class="grid-x grid-margin-x">
		<div class="cell small-12">


<?php
define('DB_HOST', '192.168.0.13');
define('DB_USER', 'SGraham');
define('DB_PASS', 'DigitalSignage2020@');
define('DB_NAME', 'Pilot_App');

class CustomDatabase
{
    private $db;

    public function __construct() {
        // Connect To Database
        try {
            $this->db = new wpdb(DB_USER, DB_PASS, DB_NAME, DB_HOST);
            $this->db->show_errors(); // Debug
        } catch (Exception $e) {    // Database Error
            echo $e->getMessage();
        }
    }

    // Example Query -- Count Students
    public function count_users() {
        return $this->db->get_var("SELECT COUNT(*) FROM `item_mst`;--");
    }
}
$Custom_DB = new CustomDatabase;
?>





		<?php while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; ?>
		</div>
	</div>
</div>

<?php
get_footer();
