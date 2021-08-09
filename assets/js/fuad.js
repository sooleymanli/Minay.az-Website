/**
  * Fuad Süleymanlı
  * +994 50 999 33 66
  * Author URI: http://www.websites.az
*/

var text = document.getElementById("text");
text.style.transition="all 3s";
var heading = document.getElementById("about")
var certificates = "API, GOST, China Standard"
var exemptions = "MINAY Group is one of the few select companies to hold a tax and customs exemption certificates on products imported to Azerbaijan, which is a representation of the trust bestowed upon us and entails our capacity in the sector."

function fuad1() {
    text.innerHTML = newText;
    heading.innerHTML = "MINAY GROUP - SHENGJI GROUP  cooperation agreement:"
}

function fuad2() {
    text.innerHTML = certificates;
    heading.innerHTML = "Certificates"
}

function fuad3() {
    text.innerHTML = exemptions;
    heading.innerHTML = "Tax Exemptions"
}


