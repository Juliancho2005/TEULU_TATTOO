const socket = io()

let message = document.getElementById('message')
let username = document.getElementById('username')
let btn = document.getElementById('send')
let output = document.getElementById('output')
let actions = document.getElementById('actions')

btn.addEventListener('click', () => {
    socket.emit('chatmessage', {
        message: message.value,
        username: username.value
    })
})

socket.on('serverMessage', (data) => {
    output.innerHTML += `<p>${data.username}: ${data.message}</p>`
})