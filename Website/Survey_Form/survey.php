
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="survey.css">
    <title>Survey</title>
</head>
<body>
  
<div>
<div class="head">
<h1 style="text-align: center;">Person Identification Form</h1>
</div>
<div class="body">

<form action="submit.php" method="post">
  <div class="container">
    <div class="row">
      <div class="col">
      </div>
      <div class="col" style="margin: 10px;">
        <label for="">Name and Surname : </label>
        <div id="q1" class="col-md-8">
          <input name="name" id="text" class="form-control " type="text" placeholder="Please enter name and surname" aria-label="default input example">
      </div>
      </div>
      <div class="col">
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col">
       
      </div>
      <div class="col" style="margin: 10px;">
        <label for="" >How old are you?</label>
        <div id="q4">
          <input type="text" placeholder="age" id="text2" name="age">
        </div>
      </div>
      <div class="col">
       
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col">
     
      </div>
      <div class="col" style="margin: 10px;">
        <label for="">How often do you read a book?</label>
        <div id="q5" class="col-md-10">  
          <div class="col-md-10">
              <input type="text" class="form-control" id="read" required placeholder="always, often, sometimes..." name="reading_habit">
              <div class="invalid-feedback">
                
              </div>
            </div>
      </div>
      </div>
      <div class="col">
     
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col">
        
      </div>
      <div class="col" style="margin: 10px;">
        <label for="">Where would you like to live?</label>
        <div id="q5" class="col-md-10">  
          <div class="col-md-6">
              <input type="text" class="form-control" id="validationCustom03" required placeholder="please enter country" name="location">
              <div class="invalid-feedback">
                Please provide a valid country.
              </div>
            </div>
      </div>
      </div>
      <div class="col">
        
      </div>
    </div>
  </div>



  <div class="container">
    <div class="row">
      <div class="col">
      </div>
      <div class="col" style="margin: 10px;">
        <label for="">What do you do in your spare time?</label>
        <div id="q5" class="col-md-10">  
          <div class="col-md-10">
              <input type="text" class="form-control" id="hobbies" required placeholder="ride a bike, play video games..." name="hobbies">
              <div class="invalid-feedback">
              
              </div>
            </div>
      </div>
      </div>
      <div class="col">
      </div>
    </div>
  </div>
</div>


<div class="container">
  <div class="row">
    <div class="col"> 
    </div>
    <div class="col">
     
        <div class="btn-group" role="group" aria-label="Basic outlined example">
          <input type="submit" value="Submit" class="btn btn-outline-success submit">
          </div>
</form> 
<div class="btn-group" role="group" aria-label="Basic outlined example">
          <button type="button reset" onClick="Delete()" class="btn btn-outline-primary delete">Delete</button>
  </div>
    
    </div>
    <div class="col">  
    </div>
  </div>
</div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" 
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" 
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="survey.js"></script>


</body>
</html>









