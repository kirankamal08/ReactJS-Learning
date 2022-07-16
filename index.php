<?php
/**
 * Plugin Name: Product Features Comaprison Table Plugin.
 * Plugin URI: http://example.com
 * Version: 1.0
 * Description: Table shows comparion of product features added from the post screen options fields.
 * Author: Trigma
 * Author URI:
 */

add_action('admin_menu', 'comparison_features_options_box');

function comparison_features_options_box() {
    add_meta_box('table_features_info', 'Product Comparison Features', 'product_comparison_features', 'post', 'advanced', 'high');
}

//Adds the actual option box
function product_comparison_features() {
    global $post;
?>
 <fieldset id="mycustom-div">
    <!-- PRODUCT 1 Data fields -->
    <div class="form-control-wrapper" style="margin: 0px 0 30px; float: left; width:100%;">
        <div class="form-control-group" style= "float: left; width: 28%; margin:0 15px;">
            <label for="column_type" >Product1  Header Badge:</label>
            <select name="product1_badge_name" class="product1_badge_name">
            <?php $badge_name1 = get_post_meta($post->ID, 'product1_badge_name', true);?>
                    <option value="">Select A Badge</option>
                    <option <?php if ($badge_name1 == 'Winner') { ?> selected="selected"<?php } ?> value="Winner">Il migliore</option>
                    <option <?php if ($badge_name1 == 'Trending') { ?> selected="selected"<?php } ?> value="Trending">Di tendenza</option>
                    <option <?php if ($badge_name1 == 'Bestseller') { ?> selected="selected"<?php } ?> value="Bestseller">Il più venduto</option>
                    <option <?php if ($badge_name1 == 'Performance') { ?> selected="selected"<?php } ?> value="Performance">Top performance</option>
                    <option <?php if ($badge_name1 == 'Cheap_Good') { ?> selected="selected"<?php } ?> value="Cheap_Good">La migliore offerta</option>
                    <option <?php if ($badge_name1 == 'Runner_up') { ?> selected="selected"<?php } ?> value="Runner_up">La migliore alternativa</option>
                    <option <?php if ($badge_name1 == 'Good_choice') { ?> selected="selected"<?php } ?> value="Good_choice">Buona scelta</option>
                    <option <?php if ($badge_name1 == 'Bank_for_buck') { ?> selected="selected"<?php } ?> value="Bank_for_buck">Miglior qualità/prezzo</option>
                    <option <?php if ($badge_name1 == 'Durable') { ?> selected="selected"<?php } ?> value="Durable">Il più resistente</option>
                    <option <?php if ($badge_name1 == 'High_end') { ?> selected="selected"<?php } ?> value="High_end">Di fascia alta</option>
                    <option <?php if ($badge_name1 == 'Also_recommended') { ?> selected="selected"<?php } ?> value="Also_recommended">L'alternativa consigliata</option>
                    <option <?php if ($badge_name1 == 'Editor_tip') { ?> selected="selected"<?php } ?> value="Editor_tip">Il nostro suggerimento</option>
                    <option <?php if ($badge_name1 == 'For_beginners') { ?> selected="selected"<?php } ?> value="For_beginners">Per principianti</option>
            </select>
        </div> 
        <div class="form-control-group" style= "float: left; width: 28%; margin:0 15px;">
            <label for="column_type" >Mark NEW (Product1):</label>
            <select name="product1_tag_status" class="product1_tag_status">
            <?php $P1_tag_status = get_post_meta($post->ID, 'product1_tag_status', true);?>
                    <option <?php if ($P1_tag_status == 'no') { ?> selected="selected"<?php } ?> value="no">No</option>
                    <option <?php if ($P1_tag_status == 'yes') { ?> selected="selected"<?php } ?> value="yes">Yes</option>
            </select>
        </div> 

 <!--       <div class="row badge">
   <div class="col-xs-2 boot_padding">
                    <label for="imp_spec_key">Product1  Header Badge:</label>
                    <div class="input text">
                    <select name="product1_badge_name" class="product1_badge_name">
                    <option value="">Select A Badge</option>
                    <option <?php if ($badge_name1 == 'Star') { ?> selected="selected"<?php } ?> value="Winner">Winner</option>
                    <option <?php if ($badge_name1 == 'Crown') { ?> selected="selected"<?php } ?> value="Trending">Trending</option>
                    <option <?php if ($badge_name1 == 'Bestseller') { ?> selected="selected"<?php } ?> value="Bestseller">Bestseller</option>
                    <option <?php if ($badge_name1 == 'Performance') { ?> selected="selected"<?php } ?> value="Performance">Performance</option>
                    <option <?php if ($badge_name1 == 'Cheap_Good') { ?> selected="selected"<?php } ?> value="Cheap_Good">Cheap&Good</option>
                    <option <?php if ($badge_name1 == 'Runner_up') { ?> selected="selected"<?php } ?> value="Runner_up">Runner Up</option>
                    <option <?php if ($badge_name1 == 'Good_choice') { ?> selected="selected"<?php } ?> value="Good_choice">Good Choice</option>
                    <option <?php if ($badge_name1 == 'Bank_for_buck') { ?> selected="selected"<?php } ?> value="Bank_for_buck">Bank for Buck</option>
                    <option <?php if ($badge_name1 == 'Durable') { ?> selected="selected"<?php } ?> value="Durable">Durable</option>
                    <option <?php if ($badge_name1 == 'High_end') { ?> selected="selected"<?php } ?> value="High_end">High End</option>
                    <option <?php if ($badge_name1 == 'Also_recommended') { ?> selected="selected"<?php } ?> value="Also_recommended">Also Recommended</option>
                    <option <?php if ($badge_name1 == 'Editor_tip') { ?> selected="selected"<?php } ?> value="Editor_tip">Editor's Tip</option>
                    <option <?php if ($badge_name1 == 'For_beginners') { ?> selected="selected"<?php } ?> value="For_beginners">For Beginners</option>
            </select>

            </div>                        
    </div>
</div> -->

    </div>
    <!-- Features Heading -->
    <div class="form-control-wrapper" style="margin: 12px 0 30px; float: left; width:100%;">
        <div class="form-control-group" style= "float: left; width: 28%; margin:0 15px;">
            <label for="column_type">Feature1 Heading:</label>
            <input type="text" name="feature_1_heading" id="feature_1_heading" value="<?php echo get_post_meta($post->ID, 'feature_1_heading', true); ?>">
        </div>
        <div class="form-control-group" style= "float: left; width: 28%; margin:0 15px;">
            <label for="column_type">Feature2 Heading:</label>
            <input type="text" name="feature_2_heading" id="feature_2_heading" value="<?php  echo get_post_meta($post->ID, 'feature_2_heading', true); ?>">
        </div>
        <div class="form-control-group" style= "float: left; width: 28%; margin:0 15px;">
            <label for="column_type">Feature3 Heading:</label>
            <input type="text" name="feature_3_heading" id="feature_3_heading" value="<?php echo get_post_meta($post->ID, 'feature_3_heading', true); ?>"></textarea>
        </div>
        <div class="form-control-group" style= "float: left; width: 28%; margin:0 15px;">
            <label for="column_type">Feature4 Heading:</label>
            <input type="text" name="feature_4_heading" id="feature_4_heading" value="<?php echo get_post_meta($post->ID, 'feature_4_heading', true); ?>"></textarea>
        </div>
        <div class="form-control-group" style= "float: left; width: 28%; margin:0 15px;">
            <label for="column_type">Feature5 Heading:</label>
            <input type="text" name="feature_5_heading" id="feature_5_heading" value="<?php  echo get_post_meta($post->ID, 'feature_5_heading', true); ?>">
        </div>
    </div>
    <!-- Features Heading -->

    <!-- Features value block -->
    <div class="form-control-wrapper" style="margin: 12px 0 30px; float: left; width:100%;">
        <div class="form-control-group" style= "float: left; width: 28%; margin:0 15px;">
            <label for="column_type">Feature1 Bar whole value:</label>
            <input type="text" name="feature_1_bar_value" id="feature_1_bar_value" value="<?php echo get_post_meta($post->ID, 'feature_1_bar_value', true); ?>">
        </div>
        <div class="form-control-group" style= "float: left; width: 28%; margin:0 15px;">
            <label for="column_type">Feature2 Bar whole value:</label>
            <input type="text" name="feature_2_bar_value" id="feature_2_bar_value" value="<?php  echo get_post_meta($post->ID, 'feature_2_bar_value', true); ?>">
        </div>
        <div class="form-control-group" style= "float: left; width: 28%; margin:0 15px;">
            <label for="column_type">Feature3 Bar whole value:</label>
            <input type="text" name="feature_3_bar_value" id="feature_3_bar_value" value="<?php echo get_post_meta($post->ID, 'feature_3_bar_value', true); ?>"></textarea>
        </div>
        <div class="form-control-group" style= "float: left; width: 28%; margin:0 15px;">
            <label for="column_type">Feature4 Bar whole value:</label>
            <input type="text" name="feature_4_bar_value" id="feature_4_bar_value" value="<?php echo get_post_meta($post->ID, 'feature_4_bar_value', true); ?>"></textarea>
        </div>
        <div class="form-control-group" style= "float: left; width: 28%; margin:0 15px;">
            <label for="column_type">Feature5 Bar whole value:</label>
            <input type="text" name="feature_5_bar_value" id="feature_5_bar_value" value="<?php  echo get_post_meta($post->ID, 'feature_5_bar_value', true); ?>">
        </div>
    </div>
    <!-- Features Heading -->
    <!-- Features value block -->

    <div class="form-control-wrapper" style="margin: 12px 0 30px; float: left; width:100%;">
        <div class="form-control-group" style= "float: left; width: 28%; margin:0 15px;">
            <label for="column_type" >Product1 ASIN:</label>
            <input type="text" name="product_1_ASIN" id="product_1_ASIN" value="<?php echo get_post_meta($post->ID, 'product_1_ASIN', true); ?>">
        </div>
        <div class="form-control-group" style= "float: left; width: 28%; margin:0 15px;">
            <label for="column_type" >Product1 title:</label>
            <input type="text" name="product1_title_text" id="product1_title_text" value="<?php  echo get_post_meta($post->ID, 'product1_title_text', true); ?>">
        </div>
        <div class="form-control-group" style= "float: left; width: 28%; margin:0 15px;">
            <label for="column_type" >Product1 custom image Link:</label>
            <textarea name="custom_product1_img" id="custom_product1_img"><?php echo get_post_meta($post->ID, 'custom_product1_img', true); ?></textarea>
        </div>
        <div class="form-control-group" style= "float: left; width: 28%; margin:0 15px;">
            <label for="column_type" >Product1 URL:</label>
            <textarea name="product1_goto_url" id="product1_goto_url"><?php echo get_post_meta($post->ID, 'product1_goto_url', true); ?></textarea>
        </div>
        <div class="form-control-group" style= "float: left; width: 28%; margin:0 15px;">
            <label for="column_type" >Product1 Button text:</label>
            <input type="text" name="product1_btn_text" id="product1_btn_text" value="<?php  echo get_post_meta($post->ID, 'product1_btn_text', true); ?>">
        </div>
    </div>

    <!-- Features Block -->
    <div class="form-control-wrapper" style="margin: 12px 0 30px; float: left; width:100%;">
        <div class="form-control-group" style= "float: left; width: 28%; margin:0 15px;">
            <label for="column_type" >Product1 Feature1:</label>
            <input type="text" name="product_1_feature1" id="product_1_feature1" value="<?php echo get_post_meta($post->ID, 'product_1_feature1', true); ?>">
        </div>
        <div class="form-control-group" style= "float: left; width: 28%; margin:0 15px;">
            <label for="column_type" >Product1 Feature2:</label>
            <input type="text" name="product_1_feature2" id="product_1_feature2" value="<?php echo get_post_meta($post->ID, 'product_1_feature2', true); ?>">
        </div>
        <div class="form-control-group" style= "float: left; width: 28%; margin:0 15px;">
            <label for="column_type" >Product1 Feature3:</label>
            <input type="text" name="product_1_feature3" id="product_1_feature3" value="<?php echo get_post_meta($post->ID, 'product_1_feature3', true); ?>">
        </div>
    </div>    

    <div class="form-control-wrapper" style="margin: 12px 0 30px; float: left; width:100%;">
        <div class="form-control-group" style= "float: left; width: 28%; margin:0 15px;">
            <label for="column_type" >Product1 Feature4:</label>
            <input type="text" name="product_1_feature4" id="product_1_feature4" value="<?php echo get_post_meta($post->ID, 'product_1_feature4', true); ?>">
        </div>
        <div class="form-control-group" style= "float: left; width: 28%; margin:0 15px;">
            <label for="column_type" >Product1 Feature5:</label>
            <input type="text" name="product_1_feature5" id="product_1_feature5" value="<?php echo get_post_meta($post->ID, 'product_1_feature5', true); ?>">
        </div>
    </div> 
    

<!-- PRODUCT 2 Data fields -->
<div class="form-control-wrapper" style="margin: 0px 0 30px; float: left; width:100%;">
        <div class="form-control-group" style= "float: left; width: 28%; margin:0 15px;">
            <label for="column_type" >Product2  Header Badge:</label>
            <select name="product2_badge_name" class="product2_badge_name">
            <?php $badge_name2 = get_post_meta($post->ID, 'product2_badge_name', true);?>
                    <option value="">Select A Badge</option>
                    <option <?php if ($badge_name2 == 'Winner') { ?> selected="selected"<?php } ?> value="Winner">Il migliore</option>
                    <option <?php if ($badge_name2 == 'Trending') { ?> selected="selected"<?php } ?> value="Trending">Di tendenza</option>
                    <option <?php if ($badge_name2 == 'Bestseller') { ?> selected="selected"<?php } ?> value="Bestseller">Il più venduto</option>
                    <option <?php if ($badge_name2 == 'Performance') { ?> selected="selected"<?php } ?> value="Performance">Top performance</option>
                    <option <?php if ($badge_name2 == 'Cheap_Good') { ?> selected="selected"<?php } ?> value="Cheap_Good">La migliore offerta</option>
                    <option <?php if ($badge_name2 == 'Runner_up') { ?> selected="selected"<?php } ?> value="Runner_up">La migliore alternativa</option>
                    <option <?php if ($badge_name2 == 'Good_choice') { ?> selected="selected"<?php } ?> value="Good_choice">Buona scelta</option>
                    <option <?php if ($badge_name2 == 'Bank_for_buck') { ?> selected="selected"<?php } ?> value="Bank_for_buck">Miglior qualità/prezzo</option>
                    <option <?php if ($badge_name2 == 'Durable') { ?> selected="selected"<?php } ?> value="Durable">Il più resistente</option>
                    <option <?php if ($badge_name2 == 'High_end') { ?> selected="selected"<?php } ?> value="High_end">Di fascia alta</option>
                    <option <?php if ($badge_name2 == 'Also_recommended') { ?> selected="selected"<?php } ?> value="Also_recommended">L'alternativa consigliata</option>
                    <option <?php if ($badge_name2 == 'Editor_tip') { ?> selected="selected"<?php } ?> value="Editor_tip">Il nostro suggerimento</option>
                    <option <?php if ($badge_name2 == 'For_beginners') { ?> selected="selected"<?php } ?> value="For_beginners">Per principianti</option>
            </select>
        </div> 
        <div class="form-control-group" style= "float: left; width: 28%; margin:0 15px;">
            <label for="column_type" >Mark NEW (Product2):</label>
            <select name="product2_tag_status" class="product2_tag_status">
            <?php $P5_tag_status = get_post_meta($post->ID, 'product2_tag_status', true);?>
                    <option <?php if ($P5_tag_status == 'no') { ?> selected="selected"<?php } ?> value="no">No</option>
                    <option <?php if ($P5_tag_status == 'yes') { ?> selected="selected"<?php } ?> value="yes">Yes</option>
            </select>
        </div> 
    </div>

    <div class="form-control-wrapper" style="margin: 12px 0 30px; float: left; width:100%;">
        <div class="form-control-group" style= "float: left; width: 28%; margin:0 15px;">
            <label for="column_type" >Product2 ASIN:</label>
            <input type="text" name="product_2_ASIN" id="product_2_ASIN" value="<?php echo get_post_meta($post->ID, 'product_2_ASIN', true); ?>">
        </div>
        <div class="form-control-group" style= "float: left; width: 28%; margin:0 15px;">
            <label for="column_type" >Product2 title:</label>
            <input type="text" name="product2_title_text" id="product2_title_text" value="<?php  echo get_post_meta($post->ID, 'product2_title_text', true); ?>">
        </div>
        <div class="form-control-group" style= "float: left; width: 28%; margin:0 15px;">
            <label for="column_type" >Product2 custom image Link:</label>
            <textarea name="custom_product2_img" id="custom_product2_img"><?php echo get_post_meta($post->ID, 'custom_product2_img', true); ?></textarea>
        </div>
        <div class="form-control-group" style= "float: left; width: 28%; margin:0 15px;">
            <label for="column_type" >Product2 URL:</label>
            <textarea name="product2_goto_url" id="product2_goto_url"><?php echo get_post_meta($post->ID, 'product2_goto_url', true); ?></textarea>
        </div>
        <div class="form-control-group" style= "float: left; width: 28%; margin:0 15px;">
            <label for="column_type" >Product2 Button text:</label>
            <input type="text" name="product2_btn_text" id="product2_btn_text" value="<?php  echo get_post_meta($post->ID, 'product2_btn_text', true); ?>">
        </div>
    </div>

    <!-- Features Block -->
    <div class="form-control-wrapper" style="margin: 12px 0 30px; float: left; width:100%;">
        <div class="form-control-group" style= "float: left; width: 28%; margin:0 15px;">
            <label for="column_type" >Product2 Feature1:</label>
            <input type="text" name="product_2_feature1" id="product_2_feature1" value="<?php echo get_post_meta($post->ID, 'product_2_feature1', true); ?>">
        </div>
        <div class="form-control-group" style= "float: left; width: 28%; margin:0 15px;">
            <label for="column_type" >Product2 Feature2:</label>
            <input type="text" name="product_2_feature2" id="product_2_feature2" value="<?php echo get_post_meta($post->ID, 'product_2_feature2', true); ?>">
        </div>
        <div class="form-control-group" style= "float: left; width: 28%; margin:0 15px;">
            <label for="column_type" >Product2 Feature3:</label>
            <input type="text" name="product_2_feature3" id="product_2_feature3" value="<?php echo get_post_meta($post->ID, 'product_2_feature3', true); ?>">
        </div>
    </div>    

    <div class="form-control-wrapper" style="margin: 12px 0 30px; float: left; width:100%;">
        <div class="form-control-group" style= "float: left; width: 28%; margin:0 15px;">
            <label for="column_type" >Product2 Feature4:</label>
            <input type="text" name="product_2_feature4" id="product_2_feature4" value="<?php echo get_post_meta($post->ID, 'product_2_feature4', true); ?>">
        </div>
        <div class="form-control-group" style= "float: left; width: 28%; margin:0 15px;">
            <label for="column_type" >Product2 Feature5:</label>
            <input type="text" name="product_2_feature5" id="product_2_feature5" value="<?php echo get_post_meta($post->ID, 'product_2_feature5', true); ?>">
        </div>
    </div> 
    <!-- Features Block -->
    

    <!-- PRODUCT 3 Data fields -->
    <div class="form-control-wrapper" style="margin: 0px 0 30px; float: left; width:100%;">
        <div class="form-control-group" style= "float: left; width: 28%; margin:0 15px;">
            <label for="column_type" >product3  Header Badge:</label>
            <select name="product3_badge_name" class="product3_badge_name">
            <?php $badge_name3 = get_post_meta($post->ID, 'product3_badge_name', true);?>
                    <option value="">Select A Badge</option>
                    <option <?php if ($badge_name3 == 'Winner') { ?> selected="selected"<?php } ?> value="Winner">Il migliore</option>
                    <option <?php if ($badge_name3 == 'Trending') { ?> selected="selected"<?php } ?> value="Trending">Di tendenza</option>
                    <option <?php if ($badge_name3 == 'Bestseller') { ?> selected="selected"<?php } ?> value="Bestseller">Il più venduto</option>
                    <option <?php if ($badge_name3 == 'Performance') { ?> selected="selected"<?php } ?> value="Performance">Top performance</option>
                    <option <?php if ($badge_name3 == 'Cheap_Good') { ?> selected="selected"<?php } ?> value="Cheap_Good">La migliore offerta</option>
                    <option <?php if ($badge_name3 == 'Runner_up') { ?> selected="selected"<?php } ?> value="Runner_up">La migliore alternativa</option>
                    <option <?php if ($badge_name3 == 'Good_choice') { ?> selected="selected"<?php } ?> value="Good_choice">Buona scelta</option>
                    <option <?php if ($badge_name3 == 'Bank_for_buck') { ?> selected="selected"<?php } ?> value="Bank_for_buck">Miglior qualità/prezzo</option>
                    <option <?php if ($badge_name3 == 'Durable') { ?> selected="selected"<?php } ?> value="Durable">Il più resistente</option>
                    <option <?php if ($badge_name3 == 'High_end') { ?> selected="selected"<?php } ?> value="High_end">Di fascia alta</option>
                    <option <?php if ($badge_name3 == 'Also_recommended') { ?> selected="selected"<?php } ?> value="Also_recommended">L'alternativa consigliata</option>
                    <option <?php if ($badge_name3 == 'Editor_tip') { ?> selected="selected"<?php } ?> value="Editor_tip">Il nostro suggerimento</option>
    
    
    
                    <option <?php if ($badge_name3 == 'For_beginners') { ?> selected="selected"<?php } ?> value="For_beginners">Per principianti</option>
            </select>
        </div> 
        <div class="form-control-group" style= "float: left; width: 28%; margin:0 15px;">
            <label for="column_type" >Mark NEW (product3):</label>
            <select name="product3_tag_status" class="product3_tag_status">
            <?php $P3_tag_status = get_post_meta($post->ID, 'product3_tag_status', true);?>
                    <option <?php if ($P3_tag_status == 'no') { ?> selected="selected"<?php } ?> value="no">No</option>
                    <option <?php if ($P3_tag_status == 'yes') { ?> selected="selected"<?php } ?> value="yes">Yes</option>
            </select>
        </div> 
    </div>

    <div class="form-control-wrapper" style="margin: 12px 0 30px; float: left; width:100%;">
        <div class="form-control-group" style= "float: left; width: 28%; margin:0 15px;">
            <label for="column_type" >Product3 ASIN:</label>
            <input type="text" name="product_3_ASIN" id="product_3_ASIN" value="<?php echo get_post_meta($post->ID, 'product_3_ASIN', true); ?>">
        </div>
        <div class="form-control-group" style= "float: left; width: 28%; margin:0 15px;">
            <label for="column_type" >Product3 title:</label>
            <input type="text" name="product3_title_text" id="product3_title_text" value="<?php echo get_post_meta($post->ID, 'product3_title_text', true); ?>">
        </div>
        <div class="form-control-group" style= "float: left; width: 28%; margin:0 15px;">
            <label for="column_type" >Product3 custom image Link:</label>
            <textarea name="custom_product3_img" id="custom_product3_img"><?php echo get_post_meta($post->ID, 'custom_product3_img', true); ?></textarea>
        </div>
        <div class="form-control-group" style= "float: left; width: 28%; margin:0 15px;">
            <label for="column_type" >Product3 URL:</label>
            <textarea name="product3_goto_url" id="product3_goto_url"><?php echo get_post_meta($post->ID, 'product3_goto_url', true); ?></textarea>
        </div>
        <div class="form-control-group" style= "float: left; width: 28%; margin:0 15px;">
            <label for="column_type" >Product3 Button text:</label>
            <input type="text" name="product3_btn_text" id="product3_btn_text" value="<?php echo get_post_meta($post->ID, 'product3_btn_text', true); ?>">
        </div>
    </div>

    <!-- Features Block -->
    <div class="form-control-wrapper" style="margin: 12px 0 30px; float: left; width:100%;">
        <div class="form-control-group" style= "float: left; width: 28%; margin:0 15px;">
            <label for="column_type" >Product3 Feature1:</label>
            <input type="text" name="product_3_feature1" id="product_3_feature1" value="<?php echo get_post_meta($post->ID, 'product_3_feature1', true); ?>">
        </div>
        <div class="form-control-group" style= "float: left; width: 28%; margin:0 15px;">
            <label for="column_type" >Product3 Feature2:</label>
            <input type="text" name="product_3_feature2" id="product_3_feature2" value="<?php echo get_post_meta($post->ID, 'product_3_feature2', true); ?>">
        </div>
        <div class="form-control-group" style= "float: left; width: 28%; margin:0 15px;">
            <label for="column_type" >Product3 Feature3:</label>
            <input type="text" name="product_3_feature3" id="product_3_feature3" value="<?php echo get_post_meta($post->ID, 'product_3_feature3', true); ?>">
        </div>
    </div>    

    <div class="form-control-wrapper" style="margin: 12px 0 30px; float: left; width:100%;">
        <div class="form-control-group" style= "float: left; width: 28%; margin:0 15px;">
            <label for="column_type" >Product3 Feature4:</label>
            <input type="text" name="product_3_feature4" id="product_3_feature4" value="<?php echo get_post_meta($post->ID, 'product_3_feature4', true); ?>">
        </div>
        <div class="form-control-group" style= "float: left; width: 28%; margin:0 15px;">
            <label for="column_type" >Product3 Feature5:</label>
            <input type="text" name="product_3_feature5" id="product_3_feature5" value="<?php echo get_post_meta($post->ID, 'product_3_feature5', true); ?>">
        </div>
    </div> 



    <!-- Features Block -->
    <!-- Product 3 -->

    <!-- Product 4 -->
    <!-- PRODUCT 3 Data fields -->
<div class="form-control-wrapper" style="margin: 0px 0 30px; float: left; width:100%;">
        <div class="form-control-group" style= "float: left; width: 28%; margin:0 15px;">
            <label for="column_type" >Product4  Header Badge:</label>
            <select name="product4_badge_name" class="product4_badge_name">
            <?php $badge_name4 = get_post_meta($post->ID, 'product4_badge_name', true);?>
                    <option value="">Select A Badge</option>
                    <option <?php if ($badge_name4 == 'Winner') { ?> selected="selected"<?php } ?> value="Winner">Il migliore</option>
                    <option <?php if ($badge_name4 == 'Trending') { ?> selected="selected"<?php } ?> value="Trending">Di tendenza</option>
                    <option <?php if ($badge_name4 == 'Bestseller') { ?> selected="selected"<?php } ?> value="Bestseller">Il più venduto</option>
                    <option <?php if ($badge_name4 == 'Performance') { ?> selected="selected"<?php } ?> value="Performance">Top performance</option>
                    <option <?php if ($badge_name4 == 'Cheap_Good') { ?> selected="selected"<?php } ?> value="Cheap_Good">La migliore offerta</option>
                    <option <?php if ($badge_name4 == 'Runner_up') { ?> selected="selected"<?php } ?> value="Runner_up">La migliore alternativa</option>
                    <option <?php if ($badge_name4 == 'Good_choice') { ?> selected="selected"<?php } ?> value="Good_choice">Buona scelta</option>
                    <option <?php if ($badge_name4 == 'Bank_for_buck') { ?> selected="selected"<?php } ?> value="Bank_for_buck">Miglior qualità/prezzo</option>
                    <option <?php if ($badge_name4 == 'Durable') { ?> selected="selected"<?php } ?> value="Durable">Il più resistente</option>
                    <option <?php if ($badge_name4 == 'High_end') { ?> selected="selected"<?php } ?> value="High_end">Di fascia alta</option>
                    <option <?php if ($badge_name4 == 'Also_recommended') { ?> selected="selected"<?php } ?> value="Also_recommended">L'alternativa consigliata</option>
                    <option <?php if ($badge_name4 == 'Editor_tip') { ?> selected="selected"<?php } ?> value="Editor_tip">Il nostro suggerimento</option>
                    <option <?php if ($badge_name4 == 'For_beginners') { ?> selected="selected"<?php } ?> value="For_beginners">Per principianti</option>
            </select>
        </div> 
        <div class="form-control-group" style= "float: left; width: 28%; margin:0 15px;">
            <label for="column_type" >Mark NEW (Product4):</label>
            <select name="product4_tag_status" class="product4_tag_status">
            <?php $P4_tag_status = get_post_meta($post->ID, 'product4_tag_status', true);?>
                    <option <?php if ($P4_tag_status == 'no') { ?> selected="selected"<?php } ?> value="no">No</option>
                    <option <?php if ($P4_tag_status == 'yes') { ?> selected="selected"<?php } ?> value="yes">Yes</option>
            </select>
        </div> 
    </div>

    <div class="form-control-wrapper" style="margin: 12px 0 30px; float: left; width:100%;">
        <div class="form-control-group" style= "float: left; width: 28%; margin:0 15px;">
            <label for="column_type" >Product4 ASIN:</label>
            <input type="text" name="product_4_ASIN" id="product_4_ASIN" value="<?php echo get_post_meta($post->ID, 'product_4_ASIN', true); ?>">
        </div>
        <div class="form-control-group" style= "float: left; width: 28%; margin:0 15px;">
            <label for="column_type" >Product4 title:</label>
            <input type="text" name="product4_title_text" id="product4_title_text" value="<?php echo get_post_meta($post->ID, 'product4_title_text', true); ?>">
        </div>
        <div class="form-control-group" style= "float: left; width: 28%; margin:0 15px;">
            <label for="column_type" >Product4 custom image Link:</label>
            <textarea name="custom_product4_img" id="custom_product4_img"><?php echo get_post_meta($post->ID, 'custom_product4_img', true); ?></textarea>
        </div>
        <div class="form-control-group" style= "float: left; width: 28%; margin:0 15px;">
            <label for="column_type" >Product4 URL:</label>
            <textarea name="product4_goto_url" id="product4_goto_url"><?php echo get_post_meta($post->ID, 'product4_goto_url', true); ?></textarea>
        </div>
        <div class="form-control-group" style= "float: left; width: 28%; margin:0 15px;">
            <label for="column_type" >Product4 Button text:</label>
            <input type="text" name="product4_btn_text" id="product4_btn_text" value="<?php echo get_post_meta($post->ID, 'product4_btn_text', true); ?>">
        </div>
    </div>

    <!-- Features Block -->
    <div class="form-control-wrapper" style="margin: 12px 0 30px; float: left; width:100%;">
        <div class="form-control-group" style= "float: left; width: 28%; margin:0 15px;">
            <label for="column_type" >Product4 Feature1:</label>
            <input type="text" name="product_4_feature1" id="product_4_feature1" value="<?php echo get_post_meta($post->ID, 'product_4_feature1', true); ?>">
        </div>
        <div class="form-control-group" style= "float: left; width: 28%; margin:0 15px;">
            <label for="column_type" >Product4 Feature2:</label>
            <input type="text" name="product_4_feature2" id="product_4_feature2" value="<?php echo get_post_meta($post->ID, 'product_4_feature2', true); ?>">
        </div>
        <div class="form-control-group" style= "float: left; width: 28%; margin:0 15px;">
            <label for="column_type" >Product4 Feature3:</label>
            <input type="text" name="product_4_feature3" id="product_4_feature3" value="<?php echo get_post_meta($post->ID, 'product_4_feature3', true); ?>">
        </div>
    </div>    

    <div class="form-control-wrapper" style="margin: 12px 0 30px; float: left; width:100%;">
        <div class="form-control-group" style= "float: left; width: 28%; margin:0 15px;">
            <label for="column_type" >Product4 Feature4:</label>
            <input type="text" name="product_4_feature4" id="product_4_feature4" value="<?php echo get_post_meta($post->ID, 'product_4_feature4', true); ?>">
        </div>
        <div class="form-control-group" style= "float: left; width: 28%; margin:0 15px;">
            <label for="column_type" >Product4 Feature5:</label>
            <input type="text" name="product_4_feature5" id="product_4_feature5" value="<?php echo get_post_meta($post->ID, 'product_4_feature5', true); ?>">
        </div>
    </div> 
    <!-- Features Block -->
    <!-- Product 4 -->

    <!-- Product 5 -->
    <!-- PRODUCT 4 Data fields -->
<div class="form-control-wrapper" style="margin: 0px 0 30px; float: left; width:100%;">
        <div class="form-control-group" style= "float: left; width: 28%; margin:0 15px;">
            <label for="column_type" >product5  Header Badge:</label>
            <?php $badge_name5 = get_post_meta($post->ID, 'product5_badge_name', true);?>
            <select name="product5_badge_name" class="product5_badge_name">
                    <option value="">Select A Badge</option>
                    <option <?php if ($badge_name5 == 'Winner') { ?> selected="selected"<?php } ?> value="Winner">Il migliore</option>
                    <option <?php if ($badge_name5 == 'Trending') { ?> selected="selected"<?php } ?> value="Trending">Di tendenza</option>
                    <option <?php if ($badge_name5 == 'Bestseller') { ?> selected="selected"<?php } ?> value="Bestseller">Il più venduto</option>
                    <option <?php if ($badge_name5 == 'Performance') { ?> selected="selected"<?php } ?> value="Performance">Top performance</option>
                    <option <?php if ($badge_name5 == 'Cheap_Good') { ?> selected="selected"<?php } ?> value="Cheap_Good">La migliore offerta</option>
                    <option <?php if ($badge_name5 == 'Runner_up') { ?> selected="selected"<?php } ?> value="Runner_up">La migliore alternativa</option>
                    <option <?php if ($badge_name5 == 'Good_choice') { ?> selected="selected"<?php } ?> value="Good_choice">Buona scelta</option>
                    <option <?php if ($badge_name5 == 'Bank_for_buck') { ?> selected="selected"<?php } ?> value="Bank_for_buck">Miglior qualità/prezzo</option>
                    <option <?php if ($badge_name5 == 'Durable') { ?> selected="selected"<?php } ?> value="Durable">Il più resistente</option>
                    <option <?php if ($badge_name5 == 'High_end') { ?> selected="selected"<?php } ?> value="High_end">Di fascia alta</option>
                    <option <?php if ($badge_name5 == 'Also_recommended') { ?> selected="selected"<?php } ?> value="Also_recommended">L'alternativa consigliata</option>
                    <option <?php if ($badge_name5 == 'Editor_tip') { ?> selected="selected"<?php } ?> value="Editor_tip">Il nostro suggerimento</option>
                    <option <?php if ($badge_name5 == 'For_beginners') { ?> selected="selected"<?php } ?> value="For_beginners">Per principianti</option>
            </select>
        </div> 
        <div class="form-control-group" style= "float: left; width: 28%; margin:0 15px;">
            <label for="column_type" >Mark NEW (product5):</label>
            <select name="product5_tag_status" class="product5_tag_status">
            <?php $P5_tag_status = get_post_meta($post->ID, 'product5_tag_status', true);?>
                    <option <?php if ($P5_tag_status == 'no') { ?> selected="selected"<?php } ?> value="no">No</option>
                    <option <?php if ($P5_tag_status == 'yes') { ?> selected="selected"<?php } ?> value="yes">Yes</option>
            </select>
        </div> 
    </div>

    <div class="form-control-wrapper" style="margin: 12px 0 30px; float: left; width:100%;">
        <div class="form-control-group" style= "float: left; width: 28%; margin:0 15px;">
            <label for="column_type" >product5 ASIN:</label>
            <input type="text" name="product_5_ASIN" id="product_5_ASIN" value="<?php echo get_post_meta($post->ID, 'product_5_ASIN', true); ?>">
        </div>
        <div class="form-control-group" style= "float: left; width: 28%; margin:0 15px;">
            <label for="column_type" >product5 title:</label>
            <input type="text" name="product5_title_text" id="product5_title_text" value="<?php echo get_post_meta($post->ID, 'product5_title_text', true); ?>">
        </div>
        <div class="form-control-group" style= "float: left; width: 28%; margin:0 15px;">
            <label for="column_type" >product5 custom image Link:</label>
            <textarea name="custom_product5_img" id="custom_product5_img"><?php echo get_post_meta($post->ID, 'custom_product5_img', true); ?></textarea>
        </div>
        <div class="form-control-group" style= "float: left; width: 28%; margin:0 15px;">
            <label for="column_type" >product5 URL:</label>
            <textarea name="product5_goto_url" id="product5_goto_url"><?php echo get_post_meta($post->ID, 'product5_goto_url', true); ?></textarea>
        </div>
        <div class="form-control-group" style= "float: left; width: 28%; margin:0 15px;">
            <label for="column_type" >product5 Button text:</label>
            <input type="text" name="product5_btn_text" id="product5_btn_text" value="<?php echo get_post_meta($post->ID, 'product5_btn_text', true); ?>">
        </div>
    </div>

    <!-- Features Block -->
    <div class="form-control-wrapper" style="margin: 12px 0 30px; float: left; width:100%;">
        <div class="form-control-group" style= "float: left; width: 28%; margin:0 15px;">
            <label for="column_type" >product5 Feature1:</label>
            <input type="text" name="product_5_feature1" id="product_5_feature1" value="<?php echo get_post_meta($post->ID, 'product_5_feature1', true); ?>">
        </div>
        <div class="form-control-group" style= "float: left; width: 28%; margin:0 15px;">
            <label for="column_type" >product5 Feature2:</label>
            <input type="text" name="product_5_feature2" id="product_5_feature2" value="<?php echo get_post_meta($post->ID, 'product_5_feature2', true); ?>">
        </div>
        <div class="form-control-group" style= "float: left; width: 28%; margin:0 15px;">
            <label for="column_type" >product5 Feature3:</label>
            <input type="text" name="product_5_feature3" id="product_5_feature3" value="<?php echo get_post_meta($post->ID, 'product_5_feature3', true); ?>">
        </div>
    </div>    

    <div class="form-control-wrapper" style="margin: 12px 0 30px; float: left; width:100%;">
        <div class="form-control-group" style= "float: left; width: 28%; margin:0 15px;">
            <label for="column_type" >product5 Feature4:</label>
            <input type="text" name="product_5_feature4" id="product_5_feature4" value="<?php echo get_post_meta($post->ID, 'product_5_feature4', true); ?>">
        </div>
        <div class="form-control-group" style= "float: left; width: 28%; margin:0 15px;">
            <label for="column_type" >product5 Feature5:</label>
            <input type="text" name="product_5_feature5" id="product_5_feature5" value="<?php echo get_post_meta($post->ID, 'product_5_feature5', true); ?>">
        </div>
    </div> 
    <!-- Features Block -->
    <!-- Product 5 -->

     <!-- Levels Bar Block -->
     <div class="form-control-wrapper" style="margin: 12px 0 30px; float: left; width:100%;">
        <div class="form-control-group" style= "float: left; width: 28%; margin:0 15px;">
            <label for="column_type" >Show Levels bar for Feature1:</label>
            <select name="feature1_bar_level" class="feature1_bar_level">
                <?php $feature1_bar_level = get_post_meta($post->ID, 'feature1_bar_level', true);?>
                <option <?php if ($feature1_bar_level == 'no') { ?> selected="selected"<?php } ?> value="no">No</option>
                <option <?php if ($feature1_bar_level == 'yes') { ?> selected="selected"<?php } ?> value="yes">Yes</option>
            </select>
        </div>
        <div class="form-control-group" style= "float: left; width: 28%; margin:0 15px;">
            <label for="column_type" >Show Levels bar for Feature2:</label>
            <select name="feature2_bar_level" class="feature2_bar_level">
                <?php $feature2_bar_level = get_post_meta($post->ID, 'feature2_bar_level', true);?>
                <option <?php if ($feature2_bar_level == 'no') { ?> selected="selected"<?php } ?> value="no">No</option>
                <option <?php if ($feature2_bar_level == 'yes') { ?> selected="selected"<?php } ?> value="yes">Yes</option>
            </select>
        </div>
        <div class="form-control-group" style= "float: left; width: 28%; margin:0 15px;">
            <label for="column_type" >Show Levels bar for Feature3:</label>
            <select name="feature3_bar_level" class="feature3_bar_level">
                <?php $feature3_bar_level = get_post_meta($post->ID, 'feature3_bar_level', true);?>
                <option <?php if ($feature3_bar_level == 'no') { ?> selected="selected"<?php } ?> value="no">No</option>
                <option <?php if ($feature3_bar_level == 'yes') { ?> selected="selected"<?php } ?> value="yes">Yes</option>
            </select>    
        </div>
    </div>    

    <div class="form-control-wrapper" style="margin: 12px 0 30px; float: left; width:100%;">
        <div class="form-control-group" style= "float: left; width: 28%; margin:0 15px;">
            <label for="column_type" >Show Levels bar for Feature4:</label>
            <select name="feature4_bar_level" class="feature4_bar_level">
                <?php $feature4_bar_level = get_post_meta($post->ID, 'feature4_bar_level', true);?>
                <option <?php if ($feature4_bar_level == 'no') { ?> selected="selected"<?php } ?> value="no">No</option>
                <option <?php if ($feature4_bar_level == 'yes') { ?> selected="selected"<?php } ?> value="yes">Yes</option>
            </select>
        </div>
        <div class="form-control-group" style= "float: left; width: 28%; margin:0 15px;">
            <label for="column_type" >Show Levels bar for Feature5:</label>
            <select name="feature5_bar_level" class="feature5_bar_level">
                <?php $feature5_bar_level = get_post_meta($post->ID, 'feature5_bar_level', true);?>
                <option <?php if ($feature5_bar_level == 'no') { ?> selected="selected"<?php } ?> value="no">No</option>
                <option <?php if ($feature5_bar_level == 'yes') { ?> selected="selected"<?php } ?> value="yes">Yes</option>
            </select>
        </div>
    </div> 
    <!-- Levels Bar Block -->

 </fieldset>
<?php
} 

