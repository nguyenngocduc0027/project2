 <div class="col-sm-12  m-auto">
        <div class="card card-signin my-5">
          <div class="card-body">

           <form class="col-md-12 m-auto" action="quanlyphong/xuly.php" method="GET">
              <div class="form-row">
                 <div class="form-group col-sm-3">
                    <label for="myEmail">Mã Phòng</label>
                    <input type="text" class="form-control" name="mp">
                   
                 </div>
                 <div class="form-group col-sm-3">
                    <label for="myPassword">Mã Khu</label>
                    <select class="form-control" name="mk" ><?php  $s="select * from khu";$rs1=mysqli_query($conn,$s);
                    		while ($kq=mysqli_fetch_array($rs1)) { ?>
                    			<option value="<?php  echo $kq['MaKhu']; ?>"> <?php echo $kq['MaKhu'].' ('.$kq['Sex'].')'; ?></option>
                    <?php	}

                    ?>
                    	
                    </select>
                 </div>
                 <div class="form-group col-sm-3">
                    <label for="phong">Sô Người Tối Đa</label>
                    <input type="text" class="form-control"  name="sntd" >
                   
                 </div>
                 <div class="form-group col-sm-3">
                    <label for="phong">Giá</label>
                    <input type="text" class="form-control"  name="gia">
                   
                 </div>
              </div><hr>
   
              <button type="sub" name="action" value="them" class="btn btn-lg btn-primary btn-block text-uppercase col-3 m-auto">Thêm</button>
           </form></div>
         </div>
       </div>