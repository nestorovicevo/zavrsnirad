function validateForm()
{
    var x = document.forms["comment-form"]["name"].value;
    var y = document.forms["comment-form"]["name"].value;
    if (x == "" || y == "") {
      alert("All fields are required!");
      return false;
    }
  }

function validateCreateForm()
{
    var z = document.forms["create-form"]["author"].value;
    var s = document.forms["create-form"]["title"].value;
    var m = document.forms["create-form"]["body"].value;



    if (z == "" || s == "" || m == "") {
      alert("All fields are required!");
      return false;
    }
  }