add_action('save_post', 'custom_save_article_data');

function custom_save_article_data($postID) {
    global $post;
  //  echo "<pre>";
  //  print_r($_POST);exit;
    // called after a post or page is saved
    if ($parent_id = wp_is_post_revision($postID)) {
        $postID = $parent_id;
    }

    /* Features Options Save */
    if (isset($_POST['feature_1_heading'])) {
        update_features_custom_meta($postID, $_POST['feature_1_heading'], 'feature_1_heading');
    }
    if (isset($_POST['feature_2_heading'])) {
        update_features_custom_meta($postID, $_POST['feature_2_heading'], 'feature_2_heading');
    }
    if (isset($_POST['feature_3_heading'])) {
        update_features_custom_meta($postID, $_POST['feature_3_heading'], 'feature_3_heading');
    }
    if (isset($_POST['feature_4_heading'])) {
        update_features_custom_meta($postID, $_POST['feature_4_heading'], 'feature_4_heading');
    }
    if (isset($_POST['feature_5_heading'])) {
        update_features_custom_meta($postID, $_POST['feature_5_heading'], 'feature_5_heading');
    }
    /* Features Options Save */

    /* Features Bar value Options Save */
    if (isset($_POST['feature_1_bar_value'])) {
        update_features_custom_meta($postID, $_POST['feature_1_bar_value'], 'feature_1_bar_value');
    }
    if (isset($_POST['feature_2_bar_value'])) {
        update_features_custom_meta($postID, $_POST['feature_2_bar_value'], 'feature_2_bar_value');
    }
    if (isset($_POST['feature_3_bar_value'])) {
        update_features_custom_meta($postID, $_POST['feature_3_bar_value'], 'feature_3_bar_value');
    }
    if (isset($_POST['feature_4_bar_value'])) {
        update_features_custom_meta($postID, $_POST['feature_4_bar_value'], 'feature_4_bar_value');
    }
    if (isset($_POST['feature_5_bar_value'])) {
        update_features_custom_meta($postID, $_POST['feature_5_bar_value'], 'feature_5_bar_value');
    }
    /* Features Options Save */


    /* Prodcut 1 Save */
    if (isset($_POST['product_1_ASIN'])) {
        update_features_custom_meta($postID, $_POST['product_1_ASIN'], 'product_1_ASIN');
    }
    if (isset($_POST['product1_title_text'])) {
        update_features_custom_meta($postID, $_POST['product1_title_text'], 'product1_title_text');
    }
    if (isset($_POST['custom_product1_img'])) {
        update_features_custom_meta($postID, $_POST['custom_product1_img'], 'custom_product1_img');
    }
    if (isset($_POST['product1_goto_url'])) {
        update_features_custom_meta($postID, $_POST['product1_goto_url'], 'product1_goto_url');
    }
    if (isset($_POST['product1_btn_text'])) {
        update_features_custom_meta($postID, $_POST['product1_btn_text'], 'product1_btn_text');
    }
    if (isset($_POST['product1_badge_name'])) {
        update_features_custom_meta($postID, $_POST['product1_badge_name'], 'product1_badge_name');
    }
    if (isset($_POST['product1_tag_status'])) {
        update_features_custom_meta($postID, $_POST['product1_tag_status'], 'product1_tag_status');
    }
   /* Features Block Save */
    if (isset($_POST['product_1_feature1'])) {
        update_features_custom_meta($postID, $_POST['product_1_feature1'], 'product_1_feature1');
    }
    if (isset($_POST['product_1_feature2'])) {
        update_features_custom_meta($postID, $_POST['product_1_feature2'], 'product_1_feature2');
    }
    if (isset($_POST['product_1_feature3'])) {
        update_features_custom_meta($postID, $_POST['product_1_feature3'], 'product_1_feature3');
    }
    if (isset($_POST['product_1_feature4'])) {
        update_features_custom_meta($postID, $_POST['product_1_feature4'], 'product_1_feature4');
    }
    if (isset($_POST['product_1_feature5'])) {
        update_features_custom_meta($postID, $_POST['product_1_feature5'], 'product_1_feature5');
    }
   /* Features Block Save */
    /* Prodcut 1 Save */

    /* Prodcut 2 Save */
    if (isset($_POST['product_2_ASIN'])) {
        update_features_custom_meta($postID, $_POST['product_2_ASIN'], 'product_2_ASIN');
    }
    if (isset($_POST['product2_title_text'])) {
        update_features_custom_meta($postID, $_POST['product2_title_text'], 'product2_title_text');
    }
    if (isset($_POST['custom_product2_img'])) {
        update_features_custom_meta($postID, $_POST['custom_product2_img'], 'custom_product2_img');
    }
    if (isset($_POST['product2_goto_url'])) {
        update_features_custom_meta($postID, $_POST['product2_goto_url'], 'product2_goto_url');
    }
    if (isset($_POST['product2_btn_text'])) {
        update_features_custom_meta($postID, $_POST['product2_btn_text'], 'product2_btn_text');
    }
    if (isset($_POST['product2_badge_name'])) {
        update_features_custom_meta($postID, $_POST['product2_badge_name'], 'product2_badge_name');
    }
    if (isset($_POST['product2_tag_status'])) {
        update_features_custom_meta($postID, $_POST['product2_tag_status'], 'product2_tag_status');
    }
    /* Features Block Save */
    if (isset($_POST['product_2_feature1'])) {
        update_features_custom_meta($postID, $_POST['product_2_feature1'], 'product_2_feature1');
    }
    if (isset($_POST['product_2_feature2'])) {
        update_features_custom_meta($postID, $_POST['product_2_feature2'], 'product_2_feature2');
    }
    if (isset($_POST['product_2_feature3'])) {
        update_features_custom_meta($postID, $_POST['product_2_feature3'], 'product_2_feature3');
    }
    if (isset($_POST['product_2_feature4'])) {
        update_features_custom_meta($postID, $_POST['product_2_feature4'], 'product_2_feature4');
    }
    if (isset($_POST['product_2_feature5'])) {
        update_features_custom_meta($postID, $_POST['product_2_feature5'], 'product_2_feature5');
    }
   /* Features Block Save */
    /* Prodcut 2 Save */

     /* Prodcut 3 Save */
     
    if (isset($_POST['product_3_ASIN'])) {
        update_features_custom_meta($postID, $_POST['product_3_ASIN'], 'product_3_ASIN');
    }
    if (isset($_POST['product3_title_text'])) {
        update_features_custom_meta($postID, $_POST['product3_title_text'], 'product3_title_text');
    }
    if (isset($_POST['custom_product3_img'])) {
        update_features_custom_meta($postID, $_POST['custom_product3_img'], 'custom_product3_img');
    }
    if (isset($_POST['product3_goto_url'])) {
        update_features_custom_meta($postID, $_POST['product3_goto_url'], 'product3_goto_url');
    }
    if (isset($_POST['product3_btn_text'])) {
        update_features_custom_meta($postID, $_POST['product3_btn_text'], 'product3_btn_text');
    }
    /* Features Block Save */
    if (isset($_POST['product_3_feature1'])) {
        update_features_custom_meta($postID, $_POST['product_3_feature1'], 'product_3_feature1');
    }
    if (isset($_POST['product_3_feature2'])) {
        update_features_custom_meta($postID, $_POST['product_3_feature2'], 'product_3_feature2');
    }
    if (isset($_POST['product_3_feature3'])) {
        update_features_custom_meta($postID, $_POST['product_3_feature3'], 'product_3_feature3');
    }
    if (isset($_POST['product_3_feature4'])) {
        update_features_custom_meta($postID, $_POST['product_3_feature4'], 'product_3_feature4');
    }
    if (isset($_POST['product_3_feature5'])) {
        update_features_custom_meta($postID, $_POST['product_3_feature5'], 'product_3_feature5');
    }
    if (isset($_POST['product3_badge_name'])) {
        update_features_custom_meta($postID, $_POST['product3_badge_name'], 'product3_badge_name');
    }
    if (isset($_POST['product3_tag_status'])) {
        update_features_custom_meta($postID, $_POST['product3_tag_status'], 'product3_tag_status');
    }
   /* Features Block Save */
    /* Prodcut 3 Save */

     /* Prodcut 4 Save */
     
    if (isset($_POST['product_4_ASIN'])) {
        update_features_custom_meta($postID, $_POST['product_4_ASIN'], 'product_4_ASIN');
    }
    if (isset($_POST['product4_title_text'])) {
        update_features_custom_meta($postID, $_POST['product4_title_text'], 'product4_title_text');
    }
    if (isset($_POST['custom_product4_img'])) {
        update_features_custom_meta($postID, $_POST['custom_product4_img'], 'custom_product4_img');
    }
    if (isset($_POST['product4_goto_url'])) {
      // echo "test55-".$_POST['product4_goto_url'];exit;
        update_features_custom_meta($postID, $_POST['product4_goto_url'], 'product4_goto_url');
    } else {
       // echo "no data";exit;
    }
    if (isset($_POST['product4_btn_text'])) {
        update_features_custom_meta($postID, $_POST['product4_btn_text'], 'product4_btn_text');
    }
    if (isset($_POST['product4_badge_name'])) {
        update_features_custom_meta($postID, $_POST['product4_badge_name'], 'product4_badge_name');
    }
    if (isset($_POST['product4_tag_status'])) {
        update_features_custom_meta($postID, $_POST['product4_tag_status'], 'product4_tag_status');
    }
    /* Features Block Save */
    if (isset($_POST['product_4_feature1'])) {
        update_features_custom_meta($postID, $_POST['product_4_feature1'], 'product_4_feature1');
    }
    if (isset($_POST['product_4_feature2'])) {
        update_features_custom_meta($postID, $_POST['product_4_feature2'], 'product_4_feature2');
    }
    if (isset($_POST['product_4_feature3'])) {
        update_features_custom_meta($postID, $_POST['product_4_feature3'], 'product_4_feature3');
    }
    if (isset($_POST['product_4_feature4'])) {
        update_features_custom_meta($postID, $_POST['product_4_feature4'], 'product_4_feature4');
    }
    if (isset($_POST['product_4_feature5'])) {
        update_features_custom_meta($postID, $_POST['product_4_feature5'], 'product_4_feature5');
    }
   /* Features Block Save */
    /* Prodcut 4 Save */

     /* Prodcut 5 Save */
     
    if (isset($_POST['product_5_ASIN'])) {
        update_features_custom_meta($postID, $_POST['product_5_ASIN'], 'product_5_ASIN');
    }
    if (isset($_POST['product5_title_text'])) {
        update_features_custom_meta($postID, $_POST['product5_title_text'], 'product5_title_text');
    }
    if (isset($_POST['custom_product5_img'])) {
        update_features_custom_meta($postID, $_POST['custom_product5_img'], 'custom_product5_img');
    }
    if (isset($_POST['product5_goto_url'])) {
        update_features_custom_meta($postID, $_POST['product5_goto_url'], 'product5_goto_url');
    }
    if (isset($_POST['product5_btn_text'])) {
        update_features_custom_meta($postID, $_POST['product5_btn_text'], 'product5_btn_text');
    }
    if (isset($_POST['product5_badge_name'])) {
        update_features_custom_meta($postID, $_POST['product5_badge_name'], 'product5_badge_name');
    }
    if (isset($_POST['product5_tag_status'])) {
        update_features_custom_meta($postID, $_POST['product5_tag_status'], 'product5_tag_status');
    }
    /* Features Block Save */
    if (isset($_POST['product_5_feature1'])) {
        update_features_custom_meta($postID, $_POST['product_5_feature1'], 'product_5_feature1');
    }
    if (isset($_POST['product_5_feature2'])) {
        update_features_custom_meta($postID, $_POST['product_5_feature2'], 'product_5_feature2');
    }
    if (isset($_POST['product_5_feature3'])) {
        update_features_custom_meta($postID, $_POST['product_5_feature3'], 'product_5_feature3');
    }
    if (isset($_POST['product_5_feature4'])) {
        update_features_custom_meta($postID, $_POST['product_5_feature4'], 'product_5_feature4');
    }
    if (isset($_POST['product_5_feature5'])) {
        update_features_custom_meta($postID, $_POST['product_5_feature5'], 'product_5_feature5');
    }
   /* Features Block Save */
    /* Prodcut 5 Save */

    /* Level Bar Options */
    if (isset($_POST['feature1_bar_level'])) {
        update_features_custom_meta($postID, $_POST['feature1_bar_level'], 'feature1_bar_level');
    }
    if (isset($_POST['feature2_bar_level'])) {
        update_features_custom_meta($postID, $_POST['feature2_bar_level'], 'feature2_bar_level');
    }
    if (isset($_POST['feature3_bar_level'])) {
        update_features_custom_meta($postID, $_POST['feature3_bar_level'], 'feature3_bar_level');
    }
    if (isset($_POST['feature4_bar_level'])) {
        update_features_custom_meta($postID, $_POST['feature4_bar_level'], 'feature4_bar_level');
    }
    if (isset($_POST['feature5_bar_level'])) {
        update_features_custom_meta($postID, $_POST['feature5_bar_level'], 'feature5_bar_level');
    }
    /* Level Bar Options */
}

