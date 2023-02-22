<?php 
class InstagramAPI {
    private $apiUrl = 'https://graph.facebook.com/v16.0/';
    private $accessToken;
    
    function __construct($accessToken) {
        $this->accessToken = $accessToken;
    }
    
    /**
     * Get all posts of an instagram account
     * @param $userID string id of the Instagram account
     * @return Array result
     */
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