<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Mode extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('smiley');
    }

    function index() {
        ?>
<!doctype html>
<title>Site Maintenance</title>
<style>
  body { text-align: center; padding: 100px; }
  h1 { font-size: 50px; }
  body { font: 20px Helvetica, sans-serif; color: #333; }
  article { display: block; text-align: left; width: 650px; margin: 0 auto; }
  a { color: #dc8100; text-decoration: none; }
  a:hover { color: #333; text-decoration: none; }
</style>

<article>
<div align="center"><iframe width="560" height="315" src="https://www.youtube.com/embed/s1kBgXLTR8A?autoplay=1" frameborder="0" allowfullscreen></iframe><br><h3>Nasty Inventory r1.0 </h3><br><h1>We&rsquo;ll be back soon!</h1><br><h4>We should be back shortly .Thank you for your patience. ;)</h4></div>	
    
    <div>
        <p>Sorry for the inconvenience but we&rsquo;re performing some maintenance at the moment. If you need to you can always <a href="mailto:epul@nastyjuice.com">contact us</a>, otherwise we&rsquo;ll be back online shortly!</p>
        <p>&mdash; Jauhmerah &mdash;</p>
    </div>
</article>
        <?php
    }
}
        
?>