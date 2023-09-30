<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Progress Bar</title>
    <link rel="stylesheet" href="progressbar.css">

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>

<body>
    <div class="home-section">
        <div class="progress_main">

            <div class="progress_head">
                <p class="progress_head_1">Order <span> Status</span></p>
            </div>

            <ul>
                <li>
                    <i class="icon uil uil-capture"></i>
                    <div class="progress one">
                    </div>
                    <p class="progress_text">Order Placed</p>
                </li>
                <li>
                    <i class="icon uil uil-exchange"></i>
                    <div class="progress two">
                    </div>
                    <p class="progress_text">Order Preparing</p>
                </li>
                <li>
                    <i class="icon uil uil-clipboard-notes"></i>
                    <div class="progress three">
                    </div>
                    <p class="progress_text">Order Dispatch</p>
                </li>
                <li>
                    <i class="icon uil uil-map-marker"></i>
                    <div class="progress four">
                    </div>
                    <p class="progress_text">Order Delivered</p>
                </li>
            </ul>
            <form action="complaint.php">
                <br><br><br>
                <button type="submit" class="process_btn">Complaint</button>
            </form>

        </div>

        <script src="progressbar.js"></script>
    </div>
</body>

</html>