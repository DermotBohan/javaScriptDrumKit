<?php // require_once('../includes/session.php'); ?>
<?php // require_once('../includes/dbConnection.php'); ?>
<?php require_once('../includes/functions.php'); ?>
<?php include('../includes/layouts/header.php'); ?>

<?php $samples = "assets/sounds/"; ?>

<style>

</style>

<div id="main" class="container-fluid">
  <div class="row">
    <div id="page" class="col-xs-12">
      <p class="text-center">Your Heart is a Drum Machine</p>
      <?php // 9 keys. ?>
      <div class="keys">
        <div data-key="65" class="key"><kbd>A</kbd><span class="sound">tink</span></div>
        <div data-key="83" class="key"><kbd>S</kbd><span class="sound">ride</span></div>
        <div data-key="68" class="key"><kbd>D</kbd><span class="sound">openhat</span></div>
        <div data-key="70" class="key"><kbd>F</kbd><span class="sound">hihat</span></div>
        <div data-key="74" class="key"><kbd>J</kbd><span class="sound">clap</span></div>
        <div data-key="75" class="key"><kbd>K</kbd><span class="sound">snare</span></div>
        <div data-key="76" class="key"><kbd>L</kbd><span class="sound">boom</span></div>
        <div data-key="59" class="key"><kbd>;</kbd><span class="sound">tom</span></div>
        <div data-key="32" class="key"><kbd>&blank;</kbd><span class="sound">kick</span></div>
      </div>

      <audio data-key="65" src="<?php echo $samples; ?>tink.wav"></audio>
      <audio data-key="83" src="<?php echo $samples; ?>ride.wav"></audio>
      <audio data-key="68" src="<?php echo $samples; ?>openhat.wav"></audio>
      <audio data-key="70" src="<?php echo $samples; ?>hihat.wav"></audio>
      <audio data-key="74" src="<?php echo $samples; ?>clap.wav"></audio>
      <audio data-key="75" src="<?php echo $samples; ?>snare.wav"></audio>
      <audio data-key="76" src="<?php echo $samples; ?>boom.wav"></audio>
      <audio data-key="59" src="<?php echo $samples; ?>tom.wav"></audio>
      <audio data-key="32" src="<?php echo $samples; ?>kick.wav"></audio>
    </div><!-- /#page /.col -->
  </div><!-- /.row -->
</div><!-- /#main /.container -->

<script>







  //keys.forEach(key => key.addEventListener('transitionend', removeTransition));
  //forEach(key => key.addEventListener('transitionend', removeTransition));

</script>

<?php include('../includes/layouts/footer.php'); ?>
