<?php

/**
 * 
 * @param $request
 * 
 */

function uploadImage($image)
{
    // On donne un nom à l'image : timestamp en temps unix + extension
    $imageName = time() . '.' . $image->extension();

    // on déplace l'image dans public/images
    $image->move(public_path('image'), $imageName);

    // on retrouve le nom de l'image 
    return $imageName;
}

