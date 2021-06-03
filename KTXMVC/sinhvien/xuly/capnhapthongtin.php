  <?php 
   
    if(isset($_POST['sv_capnhaptt'])){
        $masv=$_POST['masv'] ;
        $ht=$_POST['name'];
        $ns=$_POST['ns'];
        $dc=$_POST['dc'];
        $sdt=$_POST['sdt'];
        $sql="UPDATE `sinhvien` SET HoTen='$ht',NgaySinh='$ns',DiaChi='$dc',SDT=$sdt where MaSV=$masv";
        $rs=mysqli_query($conn,$sql);
          if($rs){
            header('location:../index.php?action=capnhapthongtin&tb=ok');

          }else{
            header('location:index.php?action=capnhapthongtin&tb=loi');
           }
        
      }
  ?>