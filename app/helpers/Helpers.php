<?php

function saveImage($image, $directory, $modelFileUrl=null)
{

    if ($image)
    {
        if (file_exists($modelFileUrl))
        {
            unlink($modelFileUrl);
            $imageName = time().rand(10,1000).'.'.$image->getClientOriginalExtension();
            $image->move($directory, $imageName);
            $imgUrl = $directory.$imageName;
        } else {
            $imageName = time().rand(10,1000).'.'.$image->getClientOriginalExtension();
            $image->move($directory, $imageName);
            $imgUrl = $directory.$imageName;
        }
    } else {
        $imgUrl = $modelFileUrl;
    }
    return $imgUrl;
}
