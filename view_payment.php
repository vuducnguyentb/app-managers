<?php include 'db_connect.php' ?>

<?php 
$tenants =$conn->query("SELECT t.*,concat(t.lastname,', ',t.firstname,' ',t.middlename) as name,h.house_no,h.price FROM tenants t inner join houses h on h.id = t.house_id where t.id = {$_GET['id']} ");
foreach($tenants->fetch_array() as $k => $v){
	if(!is_numeric($k)){
		$$k = $v;
	}
}
$months = abs(strtotime(date('Y-m-d')." 23:59:59") - strtotime($date_in." 23:59:59"));
$months = floor(($months) / (30*60*60*24));
$payable = $price * $months;
$paid = $conn->query("SELECT SUM(amount) as paid FROM payments where tenant_id =".$_GET['id']);
$last_payment = $conn->query("SELECT * FROM payments where tenant_id =".$_GET['id']." order by unix_timestamp(date_created) desc limit 1");
$paid = $paid->num_rows > 0 ? $paid->fetch_array()['paid'] : 0;
$last_payment = $last_payment->num_rows > 0 ? date("M d, Y",strtotime($last_payment->fetch_array()['date_created'])) : 'N/A';
$outstanding = $payable - $paid;

?>
<div class="container-fluid">
	<div class="col-lg-12">
		<div class="row">
			<div class="col-md-4">
				<div id="details">
					<large><b>Thông Tin Chi Tiết</b></large>
					<hr>
					<p>Người Thuê Trọ: <b><?php echo ucwords($name) ?></b></p>
					<p>Giá Phòng/Tháng: <b><?php echo number_format($price,2) ?></b></p>
					<p>Dư Nợ: <b><?php echo number_format($outstanding,2) ?></b></p>
					<p>Tổng tiền Phải Trả: <b><?php echo number_format($paid,2) ?></b></p>
					<p>Ngày Bắt Đầu Thuê: <b><?php echo date("M d, Y",strtotime($date_in)) ?></b></p>
					<p>Tháng Phải Trả: <b><?php echo $months ?></b></p>
				</div>
			</div>
			<div class="col-md-8">
				<large><b>Danh Sách Hóa Đơn</b></large>
					<hr>
				<table class="table table-condensed table-striped">
					<thead>
						<tr>
							<th>Ngày</th>
							<th>Hóa Đơn</th>
							<th>Số Tiền Phải Trả</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						$payments = $conn->query("SELECT * FROM payments where tenant_id = $id");
						if($payments->num_rows > 0):
						while($row=$payments->fetch_assoc()):
						?>
					<tr>
						<td><?php echo date("M d, Y",strtotime($row['date_created'])) ?></td>
						<td><?php echo $row['invoice'] ?></td>
						<td class='text-right'><?php echo number_format($row['amount'],2) ?></td>
					</tr>
					<?php endwhile; ?>
					<?php else: ?>
					<?php endif; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<style>
	#details p {
		margin: unset;
		padding: unset;
		line-height: 1.3em;
	}
	td, th{
		padding: 3px !important;
	}
</style>