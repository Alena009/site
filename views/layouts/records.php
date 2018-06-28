  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row">              
        <?php for($i = 0; $i < $this->countRecordsOnMainPage; $i++): ?>  
            <div class="media">
              <img class="mr-3" src=".../64x64" alt="Generic placeholder image">
              <div class="media-body">
                <h5 class="mt-0">Медиа заголовок</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
              </div>
            </div>
        <?php endfor; ?>               
      </div>
    </div>
  </div>