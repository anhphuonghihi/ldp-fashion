<?php  
/* Template Name: No Header Footer */
if(have_posts()){
        while (have_posts()) {
            the_post();
            the_content();
        }
    } ?>