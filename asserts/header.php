<!-- Developed By Siva Prakash,Hari Krishnan,Prem sai krishna,Manoj,Narendra,Vayuputra -->
<script>
  $(window).load(function() {
    $('#nav_short').hide();
    document.getElementById("container").style.minHeight = window.innerHeight + "px";
    $('#loader').fadeOut("slow");
  });
  $(window).resize(function() {
    document.getElementById("container").style.minHeight = window.innerHeight + "px";
    $('#nav_short').hide();
  });
  $(document).ready(function() {
    $("#opener").click(function() {
      if (document.getElementById("nav_short").style.display === "none") {
        $("#nav_short").show(1000);
      } else
        $("#nav_short").hide(1000);
    });
  });
</script>
<div id="loader"></div>
<div class="header">
  <div id="opener"></div>
  <a class="logo" href="/"></a>
  <div class="nav">
    <a href="/">HOME</a>
    <a href="/about.php">ABOUT</a>
    <a href="/gallery.php">GALLERY</a>
    <a href="/events.php">EVENTS</a>
    <a href="/workshops.php">WORKSHOPS</a>
    <a href="/proshow.php">PRO&nbsp;SHOW</a>
    <a href="/hospitality.php">HOSPITALITY</a>
    <a href="/registrations.php">REGISTRATIONS</a>
    <a href="/team.php" target="_blank">TEAM</a>
    <a class="highlight" href="/BeAnAmbassador.php">BE &nbsp; AN <br>AMBASSADOR</a>
  </div>
  <div class="nav_short" id="nav_short">
    <a href="/">HOME</a>
    <a href="/about.php">ABOUT</a>
    <a href="/gallery.php">GALLERY</a>
    <a href="/events.php">EVENTS</a>
    <a href="/workshops.php">WORKSHOPS</a>
    <a href="/proshow.php">PRO&nbsp;SHOW</a>
    <a href="/hospitality.php">HOSPITALITY</a>
    <a href="/registrations.php">REGISTRATIONS</a>
    <a href="/team.php" target="_blank">TEAM</a>
    <a href="/BeAnAmbassador.php">BE &nbsp; AN <br>AMBASSADOR</a>
  </div>


</div>