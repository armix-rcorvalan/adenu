<?php
/**
 * Taxonomy Carreras | 404
 *
 * @package ARMIX
 */

global $wp_query;
$wp_query->set_404();
status_header( 404 );
get_template_part( 404 ); 
exit();
