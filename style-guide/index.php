<?php include_once('style-guide-functions.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <title>CIS Style Guide</title>
  <meta name="viewport" content="width=device-width">
  <!-- Style Guide Boilerplate Styles -->
  <link rel="stylesheet" href="css/sg-style.css">
  <link rel="stylesheet" href="../icons/style.css">
  <link rel="stylesheet" href="../style.css">
</head>
<body>

<header id="top" class="sg-header">
  <div class="sg-container">
    <h1 class="sg-logo white">CIS Style Guide</h1>
    <form id="js-sg-nav" action=""  method="post" class="sg-nav">
      <select id="js-sg-section-switcher" class="sg-section-switcher" name="sg_section_switcher">
          <option value="">Jump To Section:</option>
          <optgroup label="Intro">
            <option value="#sg-about">About</option>
            <option value="#sg-colors">Colors</option>
            <option value="#sg-fontStacks">Font-Stacks</option>
          </optgroup>
          <optgroup label="Base HTML">
            <?php listMarkupAsOptions('base'); ?>
          </optgroup>
          <?php /* <optgroup label="Patterns">
            <?php listMarkupAsOptions('patterns'); ?>
          </optgroup> */?>
      </select>
      <input type="hidden" name="sg_uri" value="<?php echo $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"]; ?>">
      <button type="submit" class="sg-submit-btn">Go</button>
    </form><!--/.sg-nav-->
  </div>
</header><!--/.sg-header-->

<div class="sg-body sg-container">
  <div class="sg-info">
    <div class="sg-about sg-section">
      <h2 class="section-title"><a id="sg-about" class="sg-anchor">About</a></h2>
      <p>A brief guide on key web styles for Credit Info Services</p>
    </div><!--/.sg-about-->

    <div class="logo sg-section">
      <h2 class="section-title"><a id="logo" class="sg-anchor">Logo</a></h2>
      <p class="center site-title"><i class="icon-cis"></i></p>
    </div><!--/.logo-->

    <div class="sg-colors sg-section">
      <h2 class="section-title"><a id="sg-colors" class="sg-anchor">Colors</a></h2>
        <div class="sg-color blue-bg"><span class="sg-color-swatch"><span class="sg-animated">#128BC8</span></span></div>
        <div class="sg-color dark-blue-bg"><span class="sg-color-swatch"><span class="sg-animated">#0A3348</span></span></div>
        <div class="sg-color red-bg"><span class="sg-color-swatch"><span class="sg-animated">#C81C2D</span></span></div>
        <div class="sg-color dark-red-bg"><span class="sg-color-swatch"><span class="sg-animated">#7B0511</span></span></div>
        <div class="sg-color green-bg"><span class="sg-color-swatch"><span class="sg-animated">#888413</span></span></div>
        <div class="sg-color orange-bg"><span class="sg-color-swatch"><span class="sg-animated">#f9bb1e</span></span></div>
        <div class="sg-markup-controls"><a class="sg-btn--top" href="#top">Back to Top</a></div>
    </div><!--/.sg-colors-->

    <div class="sg-font-stacks sg-section">
      <h2 class="section-title"><a id="sg-fontStacks" class="sg-anchor">Font Stacks</a></h2>
      <p>font-family: "museo-sans-rounded", "Helvetica Neue", Helvetica, Arial, Lucida Grande, sans-serif;<br/>
      font-weight: 300;</p>
      <div class="sg-markup-controls"><a class="sg-btn--top" href="#top">Back to Top</a></div>
    </div><!--/.sg-font-stacks-->
  </div><!--/.sg-info-->

  <div class="sg-base-styles">
    <h1 class="sg-h1 well">Base HTML</h1>
    <?php showMarkup('base'); ?>
  </div><!--/.sg-base-styles-->

  <?php /* <div class="sg-pattern-styles">
    <h1 class="sg-h1">Patterns<small> - Design and markup patterns unique to your site.</small></h1>
    <?php showMarkup('patterns'); ?>
    </div><!--/.sg-pattern-styles-->
  </div><!--/.sg-body--> */?>

  <script src="js/sg-plugins.js"></script>
  <script src="js/sg-scripts.js"></script>
</body>
</html>

