		<h6 class="text-center">Thêm Sinh viên Mới</h6>
<table class="table table-hover text-center ">
	<form action="quanlysinhvien/xuly.php" method="get" accept-charset="utf-8">
		<thead>
			<tr>
				<th>Mã SV</th><th>Họ Tên</th><th>Ngày Sinh</th><th>Giới Tính</th><th>Địa Chỉ</th><th>SĐT</th><th>Mật Khẩu</th><th>#</th>
			</tr>
		</thead>
		<tbody>
	
				
				<tr>
					<td><input class="form-control form-control-sm" type="text"  name="masv" ></td>
					<td><input  class="form-control form-control-sm" type="text" name="ten" ></td>
					<td><input  class="form-control form-control-sm" type="date" name="ns" ></td>
					<td>
						<select name="gt" id="cars" class="form-control form-control-sm">
   							<option value="Nam">Nam</option>
    						<option value="Nữ">Nữ</option>
						</select>
					</td>
					<td><input  class="form-control form-control-sm" type="text" name="dc" ></td>
					<td><input  class="form-control form-control-sm" type="text" name="sdt" ></td>
					<td><input  class="form-control form-control-sm" type="text" name="mk" ></td>
					<td><input  class="btn-sm btn-success btn" type="submit" name="action" value="them"></td>
				</tr>	
		</tbody>
</table>
</form>	<br><hr>