<?php
$redirectUrl = admin_url().'options-general.php?page=wordpress-instagram';
?>
<script>
    function getHashUrlVars(){
        var vars = [], hash;
        var hashes = window.location.href.slice(window.location.href.indexOf('#') + 1).split('&');
        for(var i = 0; i < hashes.length; i++)
        {
            hash = hashes[i].split('=');
            vars.push(hash[0]);
            vars[hash[0]] = hash[1];
        }
        return vars;
    }

    var allVars = getHashUrlVars();
    var access_token = getHashUrlVars()['access_token'];
//    alert(access_token);
    var href = "<?php echo $redirectUrl; ?>&access_token="+access_token;
    console.log(href);
    window.location.href = href;
</script>