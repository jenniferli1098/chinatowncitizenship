


function fetchChinese(str) {
    let baseUrl = "https://translation.googleapis.com/language/translate/v2?key=";
    let apiKey = "API-KEY"; //how do we hide the key?
    let params = "&q="+str+"&target=zh";

    var xhttp = new XMLHttpRequest();
    let url = baseUrl + apiKey + params;

    alert("calling");
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        alert("achieved");
      myObj = JSON.parse(this.responseText);
      alert(myObj.data.translations[0].translatedText);
    }
  };
  xhttp.open("GET", url, true);
  xhttp.send();
    alert(str);

}