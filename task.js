var array = Array();
var x = 0;

function add_element_to_array() {
  var empty = document.form1.text1.value;

  if (empty === "") {
    alert("Please input a Value");
    return false;
  }
  else {
    array[x] = document.getElementById("text1").value;
    alert("Element: " + array[x] + " Added at index " + x);
    x++;
    // document.getElementById("text1").value = "";
    return true;
  }
}
function add_student() {   
  var list1 = [];

  var n = 1;
  var y = 0;

  var AddRow = document.getElementById('tbl');
  var NewRow = AddRow.insertRow(n);
  list1[y] = document.getElementById('text1').value;
  var cel1 = NewRow.insertCell(0);
  cel1.innerHTML = list1[y];


}


function add() {
  
}

function myDelFunction() {  
  document.getElementById("tbl").deleteRow(1) ;
}

function display_array() {
  var e = "";
  console.log(array);
  
  for (var y = 0; y < array.length; y++) {
    e += array[y] + "<br/>";
  }
  document.getElementById("Result").innerHTML = e;
}



