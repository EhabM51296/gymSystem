<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym System</title>
</head>
<body>
    <div class="form-container">
        <form method="post" action="./coachForm.php" enctype="multipart/form-data">
            <div>
                <input type="text" placeholder="First Name" name="c-fn">
            </div>
            <div>
                <input type="text" placeholder="Last Name" name="c-ln">
            </div>
            <div>
                <select name="gender">
                    <option value="0">Select gender</option>
                    <option value="1">Male</option>
                    <option value="2">Female</option>
                </select>
            </div>
            <div>
                <input type="file" name="c-image" id="c-image">
            </div>
            <div>
                <input type="file" name="c-certif" multi/>
            </div>
            <div>
                <button type="submit" name="c-submit">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>