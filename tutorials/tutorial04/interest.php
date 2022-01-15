<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-5">
                <div class="card mt-5">
                    <div class="card-header text-center">
                        <h3> Interest Calculator</h3>
                    </div>
                    <div class="card-body">
                        <form action="result_interest.php" method="post">

                            <div class="col">
                                <input type="number" class="form-control" placeholder="P:" name="p" aria-describedby="">
                            </div>
                            <div class="col">
                                <input type="number" class="form-control"  name="r" placeholder="R:" aria-describedby="">
                            </div>
                            <div class="col">
                                <input type="number" class="form-control"  name="n" placeholder="N:" aria-describedby="">
                            </div>

                            <div class="row justify-content-center">
                                <div class="col-4 mt-2">
                                    <button type="submit" class="btn btn-primary" name="calculate" id="calculate">Calculate</button>

                                </div>
                                <p id="ans"></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

</body>

</html>
