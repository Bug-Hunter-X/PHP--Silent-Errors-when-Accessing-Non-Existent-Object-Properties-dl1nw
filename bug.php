function myFunction() {
  // This function has a subtle bug that can lead to unexpected results.
  // The issue is related to the handling of object properties that might not exist.
  var obj = {};
  var value = obj.property || 'default'; // This line will work as expected if 'property' exists.
  var value2 = obj["property"] || 'default';  //This line will work as expected if 'property' exists.

  // However, if obj.property is undefined, it's not necessarily equivalent to false or 0.
  // This is because, when it comes to objects, undefined just means the property doesn't exist.

  if (obj.property) { //This will only be true if property exists and is truthy
    // Do something if obj.property is truthy
    console.log("Property exists and is truthy")
  }
  if (obj.property === undefined) { //This will only be true if property doesn't exists
    //Do something if property doesn't exist
    console.log("Property doesn't exists")
  }

}