<?php 
class InstagramAPI {
    private $apiUrl = 'https://graph.facebook.com/v16.0/';
    private $accessToken;
    
    function __construct($accessToken) {
        $this->accessToken = $accessToken;
    }
    
    function getAllPosts($userId) {
        $url = $this->apiUrl . $userId . '/media?fields=caption,media_url,thumbnail_url,permalink&access_token=' . $this->accessToken;
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);
        return json_decode($response, true);
    }
}

?>