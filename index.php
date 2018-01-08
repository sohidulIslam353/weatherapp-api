<!DOCTYPE html>
<html>
    <head>
        <title>Weather-App</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/uikit.min.css" />
        <script src="js/uikit.min.js"></script>
        <script src="js/uikit-icons.min.js"></script>
    </head>
    <body>

<div class="uk-text-center" uk-grid>
    <div class="uk-width-expand ">
        <div class="uk-card uk-card-primary uk-card-body">
            <div class="uk-section uk-section-primary">
                <div class="uk-card uk-card-primary "><a href="index.php" uk-icon="icon:soundcloud; ratio: 6" ></a> <br/>
            <span style="color: white; font-family:cursive;">Weather App</span></div>
                <h4>Welcome To Your Town</h4><hr class="uk-divider-icon">
                <div class="uk-container uk-container-small">
                    <form method="GET" action="get.php">
                        <div class="uk-margin">
                            <div class="uk-inline">
                                <span class="uk-form-icon" style="color: white;" uk-icon="icon: soundcloud"></span>
                                <input class="uk-input" type="text" placeholder="Write your city" name="city" required="" autocomplete="off">
                            </div>
                        </div>
                        <div class="uk-margin">
                            <div class="uk-inline">
                                <span class="uk-form-icon " style="color: white;" uk-icon="icon: world"></span>
                                <input class="uk-input" type="text" placeholder="Write your country" name="country" required="" autocomplete="off">
                            </div>
                         </div>
                         <div class="uk-margin">
                            <div class="uk-inline">
                                <input class="uk-button uk-button-danger" type="submit" name="submit">
                            </div>
                         </div>
                         
                    </form>
                      <p>created by: Sohidul islam</p>
                </div>
            </div>
        </div>
    </div>

</div>

    </body>
</html>