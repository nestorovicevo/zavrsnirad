function validateForm()
{
    var x = document.forms["comment-form"]["name"].value;
    var y = document.forms["comment-form"]["name"].value;
    if (x == "" || y == "") {
      alert("All fields are required!");
      return false;
    }
  }

///// Sva polja su obavezna, uraditi validaciju. Ukoliko neko polje nije uneto, izbaciti warning message da se popune sva polja, nevezano za to koje polje nije popunjeno. Koristiti bootstrapove css klase .alert i .alert-danger

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