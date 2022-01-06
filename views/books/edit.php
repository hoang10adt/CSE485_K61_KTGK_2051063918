<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">TLU</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Dropdown
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled">Disabled</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="login.php">Login</a>
                            </li>
                        </ul>

                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--</form>-->
    <main>
    <div class="container">
        <h5 class="text-center text-primary mt-5">Sửa môn học</h5>
        <!-- Form thêm Dữ liệu nhân viên -->
        <form action="" method="post">
            <div class="form-group">
                <label for="txtHoTen">Tên môn học</label>
                <input type="text" class="form-control" id="txtHoTen" name="name" placeholder="Nhập tên môn học">
                <!-- <small id="txtHoTenHelp" class="form-text text-muted">Có thể dùng nó hiển thị thông báo lỗi hoặc gợi ý</small> -->
            </div>
            
            <div class="form-group">
                <label for="sotinchi">Số tín chỉ</label>
                <input type="text" class="form-control" id="sotinchi" name="sotinchi" placeholder="Nhập số tín">
                <!-- <small id="txtHoTenHelp" class="form-text text-muted">Có thể dùng nó hiển thị thông báo lỗi hoặc gợi ý</small> -->
            </div>

            <div class="form-group">
                <label for="sotiet_lt">Số tiết lý thuyết</label>
                <input type="text" class="form-control" id="sotiet_lt" name="sotiet_lt" placeholder="Nhập số tiết lý thuyết">
                <!-- <small id="txtHoTenHelp" class="form-text text-muted">Có thể dùng nó hiển thị thông báo lỗi hoặc gợi ý</small> -->
            </div>
            <div class="form-group">
                <label for="sotiet_bt">Số tiết bài tập</label>
                <input type="text" class="form-control" id=sotiet_bt" name="sotiet_bt" placeholder="Nhập số tiết bài tập">
                
            </div>
            <div class="form-group">
                <label for="sotiet_thtn">Số tiết THTN</label>
                <input type="text" class="form-control" id="sotiet_thtn" name="sotiet_thtn" placeholder="Nhập số tiết THTN">
               
            </div>
            <div class="form-group">
                <label for="sogio_tuhoc">Số giờ tự học</label>
                <input type="text" class="form-control" id="sogio_tuhoc" name="sogio_tuhoc" placeholder="Nhập số giờ tự học">
               
            </div>
           
            <button type="submit" name="submit" value="Save" class="btn btn-primary mt-3">Lưu lại</button>
        </form>
    </div>    
    </main>
    <div style="color: red">
        <?php echo $error; ?>
    </div>
    

</body>