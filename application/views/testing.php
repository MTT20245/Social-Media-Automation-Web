<?php
if($task == 'posting') {
    echo "$task <br>";
    echo "$content <br>";
    echo "$file <br>";
    echo "$task_schedule <br>";
    echo "$accounts <br>";
    echo "$groups <br>";
    echo "$pages <br>";
    echo "$wall <br>";
    echo "$story <br>";
} elseif($task == 'video_promoting') {
    echo "<pre>";
    print_r($task);
    echo "</pre>";

    echo "<pre>";
    print_r($video_link);
    echo "</pre>";
    
    echo "<pre>";
    print_r($video_view_timing);
    echo "</pre>";

    echo "<pre>";
    print_r($video_like_qty);
    echo "</pre>";
    
    echo "<pre>";
    print_r($video_share_qty);
    echo "</pre>";
    
    echo "<pre>";
    print_r($video_comment_qty);
    echo "</pre>";

    echo "The selected Publish Date & Time is: " . $video_schedule;

    echo "<pre>";
    print_r($accounts);
    echo "</pre>";

    echo "<pre>";
    print_r($groups);
    echo "</pre>";

    echo "<pre>";
    print_r($pages);
    echo "</pre>";
} elseif($task == 'reel_promoting') {
    echo "<pre>";
    print_r($task);
    echo "</pre>";

    echo "<pre>";
    print_r($reel_link);
    echo "</pre>";
    
    echo "<pre>";
    print_r($reel_view_timing);
    echo "</pre>";

    echo "<pre>";
    print_r($reel_like_qty);
    echo "</pre>";
    
    echo "<pre>";
    print_r($reel_share_qty);
    echo "</pre>";
    
    echo "<pre>";
    print_r($reel_comment_qty);
    echo "</pre>";

    echo "The selected Publish Date & Time is: " . $reel_schedule;

    echo "<pre>";
    print_r($accounts);
    echo "</pre>";

    echo "<pre>";
    print_r($groups);
    echo "</pre>";

    echo "<pre>";
    print_r($pages);
    echo "</pre>";
} elseif($task == 'post_promoting') {
    echo "<pre>";
    print_r($task);
    echo "</pre>";

    echo "<pre>";
    print_r($post_link);
    echo "</pre>";
    
    echo "<pre>";
    print_r($post_view_timing);
    echo "</pre>";

    echo "<pre>";
    print_r($post_like_qty);
    echo "</pre>";
    
    echo "<pre>";
    print_r($post_share_qty);
    echo "</pre>";
    
    echo "<pre>";
    print_r($post_comment_qty);
    echo "</pre>";

    echo "The selected Publish Date & Time is: " . $post_schedule;

    echo "<pre>";
    print_r($accounts);
    echo "</pre>";

    echo "<pre>";
    print_r($groups);
    echo "</pre>";

    echo "<pre>";
    print_r($pages);
    echo "</pre>";
}
?>
