// Setting up our server
// Creating our variables
var express = require('express');
var app = express();
var url = require('url');
var calcRate = require('./public/js/calculateRate.js');

app.set('port', (process.env.PORT || 5000));

app.use(express.static(__dirname + '/public'));

app.set('views', __dirname + '/views');
app.set('view engine', 'ejs');

app.get('/', function(request, response) {
    response.render('pages/index');
});

app.listen(app.get('port'), function() {
    console.log('Server listening on port ' + app.get('port'));
});

app.get('calcPostalRate', function(response, request) {
    calculatePostalRate(request, response);
});

function calculatePostalRate(request, response) {
    var req = url.parse(request.url, true);

    var type = String(req.query.type);
    var weight = Number(req.query.weight);
    var shippingCost =  calcRate.calculateRate(type, weight);

    var params = {Type: type, Weight: weight, Resutlt: shippingCost};

    response.render('pages/getRate', params);
}

