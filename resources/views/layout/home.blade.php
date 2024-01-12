<!DOCTYPE html>
<html>

<head>
 @include('include.head')
</head>

<body>
  @include('include.header')
    <!-- end header section -->
    <!-- slider section -->
    @include('include.slider')
    <!-- end slider section -->
  

  <!-- about section -->

  
 @include('about')
  <!-- end about section -->

  <!-- service section -->

  @include('service')
  <!-- end service section -->


  <!-- client section -->

  @include('include.client')

  <!-- end client section -->

  <!-- contact section -->
  @include('contact')
  
  <!-- end contact section -->

  <!-- team section -->
  @include('gurads')
  
  <!-- end team section -->

  <!-- info section -->
  @include('include.info')
  <!-- end info_section -->




  <!-- footer section -->
  @include('include.info')
  <!-- footer section -->

  <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.js')}}"></script>
  <script src="{{asset('js/custom.js')}}"></script>
</body>

</html>