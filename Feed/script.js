form = document.getElementById("input_s");
input_value = document.getElementById("value_s");
output = document.getElementById("output");
form.addEventListener("submit", function (event) {
    event.preventDefault()
});

input_value.addEventListener("keyup", fun);
function fun() {
    // s=event.target.value;
    s = document.getElementById("value_s").value;
    console.log(s);
    if (s.length >= 0) {
        output.style.display = "block";
        document.getElementById("searchwrap").style.borderRadius = "0px";

        output.innerHTML = `<li><a class="dropdown-item text-center" href="#"><div class="spinner-grow text-danger text-center" role="status">
    <span class="visually-hidden">Loading...</span>
  </div></a></li>`;
    }


    // console.log(s);
    const xhr = new XMLHttpRequest();
    xhr.open("GET", "./Controller/autoController.php?s=" + s, true);

    xhr.onload = function () {

        if (xhr.status == 200) {
            output.innerHTML = "";
            output.innerHTML = xhr.responseText;

        }




    }







    if (s.length >= 2) {
        xhr.send();
    }

    if (s.length === 0) {
        output.style.display = "none";
        document.getElementById("searchwrap").style.borderRadius = "24px";
        output.innerHTML = "";
    }

}







