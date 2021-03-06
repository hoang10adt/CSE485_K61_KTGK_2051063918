<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <header>
        <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">TLU</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
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
    <main>
    <div class="container">
        <h5 class="text-center text-primary mt-5">DANH S??CH M??N H???C</h5>
        <div>
               <a class="btn btn-primary" href="index.php?controller=book&action=add">Th??m</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">M?? m??n h???c</th>
                    <th scope="col">T??n m??n h???c</th>
                    <th scope="col">S??? t??n ch???</th>
                    <th scope="col">S??? ti???t l?? thuy???t</th>
                    <th scope="col">S??? ti???t b??i t???p</th>
                    <th scope="col">S??? ti???t THTN</th>
                    <th scope="col">S??? gi??? t??? h???c</th>
                    <th scope="col"></th>

                </tr>
            </thead>
            <tbody>
            <?php if (!empty($books)): ?>
        <?php foreach ($books AS $book) : ?>
            <tr>
                <td><?php echo $book['mamh'] ?></td>
                <td><?php echo $book['ten_mh'] ?></td>
                <td><?php echo $book['sotinchi'] ?></td>
                <td><?php echo $book['sotiet_lt'] ?></td>
                <td><?php echo $book['sotiet_bt'] ?></td>
                <td><?php echo $book['sotiet_thtn'] ?></td>
                <td><?php echo $book['sogio_tuhoc'] ?></td>
                <td>
                    <?php
                    //khai b??o 3 url xem, s???a, x??a
                    $urlDetail =
                        "index.php?controller=book&action=detail&id=" . $book['mamh'];
                    $urlEdit =
                        "index.php?controller=book&action=edit&id=" . $book['mamh'];
                    $urlDelete =
                        "index.php?controller=book&action=delete&id=" . $book['mamh'];
                    ?>
                    <a href="<?php echo $urlDetail?>">Chi ti???t</a> &nbsp;
                    <a href="<?php echo $urlEdit?>">Edit</a> &nbsp;
                    <a onclick="return confirm('B???n ch???c ch???n mu???n x??a?')"
                       href="<?php echo $urlDelete?>">
                        X??a
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="2">KH??ng c?? d??? li???u</td>
        </tr>
    <?php endif; ?>
            </tbody>
            </table>
    </div>    
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>