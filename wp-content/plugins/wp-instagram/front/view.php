<?php
//    var_dump($this->instagram);
//    exit();
    $displayMode = $this->settings['DisplayMode'];
    if ($displayMode == 'username') {
        $result = $this->instagram->searchUser($this->settings['Username']) ;
        $userId = $result->data[0]->id;
        $result = $this->instagram->getUserMedia($userId,$this->settings['NumberToDisplay']) ;
    }
    if ($displayMode == 'hashtag') {
        $result = $this->instagram->getTagMedia($this->settings['Username'],$this->settings['NumberToDisplay']) ;

    }
//    var_dump($result);
//    exit();
?>
<?php if ($this->settings['Enable'] && $this->settings['access_token']): ?>

    <div id="wi-wrapper">
        <div id="wi-button" class="wi-button">
        </div>
        <div class="wi-scroll">
            <div class="wi-main">
                <ul class="wi-grid">
                    <?php
                    foreach ($result->data as $media) {
                        $content = "<li>";

                        // output media
                        if ($media->type === 'video') {
                            // video
                            $poster = $media->images->low_resolution->url;
                            $source = $media->videos->standard_resolution->url;
                            $content .= "<video class=\"media video-js vjs-default-skin\" width=\"250\" height=\"250\" poster=\"{$poster}\"
                           data-setup='{\"controls\":true, \"preload\": \"auto\"}'>
                             <source src=\"{$source}\" type=\"video/mp4\" />
                           </video>";
                        } else {
//                            var_dump($media);
//                            exit();
//                            $image = $media->images->low_resolution->url;
                            $content .= "<a class=\"media\" href='{$media->images->standard_resolution->url}' data-lightbox='wi-image''><img src=\"{$media->images->low_resolution->url}\"/></a>";
                        }

                        $avatar = $media->user->profile_picture;
                        $username = $media->user->username;
                        $comment = $media->caption->text;

                        $content .= "<div class=\"wi-content\">
                           <div class=\"wi-avatar\" style=\"background-image: url({$avatar})\"></div>
                           <a target='_blank' href='{$media->link}'>{$username}</a>
                           <div class=\"wi-comment\">{$comment}</div>
                         </div>";

                        // output media
                        echo $content . "</li>";
                    }
                    ?>
                </ul>
            </div>
        </div>
        <div class="developedby"><span id="linkit">responsive templates at <a href="http://www.magazento.com/">magento templates</a></span></a>
    </div>

    <link href="https://vjs.zencdn.net/4.2/video-js.css" rel="stylesheet">
    <script src="https://vjs.zencdn.net/4.2/video.js"></script>

    <script type="text/javascript">
        (function ($) {
            $( document ).ready(function() {
                $( "#wi-button" ).click(function() {
                    if ($( "#wi-wrapper").hasClass('opened')) {
                        $( "#wi-wrapper").removeClass('opened');
                        $( "#wi-wrapper" ).animate({
                            width: "1px"
                        }, 500, function() {
                            // Animation complete.
                        });
                    } else {
                        $( "#wi-wrapper").addClass('opened');
                        $( "#wi-wrapper" ).animate({
                            width: "<?php echo $this->settings['Width']; ?>"
                        }, 500, function() {
                            // Animation complete.
                        });
                    }
                });

            });
        })(jQuery);
    </script>

<?php endif; ?>