
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
 

    <title>MYHACKATHON</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/checkout/">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
	  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedheader/3.2.4/css/fixedHeader.dataTables.min.css">. 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	 <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/fixedheader/3.2.4/js/dataTables.fixedHeader.min.js"></script>
    <script type="text/javascript" class="init">  
    $(document).ready(function() {
    $('#example').DataTable( {
      fixedHeader: true
    } );
  } );
    </script>
  </head>

  <body class="bg-light">


  <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">MYHACKATHON</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Info</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Ingredients / Nutritions</a>
        </li>
 
      </ul>
  
    </div>
  </div>
</nav>
<br>
    <div class="container">

<div>Results
<div class="alert alert-primary" role="alert">
<?php 
$jsondata = array();
$message = $this->session->flashdata('message_name'); 

if(!empty($message)){

//echo $result;
//echo $message;

$jsondata = json_decode($result, true);


print_r($jsondata);


$jsondata = json_decode($jsondata['response'], true);
//$jsondata = json_decode($jsondata['Record'], true);
echo "<pre>";
print_r($jsondata);
echo "</pre>";

}

?>
</div>

<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tbody>
<?php foreach($jsondata as $result) : ?>
  <tr>
        <td><?php echo $result['Key']; ?></td>
        <td><?php echo $result['Record']['model']; ?></td>
    </tr>
<?php endforeach; ?>
</table>

      <div class="row" id="ops">

        <div class="col-md-12 order-md-1">
		<h4 class="mb-3">Blockchain Application</h4>
		<form action="<?php echo base_url(); ?>main/action" method="POST" enctype="multipart/form-data">

		<div class="form-check">
             <input class="form-check-input" type="radio" name="roption" id="flexRadioDefault1" value = "1">
             <label class="form-check-label" for="flexRadioDefault1">Query</label>
             </div>
        <div class="form-check">
             <input class="form-check-input" type="radio" name="roption" id="flexRadioDefault2" value = "2" >
             <label class="form-check-label" for="flexRadioDefault2">Create</label>
            </div>
			<div class="form-check">
             <input class="form-check-input" type="radio" name="roption" id="flexRadioDefault3" value = "3">
             <label class="form-check-label" for="flexRadioDefault2">Update</label>
            </div>
      <div class="form-check">
             <input class="form-check-input" type="radio" name="roption" id="flexRadioDefault4" value = "4">
             <label class="form-check-label" for="flexRadioDefault2">All</label>
            </div>
            <hr class="mb-4">



			<div class="mb-3">
        
              <input type="text" class="form-control" id="searchid" name="searchid" placeholder="Search ID" >
              <div class="invalid-feedback">
                Please enter your Car ID.
              </div>
            </div>
<hr class="mb-4">
       
            <div class="row">
              <div class="col-md-6 mb-3">
                <input type="text" class="form-control" id="carid" name="carid" placeholder="Batch ID"  >
                <div class="invalid-feedback">
				Valid CARID is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <input type="text" class="form-control" id="owner" name="owner" placeholder="Owner"   >
                <div class="invalid-feedback">
                  Valid Owner is required.
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4 mb-4">
                <label for="country">Make</label>
                <select class="custom-select d-block w-100" id="make" name="make" >
                  <option value="">Choose...</option>
                  <option value="1">Honey 1</option>
				  <option value="2">Honey 2</option>
				  <option value="3">Honey 3</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid country.
                </div>
              </div>
              <div class="col-md-4 mb-4">
                <label for="state">Location</label>
                <select class="custom-select d-block w-100" id="model" name="model" >
                  <option value="">Choose...</option>
                  <option value="-33.890542, 151.274856, 4">Bondi Beach</option>
				  <option value="-33.923036, 151.259052, 5">Cronulla Beach</option>
				  <option value="-33.80010128657071, 151.28747820854187, 2">Coogee Beach</option>
                </select>
                <div class="invalid-feedback">
                  Please provide a valid Model
                </div>
              </div>

			  <div class="col-md-4 mb-4">
                <label for="state">Colour</label>
                <select class="custom-select d-block w-100" id="colour" name="colour" >
                  <option value="">Choose...</option>
                  <option value="black">Black</option>
				  <option value="yellow">Yellow</option>
				  <option value="red">Red</option>
				  <option value="blue">Blue</option>
                </select>
                <div class="invalid-feedback">
                  Please provide a valid state.
                </div>
              </div>
      
			<div class="mb-4">
               <label for="formFileSm" class="form-label">Image or Video</label>
               <input class="form-control form-control-sm" id="formFileSm" type="file" name='userfile'>
            </div>
            <div>

			<hr class="mb-4">

			<div><input type="submit" value="Submit" /></div>

			</form>

 
    </div>
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyCmvdjPpeWpjDzVY2YXSK16z2NtZxnT_-k" 
          type="text/javascript"></script>

   <?php if (!empty($jsondata['owner'])): ?>
          <img src="data:image/png;base64, <?php echo $jsondata['owner']; ?> ">
    <?php endif; ?>

  <div id="map" style="width: 100%; height: 400px;"></div>



  <?php if (!empty($jsondata['model'])): ?>

  <script type="text/javascript">
    var locations = [
      ['Maroubra Beach', <?php echo $jsondata['model']; ?>]
    ];
    
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 10,
      center: new google.maps.LatLng(-33.92, 151.25),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });
    
    var infowindow = new google.maps.InfoWindow();

    var marker, i;
    
    for (i = 0; i < locations.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map
      });
      
      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
  </script>

<?php endif; ?>





  <nav class="navbar navbar-expand-lg fixed-bottom navbar-dark bg-primary">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Batch Lists</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Map</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Search</a>
        </li>
 
      </ul>
  
    </div>
  </div>
</nav>


<script>
$(document).ready(function(){
  $("#hide").click(function(){
    $("p").hide();
  });
  $("#form").click(function(){
    $("#ops").toggle();
    $("#forms").toggle();
  });
});
</script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<br><br><br><br><br><br>
  </body>
</html>
