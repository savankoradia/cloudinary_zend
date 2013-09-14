<?php
#This is main file will be accessible from controller code.
#These first 3 files are library of cloudinary.
require_once('Cloudinary.php');
require_once('Uploader.php');
require_once('Api.php');

class Cloudinary_Main {

    #Cloudnary configuration settings will come through this function.
    public function __construct($settings) {
        $cloudinary = new Cloudinary();
        $config = $cloudinary->config(array(
            "cloud_name" => $settings['cloudName'],
            "api_key" => $settings['apiKey'],
            "api_secret" => $settings['apiSecret']
        ));
        return $config;
    }

    #upload image
    public function uploadImage($image) {
        $result = \Cloudinary\Uploader::upload($image);
        return $result;
    }

}
