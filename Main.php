<?php

require_once('Cloudinary.php');
require_once('Uploader.php');
require_once('Api.php');

class Cloudinary_Main {

    public function __construct($settings) {
        $cloudinary = new Cloudinary();
        $config = $cloudinary->config(array(
            "cloud_name" => $settings['cloudName'],
            "api_key" => $settings['apiKey'],
            "api_secret" => $settings['apiSecret']
        ));
        return $config;
    }

    public function uploadImage($image) {
        $result = \Cloudinary\Uploader::upload($image);
        return $result;
    }

}
