<div class="backend-wrapper wrap sct-wordpress-<?php echo WPINSTAGRAM_WP_VERSION; ?>">
<div class="backend-header">
<h2>
    <?php echo WPINSTAGRAM_NAME; ?>
    <span class="sct-version"> | <?php echo WPINSTAGRAM_VER; ?></span>
</h2>

<div class="instagram-auth">
    <div class="instagram-auth-data">

        <?php if (!$this->settings['ClientID']): ?>
            <h3>Setup: Step 1 of 2</h3>
            Instagram’s API only requires the use of a client_id. A client_id simply associates your server.<br/>
            > click here: <a target="_blank" href="http://instagram.com/developer/clients/manage/">http://instagram.com/developer/clients/manage/</a><br/>
            > <strong>than create a new application with the following data:</strong><br/><br/>
            <div style="width:120px;float:left;">Application name:</div> <input readonly type="text" size="120" value="<?php echo get_site_url(); ?>"/><br/>
            <div style="width:120px;float:left;">Description name:</div>  <input readonly type="text" size="120" value="<?php echo get_site_url(); ?>"/><br/>
            <div style="width:120px;float:left;">Website:</div>  <input readonly type="text" size="120" value="<?php echo get_site_url(); ?>"/><br/>
            <div style="width:120px;float:left;">OAuth redirect_uri:</div>  <input readonly type="text" size="120" value="<?php echo WPINSTAGRAM_REDIRECT_URL; ?>"/>
            <br/>
            <br/>
            > Once application is created please enter your <strong>Client ID</strong> and  <strong>Client Secret</strong> in the relevant fields bellow and click <strong>"Save settings"</strong>
        <?php endif;?>

        <?php if ($this->settings['ClientID'] && !$this->settings['access_token']): ?>
            <h3>Setup: Step 2 of 2</h3>
            Almost done! <a class="connect" href="https://instagram.com/oauth/authorize/?client_id=<?php echo $this->settings['ClientID']; ?>&redirect_uri=<?php echo WPINSTAGRAM_REDIRECT_URL; ?>&response_type=code" class="pixed-instagram-connect"> Connect your website to <strong><u>Instagram</u></strong></a>
        <?php endif;?>

        <?php if ($this->settings['access_token']): ?>
            <h3>Website is connected to Instagram</h3>
            <a class="connect" href="<?php echo WPINSTAGRAM_REDIRECT_URL; ?>&disconnect" class="pixed-instagram-connect">click to disconnect website from Instagram</a>
        <?php endif;?>
    </div>
</div>

<form id="SSForm" method="post">
<?php settings_fields('wordpress-instagram'); ?>
<input type="hidden" name="Config" value="1" />
<div id="STabs">

<ul>
    <li><a href="#GeneralSettings"><strong>General Settings</strong></a></li>
</ul>

<div id="GeneralSettings">

<h3>Setup</h3>
<table class="form-table">
    <tbody>
    <tr valign="top">

        <th scope="row">Client ID</th>
        <td>
            <fieldset>
                <legend class="screen-reader-text"><span>Client ID</span></legend>

                <input name="ClientID" size="50"  type="text" id="ClientID" value="<?php echo  $this->settings['ClientID'] ?>" class="" />
            </fieldset>
        </td>
    </tr>
    <tr valign="top">

        <th scope="row">Client Secret</th>
        <td>
            <fieldset>
                <legend class="screen-reader-text"><span>Client ID</span></legend>

                <input name="ClientSecret" size="50"  type="text" id="ClientSecret" value="<?php echo  $this->settings['ClientSecret'] ?>" class="" />
            </fieldset>
        </td>
    </tr>
    </tbody>
</table>


<h3>General Settings</h3>
<table class="form-table">
<tbody>
<tr valign="top">
    <th scope="row">Enable</th>
    <td>
        <fieldset>
            <legend class="screen-reader-text"><span>Enable</span></legend>

            <label for="Enable">
                <input name="Enable" <?php echo  ($this->settings['Enable'] == '1' ? 'checked' : '' ) ?> type="radio" id="Enable" value="1" />
                Enabled
            </label>
            <label for="Disable">
                <input name="Enable" <?php echo  ($this->settings['Enable'] == '0' ? 'checked' : '' ) ?> type="radio" id="Disable" value="0" />
                Disabled
            </label>
        </fieldset>
    </td>
</tr>
<tr valign="top">
    <th scope="row">Display Mode</th>
    <td>
        <fieldset>
            <legend class="screen-reader-text"><span>Display Mode</span></legend>

            <label for="DisplayModeUsername">
                <input name="DisplayMode" <?php echo ($this->settings['DisplayMode'] == 'username' ? 'checked' : '' ) ?> type="radio" id="DisplayModeUsername" value="username" />
                Username
            </label>
            <label for="DisplayModeHashtag">
                <input name="DisplayMode" <?php echo ($this->settings['DisplayMode'] == 'hashtag' ? 'checked' : '' ) ?> type="radio" id="DisplayModeHashtag" value="hashtag" />
                Hashtag
            </label>
        </fieldset>
    </td>
</tr>
<tr valign="top">
    <th scope="row">Username or Hashtag</th>
    <td>
        <fieldset>
            <input name="Username" type="text" size="50"   id="Username" value="<?php echo  $this->settings['Username'] ?>" class="" /> without "@" or "#"
        </fieldset>
    </td>
</tr>
<!--<tr valign="top">-->
<!--    <th scope="row">Filter</th>-->
<!--    <td>-->
<!--        <fieldset>-->
<!--            <legend class="screen-reader-text"><span>Filter</span></legend>-->
<!---->
<!--            <label for="FilterImages">-->
<!--                <input name="Filter" --><?php //echo ($this->settings['Filter'] == 'images' ? 'checked' : '' ) ?><!-- type="radio" id="FilterImages" value="images" />-->
<!--                Images-->
<!--            </label>-->
<!--            <label for="FilterVideo">-->
<!--                <input name="Filter" --><?php //echo ($this->settings['Filter'] == 'video' ? 'checked' : '' ) ?><!-- type="radio" id="FilterVideo" value="video" />-->
<!--                Video-->
<!--            </label>-->
<!--            <label for="DisplayImagesVideo">-->
<!--                <input name="Filter" --><?php //echo ($this->settings['Filter'] == 'imagesvideo' ? 'checked' : '' ) ?><!-- type="radio" id="DisplayImagesVideo" value="imagesvideo" />-->
<!--                Images & Video-->
<!--            </label>-->
<!--        </fieldset>-->
<!--    </td>-->
<!--</tr>-->
<tr valign="top">
    <th scope="row">Number to display</th>
    <td>
        <fieldset>
            <input name="NumberToDisplay" type="text" size="5"   id="NumberToDisplay" value="<?php echo  $this->settings['NumberToDisplay'] ?>" class="" />
        </fieldset>
    </td>
</tr>
<tr valign="top">
    <th scope="row">Width</th>
    <td>
        <fieldset>
            <input name="Width" type="text" size="5" id="Width" value="<?php echo  $this->settings['Width'] ?>" class="" /> ex: 600px
        </fieldset>
    </td>
</tr>
</tbody>
</table>
</div>


</div>

<p class="submit">
    <input type="submit" name="submit" id="submit" class="button-primary" value="Save settings" />
</p>

</form>




    <script type="text/javascript">
jQuery(function(){
    jQuery('#STabs').tabs();
});
</script></div>
