<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mt-4">
                <form method="GET" action="output.php">
                    <div class="form-group row">
                        <label for="title" class="col-4 col-form-label">Title :</label>
                        <div class="col-8">
                            <input id="title" name="title" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tahun" class="col-4 col-form-label">Tahun Rilis :</label>
                        <div class="col-8">
                            <input id="tahun" name="tahun" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="genre" class="col-4 col-form-label">Genre :</label>
                        <div class="col-8">
                            <input id="genre" name="genre" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Rating :</label>
                        <div class="col-8">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="rating" id="rating_0" type="radio" class="custom-control-input" value="E">
                                <label for="rating_0" class="custom-control-label">Everyone</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="rating" id="rating_1" type="radio" class="custom-control-input" value="T">
                                <label for="rating_1" class="custom-control-label">Teen</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="rating" id="rating_2" type="radio" class="custom-control-input" value="M">
                                <label for="rating_2" class="custom-control-label">Mature</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>