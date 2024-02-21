<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registered</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        h4{
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                <form>
                    <h4>Create Student</h4>
                    <div class="row">
                        <div class="col-lg-4 mb-3">
                            <label for="name" class="form-label" required>First Name</label>
                            <input type="text" class="form-control" id="name">
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="lname" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="lname">
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="fname" class="form-label">Father Name</label>
                            <input type="text" class="form-control" id="fname">
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="mname" class="form-label">Mother Name</label>
                            <input type="text" class="form-control" id="mname">
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="dob" class="form-label">Date of Birth</label>
                            <input type="date" class="form-control" id="fname" name="dob">
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="sid" class="form-label">School Id</label>
                            <input type="text" class="form-control" id="sid" name="sid">
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="aid" class="form-label">Adhar Id</label>
                            <input type="number" class="form-control" id="aid" name="aid">
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="mobile" class="form-label">Mobile </label>
                            <input type="number" class="form-control" id="mobile" name="mobile">
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="ssfrom" class="form-label">Session Start From</label>
                            <input type="text" class="form-control" id="aid" name="ssfrom">
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="aclass" class="form-label">Admission Class </label>
                            <input type="text" class="form-control" id="aclass" name="aclass">
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="aid" class="form-label">Initial Payment</label>
                            <input type="number" class="form-control" id="aid" name="aid">
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label for="aid" class="form-label">Vehical : </label>
                            <div class="form-check  form-check-inline">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                <label class="form-check-label" for="exampleRadios1">
                                    Yes
                                </label>
                            </div>
                            <div class="form-check  form-check-inline">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                <label class="form-check-label" for="exampleRadios2">
                                    No
                                </label>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>