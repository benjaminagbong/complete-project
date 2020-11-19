<!DOCTYPE html>
<html lang="en">
<head>
<base href="<?php echo base_url();?>">
<?php $this->load->view('templates/includes/meta'); ?>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel="stylesheet" href="<?=site_url()?>assets/themes/css/styles.min.css"/>
<link rel="stylesheet" href="<?=site_url()?>assets/themes/campaign.css"/>
<script src="<?='https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js'?>"></script>
<!-- web-font loader-->
<script>
    WebFontConfig = {

        google: {

            families: ['Quicksand:300,400,500,700', 'Permanent+Marker:400'],

        }

    }

    function font() {

        var wf = document.createElement('script')

        wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js'
        wf.type = 'text/javascript'
        wf.async = 'true'

        var s = document.getElementsByTagName('script')[0]

        s.parentNode.insertBefore(wf, s)

    }

    font()
</script>
</head>
