var firebaseConfig = {
    apiKey: "AIzaSyC1JZT1vD7Kbn8pKFJoGb55x-4MXw1Er38",
    authDomain: "booking-system-64db7.firebaseapp.com",
    databaseURL: "https://booking-system-64db7-default-rtdb.firebaseio.com",
    projectId: "booking-system-64db7",
    storageBucket: "booking-system-64db7.appspot.com",
    messagingSenderId: "846343185593",
    appId: "1:846343185593:web:5a92fcd0080c05272be768",
    measurementId: "G-8049NCW30H"
};

firebase.initializeApp(firebaseConfig);
var database = firebase.database();

var ref = database.ref("list/");
ref.on("value", gotData, errData);
var cards;
var keys;
function gotData(data) {
    cards=data.val();
    keys = Object.keys(cards);
    listit();
}
function errData(err){
    
}
var l=[];
function listit(){
    var str=cards[keys[2]].seat;
    l=str.split(",");
}


function set(){
    for (i=0;i<l.length;i++){  
        document.getElementById(l[i]).classList.add("seatUnavailable");
     }
    cick();
}
var count=0;
k=document.getElementsByClassName("seatNumber");
function cick(){
    for (i=0;i<k.length;i++){
  if(!k[i].classList.contains("seatUnavailable"))
   k[i].onclick=select;
}
}
function select(){
    if(!this.classList.contains("seatSelected")){
        count++;
        this.classList.add("seatSelected");
    }
    else{
        count--;
        this.classList.remove("seatSelected");
    }
    document.getElementById("seatsAmount").innerHTML= count;
    document.getElementById("txtSubTotal").innerHTML= count*2500;
}
document.getElementById("btnClear").onclick=clear;
function clear(){
    count=0;
    document.getElementById("seatsAmount").innerHTML= count;
    document.getElementById("txtSubTotal").innerHTML= count*2500;
    for (i=0;i<k.length;i++){
        if(k[i].classList.contains("seatSelected"))
            k[i].classList.remove("seatSelected");
    }
}
document.getElementById("button").onclick=dis;
function dis(){
    set(); document.getElementById("blocking").style.display="block";
}


function update(f){
    for (i=0;i<k.length;i++){
        if(k[i].classList.contains("seatSelected"))
            l.push(String(k[i].id));
    }
    database.ref('list/'+f).update({
        seat:String(l.join())
    });
    document.getElementById("blocking").style.display="none";
}