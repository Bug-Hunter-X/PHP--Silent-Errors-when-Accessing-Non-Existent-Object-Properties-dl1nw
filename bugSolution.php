function myFunction() {
  //Improved function that avoids silent errors
  $obj = new 
  StdClass();
  // Check if the property exists before accessing it.
  if (isset($obj->property)) {
    $value = $obj->property;
    // Process the value
  } else {
    $value = 'default';
    //Handle the case where the property does not exist
  }
  //Alternatively, use the null coalescing operator
  $value2 = $obj->property ?? 'default';

  //Another approach using property_exists()
  if(property_exists($obj, 'property')){
    //Property exists
  }else{
    //Property doesn't exist
  }
} 