var provinceObject = {

    "Central": ["Kandy", "Matale", "Nuwara-Eliya"],
    "Eastern": ["Trincomalee", "Batticaloa", "Ampara"],
    "North Central": ["Anuradhapura", "Polonnaruwa"],
    "Northern": ["Jaffna", "Kilinochchi", "Mannar", "Mullaitivu", "Vavuniya"],
    "North Western": ["Puttalam", "Kurunegala"],
    "Sabragamuwa": ["Ratnapura", "Kegalle"],
    "Southern": ["Hambantota", "Galle", "Matara"],
    "Uva": ["Badulla", "Monaragala"],
    "Western": ["Colombo", "Gampaha", "Kalutara"],

}

window.onload = function () {
    var provinceSel = document.getElementById("province");
    var districtSel = document.getElementById("district");

    for (var x in provinceObject) {
        provinceSel.options[provinceSel.options.length] = new Option(x);
    }
    provinceSel.onchange = function () {
        districtSel.length = 1;
        var z = provinceObject[provinceSel.value];
        for (var i = 0; i < z.length; i++) {
            districtSel.options[districtSel.options.length] = new Option(z[i]);
        }
    }
}