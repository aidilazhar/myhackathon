
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
 

    <title>GrowHub BlockChain</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/checkout/">


  </head>

  <body class="bg-light">

    <div class="container">
      <div class="py-5 text-center">
        <h2>GrowHub BlockChain</h2>
     </div>

      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Result</span>
            <span class="badge badge-secondary badge-pill">3</span>
          </h4>
          <ul class="list-group mb-3">
           
            <li class="list-group-item d-flex justify-content-between bg-light">
              <div class="text-success">
              
                <small><?php echo $this->session->flashdata('message_name');  ?></small>
              </div>
       
            </li>
            
          </ul>
		 
        </div>
        <div class="col-md-8 order-md-1">
		<h4 class="mb-3">Test Application</h4>
		<form action="index.php/welcome/" method="POST" enctype="multipart/form-data">

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
                <input type="text" class="form-control" id="carid" name="carid" placeholder="CAR ID"  >
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
                  <option value="honda">Honda</option>
				  <option value="audi">Audi</option>
				  <option value="bmw">BMW</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid country.
                </div>
              </div>
              <div class="col-md-4 mb-4">
                <label for="state">Model</label>
                <select class="custom-select d-block w-100" id="model" name="model" >
                  <option value="">Choose...</option>
                  <option value="civic">Civic</option>
				  <option value="Q7">Q7</option>
				  <option value="3 Series">3 Series</option>
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

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

  </body>
</html>
