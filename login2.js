  document.getElementById("sub").addEventListener("click", function (event)
 {
    var enteredName = document.getElementById("name");
    var enteredPassword = document.getElementById("password");
    var name = enteredName.value.trim();
    var password = enteredPassword.value.trim();

    var emp=document.getElementById("empname");
    var empname=emp.value.trim();

    var emppass=document.getElementById("empid");
    var empid=emppass.value.trim();
  if (name === "" && password === "" || name === "" || password === ""  ) 
  {
    alert("Please Enter all the fields");
    event.preventDefault();
  } else if (empname === "" && empid === "" || empname === "" || empid === ""  ) 
  {
    alert("Please Enter all the fields");
    event.preventDefault();
  }
});