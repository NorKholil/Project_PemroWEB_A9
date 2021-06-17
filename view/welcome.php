<?php
session_start(); 

if( ! isset($_SESSION['login'])){ // Jika tidak ada session username berarti dia belum login
  header("location: v_login.php"); // Kita Redirect ke halaman index.php karena belum login
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate</title>
    <link rel="stylesheet" href="../assets/css/welcome.css">
    <link rel="stylesheet" href="responsive.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>

<body>
    <header>
        <div class="container">
            <div class="header-left">
                <img class="logo" src="../assets/images/logo.png">
            </div>
            <div class="header-right">
                <a href="../index.php" class="nav">Home</a>
                <a href="v_palestina.php" class="nav">Hot News</a>
                <a href="v_aboutUs.php" class="nav">About Us</a>
            </div>
        </div>
    </header>
    <div class="lesson-wrapper">

        <div class="container">

            <div class="heading">
                <div class="parent1">
                    <div class="parent2">
                        <h1>Hello, "<?php echo $_SESSION['username']; ?>"</h1>
                        <h4>Congrats!!! Login Successfully</h4>
                    </div>
                </div>

                <h3 class="donate">Donate To This Number</h3>
                <br><br><br>

                <div class="content">
                    <img src="../assets/images/atm.png" alt="atm">
                </div>

                <div class="info">

                    <div class="nominal">
                        <p>$769</p>
                    </div>

                    <div class="total">
                        <p>Total impact</p>
                        <svg class="i" xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                            <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
                        </svg>
                    </div>

                    <div class="w3-light-white w3-round-xlarge">
                        <div class="w3-container w3-round-xlarge" style="width:25%">25%</div>
                    </div>

                    <div class="monthly">
                        <p>monthly supporters</p>
                    </div>

                    <button id="myBtn" class="share">
                        <a class="tshare">Share</a>
                    </button>

                    <!-- The Modal -->
                    <div id="myModal" class="modal">

                        <!-- Modal content -->
                        <div class="modal-content">
                            <span class="close">&times;</span>
                            <center>
                                <p id="p1">http://localhost/Praktikum/UAS/A9-C1/view/v_palestina.php</p>
                                <br>
                                <button class="tombol" onclick="copyToClipboard('#p1')">Copy Link</button>
                            </center>
                        </div>

                    </div>

                </div>

                <label for="bukti">Proof Payment</label>
                <div class="input">
                    <form action="upload.php" method="post" enctype="multipart/form-data">
                        Select image to upload:
                        <input class="btn" type="file" name="fileToUpload" id="fileToUpload">
                        <input type="submit" value="Upload Image" name="submit">
                    </form>
                </div>

            </div>

        </div>

    </div>
    <div class="message-wrapper">
        <div class="container">
            <a href="../controller/c_logout.php"><span class="btn message">Log Out</span></a>
        </div>
    </div>
    <footer>
        <div class="container">
            <p>Copyright@Kholil-Fahreza</p>
        </div>
    </footer>

    <script>
        // Get the modal
        var modal = document.getElementById("myModal");
        
        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");
        
        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];
        
        // When the user clicks the button, open the modal 
        btn.onclick = function() {
        modal.style.display = "block";
        }
        
        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
        modal.style.display = "none";
        }
        
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
        }

        function copyToClipboard(element) {
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($(element).text()).select();
        document.execCommand("copy");
        $temp.remove();
        }

        </script>
</body>

</html>