function update_features_custom_meta($postID, $newvalue, $field_name) {
    // To create new meta
        if (!get_post_meta($postID, $field_name)) {
            add_post_meta($postID, $field_name, $newvalue);
        } else {
    
    // or to update existing meta
            update_post_meta($postID, $field_name, $newvalue);
        }
    }
/* Admin Menu */
// create custom plugin settings menu
add_action('admin_menu', 'custom_features_settings_page_menu');

function custom_features_settings_page_menu() {

    //create new top-level menu
    add_menu_page('Comparison Table Features Settings', 'Features Comparison Table Settings', 'administrator', 'comparison_table_features_settings', 'comparison_table_features_page_trigma');

    //call register settings function
    add_action('admin_init', 'register_comparison_table_features_settings');
}

function register_comparison_table_features_settings() {
    //register our settings
    register_setting('comparison-features-settings-group', 'featured_es_table_shortcode');
    register_setting('comparison-features-settings-group', 'comp_aws_key');
    register_setting('comparison-features-settings-group', 'comp_aws_secret_key');
    register_setting('comparison-features-settings-group', 'es_associate_id');
}


function comparison_table_features_page_trigma() {
    ?>
    <style type="text/css">
        div.allProduct
        {
            width:100%;
        }
        div.oneProduct
        {
            width: 30%;
            height: 200px;
            float: left;
            border-style:dashed;
            border-width:1px;
            border-color:#999999;

        }
        div.title
        {
            font-size:small;
        }
        #post-2 div.oneProduct{
            padding: 15px;
            height:230px;
        }

        #post-2 div.oneProduct .store-img{
            float: left
        }

    </style>
    <div class="wrap">
        <h2>Comaprison Table Features Plugin Settings</h2>
        <?php settings_errors(); ?>
        <form method="post" action="options.php">
            <?php settings_fields('comparison-features-settings-group'); ?>
            <?php do_settings_sections('comparison-features-settings-group'); ?>
            <h3>Amazon keys</h3><hr />
            <table class="form-table">
                <tr valign="top">
                    <th scope="row">Amazon Key</th>
                    <td><input type="text" name="comp_aws_key" style="width: 50%;" value="<?php echo esc_attr(get_option('comp_aws_key')); ?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Amazon Secret Key</th>
                    <td><input type="text" name="comp_aws_secret_key" style="width: 50%;" value="<?php echo esc_attr(get_option('comp_aws_secret_key')); ?>" /></td>
                </tr>
            </table>

            <h3>Amazon ES store (amazon.es) settings</h3><hr />
            <table class="form-table">
                <tr valign="top">
                    <th scope="row">ES Associate ID</th>
                    <td><input type="text" name="es_associate_id" value="<?php echo esc_attr(get_option('es_associate_id')); ?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">ES Features Table Shortcode</th>
                    <td><input type="text" name="featured_es_table_shortcode" value="<?php echo esc_attr(get_option('featured_es_table_shortcode')); ?>" /></td>
                </tr>
            </table>
            <?php submit_button(); ?>

        </form>
    </div>
    <?php
}

