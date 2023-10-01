<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>web personal</title>
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .hover-zoom {height: 250px; overflow: hidden; position:relative}
    .hover-zoom {height: 250px; overflow: hidden; position:relative}
    .hover-zoom img {transition: transform .3s ease;}
    .hover-zoom:hover img {transform: scale(2);}
  </style>
</head>
<body    style="background-color:  rgb(43, 55, 68); ">
  


<!--navbar-->
@include('bagian.navbar')

<div data-bs-spy="scroll" data-bs-target="#navbar1" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example   rounded" tabindex="0">

<!--card section 1-->
@include('bagian.section')
  
<!--about-->
@include('bagian.about')

<!--skill-->
@include('bagian.skill')

<!--portofolio-->
@include('bagian.portofolio')

<!--contact-->
@include('bagian.contact')

<!--footer-->
@include('bagian.footer')


</div>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
<script src="bootstrap/js/bootstrap.bundle.min.js" ></script>
</body>
</html>