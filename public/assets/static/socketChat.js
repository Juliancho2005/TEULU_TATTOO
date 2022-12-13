const path = require('path')

const express = require('express')
const app = express()

app.use(express.static(path.join(__dirname, 'public')))

app.set('port', 8012)

 const server = app.listen(app.get('port'), () => {
     console.log('Server levantado en el puerto', app.get('port'))
 })

const socketIO = require('socket.io')
const io = socketIO(server)

io.on('connection', (socket) => {
    console.log("Nueva conexion satisfactoria", socket.id)

    socket.on('chatmessage', (data) => {
        socket.emit('serverMessage', (data))
    })
})