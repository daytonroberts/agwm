<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Change Text Color on Scroll</title>
<style>
  body {
    height: 2000px; /* Just for demonstration */
  }

  .scroll-color {
    color: black; /* Default color */
    transition: color 0.5s ease; /* Smooth transition for color change */
  }

  /* Style the link when it's targeted */
  .scroll-color:target {
    color: red; /* Color when targeted (when URL contains the anchor) */
  }
</style>
</head>
<body>

<a href="#change-color" class="scroll-color">Scroll down to change color</a>

<!-- Anchor link to target -->
<div id="change-color"></div>

</body>
</html>
