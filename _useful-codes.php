<!-- 
	Useful Code 01
	Here we have a code for display a JSON data in a page (local JSON data) we still have to find
	how can we display JSON data obtained online from an API
-->

<!-- The code below we have to put in the <head> </head> -->
    <script type="text/javascript">
        var text = '{ "employees" : [' +
        '{ "firstName":"John" , "lastName":"Doe" },' +
        '{ "firstName":"Anna" , "lastName":"Smith" },' +
        '{ "firstName":"Peter" , "lastName":"Jones" } ]}';       
        var obj = JSON.parse(text);   
    </script>

<!-- The code below we have to put in the <body> tag -->
    <p id="demo"></p>

<!-- This code below we have to put just before closing the <body> tag -->
  <script>
    document.getElementById("demo").innerHTML =
    obj.employees[1].firstName + " " + obj.employees[1].lastName;
  </script>

<!-- END of Useful Code 01 -->