add_action('init', 'call_features_table_scripts');
/* Style and s scripts */
function call_features_table_scripts() {
    wp_register_style( 'features-table-fonts-style', plugins_url( '/fonts/fontsheet.css', __FILE__ ), array(), mt_rand(), 'all' );
    wp_register_style( 'features-table-style', plugins_url( '/css/style.css', __FILE__ ), array(), mt_rand(), 'all' );
    wp_register_style( 'features-table-media-style', plugins_url( '/css/media.css', __FILE__ ), array(), mt_rand(), 'all' );
    wp_register_style('bootstrap-style-features-table','https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css');
    wp_register_script('features-table-custom-script',plugins_url( '/js/custom.js', __FILE__ ), array(), mt_rand(), 'all');
    wp_register_script('features-table-custom-script',plugins_url( '/js/custom.js', __FILE__ ), array(), mt_rand(), 'all');
    wp_register_script('features-table-custom-script',plugins_url( '/js/custom.js', __FILE__ ), array(), mt_rand(), 'all');
}
/* Style and s scripts */

add_action( 'wp_enqueue_scripts', 'features_table_enqueue_style' );
function features_table_enqueue_style() {
    // wp_enqueue_script('custom_jquery');
     if ( !is_front_page() ):
    wp_enqueue_style( 'bootstrap-style-features-table' );
    endif;
    wp_enqueue_style( 'features-table-fonts-style' );
    wp_enqueue_style( 'features-table-style' );
    wp_enqueue_style( 'features-table-media-style' );
 }

