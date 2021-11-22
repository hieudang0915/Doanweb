<?php include "../layout/navbar.php"; ?>
    <?php include "../layout/sidebar.php"; ?>

      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
                  <div class="row">
                  <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Thêm danh mục</h4>
                  <form class="forms-sample" action="taonguoidung.php" method="POST">
                    <div class="form-group">
                      <label for="inputUser">ID Danh Mục</label>
                      <input type="text" name="user" class="form-control" id="inputUser" placeholder="Nhập ID Danh mục">
                    </div>
                    <div class="form-group">
                      <label for="inputName">Tên Danh Mục</label>
                      <input type="text" name="name" class="form-control" id="inputName" placeholder="Nhập tên danh mục">
                    </div>
                   

                    
                    <button type="button" class="btn btn-primary me-2 text-light">Thêm</button>
                   
                  </form>
                </div>
              </div>
            </div>
                
         
          </div>
        </div>
      
      </div>

  
      <?php include "../layout/footer.php"; ?>
