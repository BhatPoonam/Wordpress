<?php
get_header();
?>
<select>
    <option value="Business">Business</option>
    <option value="COVID-19">COVID-19</option>
    <option value="SPORTS">SPORTS</option>

</select>
<?php
$args = array(
    'post_type' => 'news',
    'posts_per_page'=>1,
    'tax_query' => array(
        array(
            'taxonomy' => 'subjects',
            'field'    => 'slug',
            'terms'    => 'Business',
        ),
    ),
);
$query = new WP_Query( $args );
while ( $query->have_posts()):
    $query->the_post();
    echo '<br>';
    ?>
    <div>
        <div class='post-title'>
            <?php the_title(); ?>
        </div>
        <div class="user_vote" data-post_id="<?php the_ID();?>" page-num="2">
            <a>Vote here</a>
        </div>
    </div>
    <?php
    
endwhile;
// internDebug($query);
?>

<?php
get_footer();
