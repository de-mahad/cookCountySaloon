<?php

function ticket($order)
{
    
    $tickets=0;
    foreach ($order->get_items() as $key => $value) {

        $terms = wp_get_post_terms($value['product_id'], 'product_cat', array("fields" => "names"));
        if (strcmp(strtolower($terms[0]), "tickets") == 0) {
            $tickets+=1;
        }
        // echo strtolower(strval(wc_get_product_category($value['product_id'],', ','','')));
    }

    return $tickets;
}


function merchandise($order)
{
    
    $merchandise=0;
    foreach ($order->get_items() as $key => $value) {

        $terms = wp_get_post_terms($value['product_id'], 'product_cat', array("fields" => "names"));
        if (strcmp(strtolower($terms[0]), "merchandise") == 0) {
            $merchandise+=1;
        }
        // echo strtolower(strval(wc_get_product_category($value['product_id'],', ','','')));
    }

    return $merchandise;
}


function partyPackages($order)
{
    
    $partyPackages=0;
    foreach ($order->get_items() as $key => $value) {

        $terms = wp_get_post_terms($value['product_id'], 'product_cat', array("fields" => "names"));
        if (strcmp(strtolower($terms[0]), "party packages") == 0) {
            $partyPackages+=1;
        }
        // echo strtolower(strval(wc_get_product_category($value['product_id'],', ','','')));
    }

    return $partyPackages; 
}



function customFields($order)
{
    $fields['guest_of_honor'] = array(
        'label' => __( 'Guest Of Honor' ),
        'value' => get_post_meta( $order->id, 'guest_of_honor', true ),
    );

    $fields['special_occasion'] = array(
        'label' => __( 'Special Occasion' ),
        'value' => get_post_meta( $order->id, 'special_occasion', true ),
    );
    $fields['date_of_arrival'] = array(
        'label' => __( 'Date Of Arrival' ),
        'value' => get_post_meta( $order->id, 'date_of_arrival', true ),
    );

    $fields['where_would_you_like_your_table_reservation'] = array(
        'label' => __( 'Your Table Location' ),
        'value' => get_post_meta( $order->id, 'where_would_you_like_your_table_reservation', true ),
    );
    
    $fields['tix_or_champ_gold'] = array(
        'label' => __( 'Champagne or Drink Ticket Gold' ),
        'value' => get_post_meta( $order->id, 'tix_or_champ_gold', true ),
    );
    
    $fields['tix_or_champ_silver'] = array(
        'label' => __( 'Champagne or Drink ticket Silver' ),
        'value' => get_post_meta( $order->id, 'tix_or_champ_silver', true ),
    );

    $fields['bottle_selection'] = array(
        'label' => __( 'Choose Your Bottle' ),
        'value' => get_post_meta( $order->id, 'bottle_selection', true ),
    );
    $fields['number_in_party_silver'] = array(
        'label' => __( 'Number Of People' ),
        'value' => get_post_meta( $order->id, 'number_in_party_silver', true ),
    );
    $fields['number_in_party_gold'] = array(
        'label' => __( 'Number Of People' ),
        'value' => get_post_meta( $order->id, 'number_in_party_gold', true ),
    );
    $fields['number_in_party_plat'] = array(
        'label' => __( 'Number Of People' ),
        'value' => get_post_meta( $order->id, 'number_in_party_plat', true ),
    );

    return $fields;
}



function isGoldPackage($order)
{
    foreach ($order->get_items() as $key => $value){
        if (strtolower($value['name'])=='gold package') {
            return true;
        }
    }
    return false;
}
function isSilverPackage($order)
{
    foreach ($order->get_items() as $key => $value){
        if (strtolower($value['name'])=='silver package') {
            return true;
        }
    }
    return false;
}
function isPlatinumPackage($order)
{
    foreach ($order->get_items() as $key => $value){
        if (strtolower($value['name'])=='platinum bottle service') {
            return true;
        }
    }
    return false;
}