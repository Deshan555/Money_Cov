<!DOCTYPE html>

<html lang="en">

<head>

    <title>Money Converter</title>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>

<div class="container mt-3">

    <h2>Money Converter</h2>

    <form method="post" action="client.php">

        <div class="mb-3 mt-3">

            <label for="email">Money Amount:</label>

            <input type="number" class="form-control" id="email" placeholder="Money Amount" name="amount_money" required>

            <label for="sel1" class="form-label">Source Currency :</label>

            <select class="form-select" id="select_1" name="source_currency">
                <option value="AED">AED</option>
                <option value="AFN">AFN</option>
                <option value="ALL">ALL</option>
                <option value="USD">USD</option>
                <option value="LKR">LKR</option>
            </select>

        </div>

        <div class="mb-3">

            <label for="sel1" class="form-label">Target Currency :</label>

            <select class="form-select" id="select_2" name="target_currency">
                <option value="AED">AED</option>
                <option value="AFN">AFN</option>
                <option value="ALL">ALL</option>
                <option value="USD">USD</option>
                <option value="LKR">LKR</option>
            </select><br>

            <?php if(isset($_GET['message'])){ ?>

                <div class="alert alert-primary" role="alert"><b><?php echo $_GET['message'];?></b></div>

            <?php }?>


        </div>

        <button type="submit" class="btn btn-primary btn-sm" name="submit">Convert</button>

        <button type="submit" class="btn btn-secondary btn-sm" onclick="location.reload()">Reload</button>

    </form>

</div>

</body>

</html>