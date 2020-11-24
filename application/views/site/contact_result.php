<div class="container">
  <div class="row">
    <?= heading( $title); ?>
  </div>
  


<!---- ce que j'ai rajouté---->
<div class="row alert <?= $result_class; ?>" role="alert">
    <?= $result_message; ?>
  </div>
  <div class="row text-center">
    <?= anchor("index", "Fermer", ['class' => "btn btn-default"]); ?>
  </div>
<!------->


</div>  
