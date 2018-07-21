<?php
if (!defined('WEB_ROOT')) {
  exit;
}
?>
  <div class="row">
    <div class="col-md-12"> 
      <?php require_once 'include/nevMenu.php'; ?>
    </div>
</div>

              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>
                  
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                      <div class="item active">
                        <img src="images/s1.jpg" alt="..." width="100%">
                        <div class="carousel-caption">
                          
                        </div>
                      </div>
                      <div class="item">
                        <img src="images/s2.jpg" alt="..." width="100%">
                        <div class="carousel-caption">
                         
                        </div>
                      </div>
                      <div class="item">
                            <img src="images/s3.jpg" alt="..." width="100%">
                            <div class="carousel-caption">
                             
                            </div>
                          </div>
                    </div>
                  
                    <!-- Controls 
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>-->
                  </div>
<?php require_once 'include/footer.php'; ?>

