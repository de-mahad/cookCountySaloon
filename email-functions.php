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

