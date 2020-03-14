<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/style.css">
    <title>Data User</title>
</head>

<body>



    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            Welcome
        </a>
    </nav>




    <div class="container">
        <div class="kartu">
            <div class="row">
                <div class="col-md-4">
                    <div class="picture" width="200" height="auto">
                        <img id="picture" class="img-thumbnail" width="235" height="235">
                    </div>
                </div>
                <div class="col-md-8 kertas-biodata">
                    <div class="biodata">
                        <table width="100%" border="0">
                            <tbody>
                                <tr>
                                    <td valign="top">
                                        <table border="0" width="100%" style="padding-left: 2px; padding-right: 13px;">
                                            <tbody>
                                                <tr>
                                                    <td width="25%" valign="top" class="textt">Name</td>
                                                    <td width="3%">:</td>
                                                    <td style="color: black; font-weight:bold" id="firstname"></td>
                                                </tr>
                                                <tr>
                                                    <td class=" textt">Gender</td>
                                                    <td>:</td>
                                                    <td style="color: black; font-weight:bold" id="gender"></td>
                                                </tr>
                                                <tr>
                                                    <td class="textt">Address</td>
                                                    <td>:</td>
                                                    <td style="color: black; font-weight:bold" id="address"></td>
                                                </tr>
                                                <tr>
                                                    <td class=" textt">City</td>
                                                    <td>:</td>
                                                    <td style="color: black; font-weight:bold" id="city"></td>
                                                </tr>
                                                <tr>
                                                    <td class=" textt">State</td>
                                                    <td>:</td>
                                                    <td style="color: black; font-weight:bold" id="state"></td>
                                                </tr>
                                                <tr>
                                                    <td class=" textt">Country</td>
                                                    <td>:</td>
                                                    <td style="color: black; font-weight:bold" id="country"></td>
                                                </tr>
                                                <tr>
                                                    <td class=" textt">Postcode</td>
                                                    <td>:</td>
                                                    <td style="color: black; font-weight:bold" id="postcode"></td>
                                                </tr>
                                                <tr>
                                                    <td class="textt">Email</td>
                                                    <td>:</td>
                                                    <td style="color: black; font-weight:bold" id="email"></td>
                                                </tr>
                                                <tr>
                                                    <td class="textt" style="margin-top: 10px">DOB</td>
                                                    <td>:</td>
                                                    <td style="color: black; font-weight:bold" id="dob2">
                                                        <h5 style="color: black; font-weight:bold" id="dob"><br>-Date :
                                                        </h5>-Age :
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td valign="top" class="textt">Phone</td>
                                                    <td valign="top">:</td>
                                                    <td style="color: black; font-weight:bold" id="phone"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- <h6 id="title"></h6> -->
    <!-- <h6 id="firstname"></h6> -->
    <!-- <h6 id="lastname"></h6> -->
    <!-- <h6 id="gender"></h6> -->
    <!-- <img url="picture" alt=""> -->
    <!-- <h6 id="address"></h6> -->
    <!-- <h6 id="city"></h6>
    <h6 id="state"></h6>
    <h6 id="country"></h6>
    <h6 id="postcode"></h6> -->
    <!-- <h6 id="email"></h6> -->
    <!-- <h6 id="dob"></h6> -->
    <!-- <h6 id="dob2"></h6> -->
    <!-- <h6 id="phone"></h6> -->


    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script>
        $.ajax({
            type: 'GET',
            url: 'https://randomuser.me/api/',
            dataType: 'json',
            success: function(respon) {
                // console.log(respon)
                // var a = respon.results[0].name.title;
                // console.log(respon.results[0].name.first)
                $("#title").append(respon.results[0].name.title);
                $("#firstname").append(respon.results[0].name.first);
                $("#lastname").append(respon.results[0].name.last);
                $("#gender").append(respon.results[0].gender);
                $("#picture2").append(respon.results[0].picture.thumbnail);
                $("#address").append(respon.results[0].location.street.name);
                $("#city").append(respon.results[0].location.city);
                $("#state").append(respon.results[0].location.state);
                $("#country").append(respon.results[0].location.country);
                $("#postcode").append(respon.results[0].location.postcode);
                $("#email").append(respon.results[0].email);
                $("#dob").append(respon.results[0].dob.date);
                $("#dob2").append(respon.results[0].dob.age);
                $("#phone").append(respon.results[0].phone);
                $('#picture').attr('src', respon.results[0].picture.large);
                $('#picture2').attr('src', respon.results[0].picture.thumbnail);
            }
        });
    </script>

    <script src="js/bootstrap.min.js"></script>
</body>

</html>