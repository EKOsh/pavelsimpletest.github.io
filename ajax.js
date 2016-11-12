/**
 * Created by root on 04.11.16.
 */
function getXmlHttp()
{
    var xmlhttp;
    try {
        xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (e) {
        try {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        } catch (E) {
            xmlhttp = false;
        }
    }
    if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
        xmlhttp = new XMLHttpRequest();
    }
    return xmlhttp;
}
function update(page)
{
    var xmlhttp = getXmlHttp();

    xmlhttp.open('GET', page, false);
    xmlhttp.send();
    if(xmlhttp.status == 200)
    {
        var response = xmlhttp.responseText;
        document.getElementById('Undermenu').innerHTML = response;
    }
    //location.hash = '#' + page;
}

function stylesupdate(num)
{
    document.getElementById("MenuButtons").style="background-color: white;";
    document.getElementById("MenuButtons1").style="background-color: white;";
    document.getElementById("MenuButtons2").style="background-color: white;";
    document.getElementById("MenuButtons3").style="background-color: white;";
    num.style="background-color: #66CC99;";
}