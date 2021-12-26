<div class="panel-noidung">
	<?php
		include("KetNoi.php");
        $id = $_GET['IDcv'];
		$sql="select * from congviec where IDcv='$id'";
		$result=mysqli_query($conn,$sql);
		$view=mysqli_fetch_assoc($result);
	?>
	<h2 style="padding:5px;"><?php echo $view['tencv']?></h2>
</br>
	<?php echo $view['quymo']?>
	<hr />
	<table width="100%">
		<tr>
			<td width="20%" class="tieude">Số lượng</td>
			<td><?php echo $view['soluong']?></td>
		</tr>
		<tr>
			<td class="tieude">Giới tính: </td>
			<td><?php echo $view['tengt']?></td>
		</tr>
		<tr>
			<td class="tieude">Ngành Nghề: </td>
			<td><?php echo($view['tennn'])?></td>
		</tr>
		<tr>
			<td class="tieude">TP/Tỉnh: </td>
			<td>
				<?php city($view['id_tp'])?>
			</td>
		</tr>
		<tr>
			<td class="tieude">Mô tả: </td>
			<td><?=$view['Mo_ta']?></td>
		</tr>
		<tr>
			<td class="tieude">Kỹ Năng: </td>
			<td><?=$view['ky_nang']?></td>
		</tr>
		<tr>
			<td class="tieude">Trình đồ: </td>
			<td><?php trinhdo($view['id_trinhdo'])?></td>
		</tr>
		<tr>
			<td class="tieude">Kinh nghiệm: </td>
			<td><?php kinh_nghiem($view['id_kinhnghiem'])?></td>
		</tr>
		<tr>
			<td class="tieude">Lương: </td>
			<td><?php mucluong($view['id_luong'])?></td>
		</tr>
		<tr>
			<td class="tieude">Hình thức làm việc: </td>
			<td><?php hinhthuc($view['id_hinhthuc'])?></td>
		</tr>
		<tr>
			<td class="tieude">Thời gian thử việc: </td>
			<td><?=$view['Thoi_gian_thu_viec']?></td>
		</tr>
		<tr>
			<td class="tieude">Chế độ khác: </td>
			<td><?=$view['Che_do_khac']?></td>
		</tr>
		<tr>
			<td class="tieude">Hồ sơ yêu cầu: </td>
			<td><?=$view['Ho_so']?></td>
		</tr>
		<tr>
			<td class="tieude">Hạn nộp: </td>
			<td><?=date('d-m-Y',strtotime($view['Han_Nop']))?></td>
		</tr>
	</table>
</div>
<div class="panel-noidung">
	<?=$view['Lien_he']?>
</div>