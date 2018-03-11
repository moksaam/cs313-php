var http = require('http');

http.createServer(function onRequest(req, res) {
    res.writeHead(200, {'Content-Type': 'text/html'});
    //This was used for testing
    //res.write(req.url);
   
    //Our Hello World Page
    //I used if else to determine what happens with the requests
    if (req.url == "/hello") {
       res.writeHead(200, {'Content-Type': 'text/html'});
       res.write("Hello World!");
    }
    else if (req.url == "/home") {
       res.writeHead(200, {'Content-Type': 'text/html'});
       res.write("<h1>Welcome to the Home Page</h1>");
    }
    else if (req.url == "/getData") {
       res.writeHead(200, {'Content-Type': 'application/json'});
      var jsonObj = {"name":"John Memmott", "class":"cs313"};
      res.write(JSON.stringify(jsonObj));
      console.log(jsonObj);
    }
    else {
       res.writeHead(404, {'Content-Type': 'text/html'});
       res.write('Page Not Found');
    }
    res.end();
}).listen(8080);