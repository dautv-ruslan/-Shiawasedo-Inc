<?php 
    include "deliveryAddressForm.php";
    $form = $_POST['country'] ?? "";
    date_default_timezone_set('UTC');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hello World</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    </head>
    <body>
        <center>
            <h3>Choose your country</h3>
            <form method="POST">
                <label for="all"> &nbsp; <input id="all" type="radio" name="country" value="all" <?= $form == "all" ? "checked" : "" ?> /> All countries</label>
                <label for="mos"> &nbsp; <input id="mos" type="radio" name="country" value="MOS" <?= $form == "MOS" ? "checked" : "" ?> /> Moscow</label>
                <label for="jap"> &nbsp; <input id="jap" type="radio" name="country" value="JAP" <?= $form == "JAP" ? "checked" : "" ?> /> Japan</label>
                &nbsp; <input type="submit" name="submit" value="OK"/>
            </form>
        </center>
        <?php 

            $delivery = new deliveryAddressForm();

            $delivery->getForm($form);
        ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("input#zipcode").change(function() {
                let zipcode = $("input#zipcode").val();
                if (zipcode != "" && zipcode.length >= 7) {
                    $.ajax({
                        url: "zip.phar.php/search/" + zipcode,
                        type: 'GET',
                        dataType: 'json', // added data type
                        success: function(json) {
                            console.log(json)
                        },
                        error: function (request, status, error) {
                            let response = request.responseText;
                            let firstIndex = response.indexOf("{");
                            let lastIndex = response.lastIndexOf("}");
                            let jsonResponse = response.substring(firstIndex, lastIndex + 1);
                            let jsonParse = JSON.parse(jsonResponse);
                            $("input#prefecture").val(jsonParse.data.pref);
                            $("input#address").val(jsonParse.data.city + ", " + jsonParse.data.town);
                            console.log(error);
                        }
                    });
                }
            });
        });
    </script>
    </body>
</html>