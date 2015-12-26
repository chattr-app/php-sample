<script src='https://cdn.slaask.com/chat.js'></script>
  
<?php if($userIsConnected) : ?>
  <script>
    _slaask.identify('<?php echo($connectedUser->firstname) ?>', {
      user_id: <?php echo($connectedUser->id) ?>,
      email: '<?php echo($connectedUser->email) ?>',
      plan: '<?php echo($connectedUser->plan) ?>'
    });
  </script>
<?php endif; ?>

<script>
  _slaask.init('XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX');
</script>
