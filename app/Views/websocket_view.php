<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeIgniter & Node.js WebSocket</title>
    <script src="https://cdn.socket.io/4.1.3/socket.io.min.js"></script>
</head>
<body>

    <h1>CodeIgniter & Node.js WebSocket</h1>
    <div id="message"></div>

    <script>
        // WebSocket sunucusuna bağlan
        var socket = io('http://localhost:3000');
        
        // Mesaj alındığında ekrana yazdır
        socket.on('message', function(data) {
            document.getElementById('message').innerText = data;
        });
    </script>
</body>
</html>
