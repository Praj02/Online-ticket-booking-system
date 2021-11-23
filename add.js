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
function listit(){
    for(var i = 0; i < keys.length; i++){
    document.getElementById('show').innerHTML+=`
<a href="${cards[keys[i]].ref}">    
<div class="card" >
                <img class="cardig" src="${cards[keys[i]].img}" style="width:100%">
                <div class="container">
                    <h4><b>${cards[keys[i]].name}</b><br><p>${cards[keys[i]].date}</p></h4>
                </div>
    </div>
</a>`;
    }
}