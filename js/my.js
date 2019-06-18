
if (
    $("#tp").keypress(function () {
        var value = $("#tp").val();
        var regEx = /^[(]{0,1}[0-9]{3}[)]{0,1}[-\s\.]{0,1}[0-9]{3}[-\s\.]{0,1}[0-9]{4}$/;
        var result = regEx.test(value);
        if (!result) {
            // alert(" Telephone Number is Invalid");
            document.getElementById("numloc").innerHTML="<i class=\"fas fa-exclamation\"></i>Enter Numeric value only";
            return false;
        }

    }))
//Validation for Name
if (
    $("#name").keypress(function () {
        var value = $("#name").val();
        var regEx = /^[a-zA-Z]*$/;
        var result = regEx.test(value);
        if (!result) {
            // alert("Name Is Invalide..Please Input Only Letters");
            document.getElementById("nameloc").innerHTML="<i class=\"fas fa-exclamation\"></i>Enter Letter only";
            return false;
        }
    })
)
//validation for salary
if (
    $("#salary").click(function () {
        var value = $("#salary").val();
        var regEx = /^\d{1,6}\.\d{1,6}$/;
        var result = regEx.test(value);
        if (!result) {
            // alert("Please input Salary Like : 0000.00");
            document.getElementById("salloc").innerHTML="<i class=\"fas fa-exclamation\"></i>Please input Salary Like : 0000.00";
            return false;
        }
    })
)
if (
    $("#id").keypress(function () {
    var cid=$("#id").val();
    var regEx ="/C-\d{3}/";
    var result=regEx.test(cid);
    if (!result) {
        // alert("ID is Invalid")
        Document.getElementById("idloc").innerHTML="<i class=\"fas fa-exclamation\"></i>ID is Invalid";
        return false;
    }
}))

    $("#id").keyup(function () {
        if($("#id").val().length>4){
            Document.getElementById("idloc").innerHTML="<i class=\"fas fa-exclamation\"></i>out of length";
            return false;
        }
    });

//Validation For Customer ID

//Validate Empty Space