/* Table Shortcode */
if (esc_attr(get_option('featured_es_table_shortcode')) != false) {
    add_shortcode(esc_attr(get_option('featured_es_table_shortcode')), function($attrs) {
        ob_start();
        $returnhtml = '';
        global $post;
        $post_id = get_the_ID();
         $returnhtml .= '<div class="text-center">
            <div class="table-wrap">
               <div class="table-container">
                  <ul class="table-title">
                     <li>
                        <div class="spacer">&nbsp;</div>
                     </li>';
                     $feature_1_heading = get_post_meta($post_id, 'feature_1_heading', true);
                     $feature_2_heading = get_post_meta($post_id, 'feature_2_heading', true);
                     $feature_3_heading = get_post_meta($post_id, 'feature_3_heading', true);
                     $feature_4_heading = get_post_meta($post_id, 'feature_4_heading', true);
                     $feature_5_heading = get_post_meta($post_id, 'feature_5_heading', true);

                    /* features bar Value */
                     $feature_1_bar_value = get_post_meta($post_id, 'feature_1_bar_value', true);
                     $feature_2_bar_value = get_post_meta($post_id, 'feature_2_bar_value', true);
                     $feature_3_bar_value = get_post_meta($post_id, 'feature_3_bar_value', true);
                     $feature_4_bar_value = get_post_meta($post_id, 'feature_4_bar_value', true);
                     $feature_5_bar_value = get_post_meta($post_id, 'feature_5_bar_value', true);
                    /* features bar Value */
                    $returnhtml .= '<li class="wrap-8">Prodotti</li>
                     <li class="wrap-9">';
                     if(!empty($feature_1_heading)) 
                     $returnhtml .= $feature_1_heading.'</li>
                     <li class="wrap-10">';
                     if(!empty($feature_2_heading)) 
                     $returnhtml .= $feature_2_heading.'</li>
                     <li class="wrap-11">';
                     if(!empty($feature_3_heading))
                     $returnhtml .= $feature_3_heading.'</li>
                     <li class="wrap-12">';
                     if(!empty($feature_4_heading))
                     $returnhtml .=  $feature_4_heading.'</li>
                     <li class="wrap-13">';
                     if(!empty($feature_5_heading))
                     $returnhtml .=  $feature_5_heading.'</li>
                     <li class="wrap-14">Offerte</li></ul>
                  <div class="content-wrapper">';
                      /* Product 1 Data */ 
                      $product1_badge_name = get_post_meta($post_id, 'product1_badge_name', true);
                      $product1_tag_status = get_post_meta($post_id, 'product1_tag_status', true);
                      $product1_title_text = get_post_meta($post_id, 'product1_title_text', true);
                      $custom_product1_img = get_post_meta($post_id, 'custom_product1_img', true);
                      $product1_goto_url =   get_post_meta($post_id, 'product1_goto_url', true);
                      $product1_btn_text = get_post_meta($post_id, 'product1_btn_text', true);
                      $product_1_feature1 = get_post_meta($post_id, 'product_1_feature1', true);
                      $product_1_feature2 = get_post_meta($post_id, 'product_1_feature2', true);
                      $product_1_feature3 = get_post_meta($post_id, 'product_1_feature3', true);
                      $product_1_feature4 = get_post_meta($post_id, 'product_1_feature4', true);
                      $product_1_feature5 = get_post_meta($post_id, 'product_1_feature5', true);

                      /* Features bars total value  */
                      $product_feature1_barVal = get_post_meta($post_id, 'feature_1_bar_value', true);
                      $product_feature2_barVal = get_post_meta($post_id, 'feature_2_bar_value', true);
                      $product_feature3_barVal = get_post_meta($post_id, 'feature_3_bar_value', true);
                      $product_feature4_barVal = get_post_meta($post_id, 'feature_4_bar_value', true);
                      $product_feature5_barVal = get_post_meta($post_id, 'feature_5_bar_value', true);
                      /* Features bars total value  */
                      
                      /* ASIN ID's for 5 products */
                      $product_1_asinID = get_post_meta($post_id, 'product_1_ASIN', true);
                      $product_2_asinID = get_post_meta($post_id, 'product_2_ASIN', true);
                      $product_3_asinID = get_post_meta($post_id, 'product_3_ASIN', true);
                      $product_4_asinID = get_post_meta($post_id, 'product_4_ASIN', true);
                      $product_5_asinID = get_post_meta($post_id, 'product_5_ASIN', true);
                      require_once 'ApiLibrary.php';
                    //  $post_id = get_the_ID();
                      $lib = new ApiLibrary($post_id, "it", 'buonobutt-21');
                      $dataProduct1 =  $lib->getDataProduct(1, $product_1_asinID, $post_id );
                      $dataProduct2 =  $lib->getDataProduct(1, $product_2_asinID, $post_id );
                      $dataProduct3 =  $lib->getDataProduct(1, $product_3_asinID, $post_id );
                      $dataProduct4 =  $lib->getDataProduct(1, $product_4_asinID, $post_id );
                      $dataProduct5 =  $lib->getDataProduct(1, $product_5_asinID, $post_id );
                    /*  echo "<pre>";
                      print_r($dataProduct1);
                      print_r($dataProduct2);
                      print_r($dataProduct3);
                      print_r($dataProduct4);
                      print_r($dataProduct5); */
                      if(!empty($dataProduct1)) {
                            foreach($dataProduct1 as $p1=>$offer1) {
                                  $amazon_product1_name = $offer1['title'];
                                  $amazon_product1_img = $offer1['image'];
                                  $amazon_product1_url = $offer1['url'];
                            }
                        }
                        if(!empty($dataProduct2)) {
                            foreach($dataProduct2 as $p2=>$offer2) {
                                $amazon_product2_name = $offer2['title'];
                                $amazon_product2_img = $offer2['image'];
                                $amazon_product2_url = $offer2['url'];
                            }
                        }
                        if(!empty($dataProduct3)) {
                            foreach($dataProduct3 as $p3=>$offer3) {
                                $amazon_product3_name = $offer3['title'];
                                $amazon_product3_img = $offer3['image'];
                                $amazon_product3_url = $offer3['url'];
                            }
                        }
                        if(!empty($dataProduct4)) {
                            foreach($dataProduct4 as $p4=>$offer4) {
                                $amazon_product4_name = $offer4['title'];
                                $amazon_product4_img = $offer4['image'];
                                $amazon_product4_url = $offer4['url'];
                            }
                        }
                        if(!empty($dataProduct5)) {
                            foreach($dataProduct5 as $p5=>$offer5) {
                                $amazon_product5_name = $offer5['title'];
                                $amazon_product5_img = $offer5['image'];
                                $amazon_product5_url = $offer5['url'];
                            }
                        }
                      
                        if($product1_goto_url != '') {
                            $product1_Url = $product1_goto_url;
                        } else {
                            $product1_Url = $amazon_product1_url;
                        }
                    
                     // echo "<pre>";
                      //print_r($dataProdcut1).'<br>';
                     // print_r($dataProdcut2).'<br>';
                     // print_r($dataProdcut3);exit;
                      /* Product 1 Data */ 
                     
                      if(!empty($product1_badge_name)) {
                         if($product1_badge_name == 'Winner'){
                            $returnhtml .= '<ul class="badges-wrap winner-badge"> 
                            <li><div class="cmn-badge">
                            <span><img src="'.plugins_url().'/features-comparison-table/images/winner.svg" /></span>Il migliore</div>
                            </li>';
                         } elseif ($product1_badge_name == 'Trending'){
                            $returnhtml .= '<ul class="badges-wrap trending-badge"> 
                            <li><div class="cmn-badge">
                            <span><img src="'.plugins_url().'/features-comparison-table/images/trending.svg" /></span>Di tendenza</div>
                            </li>';
                        } elseif ($product1_badge_name == 'Bestseller'){
                            $returnhtml .= '<ul class="badges-wrap bestseller-badge"> 
                            <li><div class="cmn-badge">
                            <span><img src="'.plugins_url().'/features-comparison-table/images/best-seller.svg" /></span>Il più venduto</div>
                            </li>';
                        } elseif ($product1_badge_name == 'Performance'){
                            $returnhtml .= '<ul class="badges-wrap performance-badge"> 
                            <li><div class="cmn-badge">
                            <span><img src="'.plugins_url().'/features-comparison-table/images/performance.svg" /></span>Top performance</div>
                            </li>';
                        } elseif ($product1_badge_name == 'Cheap_Good'){
                            $returnhtml .= '<ul class="badges-wrap winner-badge"> 
                            <li><div class="cmn-badge">
                            <span><img src="'.plugins_url().'/features-comparison-table/images/goodchoice.svg" /></span>La migliore offerta</div>
                            </li>';
                        } elseif ($product1_badge_name == 'Runner_up') {
                            $returnhtml .= '<ul class="badges-wrap runner-badge"> 
                            <li><div class="cmn-badge">
                            <span><img src="'.plugins_url().'/features-comparison-table/images/runner-up.svg" /></span>La migliore alternativa</div>
                            </li>';
                        } elseif ($product1_badge_name == 'Good_choice') {
                            $returnhtml .= '<ul class="badges-wrap goodchoice-badge"> 
                            <li><div class="cmn-badge">
                            <span><img src="'.plugins_url().'/features-comparison-table/images/goodchoice.svg" /></span>Buona scelta</div>
                            </li>';
                        }elseif ($product1_badge_name == 'Also_recommended') {
                            $returnhtml .= '<ul class="badges-wrap recommended-badge"> 
                            <li><div class="cmn-badge">
                            <span><img src="'.plugins_url().'/features-comparison-table/images/recommended.svg" /></span>L'.'alternativa consigliata</div>
                            </li>';
                        } elseif ($product1_badge_name == 'Bank_for_buck') {
                            $returnhtml .= '<ul class="badges-wrap bankbuck-badge"> 
                            <li><div class="cmn-badge">
                            <span><img src="'.plugins_url().'/features-comparison-table/images/bankbuck.svg" /></span>Miglior qualità/prezzo</div>
                            </li>';
                        } elseif ($product1_badge_name == 'Durable') {
                            $returnhtml .= '<ul class="badges-wrap durable-badge"> 
                            <li><div class="cmn-badge">
                            <span><img src="'.plugins_url().'/features-comparison-table/images/durable.svg" /></span>Il più resistente</div>
                            </li>';
                        } elseif ($product1_badge_name == 'High_end') {
                            $returnhtml .= '<ul class="badges-wrap high-end-badge"> 
                            <li><div class="cmn-badge">
                            <span><img src="'.plugins_url().'/features-comparison-table/images/high-end.svg" /></span>Di fascia alta</div>
                            </li>';
                        } elseif ($product1_badge_name == 'Editor_tip') {
                            $returnhtml .= '<ul class="badges-wrap editors-badge"> 
                            <li><div class="cmn-badge">
                            <span><img src="'.plugins_url().'/features-comparison-table/images/editors.svg" /></span>Il nostro suggerimento</div>
                            </li>';
                        } elseif ($product1_badge_name == 'For_beginners') {
                            $returnhtml .= '<ul class="badges-wrap beginners-badge"> 
                            <li><div class="cmn-badge">
                            <span><img src="'.plugins_url().'/features-comparison-table/images/beginners.svg" /></span>Per principianti</div>
                            </li>';
                        }
                     } else {
                        $returnhtml .= '<ul class="badges-wrap winner-badge"> 
                            <li><div class="cmn-badge">
                     
                            <span><img src="'.plugins_url().'/features-comparison-table/images/winner.svg" /></span>Il migliore</div>
                            </li>';
                     } ?>
                     <!-- <ul class="badges-wrap winner-badge"> 
                        <li>
                           <div class="cmn-badge"><span><img src="<?php echo plugins_url();?>/features-comparison-table/images/winner.svg" /></span>WINNER</div>
                        </li>  -->
                        <!-- <li><div class="cmn-badge"><span><img src="images/runner-up.svg" /></span>RUNNER UP</div></li>
                           <li><div class="cmn-badge"><span><img src="images/recommended.svg" /></span>ALSO RECOMMENDED</div></li> -->
                        <?php  $returnhtml .= '<li class="wrap-1">';
                            if($amazon_product1_img != '') {
                                $returnhtml .='<span class="product-img"><a href="'.$product1_Url.'"><img src="'.$amazon_product1_img.'" />';
                                if($product1_tag_status == 'yes')
                                $returnhtml .='<span class="new-tag"><img src="'.plugins_url().'/features-comparison-table/images/new-tag.png" /></span>';
                                $returnhtml .='</a></span>';
                             } else { 
                                $returnhtml .='<span class="product-img"><a href="'.$product1_Url.'"><img src="'.$custom_product1_img.'"/>';
                                if($product1_tag_status == 'yes') {
                                    $returnhtml .='<span class="new-tag"><img src="'.plugins_url().'/features-comparison-table/images/new-tag.png" /></span>';
                                }
                                $returnhtml .='</a></span>';
                          } 
                           if($product1_title_text != '') {
                            $returnhtml .= '<a href="'.$product1_Url.'"><p class="product-name">'.$product1_title_text.'</p></a>';
                            } else { 
                                $returnhtml .='<a href="'.$product1_Url.'"><p class="product-name">'.$amazon_product1_name.'</p></a>';
                             } 
                            if($product1_Url != '') { 
                                if($product1_btn_text != '') {
                                    $returnhtml .='<a href="'.$product1_Url.'" class="offer-btn">'.$product1_btn_text.'</a>';
                                } else { 
                                    $returnhtml .='<a href="'.$product1_Url.'" class="offer-btn">VEDI L'.'AFFARE DI OGGI</a>';
                                } 
                            }  
                            
                        $returnhtml .='</li>
                        <li class="wrap-2">';
                        $returnhtml .= '<p class="product-desc">'.$product_1_feature1.'</p>';
                           $feature1_bar_level = get_post_meta($post_id, 'feature1_bar_level', true);
                           if($feature1_bar_level == 'yes') {
                           if(is_numeric($product_1_feature1)) {
                            $returnhtml .= $lib->calculateAvgBars($product_1_feature1,$product_feature1_barVal);
                            /* Fraction caluclation for feature1 Bar  */
                       } }
                     $returnhtml .='</li>
                        <li class="wrap-3">';
                        $returnhtml .='<p class="product-desc">'.$product_1_feature2.'</p>';
                           $feature2_bar_level = get_post_meta($post_id, 'feature2_bar_level', true);
                            if($feature2_bar_level == 'yes') {
                           if(is_numeric($product_1_feature2)) {
                            /* Fraction caluclation for feature1 Bar  */
                            $returnhtml .= $lib->calculateAvgBars($product_1_feature2,$product_feature2_barVal);
                             } }
                        $returnhtml .='</li>
                        <li class="wrap-4">';
                        $returnhtml .='<p class="product-desc">'.$product_1_feature3.'</p>';
                        $feature3_bar_level = get_post_meta($post_id, 'feature3_bar_level', true);
                            $match_battery_level1 = (int)filter_var($product_1_feature3, FILTER_SANITIZE_NUMBER_INT); 
                             if($feature3_bar_level == 'yes') {
                           if(is_numeric($product_1_feature3)) {
                            $returnhtml .= $lib->calculateAvgBars($product_1_feature3,$product_feature3_barVal);
                            /* Fraction caluclation for feature1 Bar  */
                             } }
                       $returnhtml .='</li>
                        <li class="wrap-5">';
                        $returnhtml .='<p class="product-desc">'.$product_1_feature4.'</p>';
                        $feature4_bar_level = get_post_meta($post_id, 'feature4_bar_level', true);
                           $match_memory_level1 = (int)filter_var($product_1_feature4, FILTER_SANITIZE_NUMBER_INT);
                           if ($feature4_bar_level == 'yes') {
                           if(is_numeric($product_1_feature4)) {
                            /* Fraction caluclation for feature1 Bar  */
                            $returnhtml .= $lib->calculateAvgBars($product_1_feature4,$product_feature4_barVal);
                             } }
                    $returnhtml .='</li>
                        <li class="wrap-6">';
                        $returnhtml .='<p class="product-desc">'.$product_1_feature5.'</p>';
                           $feature5_bar_level = get_post_meta($post_id, 'feature5_bar_level', true);
                            if($feature5_bar_level == 'yes') {
                           if(is_numeric($product_1_feature5)) {
                            /* Fraction caluclation for feature1 Bar  */
                            $returnhtml .= $lib->calculateAvgBars($product_1_feature5,$product_feature5_barVal);
                            } }
                            $returnhtml .='</li>
                        <li class="wrap-7">
                           <ul class="offer-wrap">
                              <li>
                                 <span class="offer-img"><a href="'.$product1_Url.'"><img src="'.plugins_url().'/features-comparison-table/images/amazon.png" /></a></span>
                              </li>
                           </ul>
                        </li>
                     </ul>';
                    /* Product 2 Data */ 
                    $product2_badge_name = get_post_meta($post_id, 'product2_badge_name', true);
                    $product2_tag_status = get_post_meta($post_id, 'product2_tag_status', true);
                    $product2_title_text = get_post_meta($post_id, 'product2_title_text', true);
                    $custom_product2_img = get_post_meta($post_id, 'custom_product2_img', true);
                    $product2_goto_url =   get_post_meta($post_id, 'product2_goto_url', true);
                    $product2_btn_text = get_post_meta($post_id, 'product2_btn_text', true);
                    $product_2_feature1 = get_post_meta($post_id, 'product_2_feature1', true);
                    $product_2_feature2 = get_post_meta($post_id, 'product_2_feature2', true);
                    $product_2_feature3 = get_post_meta($post_id, 'product_2_feature3', true);
                    $product_2_feature4 = get_post_meta($post_id, 'product_2_feature4', true);
                    $product_2_feature5 = get_post_meta($post_id, 'product_2_feature5', true);
                    /* Product 2 Data */ 
                    if($product2_goto_url != '') {
                       // echo "not empty GOTO Url";exit;
                        $product2_Url = $product2_goto_url;
                    } else {
                        $product2_Url = $amazon_product2_url;
                    }
                    if(!empty($product2_badge_name)) {
                       if($product2_badge_name == 'Winner'){
                        $returnhtml .= '<ul class="badges-wrap winner-badge"> 
                          <li><div class="cmn-badge">
                          <span><img src="'.plugins_url().'/features-comparison-table/images/winner.svg" /></span>Il migliore</div>
                          </li>';
                       } elseif ($product2_badge_name == 'Trending'){
                        $returnhtml .= '<ul class="badges-wrap trending-badge"> 
                          <li><div class="cmn-badge">
                          <span><img src="'.plugins_url().'/features-comparison-table/images/trending.svg" /></span>Di tendenza</div>
                          </li>';
                      } elseif ($product2_badge_name == 'Bestseller'){
                        $returnhtml .= '<ul class="badges-wrap bestseller-badge"> 
                          <li><div class="cmn-badge">
                          <span><img src="'.plugins_url().'/features-comparison-table/images/best-seller.svg" /></span>Il più venduto</div>
                          </li>';
                      } elseif ($product2_badge_name == 'Performance'){
                        $returnhtml .= '<ul class="badges-wrap performance-badge"> 
                          <li><div class="cmn-badge">
                          <span><img src="'.plugins_url().'/features-comparison-table/images/performance.svg" /></span>Top performance</div>
                          </li>';
                      } elseif ($product2_badge_name == 'Cheap_Good'){
                        $returnhtml .= '<ul class="badges-wrap winner-badge"> 
                          <li><div class="cmn-badge">
                          <span><img src="'.plugins_url().'/features-comparison-table/images/goodchoice.svg" /></span>La migliore offerta</div>
                          </li>';
                      } elseif ($product2_badge_name == 'Runner_up') {
                        $returnhtml .= '<ul class="badges-wrap runner-badge"> 
                          <li><div class="cmn-badge">
                          <span><img src="'.plugins_url().'/features-comparison-table/images/runner-up.svg" /></span>La migliore alternativa</div>
                          </li>';
                      } elseif ($product2_badge_name == 'Good_choice') {
                        $returnhtml .= '<ul class="badges-wrap goodchoice-badge"> 
                          <li><div class="cmn-badge">
                          <span><img src="'.plugins_url().'/features-comparison-table/images/goodchoice.svg" /></span>Buona scelta</div>
                          </li>';
                      }elseif ($product2_badge_name == 'Also_recommended') {
                        $returnhtml .= '<ul class="badges-wrap recommended-badge"> 
                          <li><div class="cmn-badge">
                          <span><img src="'.plugins_url().'/features-comparison-table/images/recommended.svg" /></span>L'.'alternativa consigliata</div>
                          </li>';
                      } elseif ($product2_badge_name == 'Bank_for_buck') {
                        $returnhtml .= '<ul class="badges-wrap bankbuck-badge"> 
                          <li><div class="cmn-badge">
                          <span><img src="'.plugins_url().'/features-comparison-table/images/bankbuck.svg" /></span>Miglior qualità/prezzo</div>
                          </li>';
                      } elseif ($product2_badge_name == 'Durable') {
                        $returnhtml .= '<ul class="badges-wrap durable-badge"> 
                          <li><div class="cmn-badge">
                          <span><img src="'.plugins_url().'/features-comparison-table/images/durable.svg" /></span>Il più resistente</div>
                          </li>';
                      } elseif ($product2_badge_name == 'High_end') {
                        $returnhtml .= '<ul class="badges-wrap high-end-badge"> 
                          <li><div class="cmn-badge">
                          <span><img src="'.plugins_url().'/features-comparison-table/images/high-end.svg" /></span>Di fascia alta</div>
                          </li>';
                      } elseif ($product2_badge_name == 'Editor_tip') {
                        $returnhtml .= '<ul class="badges-wrap editors-badge"> 
                          <li><div class="cmn-badge">
                          <span><img src="'.plugins_url().'/features-comparison-table/images/editors.svg" /></span>Il nostro suggerimento</div>
                          </li>';
                      } elseif ($product2_badge_name == 'For_beginners') {
                        $returnhtml .= '<ul class="badges-wrap beginners-badge"> 
                          <li><div class="cmn-badge">
                          <span><img src="'.plugins_url().'/features-comparison-table/images/beginners.svg" /></span>Per principianti</div>
                          </li>';
                      }
                   } else {
                    $returnhtml .= '<ul class="badges-wrap winner-badge"> 
                          <li><div class="cmn-badge">
                          <span><img src="'.plugins_url().'/features-comparison-table/images/winner.svg" /></span>Il migliore</div>
                          </li>';
                   } ?>
                    
                     <!--<ul class="badges-wrap trending-badge">
                        <li>
                           <div class="cmn-badge"><span><img src="<?php echo plugins_url();?>/features-comparison-table/images/trending.svg" /></span>TRENDING</div>
                        </li> -->
                        <!-- <li><div class="cmn-badge"><span><img src="images/goodchoice.svg" /></span>GOOD CHOICE</div></li>
                           <li><div class="cmn-badge"><span><img src="images/editors.svg" /></span>EDITOR'S TIP</div></li> -->
                        <?php   $returnhtml .='<li class="wrap-1">';
                           if($amazon_product2_img != '') {
                                $returnhtml .='<span class="product-img"><a href="'.$product2_Url.'"><img src="'.$amazon_product2_img.'" />';
                                if($product2_tag_status == 'yes') {
                                    $returnhtml .='<span class="new-tag"><img src="'.plugins_url().'/features-comparison-table/images/new-tag.png" /></span></a></span>';
                                }
                          } else {
                                $returnhtml .='<span class="product-img"><a href="'.$product2_Url.'"><img src="'.$custom_product2_img.'" />';
                                if($product2_tag_status == 'yes') {
                                    $returnhtml .='<span class="new-tag"><img src="'.plugins_url().'/features-comparison-table/images/new-tag.png" /></span> </a></span>';
                                }
                            }
                           if($amazon_product2_name != '') { 
                            $returnhtml .='<a href="'.$product2_Url.'"><p class="product-name">'.$amazon_product2_name.'</p></a>';
                             } else {
                            $returnhtml .= '<a href="'.$product2_Url.'"><p class="product-name">'.$product2_title_text.'</p></a>';
                            }
                            if($product2_Url != '') { 
                                if($product2_btn_text != '') {
                                    $returnhtml .='<a href="'.$product2_Url.'" class="offer-btn">'.$product2_btn_text.'</a>';
                                } else { 
                                    $returnhtml .='<a href="'.$product2_Url.'" class="offer-btn">VEDI L'.'AFFARE DI OGGI</a>';
                                } 
                            } 
                            $returnhtml .='</li>
                        <li class="wrap-2">';
                        $returnhtml .='<p class="product-desc">'.$product_2_feature1.'</p>';
                           $feature1_bar_level = get_post_meta($post_id, 'feature1_bar_level', true);
                            if($feature1_bar_level == 'yes') {
                           if(is_numeric($product_2_feature1)) {
                            /* Fraction caluclation for feature1 Bar  */
                            $returnhtml .= $lib->calculateAvgBars($product_2_feature1,$product_feature1_barVal);
                             } }
                        $returnhtml .='</li>
                        <li class="wrap-3">
                           <p class="product-desc">'.$product_2_feature2.'</p>';
                           $feature2_bar_level = get_post_meta($post_id, 'feature2_bar_level', true);
                            if($feature2_bar_level == 'yes') { 
                           if(is_numeric($product_2_feature2)) {
                            /* Fraction caluclation for feature1 Bar  */
                            $returnhtml .= $lib->calculateAvgBars($product_2_feature2,$product_feature2_barVal);
                             
                        } 
                    }
                    $returnhtml .='</li>
                        <li class="wrap-4">';
                        $returnhtml .='<p class="product-desc">'.$product_2_feature3.'</p>';
                           $feature3_bar_level = get_post_meta($post_id, 'feature3_bar_level', true);
                            $match_battery_level2 = (int)filter_var($product_2_feature3, FILTER_SANITIZE_NUMBER_INT);
                            if ($feature3_bar_level == 'yes') {
                           if(is_numeric($product_2_feature3)) {
                            /* Fraction caluclation for feature1 Bar  */
                            $returnhtml .= $lib->calculateAvgBars($product_2_feature3,$product_feature3_barVal);
                            } }
                        $returnhtml .='</li>
                        <li class="wrap-5">';
                        $returnhtml .='<p class="product-desc">'.$product_2_feature4.'</p>';
                        $feature4_bar_level = get_post_meta($post_id, 'feature4_bar_level', true);
                        $match_memory_level2 = (int)filter_var($product_2_feature4, FILTER_SANITIZE_NUMBER_INT);
                        if($feature4_bar_level == 'yes') {
                        if(is_numeric($product_2_feature4)) {
                          /* Fraction caluclation for feature1 Bar  */
                          $returnhtml .= $lib->calculateAvgBars($product_2_feature4,$product_feature4_barVal);
                          } }
                          $returnhtml .='</li>
                        <li class="wrap-6">';
                        $returnhtml .='<p class="product-desc">'.$product_2_feature5.'</p>';
                        $feature5_bar_level = get_post_meta($post_id, 'feature5_bar_level', true);
                            if($feature5_bar_level == 'yes') {
                           if(is_numeric($product_2_feature5)) {
                            /* Fraction caluclation for feature1 Bar  */
                            $returnhtml .=  $lib->calculateAvgBars($product_2_feature5,$product_feature5_barVal);
                            } }
                        $returnhtml .='</li>
                        <li class="wrap-7">
                           <ul class="offer-wrap">
                              <li>
                                 <span class="offer-img"><a href="'.$product2_Url.'"><img src="'.plugins_url().'/features-comparison-table/images/amazon.png" /></a></span>
                              </li>
                           </ul>
                        </li>
                     </ul>';
                    /* Product 3 Data */ 
                    $product3_badge_name = get_post_meta($post_id, 'product3_badge_name', true);
                    $product3_tag_status = get_post_meta($post_id, 'product3_tag_status', true);
                    $product3_title_text = get_post_meta($post_id, 'product3_title_text', true);
                    $custom_product3_img = get_post_meta($post_id, 'custom_product3_img', true);
                    $product3_goto_url =   get_post_meta($post_id, 'product3_goto_url', true);
                    $product3_btn_text = get_post_meta($post_id, 'product3_btn_text', true);
                    $product_3_feature1 = get_post_meta($post_id, 'product_3_feature1', true);
                    $product_3_feature2 = get_post_meta($post_id, 'product_3_feature2', true);
                    $product_3_feature3 = get_post_meta($post_id, 'product_3_feature3', true);
                    $product_3_feature4 = get_post_meta($post_id, 'product_3_feature4', true);
                    $product_3_feature5 = get_post_meta($post_id, 'product_3_feature5', true);
                    /* Product 3 Data */  
                    if($product3_goto_url != '') {
                        $product3_Url = $product3_goto_url;
                    } else {
                        $product3_Url = $amazon_product3_url;
                    }
                   
                    if(!empty($product3_badge_name)) {
                       if($product3_badge_name == 'Winner'){
                        $returnhtml .='<ul class="badges-wrap winner-badge"> 
                          <li><div class="cmn-badge">
                          <span><img src="'.plugins_url().'/features-comparison-table/images/winner.svg" /></span>Il migliore</div>
                          </li>';
                       } elseif ($product3_badge_name == 'Trending'){
                        $returnhtml .='<ul class="badges-wrap trending-badge"> 
                          <li><div class="cmn-badge">
                          <span><img src="'.plugins_url().'/features-comparison-table/images/trending.svg" /></span>Di tendenza</div>
                          </li>';
                      } elseif ($product3_badge_name == 'Bestseller'){
                        $returnhtml .= '<ul class="badges-wrap bestseller-badge"> 
                          <li><div class="cmn-badge">
                          <span><img src="'.plugins_url().'/features-comparison-table/images/best-seller.svg" /></span>Il più venduto</div>
                          </li>';
                      } elseif ($product3_badge_name == 'Performance'){
                        $returnhtml .= '<ul class="badges-wrap performance-badge"> 
                          <li><div class="cmn-badge">
                          <span><img src="'.plugins_url().'/features-comparison-table/images/performance.svg" /></span>Top performance</div>
                          </li>';
                      } elseif ($product3_badge_name == 'Cheap_Good'){
                        $returnhtml .= '<ul class="badges-wrap winner-badge"> 
                          <li><div class="cmn-badge">
                          <span><img src="'.plugins_url().'/features-comparison-table/images/goodchoice.svg" /></span>La migliore offerta</div>
                          </li>';
                      } elseif ($product3_badge_name == 'Runner_up') {
                        $returnhtml .= '<ul class="badges-wrap runner-badge"> 
                          <li><div class="cmn-badge">
                          <span><img src="'.plugins_url().'/features-comparison-table/images/runner-up.svg" /></span>La migliore alternativa</div>
                          </li>';
                      } elseif ($product3_badge_name == 'Good_choice') {
                        $returnhtml .= '<ul class="badges-wrap goodchoice-badge"> 
                          <li><div class="cmn-badge">
                          <span><img src="'.plugins_url().'/features-comparison-table/images/goodchoice.svg" /></span>Buona scelta</div>
                          </li>';
                      }elseif ($product3_badge_name == 'Also_recommended') {
                        $returnhtml .= '<ul class="badges-wrap recommended-badge"> 
                          <li><div class="cmn-badge">
                          <span><img src="'.plugins_url().'/features-comparison-table/images/recommended.svg" /></span>L'.'alternativa consigliata</div>
                          </li>';
                      } elseif ($product3_badge_name == 'Bank_for_buck') {
                        $returnhtml .= '<ul class="badges-wrap bankbuck-badge"> 
                          <li><div class="cmn-badge">
                          <span><img src="'.plugins_url().'/features-comparison-table/images/bankbuck.svg" /></span>Miglior qualità/prezzo</div>
                          </li>';
                      } elseif ($product3_badge_name == 'Durable') {
                        $returnhtml .= '<ul class="badges-wrap durable-badge"> 
                          <li><div class="cmn-badge">
                          <span><img src="'.plugins_url().'/features-comparison-table/images/durable.svg" /></span>Il più resistente</div>
                          </li>';
                      } elseif ($product3_badge_name == 'High_end') {
                        $returnhtml .= '<ul class="badges-wrap high-end-badge"> 
                          <li><div class="cmn-badge">
                          <span><img src="'.plugins_url().'/features-comparison-table/images/high-end.svg" /></span>Di fascia alta</div>
                          </li>';
                      } elseif ($product3_badge_name == 'Editor_tip') {
                        $returnhtml .= '<ul class="badges-wrap editors-badge"> 
                          <li><div class="cmn-badge">
                          <span><img src="'.plugins_url().'/features-comparison-table/images/editors.svg" /></span>Il nostro suggerimento</div>
                          </li>';
                      } elseif ($product3_badge_name == 'For_beginners') {
                        $returnhtml .= '<ul class="badges-wrap beginners-badge"> 
                          <li><div class="cmn-badge">
                          <span><img src="'.plugins_url().'/features-comparison-table/images/beginners.svg" /></span>Per principianti</div>
                          </li>';
                      }
                   } else {
                    $returnhtml .= '<ul class="badges-wrap winner-badge"> 
                          <li><div class="cmn-badge">
                          <span><img src="'.plugins_url().'/features-comparison-table/images/winner.svg" /></span>Il migliore</div>
                          </li>';
                   } ?>

                    <!-- <ul class="badges-wrap performance-badge">
                        <li>
                           <div class="cmn-badge"><span><img src="<?php echo plugins_url();?>/features-comparison-table/images/performance.svg" /></span>PERFORMANCE</div>
                        </li> -->
                        <!-- <li><div class="cmn-badge"><span><img src="images/durable.svg" /></span>DURABLE</div></li> -->
                       <?php 
                       $returnhtml .='<li class="wrap-1">';
                        if($amazon_product3_img != '') {
                            $returnhtml .='<span class="product-img"><a href="'.$product3_Url.'"><img src="'.$amazon_product3_img.'" />';
                        if($product3_tag_status == 'yes') {
                            $returnhtml .='<span class="new-tag"><img src="'.plugins_url().'/features-comparison-table/images/new-tag.png" /></span>';
                            } 
                            $returnhtml .='</a></span>';    
                        } else {
                            $returnhtml .='<span class="product-img"><a href="'.$product3_Url.'"><img src="'.$custom_product3_img.'" />';
                            if($product3_tag_status == 'yes') {
                            $returnhtml .='<span class="new-tag"><img src="'.plugins_url().'/features-comparison-table/images/new-tag.png" /></span>';
                            }
                            $returnhtml .='</a></span>';
                        }
                        if($amazon_product3_name != '') { 
                            $returnhtml .='<a href="'.$product3_Url.'"><p class="product-name">'.$amazon_product3_name.'</p></a>';
                            } else {
                        $returnhtml .='<a href="'.$product3_Url.'"><p class="product-name">'.$product3_title_text.'</p></a>';
                        }

                         if($product3_Url != '') { 
                            if($product3_btn_text != '') {
                                $returnhtml .='<a href="'.$product3_Url.'" class="offer-btn">'.$product3_btn_text.'</a>';
                            } else { 
                                $returnhtml .='<a href="'.$product3_Url.'" class="offer-btn">VEDI L'.'AFFARE DI OGGI</a>';
                            } 
                        } 
                         $returnhtml .='</li>
                        <li class="wrap-2">';
                        $returnhtml .='<p class="product-desc">'.$product_3_feature1.'</p>';
                        $feature1_bar_level = get_post_meta($post_id, 'feature1_bar_level', true);
                            if($feature1_bar_level == 'yes') { 
                           if(is_numeric($product_3_feature1)) {
                            /* Fraction caluclation for feature1 Bar  */
                            $returnhtml .= $lib->calculateAvgBars($product_3_feature1,$product_feature1_barVal);
                        } }
                        $returnhtml .='</li>
                        <li class="wrap-3">';
                        $returnhtml .='<p class="product-desc">'.$product_3_feature2.'</p>';
                        $feature2_bar_level = get_post_meta($post_id, 'feature2_bar_level', true);
                           if($feature2_bar_level == 'yes') {
                           if(is_numeric($product_3_feature2)) {
                            /* Fraction caluclation for feature1 Bar  */
                            $returnhtml .= $lib->calculateAvgBars($product_3_feature2,$product_feature2_barVal);
                            } }
                        $returnhtml .='</li>
                        <li class="wrap-4">';
                        $returnhtml .='<p class="product-desc">'.$product_3_feature3.'</p>';
                           $feature3_bar_level = get_post_meta($post_id, 'feature3_bar_level', true);
                           $match_battery_level3 = (int)filter_var($product_3_feature3, FILTER_SANITIZE_NUMBER_INT);
                        if ($feature3_bar_level == 'yes') {
                           if(is_numeric($product_3_feature3)) {
                            /* Fraction caluclation for feature1 Bar  */
                            $returnhtml .= $lib->calculateAvgBars($product_3_feature3,$product_feature3_barVal);
                           } }
                        $returnhtml .='</li>
                        <li class="wrap-5">';
                        $returnhtml .='<p class="product-desc">'.$product_3_feature4.'</p>';
                           $feature4_bar_level = get_post_meta($post_id, 'feature4_bar_level', true);
                           $match_memory_level3 = (int)filter_var($product_3_feature4, FILTER_SANITIZE_NUMBER_INT); 
                            if ($feature4_bar_level == 'yes') {
                           if(is_numeric($product_3_feature4)) {
                            /* Fraction caluclation for feature1 Bar  */
                            $returnhtml .= $lib->calculateAvgBars($product_3_feature4,$product_feature4_barVal);
                        } }
                        $returnhtml .='</li>
                        <li class="wrap-6">';
                        $returnhtml .='<p class="product-desc">'.$product_3_feature5.'</p>';
                        $feature5_bar_level = get_post_meta($post_id, 'feature5_bar_level', true);
                           if($feature5_bar_level == 'yes') {
                           if(is_numeric($product_3_feature5)) {
                            /* Fraction caluclation for feature1 Bar  */
                            $returnhtml .=  $lib->calculateAvgBars($product_3_feature5,$product_feature5_barVal);
                            } }
                        $returnhtml .='</li>
                        <li class="wrap-7">
                           <ul class="offer-wrap">
                                <li>
                                    <span class="offer-img"><a href="'.$product2_Url.'"><img src="'.plugins_url().'/features-comparison-table/images/amazon.png" /></a></span>
                                </li>
                           </ul>
                        </li>
                     </ul>';
                    $product4_badge_name = get_post_meta($post_id, 'product4_badge_name', true);
                    $product4_tag_status = get_post_meta($post_id, 'product4_tag_status', true);
                    $product4_title_text = get_post_meta($post_id, 'product4_title_text', true);
                    $custom_product4_img = get_post_meta($post_id, 'custom_product4_img', true);
                    $product4_goto_url =   get_post_meta($post_id, 'product4_goto_url', true);
                    $product4_btn_text = get_post_meta($post_id, 'product4_btn_text', true);
                    $product_4_feature1 = get_post_meta($post_id, 'product_4_feature1', true);
                    $product_4_feature2 = get_post_meta($post_id, 'product_4_feature2', true);
                    $product_4_feature3 = get_post_meta($post_id, 'product_4_feature3', true);
                    $product_4_feature4 = get_post_meta($post_id, 'product_4_feature4', true);
                    $product_4_feature5 = get_post_meta($post_id, 'product_4_feature5', true);
                    /* Product 3 Data */  
                    if($product4_goto_url != '') {
                        $product4_Url = $product4_goto_url;
                    } else {
                        $product4_Url = $amazon_product4_url;
                    }
                   
                    if(!empty($product4_badge_name)) {
                       if($product4_badge_name == 'Winner'){
                        $returnhtml .='<ul class="badges-wrap winner-badge"> 
                          <li><div class="cmn-badge">
                          <span><img src="'.plugins_url().'/features-comparison-table/images/winner.svg" /></span>Il migliore</div>
                          </li>';
                       } elseif ($product4_badge_name == 'Trending'){
                        $returnhtml .='<ul class="badges-wrap trending-badge"> 
                          <li><div class="cmn-badge">
                          <span><img src="'.plugins_url().'/features-comparison-table/images/trending.svg" /></span>Di tendenza</div>
                          </li>';
                      } elseif ($product4_badge_name == 'Bestseller'){
                        $returnhtml .= '<ul class="badges-wrap bestseller-badge"> 
                          <li><div class="cmn-badge">
                          <span><img src="'.plugins_url().'/features-comparison-table/images/best-seller.svg" /></span>Il più venduto</div>
                          </li>';
                      } elseif ($product4_badge_name == 'Performance'){
                        $returnhtml .= '<ul class="badges-wrap performance-badge"> 
                          <li><div class="cmn-badge">
                          <span><img src="'.plugins_url().'/features-comparison-table/images/performance.svg" /></span>Top performance</div>
                          </li>';
                      } elseif ($product4_badge_name == 'Cheap_Good'){
                        $returnhtml .= '<ul class="badges-wrap winner-badge"> 
                          <li><div class="cmn-badge">
                          <span><img src="'.plugins_url().'/features-comparison-table/images/goodchoice.svg" /></span>La migliore offerta</div>
                          </li>';
                      } elseif ($product4_badge_name == 'Runner_up') {
                        $returnhtml .= '<ul class="badges-wrap runner-badge"> 
                          <li><div class="cmn-badge">
                          <span><img src="'.plugins_url().'/features-comparison-table/images/runner-up.svg" /></span>La migliore alternativa</div>
                          </li>';
                      } elseif ($product4_badge_name == 'Good_choice') {
                        $returnhtml .= '<ul class="badges-wrap goodchoice-badge"> 
                          <li><div class="cmn-badge">
                          <span><img src="'.plugins_url().'/features-comparison-table/images/goodchoice.svg" /></span>Buona scelta</div>
                          </li>';
                      }elseif ($product4_badge_name == 'Also_recommended') {
                        $returnhtml .= '<ul class="badges-wrap recommended-badge"> 
                          <li><div class="cmn-badge">
                          <span><img src="'.plugins_url().'/features-comparison-table/images/recommended.svg" /></span>L'.'alternativa consigliata</div>
                          </li>';
                      } elseif ($product4_badge_name == 'Bank_for_buck') {
                        $returnhtml .= '<ul class="badges-wrap bankbuck-badge"> 
                          <li><div class="cmn-badge">
                          <span><img src="'.plugins_url().'/features-comparison-table/images/bankbuck.svg" /></span>Miglior qualità/prezzo</div>
                          </li>';
                      } elseif ($product4_badge_name == 'Durable') {
                        $returnhtml .= '<ul class="badges-wrap durable-badge"> 
                          <li><div class="cmn-badge">
                          <span><img src="'.plugins_url().'/features-comparison-table/images/durable.svg" /></span>Il più resistente</div>
                          </li>';
                      } elseif ($product4_badge_name == 'High_end') {
                        $returnhtml .= '<ul class="badges-wrap high-end-badge"> 
                          <li><div class="cmn-badge">
                          <span><img src="'.plugins_url().'/features-comparison-table/images/high-end.svg" /></span>Di fascia alta</div>
                          </li>';
                      } elseif ($product4_badge_name == 'Editor_tip') {
                        $returnhtml .= '<ul class="badges-wrap editors-badge"> 
                          <li><div class="cmn-badge">
                          <span><img src="'.plugins_url().'/features-comparison-table/images/editors.svg" /></span>Il nostro suggerimento</div>
                          </li>';
                      } elseif ($product4_badge_name == 'For_beginners') {
                        $returnhtml .= '<ul class="badges-wrap beginners-badge"> 
                          <li><div class="cmn-badge">
                          <span><img src="'.plugins_url().'/features-comparison-table/images/beginners.svg" /></span>Per principianti</div>
                          </li>';
                      }
                   } else {
                    $returnhtml .= '<ul class="badges-wrap winner-badge"> 
                          <li><div class="cmn-badge">
                          <span><img src="'.plugins_url().'/features-comparison-table/images/winner.svg" /></span>Il migliore</div>
                          </li>';
                   } ?>
                   <!--  <ul class="badges-wrap best-price-badge">
                        <li>
                           <div class="cmn-badge"><span><img src="<?php echo plugins_url();?>/features-comparison-table/images/best-price.svg" /></span>BEST PRICE</div>
                        </li> -->
                        <!-- <li><div class="cmn-badge"><span><img src="images/high-end.svg" /></span>HIGH END</div></li> -->
                        <?php $returnhtml .='<li class="wrap-1">';
                            if($amazon_product4_img != '') {
                                $returnhtml .='<span class="product-img"><a href="'.$product4_Url.'"><img src="'.$amazon_product4_img.'" />';
                                if($product4_tag_status == 'yes') { 
                                    $returnhtml .='<span class="new-tag"><img src="'.plugins_url().'/features-comparison-table/images/new-tag.png" /></span>';
                                }
                                $returnhtml .='</a></span>';
                            } else { 
                                $returnhtml .='<span class="product-img"><a href="'.$product4_Url.'"><img src="'.$custom_product4_img.'" />';
                                if($product4_tag_status == 'yes'){
                                    $returnhtml .='<span class="new-tag"><img src="'.plugins_url().'/features-comparison-table/images/new-tag.png" /></span>';
                                }
                                $returnhtml .='</a></span>';
                           } 
                           if($amazon_product4_name != '') {
                            $returnhtml .='<a href="'.$product4_Url.'"><p class="product-name">'.$amazon_product4_name.'</p></a>';
                           } else {
                            $returnhtml .='<a href="'.$product4_Url.'"><p class="product-name">'.$product4_title_text.'</p><a>';
                             }
                             if($product4_Url != '') { 
                                if($product4_btn_text != '') {
                                    $returnhtml .='<a href="'.$product4_Url.'" class="offer-btn">'.$product4_btn_text.'</a>';
                                } else { 
                                    $returnhtml .='<a href="'.$product4_Url.'" class="offer-btn">VEDI L'.'AFFARE DI OGGI</a>';
                                } 
                            } 
                             $returnhtml .='</li>
                        <li class="wrap-2">';
                        $returnhtml .='<p class="product-desc">'.$product_4_feature1.'</p>';
                        $feature1_bar_level = get_post_meta($post_id, 'feature1_bar_level', true);
                           if($feature1_bar_level == 'yes') {
                           if(is_numeric($product_4_feature1)) {
                            /* Fraction caluclation for feature1 Bar  */
                            $returnhtml .=  $lib->calculateAvgBars($product_4_feature1,$product_feature1_barVal);
                           } }
                            $returnhtml .='</li>
                            <li class="wrap-3">';
                            $returnhtml .='<p class="product-desc">'.$product_4_feature2.'</p>';
                           $feature2_bar_level = get_post_meta($post_id, 'feature2_bar_level', true);
                           if($feature2_bar_level == 'yes') {
                           if(is_numeric($product_4_feature2)) {
                            /* Fraction caluclation for feature1 Bar  */
                            $returnhtml .= $lib->calculateAvgBars($product_4_feature2,$product_feature2_barVal);
                           } }
                         $returnhtml .='</li>
                        <li class="wrap-4">';
                        $returnhtml .='<p class="product-desc">'.$product_4_feature3.'</p>'; 
                            $feature3_bar_level = get_post_meta($post_id, 'feature3_bar_level', true);
                            $match_battery_level4 = (int)filter_var($product_4_feature3, FILTER_SANITIZE_NUMBER_INT);
                            if ($feature3_bar_level == 'yes') {
                           if(is_numeric($product_4_feature3)) {
                            /* Fraction caluclation for feature1 Bar  */
                            $returnhtml .= $lib->calculateAvgBars($product_4_feature3,$product_feature3_barVal);
                           } }
                            $returnhtml .='</li>
                        <li class="wrap-5">';
                        $returnhtml .='<p class="product-desc">'.$product_4_feature4.'</p>'; 
                           $feature4_bar_level = get_post_meta($post_id, 'feature4_bar_level', true);
                           $match_memory_level4 = (int)filter_var($product_4_feature4, FILTER_SANITIZE_NUMBER_INT);
                           if($feature4_bar_level == 'yes') {
                           if(is_numeric($product_4_feature4)) {
                            /* Fraction caluclation for feature1 Bar  */
                            $returnhtml .= $lib->calculateAvgBars($product_4_feature4,$product_feature4_barVal);
                            } }
                        $returnhtml .='</li>
                        <li class="wrap-6">';
                        $returnhtml .='<p class="product-desc">'.$product_4_feature5.'</p>';
                           $feature5_bar_level = get_post_meta($post_id, 'feature5_bar_level', true);
                           if($feature5_bar_level == 'yes') {
                           if(is_numeric($product_4_feature5)) {
                            /* Fraction caluclation for feature1 Bar  */
                            $returnhtml .= $lib->calculateAvgBars($product_4_feature5,$product_feature5_barVal);
                            } }
                            $returnhtml .='</li>
                        <li class="wrap-7">
                           <ul class="offer-wrap">
                              <li>
                                 <span class="offer-img"><a href="'.$product4_Url.'"><img src="'.plugins_url().'/features-comparison-table/images/amazon.png" /></a></span>
                              </li>
                           </ul>
                        </li>
                     </ul>';
                     // Product 4 
                    $product5_badge_name = get_post_meta($post_id, 'product5_badge_name', true);
                    $product5_tag_status = get_post_meta($post_id, 'product5_tag_status', true);
                    $product5_title_text = get_post_meta($post_id, 'product5_title_text', true);
                    $custom_product5_img = get_post_meta($post_id, 'custom_product5_img', true);
                    $product5_goto_url =   get_post_meta($post_id, 'product5_goto_url', true);
                    $product5_btn_text = get_post_meta($post_id, 'product5_btn_text', true);
                    $product_5_feature1 = get_post_meta($post_id, 'product_5_feature1', true);
                    $product_5_feature2 = get_post_meta($post_id, 'product_5_feature2', true);
                    $product_5_feature3 = get_post_meta($post_id, 'product_5_feature3', true);
                    $product_5_feature4 = get_post_meta($post_id, 'product_5_feature4', true);
                    $product_5_feature5 = get_post_meta($post_id, 'product_5_feature5', true);
                    /* Product 3 Data */  

                    if($product5_goto_url != '') {
                        $product5_Url = $product5_goto_url;
                    } else {
                        $product5_Url = $amazon_product5_url;
                    }

                    if(!empty($product5_badge_name)) {
                    if($product5_badge_name == 'Winner'){
                        $returnhtml .='<ul class="badges-wrap winner-badge"> 
                        <li><div class="cmn-badge">
                        <span><img src="'.plugins_url().'/features-comparison-table/images/winner.svg" /></span>Il migliore</div>
                        </li>';
                    } elseif ($product5_badge_name == 'Trending'){
                        $returnhtml .= '<ul class="badges-wrap trending-badge"> 
                        <li><div class="cmn-badge">
                        <span><img src="'.plugins_url().'/features-comparison-table/images/trending.svg" /></span>Di tendenza</div>
                        </li>';
                    } elseif ($product5_badge_name == 'Bestseller'){
                        $returnhtml .='<ul class="badges-wrap bestseller-badge"> 
                        <li><div class="cmn-badge">
                        <span><img src="'.plugins_url().'/features-comparison-table/images/best-seller.svg" /></span>Il più venduto</div>
                        </li>';
                    } elseif ($product5_badge_name == 'Performance'){
                        $returnhtml .= '<ul class="badges-wrap performance-badge"> 
                        <li><div class="cmn-badge">
                        <span><img src="'.plugins_url().'/features-comparison-table/images/performance.svg" /></span>Top performance</div>
                        </li>';
                    } elseif ($product5_badge_name == 'Cheap_Good'){
                        $returnhtml .= '<ul class="badges-wrap winner-badge"> 
                        <li><div class="cmn-badge">
                        <span><img src="'.plugins_url().'/features-comparison-table/images/goodchoice.svg" /></span>La migliore offerta</div>
                        </li>';
                    } elseif ($product5_badge_name == 'Runner_up') {
                        $returnhtml .= '<ul class="badges-wrap runner-badge"> 
                        <li><div class="cmn-badge">
                        <span><img src="'.plugins_url().'/features-comparison-table/images/runner-up.svg" /></span>La migliore alternativa</div>
                        </li>';
                    } elseif ($product5_badge_name == 'Good_choice') {
                        $returnhtml .= '<ul class="badges-wrap goodchoice-badge"> 
                        <li><div class="cmn-badge">
                        <span><img src="'.plugins_url().'/features-comparison-table/images/goodchoice.svg" /></span>Buona scelta</div>
                        </li>';
                    }elseif ($product5_badge_name == 'Also_recommended') {
                        $returnhtml .= '<ul class="badges-wrap recommended-badge"> 
                        <li><div class="cmn-badge">
                        <span><img src="'.plugins_url().'/features-comparison-table/images/recommended.svg" /></span>L'.'alternativa consigliata</div>
                        </li>';
                    } elseif ($product5_badge_name == 'Bank_for_buck') {
                        $returnhtml .= '<ul class="badges-wrap bankbuck-badge"> 
                        <li><div class="cmn-badge">
                        <span><img src="'.plugins_url().'/features-comparison-table/images/bankbuck.svg" /></span>Miglior qualità/prezzo</div>
                        </li>';
                    } elseif ($product5_badge_name == 'Durable') {
                        $returnhtml .= '<ul class="badges-wrap durable-badge"> 
                        <li><div class="cmn-badge">
                        <span><img src="'.plugins_url().'/features-comparison-table/images/durable.svg" /></span>Il più resistente</div>
                        </li>';
                    } elseif ($product5_badge_name == 'High_end') {
                        $returnhtml .= '<ul class="badges-wrap high-end-badge"> 
                        <li><div class="cmn-badge">
                        <span><img src="'.plugins_url().'/features-comparison-table/images/high-end.svg" /></span>Di fascia alta</div>
                        </li>';
                    } elseif ($product5_badge_name == 'Editor_tip') {
                        $returnhtml .= '<ul class="badges-wrap editors-badge"> 
                        <li><div class="cmn-badge">
                        <span><img src="'.plugins_url().'/features-comparison-table/images/editors.svg" /></span>Il nostro suggerimento</div>
                        </li>';
                    } elseif ($product5_badge_name == 'For_beginners') {
                        $returnhtml .= '<ul class="badges-wrap beginners-badge"> 
                        <li><div class="cmn-badge">
                        <span><img src="'.plugins_url().'/features-comparison-table/images/beginners.svg" /></span>Per principianti</div>
                        </li>';
                    }
                    } else {
                        $returnhtml .= '<ul class="badges-wrap winner-badge"> 
                        <li><div class="cmn-badge">
                        <span><img src="'.plugins_url().'/features-comparison-table/images/winner.svg" /></span>Il migliore</div>
                        </li>';
                    } ?>
                    <!--  <ul class="badges-wrap best-price-badge">
                    <li>
                        <div class="cmn-badge"><span><img src="<?php echo plugins_url();?>/features-comparison-table/images/best-price.svg" /></span>BEST PRICE</div>
                    </li> -->
                    <!-- <li><div class="cmn-badge"><span><img src="images/high-end.svg" /></span>HIGH END</div></li> -->
                   <?php $returnhtml .='<li class="wrap-1">';
                            if($amazon_product5_img != '') {
                                $returnhtml .='<span class="product-img"><a href="'.$product5_Url.'"><img src="'.$amazon_product5_img.'" />';
                                if($product5_tag_status == 'yes') {
                                    $returnhtml .='<span class="new-tag"><img src="'.plugins_url().'/features-comparison-table/images/new-tag.png" /></span>';
                                }
                                $returnhtml .='</a></span>';
                           } else {
                            $returnhtml .='<span class="product-img"><a href="'.$product5_Url.'"><img src="'.$custom_product5_img.'" />';
                            if($product5_tag_status == 'yes'){
                                $returnhtml .='<span class="new-tag"><img src="'.plugins_url().'/features-comparison-table/images/new-tag.png" /></span>';
                            }
                            $returnhtml .='</a></span>';
                           } 
                           if($amazon_product5_name != '') {
                            $returnhtml .='<a href="'.$product5_Url.'"><p class="product-name">'.$amazon_product5_name.'</p></a>';
                            } else {
                                $returnhtml .='<a href="'.$product5_Url.'"><p class="product-name">'.$product5_title_text.'</p></a>';
                            }
                            if($product5_Url != '') { 
                                if($product5_btn_text != '') {
                                    $returnhtml .='<a href="'.$product5_Url.'" class="offer-btn">'.$product5_btn_text.'</a>';
                                } else { 
                                    $returnhtml .='<a href="'.$product5_Url.'" class="offer-btn">VEDI L'.'AFFARE DI OGGI</a>';
                                } 
                            } 
                            $returnhtml .='</li>
                    <li class="wrap-2">';
                    $returnhtml .='<p class="product-desc">'.$product_5_feature1.'</p>';
                    $feature1_bar_level = get_post_meta($post_id, 'feature1_bar_level', true);
                        if($feature1_bar_level == 'yes') {
                           if(is_numeric($product_5_feature1)) {
                            /* Fraction caluclation for feature1 Bar  */
                            $returnhtml .= $lib->calculateAvgBars($product_5_feature1,$product_feature1_barVal);
                             } }
                    $returnhtml .='</li>
                    <li class="wrap-3">';
                    $returnhtml .='<p class="product-desc">'.$product_5_feature2.'</p>';
                    $feature2_bar_level = get_post_meta($post_id, 'feature2_bar_level', true);
                        if($feature2_bar_level == 'yes') {
                           if(is_numeric($product_5_feature2)) {
                            /* Fraction caluclation for feature1 Bar  */
                            $returnhtml .= $lib->calculateAvgBars($product_5_feature2,$product_feature2_barVal);
                            } }
                            $returnhtml .='</li>
                    <li class="wrap-4">';
                    $returnhtml .='<p class="product-desc">'.$product_5_feature3.'</p>';
                        $feature3_bar_level = get_post_meta($post_id, 'feature3_bar_level', true);
                        $match_battery_level5 = (int)filter_var($product_5_feature3, FILTER_SANITIZE_NUMBER_INT);
                        if($feature3_bar_level == 'yes') {
                           if(is_numeric($product_5_feature3)) {
                            /* Fraction caluclation for feature1 Bar  */
                            $returnhtml .= $lib->calculateAvgBars($product_5_feature3,$product_feature3_barVal);
                           } }
                            $returnhtml .='</li>
                    <li class="wrap-5">';
                    $returnhtml .='<p class="product-desc">'.$product_5_feature4.'</p>';
                        $feature4_bar_level = get_post_meta($post_id, 'feature4_bar_level', true);
                        $match_memory_level5 = (int)filter_var($product_5_feature4, FILTER_SANITIZE_NUMBER_INT);
                          if($feature4_bar_level == 'yes') {
                           if(is_numeric($product_5_feature4)) {
                            /* Fraction caluclation for feature1 Bar  */
                            $returnhtml .= $lib->calculateAvgBars($product_5_feature4,$product_feature4_barVal);
                           } }
                        $returnhtml .='</li>
                    <li class="wrap-6">';
                    $returnhtml .='<p class="product-desc">'.$product_5_feature5.'</p>';
                    $feature5_bar_level = get_post_meta($post_id, 'feature5_bar_level', true);
                         if($feature5_bar_level == 'yes') {
                           if(is_numeric($product_5_feature5)) {
                            /* Fraction caluclation for feature1 Bar  */
                            $returnhtml .= $lib->calculateAvgBars($product_5_feature5,$product_feature5_barVal);
                            } 
                        }
                        $returnhtml .='</li>
                    <li class="wrap-7">
                        <ul class="offer-wrap">
                            <li>
                                <span class="offer-img"><a href="'.$product5_Url.'"><img src="'.plugins_url().'/features-comparison-table/images/amazon.png" /></a></span>
                            </li>
                        </ul>
                    </li>
                    </ul>
                  </div>
               </div>
            </div>
         </div>';?>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <?php 
     wp_enqueue_script( 'features-table-custom-script' );
    ob_start();
        return $returnhtml;
        return ob_get_clean();
    });
}///End pl shortcode
/* Table Shortcode */