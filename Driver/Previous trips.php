<!DOCTYPE html>
<html>
<head>
<!--"Linking to Bootstrap"-->

        <link rel="stylesheet" type="text/css" href="css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Map & Find Passenger</title>
</head>

 <style type="text/css">
    
       body{background-image:url("TaxiImg.jpg");background-repeat: no-repeat, repeat;background-size:cover;}
</style>
<body>

 <!--"Heading"-->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
                <div href="#" class="text-secondary d-flex align-items-center justify-content-center justify-content-lg-start">
                    <h1>CITY TAXI</h1>
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse container" id="navbarSupportedContent">
                <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 fs-4">

                    <!--"Headder Tabs"-->

                   <li>
                        <a href="Map&FindPassenger.html" class="nav-link text-white">
                            <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                                <use xlink:href="#grid"></use>
                            </svg>
                            Map &amp; Find Passenger
                        </a>
                    </li>
                    <li>
                        <a href="PendingRequest.html" class="nav-link text-white">
                            <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                                <use xlink:href="#table"></use>
                            </svg>
                            Pending Request
                        </a>
                    </li>
                    <li>
                        <a href="PreviousTrips.html" class="nav-link text-white">
                            <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                                <use xlink:href="#credit-card"></use>
                            </svg>
                            Previous trips 
                        </a>
                    </li>
                    <li>
                        <a href="PaymentStatus.html" class="nav-link text-white">
                            <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                                <use xlink:href="#stopwatch"></use>
                            </svg>
                            Payment Status
                        </a>
                    </li>

                    <li>
                        <a href="UpdatePayment.html" class="nav-link text-white">
                            <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                                <use xlink:href="#stopwatch"></use>
                            </svg>
                            Update Payment
                        </a>
                    </li>
                    
                    <li>                        
                            <a href="Rating.html" class="nav-link text-white" onclick="adminclick('/adminView')">
                                <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                                    <use xlink:href="#admin"></use>
                                </svg>
                                Rating  
                            </a>
                    </li>

</body>
</html>