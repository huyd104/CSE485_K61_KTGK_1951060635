<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <header>
        <div class="container">
        
        </div>
    </header>
    <main>
    <div class="container">
        <h5 class="text-center text-primary mt-5">Danh sách độc giả</h5>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Mã đọc giả</th>
                    <th scope="col">Họ và tên</th>
                    <th scope="col">Giới tính</th>
                    <th scope="col">Năm sinh</th>
                    <th scope="col">Nghề nghiệp</th>
                    <th scope="col">Ngày cấp thẻ</th>
                    <th scope="col">Ngày hết hạn</th>
                    <th scope="col">Địa chỉ</th>
                </tr>
            </thead>
            <tbody>
               
                <?php
                   
                    $conn = mysqli_connect('localhost','root','','db_docgia');
                    if(!$conn){
                        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
                    }
                  
                    $sql = "SELECT * FROM tb_docgia";
                    $result = mysqli_query($conn,$sql);
                    
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                ?>
                            <tr>
                                <th scope="row"><?php echo $row['madg']; ?></th>
                                
                                <td><?php echo $row['hovaten']; ?></td>
                                <td><?php echo $row['gioitinh']; ?></td>
                                <td><?php echo $row['namsinh']; ?></td>
                                <td><?php echo $row['nghenghiep']; ?></td>
                                <td><?php echo $row['ngaycapthe']; ?></td>
                                <td><?php echo $row['ngayhethan']; ?></td>
                                <td><?php echo $row['diachi']; ?></td>
                            </tr>
                <?php
                        }
                    }
                ?>
                
                
            </tbody>
            </table>
            <div class="row">
                <div class="col-lg3">
                    <h3>Thêm độc giả</h3>
                    <input type = text>
                    <button class="btnadd">Thêm</button>

                    <h3>Sửa độc giả theo mã độc giả</h3>
                    <input type = text>
                    <button class="btnadd">Thêm</button>

                    <h3>Xoá độc giả theo mã độc giả</h3>
                    <input type = text>
                    <button class="btnadd">Thêm</button>
                </div>
                
            
            </div>
    </div>    
    </main>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>