// Make Connection

var socket = io.connect("http://localhost:6000");

//Query DOM
var messag = document.getElementById('message1'),
    handl = document.getElementById('handle1'),
    bt = document.getElementById('send1'),
    outpu = document.getElementById('output1'),
    feedbac = document.getElementById('feedback1');

//Emit events

btn.addEventListener('click', function(){
    socket.emit('chat1', {
        messag: messag.value,
        handl: handl.value
    });
    messag.value = "";
});

messag.addEventListener('keypress',function(){
    socket.emit('typing1',handle.value);
})

//Listen for events
socket.on('chat1', function(data){
    feedbac.innerHTML="";
    outpu.innerHTML += '<p><strong>' + data.handl + ':</strong>' + data.messag + '</p>';
});

socket.on('typing1', function(data){
    feedbac.innerHTML = '<p><em>' + data + ' is typing a message...</em></p>';
});

