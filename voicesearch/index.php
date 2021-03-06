<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Voice Search</title>
</head>
<body>
<div class="wrap">
    <h1>
        Voice Search
    </h1>
    <form id="search-form" method="post">

        <fieldset>
            <!-- standard input field, like any other search -->
            <input type="text" placeholder="Search me..." name="voice-search" id="search-input"/>

            <!-- SVG icon to act as a trigger for our voice search -->
            <span id="voice-trigger">
                <svg width="20px" height="20px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 58 58" style="enable-background:new 0 0 58 58;" xml:space="preserve">
                    <g>
                        <path d="M44,28c-0.552,0-1,0.447-1,1v6c0,7.72-6.28,14-14,14s-14-6.28-14-14v-6c0-0.553-0.448-1-1-1s-1,0.447-1,1v6   c0,8.485,6.644,15.429,15,15.949V56h-5c-0.552,0-1,0.447-1,1s0.448,1,1,1h12c0.552,0,1-0.447,1-1s-0.448-1-1-1h-5v-5.051   c8.356-0.52,15-7.465,15-15.949v-6C45,28.447,44.552,28,44,28z"/>
                        <path d="M29,46c6.065,0,11-4.935,11-11V11c0-6.065-4.935-11-11-11S18,4.935,18,11v24C18,41.065,22.935,46,29,46z M20,11   c0-4.963,4.038-9,9-9s9,4.037,9,9v24c0,4.963-4.038,9-9,9s-9-4.037-9-9V11z"/>
                    </g>
                </svg>
            </span>
        </fieldset>

        <input type="submit" value="submit"/>
    </form>

    <!-- a simple output to show what we searched for -->
    <?php
    if(!empty($_POST)){
        ?>
        <h3>Result</h3>
        <div id="result">
            <?php echo 'You searched for: '.$_POST['voice-search']; ?>
        </div>
        <?php
    }
    ?>
</div>

</body>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,600,700" media="all">
<link rel="stylesheet" href="style.css" media="all">
<script
        src="http://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
<script
        src="main.js?v=4"></script>


</html>