<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package messenger_pigeons
 */
?>
	<div id="secondary" class="widget-area" role="complementary">

		<?php
        if(is_page_template('page-templates/about.php' )) :

            // Contact
            $address_line_1 = get_option('address_line_1');
           $address_line_2 = get_option('address_line_2');
           $city_st_zip = get_option('city_st_zip');
           $contact_email = get_option('contact_email');

            if(!empty($address_line_1) || !empty($city_st_zip) || !empty($phone_number)) {
                echo '<ul class="contact-info no-style i-list dark-gray">'
                     .(!empty($address_line_1 ) ? '<li><i class="icon-property"></i>'.$address_line_1 : '')
                     .(!empty($address_line_2 ) ? '<br/>'.$address_line_2 : '')
                     .(!empty($city_st_zip ) ? '<br/>'.$city_st_zip : '')
                     .(!empty($address_line_1 ) || !empty($address_line_2 ) || !empty($city_st_zip ) ? '</li>' : '')
                     .(!empty($phone_number ) ? '<li><i class="icon-phonelight"></i>'.$phone_number.'</li>' : '')
                     .(!empty($contact_email ) ? '<li><i class="icon-email"></i>'.$contact_email.'</li>' : '')
                    .'</ul>';
            }

            // Locations
            $map_img = get_option('map_img');
            if(!empty($map_img)) :
                $mapIMG = wp_get_attachment_image_src($map_img, 'medium', true);?>
                <aside class="location-side">
                    <figure class="map-image">
                        <img class="map aligncenter" alt="Map of CIS locations" src="<?php echo $mapIMG[0]?>"/>
                    </figure>
                    <?php $location = get_option('location_page');
                    if(!empty($location)) :?>
                        <p class="text-right m-no"><a href="<?php echo get_permalink($location);?>">See All Locations <i class="icon-chevron-circle-right"></i></a></p>
                    <?php endif;?>
                </aside>
            <?php endif;

            // History
            $history_page = get_option('history_page');
            if(!empty($history_page)) :
                $timeline = get_post_meta( $history_page, 'timeline', true);
                if(!empty($timeline)) :
                    $entry = $timeline[0];?>
                    <aside class="timeline-entry">
                        <? if(!empty($entry['image'])) :
                                $entry_img = wp_get_attachment_image_src($entry['image'], 'thumbnail', true);
                                echo '<img class="circle aligncenter" src="'.$entry_img[0].'"/>';
                            else :
                                echo '<div class="i-circle"><i class="'.$entry['icon'].'"></i></div>';
                            endif;
                        ?>
                        <h3 class="center m-no"><? echo $entry['title'];?></h3>
                        <? echo (!empty($entry['date']) ? '<div class="center gray">'.$entry['date'].'</div>' : '');?>
                        <? echo (!empty($entry['description']) ? wpautop($entry['description']) : '');?>
                    </aside>
                    <p class="text-right"><a href="<?php echo get_permalink($history_page);?>">See Our History <i class="icon-chevron-circle-right"></i></a></p>
                <?php endif;
            endif;

        else :
            dynamic_sidebar( 'sidebar-1' );
        endif;?>

	</div><!-- #secondary -->
