function fetchChinese(idchange, str) {
    let baseUrl = "https://translation.googleapis.com/language/translate/v2?key=";
    let apiKey = "AIzaSyD16owbIkDlL8yQ-yisKK8QEH25u6xNjJI"; //how do we hide the key?
    let params = "&q="+str+"&target=zh";

    var xhttp = new XMLHttpRequest();
    let url = baseUrl + apiKey + params;
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
        myObj = JSON.parse(this.responseText);
        alert(myObj.data.translations[0].translatedText);
        $("#"+idchange).attr('data-original-title', myObj.data.translations[0].translatedText);
        }
    };
    xhttp.open("GET", url, true);
    xhttp.send();
}