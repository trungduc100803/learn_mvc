<?php
<<<<<<< HEAD
$services = $data['service'];
?>


<form style="background-image: linear-gradient(to right, #C8E4B2, white);" method="post" class="modals" id="exampleModalsua" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="padding: 100px 400px;">
        <div class="modal-content" style="padding: 20px; background-color: white; border-radius: 10px; box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
            <div class="modal-header">
                <h1 class="modal-title fs-5" style="margin-bottom: 20px; text-align: center; font-size: 40px;" id="exampleModalLabel">Sửa thông tin dịch vụ</h1>
            </div>
            <div class="modal-body">

                <label for="">Tên dịch vụ: </label>
                <input name="txtten" style="margin-top: 6px; margin-bottom: 20px;"  type="text" class="form-control" aria-label="" aria-describedby="basic-addon1">

                <label for="">Số lượng: </label>
                <input name="txtsoluong" style="margin-top: 6px; margin-bottom: 20px;"  type="number" class="form-control" aria-label="" aria-describedby="basic-addon1">

                <label for="">Giá</label>
                <input name="txtgiadv" style="margin-top: 6px; margin-bottom: 20px;"  type="number" class="form-control" aria-label="" aria-describedby="basic-addon1">

            </div>
            <div class="modal-footer">
                <a href="../../../../learn_mvc/QuanLyDichVuForNhanVien" type="submit" class="btn btn-secondary" style="margin-right: 20px;">Quay lại</a>
                <button type="submit" name="btnsuadv" class="btn btn-primary" style="margin-right: 20px;">Sửa</button>
                <button type="submit" name="btnxoa" class="btn btn-primary">Xóa</button>
=======
$service = mysqli_fetch_row($data['service']);

?>


<form method="post" style="display: flex; align-items: center; justify-content: center; height: 100vh;" id="exampleModalsua" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width: 500px; border: 1px solid #ccc; padding: 20px; border-radius: 10px;">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" style="margin-bottom: 40px;" id="exampleModalLabel">Sửa thông tin dịch vụ</h1>
                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
            </div>
            <div class="modal-body">
                <label for="">Tên dịch vụ</label>
                <input name="tendv" style="margin-top: 6px; margin-bottom: 20px;" value="<?php echo $service[1] ?>" type="text" class="form-control" aria-label="" aria-describedby="basic-addon1">

                <label for="">Giá dịch vụ</label>
                <input name="giadv" style="margin-top: 6px; margin-bottom: 20px;" value="<?php echo $service[2] ?>" type="text" class="form-control" aria-label="" aria-describedby="basic-addon1">

            </div>
            <div class="modal-footer" style="margin-top: 40px;">
                <button type="submit" name="dongdv" class="btn btn-secondary" style="margin-right: 20px;" data-bs-dismiss="modal">Đóng</button>
                <button type="submit" name="suadv" class="btn btn-primary">Lưu</button>
>>>>>>> 02b8d5f (push phan dich vu khach hang)
            </div>
        </div>
    </div>
</form>