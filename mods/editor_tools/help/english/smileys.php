<?php
  chdir('../../../../');
  define('phorum_page','smiley_help');
  include_once( "./common.php" );

  // The definition of the possible uses for a smiley.
  $PHORUM_MOD_SMILEY_USES = array(
      0   => "B",
      1   => "S",
      2   => "BS",
  );
?>
<html>
  <head>
    <title>Smiley help</title>
    <link rel="stylesheet" type="text/css" href="../help.css"/>
  </head>
  <body>
    <h2>Smiley help information</h2>

    On this forum, you can make use of smileys. Smileys are 
    strings of characters that will be displayed as an 
    image when reading the message. In the table below, you
    can find all smileys that are available. The "Where"
    column indicates where in your messages you can use the
    smiley (S = message subject, B = message body, BS = both).
    <br/><br/>
    <table cellspacing="1" width="100%">
    <tr>
      <th class="PhorumAdminTableHead">Smiley</th>
      <th class="PhorumAdminTableHead">Image</th>
      <th class="PhorumAdminTableHead">Description</th>
      <th class="PhorumAdminTableHead">Where</th>
    </tr>
    <?php include("./mods/editor_tools/help/render_smileys_list.php") ?>
    </table>

    <br/><br/><br/>
  </body>
</html>
