<?php
    //Connect to Instagram API and generate data
    $instagram = new InstagramAPI($_ENV['INSTAGRAM_ACCESS_TOKEN']);
    $userId = $_ENV['INSTAGRAM_USER_ID'];
    $allPosts = $instagram->getAllPosts($userId)['data'];

    //Character limits for post captions
    $captionCharacterLimit = 110;
?>

<div class="container mx-auto px-4 py-20">
    <p class="text-3xl text-center uppercase">Life at</p>
    <h2 class="text-3xl text-center uppercase font-black">Our School</h2>
    <p class="text-center text-gray-600"><i class="fa-brands fa-square-instagram text-red-800 pr-2 py-4"></i>our_instagram_feed</p>
    <div class="grid gap-x-8 gap-y-4 grid-cols-5 mt-5 py-10 owl-carousel">
        <?php foreach($allPosts as $singlePost) : ?>
            <div class="rounded-lg overflow-hidden shadow-lg hover:shadow-xl  md:h-[450px] xl:h-[480px]">
                <img class="w-full" src="<?= isset($singlePost['thumbnail_url']) ? $singlePost['thumbnail_url'] : $singlePost['media_url']; ?>" alt="">
                <div class="px-6 py-4">
                    <?php 
                    if (isset($singlePost['caption'])) {
                        if (strlen($singlePost['caption']) > $captionCharacterLimit) {
                            $singlePost['caption'] = substr($singlePost['caption'], 0, $captionCharacterLimit) . '...';
                        }
                    } else {
                        $singlePost['caption'] = 'This post has no caption';
                    }
                    ?>
                    <p class="text-gray-700 text-sm"><?= $singlePost['caption']; ?></p>
                </div>
                <div class="px-6 pt-4 pb-2">
                    <a href="<?= $singlePost['permalink']; ?>" class="inline-block bg-blue-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">read more</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>