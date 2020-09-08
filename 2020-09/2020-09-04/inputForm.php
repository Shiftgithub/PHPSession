<!doctype html>
<html lang="en">

<head>
    <title>Information Form</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        
        <div class="card">
            <div class="card-header">
                Information Form
            </div>

            <form action="outputForm.php" method="post">
                <div class="card-body">
                    <!-- Student Id -->
                    <div class="form-group">
                        <label class="col-md-3" for="id">Student Id:</label>
                        <input type="text" name="id" id="id" class="form-control col-md-9" placeholder="ex: stuxxxxx" aria-describedby="helpId" minlength="8" maxlength="8" size="8">
                        <small id="helpId" class="text-muted<?= empty($idColor) ? "" : $idcolor ?>"><?= empty($idAlert) ? "" : $alert ?></small>
                    </div>
                    <!-- Student Name -->
                    <div class="form-group">
                        <label class="col-md-3" for="name">Student Name:</label>
                        <input type="text" name="name" id="name" class="form-control col-md-9" placeholder="ex: student name" aria-describedby="helpId" minlength="3" maxlength="50" size="50">
                        <small id="helpId" class="text-muted<?= empty($nameColor) ? "" : $nameColor ?>"><?= empty($nameAlert) ? "" : $nameAlert ?></small>
                    </div>
                    <!-- Email -->
                    <div class="form-group">
                        <label class="col-md-3" for="email">Email:</label>
                        <input type="text" name="email" id="email" class="form-control col-md-9" placeholder="ex: xyz@mail.com" aria-describedby="helpId" minlength="7" maxlength="50" size="50">
                        <small id="helpId" class="text-muted<?= empty($emailColor) ? "" : $emailColor ?>"><?= empty($emailAlert) ? "" : $emailAlert ?></small>
                    </div>
                    <!-- Contact Number -->
                    <div class="form-group">
                        <label class="col-md-3" for="num">Contact Number:</label>
                        <input type="text" name="num" id="num" class="form-control col-md-9" placeholder="ex: 019XXXXXXXX" aria-describedby="helpId" minlength="11" maxlength="14" size="14">
                        <small id="helpId" class="text-muted<?= empty($numColor) ? "" : $numColor ?>"><?= empty($numAlert) ? "" : $numAlert ?></small>
                    </div>
                    <!-- Address -->
                    <div class="form-group">
                        <label class="col-md-3" for="address">Address:</label>
                        <input type="text" name="add" id="add" class="form-control col-md-9" placeholder="ex: student present address" aria-describedby="helpId" minlength="3" maxlength="50" size="50">
                        <small id="helpId" class="text-muted<?= empty($addColor) ? "" : $addColor ?>"><?= empty($addAlert) ? "" : $addAlert ?></small>
                    </div>
                </div>
                <div class="card-footer text-muted">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <br>
    <br>
    <hr>
    <br>
    <br>
    <div class="container">
        <div class="card">
            <div class="card-header">
                Find Student Information:
            </div>
            <div class="card-body">
                <form action="outputForm.php" method="get">
                    <div class="form-group">
                        <input type="text" name="studid" id="studid" class="form-control col-md-9" placeholder="ex: stuxxxxx" aria-describedby="helpId"
                         maxlength="8" minlength="8" size="8">
                        <small id="helpId" class="text-muted <?= empty($studIdColor) ? "" : $studIdColor ?>"><?= empty($studIdAlert) ? "" : $studIdAlert ?></small>
                    </div>
                    <button type="submit" class="btn btn-primary">Display</button>
                </form>
            </div>
        </div>


    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>