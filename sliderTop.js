var count=0;

var arr=["../static/image/rcb v mi.jpg", "../static/image/csk v dc.jpg","../static/image/real mad v liverpool.jpg"];
var temp=0;
var k=document.getElementsByClassName('tbanner');
function start() {
    count++;
    count%=3;
    document.getElementById('demo').innerHTML=`
    <img src="${arr[temp]}" class="banner back" >
    <img src="${arr[count]}" class="banner img_right" >`
    setTimeout(start,6000);
    temp=count;
}
start();

function togglePopup() {
    document.getElementById("popup-1")
     .classList.toggle("active");
   }