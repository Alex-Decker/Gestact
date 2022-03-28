<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/AddContact.css">
</head>

<body>

    <div class="col-md-6 mx-auto">
        <h1 class="mt-5">Add a new contacts</h1>
        <form class="mt-5" action="../Controllers/AddContact.controller.php" method="post">
            <div class="mb-3">
                <label for="Name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="input_name">
            </div>
            <div class="mb-3">
                <label for="surname" class="form-label">Surname</label>
                <input type="text" class="form-control" id="prenom" name="input_surname">
            </div>
            <div class="mb-3">
                <label for="surname" class="form-label">Number</label>
                <input type="number" class="form-control" id="number" name="input_number">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 mx-auto">
                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                </div>
                <div class="col-md-3"></div>
            </div>

        </form>
    </div>

</body>

</html>