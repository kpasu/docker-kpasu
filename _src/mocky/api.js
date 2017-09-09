var mocky = require('mocky');
var fs = require('fs');


mocky.createServer([{
	url: '/test',
	method: 'get',
    res: 'response for GET request'
}]).listen(8080);


